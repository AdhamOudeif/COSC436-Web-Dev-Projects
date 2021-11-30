<?php
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Update</title>
    <style>
        table {
            width: 70%;
            margin: auto;
            background-color: snow;
            color: rgb(164, 177, 190);
            margin-top: 60px;
            text-align: left;
            font-size: 130%;
            font-family: verdana;

        }

        td, th{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        th{
            background-color: rgb(220, 180, 199);
        }
        h1{
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
    <table>
        <?php
        $input = $_POST["passcode"];

        $pwdQuery = "SELECT pwd FROM password WHERE pwd=$input";
        $pwdResult = mysqli_query($conn, $pwdQuery);

        if (mysqli_num_rows($pwdResult) == 0) {
            echo "<h3>InCorrect Password!!</h3>";
        } else {
            echo "<h1>Animal Survey Results</h1>";
            $query = "SELECT complete FROM passcodes Where complete='1'";
            $result = mysqli_query($conn, $query);
            $completions = mysqli_num_rows($result);

            $surveyQuery = "SELECT * FROM survey";
            $surveyResult = mysqli_query($conn, $surveyQuery);
            $survey_num_rows = mysqli_num_rows($surveyResult);
        ?>
            <tr>
                <th>Question</th>
                <th>Yes Percentage</th>
                <th>No Percentage</th>
            </tr>
        <?php

            for ($i = 0; $i < $survey_num_rows; $i++) {
                $row = mysqli_fetch_assoc($surveyResult);
                $question = $row["question"];
                $yes = $row["yes"];
                $no = $row["no"];

                $yesPer = round(($yes / $completions) * 100);
                $noPer = round(($no / $completions) * 100);
        ?>
                <tr>
                    <td> <p><?php echo $question; ?> </p></td>
                    <td><p><?php echo $yesPer.'%'?></p></td>
                    <td><p><?php echo $noPer.'%'?></p></td>
                <tr>
                    
        <?php
            }
        }
        ?>
    </table>




</body>

</html>