<?php 
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");

$userEntry = $_GET["Password"];
//get pass from db
$query = "SELECT password FROM sitepasswords WHERE website='exam'";
$pass2 = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($pass2);
//set pass
$password = $row["password"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adham Oudeif">
    <title>Employee Login</title>
    <link href="styles.css" rel="StyleSheet">
    <style>
      table {
            width: 70%;
            margin: auto;
            background-color: snow;
            color: rgb(164, 177, 190);
            margin-top: 60px;
            text-align: center;
            font-size: 130%;
            font-family: verdana;

        }

        td,
        th {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        th {
            background-color: rgb(220, 180, 199);
        }

        h2 {
            color: rgb(129, 85, 27);
        }

        tr {
            background-color: rgb(220, 211, 199);
            color: rgb(129, 85, 27);
        }

        body {
            text-align: center;
            background-color: rgb(164, 177, 190);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(220, 211, 199);
        }
    </style>
</head>

<body>
    <?php 
    if($userEntry != $password){
        print("<h2>Incorrect Password</h2>");
    }else{
        echo ("<script>console.log('Welcome Student');</script>"); ?>
        <div style="margin: auto;">
            <h2>Results</h2>
        </div>
    <?php
         $query = "SELECT * FROM students";

         $result = mysqli_query($conn, $query);
 
         $num_rows = mysqli_num_rows($result);
         print "<table>";
         print "<tr><th>List</th></tr>";
         for ($i = 0; $i < $num_rows; $i++) {
             $row = mysqli_fetch_assoc($result);
 
             $name = $row["name"];
             $scode = $row["code"];
             $complete = $row["complete"];
             $score = $row["score"];
            
             if($complete == 1){
                 $comp = "yes";
             }else{
                 $comp = "no";
             }
            
             print "<tr><td>";
             print "Name: $name<br>";
             print "Code: $scode<br>";
             print "Complete: $comp<br>";
             print "Score: $score<br>";
             print "</td></tr>";
         }
         print "</table>";
    }
    ?>
     <br>
    


</body>

</html>