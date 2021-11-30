<?php
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");

$code = $_GET["code"];
//get 
$query = "SELECT code FROM students WHERE code=$code";
$userCode = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($userCode);
//set 
$codeUser = isset($row["code"]);



//check completed
$query2 = "SELECT complete FROM students WHERE code='$code'";
$check = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($check);
//set pass
$completed = $row2["complete"];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Checks
    if($codeUser != $code){
        print("<h2>Incorrect Password</h2>");
    }else if($completed == 1){
        print("<h2>Already Completed</h2>");
    }else{
        echo ("<script>console.log('Welcome Student');</script>"); ?>
         <h2>Examination</h2>
    <?php
         $query = "SELECT * FROM exam";

         $result = mysqli_query($conn, $query);
 
         $num_rows = mysqli_num_rows($result);
         print "<form method='get' action='grade.php'>";
         print "<table>";
         print "<tr><th>Questions</th></tr>";
         for ($i = 0; $i < $num_rows; $i++) {
             $row = mysqli_fetch_assoc($result);
 
             $question = $row["question"];
             $answer1 = $row["answer1"];
             $answer2 = $row["answer2"];
             $answer3 = $row["answer3"];
             $answer4 = $row["answer4"];
             $correct = $row["correct"];
            
             //set radio button name val
             $questionnum = "Question".$i;
             print_r($questionnum);
            
             print "<tr><td>";
             print "Question #$i: $question <br>";
             print "</td>";
             print "<td><input type='radio' name='$questionnum' 
             value='$answer1'>$answer1</input><br></td>";
             print "<td><input type='radio' name='$questionnum' 
             value='$answer2'>$answer2</input><br></td>";
             print "<td><input type='radio' name='$questionnum' 
             value='$answer3'>$answer3</input><br></td>";
             print "<td><input type='radio' name='$questionnum' 
             value='$answer4'>$answer4</input><br></td>";
             print "</tr>";
         }
         print "</table>";
         print "<br>";
         print "<input type='text', maxlength='4', name='code2'></input>";
         print " <input type='submit' value='Submit'></input>";
    }
    ?>
     <br>
</body>
</html>