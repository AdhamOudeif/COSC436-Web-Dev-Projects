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
            border: 1px #a39485 solid;
            font-size: 1.5em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
            width: 400px;
            height: 200px;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-top: 150px;
        }

        td,
        th {
            padding: 1em .5em;
            vertical-align: middle;
        }

        td {
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            background: #fff;
            color: black;
        }

        tr {
            background-color: #73685d;
            font-weight: bold;
            color: #fff;
        }

        td:hover {
            background-color: goldenrod;
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