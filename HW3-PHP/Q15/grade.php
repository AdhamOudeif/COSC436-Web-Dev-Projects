<?php
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");

//get user input
$code = $_GET["code2"];

$question1 = $_GET["Question0"];
$question2 = $_GET["Question1"];
$question3 = $_GET["Question2"];
$question4 = $_GET["Question3"];
$question5 = $_GET["Question4"];

//get code for comparison
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
    <title>Exam Complete</title>
</head>
<body>
    <?php
    if($codeUser != $code){
        print("<h2>Incorrect Password</h2>");
    }else if($completed == 1){
        print("<h2>Already Completed</h2>");
    }else{
        echo ("<script>console.log('Welcome Student');</script>"); ?>
         <h2>Exam Completed</h2>
    <?php
        $count = 0;

         $query = "SELECT * FROM exam";

         $result = mysqli_query($conn, $query);
 
         $num_rows = mysqli_num_rows($result);
         for ($i = 0; $i < $num_rows; $i++) {
            $row = mysqli_fetch_assoc($result);
            if($question1 == $row["correct"]){
                $count++;
            }
            if($question2 == $row["correct"]){
                $count++;
            }
            if($question3 == $row["correct"]){
                $count++;
            }
            if($question4 == $row["correct"]){
                $count++;
            }
            if($question5 == $row["correct"]){
                $count++;
            }
            
    }
    //print_r($count);

    $updateScoreComplete = "UPDATE students SET score = $count, complete = 1 WHERE code = $code";
    $check = mysqli_query($conn, $updateScoreComplete);

}
    ?>
     <br>
</body>
</html>