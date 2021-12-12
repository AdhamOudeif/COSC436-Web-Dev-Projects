<?php
session_start();
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");
date_default_timezone_set('America/Detroit');


$time2 = date("h:i:s");

//get user input
$code = $_SESSION["CODE"];
$_SESSION["Date2"] = $time2;
$session_time2 = $_SESSION["Date2"];
$session_time = $_SESSION["Date"];
$timeallowed = $_SESSION["numRows"];

$timeAlloted = ( strtotime($session_time2) - strtotime($session_time) ) / 60;


print "<br>";
print "You took " .number_format($timeAlloted, 2). " minutes to do the exam";
print "<br>";
print ($timeAlloted > $timeallowed) ? "You exceeded the time alloted. Your grade is 0" : "";

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
    <style>
    h2 {
            color: rgb(129, 85, 27);
        }

        input {
            background-color: rgb(220, 211, 199);
        }

        body {
            text-align: center;
            background-color: rgb(164, 177, 190);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        </style>
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