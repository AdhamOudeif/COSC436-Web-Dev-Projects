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
        h3{
            color: rgb(129, 85, 27);
            margin-top: 40%;
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
    $input = $_POST["passcode"];
    $query = "SELECT complete FROM passcodes WHERE code=$input";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        print("<h3>Incorrect Passcode</h3>");
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['complete'] == 1)
            print("<h3>Already Completed Survey</h3>");
    }

    $codeQuery = "SELECT * FROM passcodes";
    $codeResult = mysqli_query($conn, $codeQuery);
    $code_num_rows = mysqli_num_rows($codeResult);

    for ($i = 0; $i < $code_num_rows; $i++) {
        $row = mysqli_fetch_assoc($codeResult);
        $code = $row['code'];
        $complete = $row['complete'];

        if (($input == $code) && ($complete == 0)) {

            $surveyQuery = "SELECT * FROM survey";
            $surveyResult = mysqli_query($conn, $surveyQuery);
            $survey_num_rows = mysqli_num_rows($surveyResult);

            $completion = 0;
            for ($j = 0; $j < $survey_num_rows; $j++) {
                $row = mysqli_fetch_assoc($surveyResult);
                $id = $row['id'];
                $yes = $row['yes'];
                $no = $row['no'];

                if (isset($_POST[$id])) {
                    $completion += 1;

                    if ($_POST[$id] == 'yes')
                        $yes += 1;
                    else
                        $no += 1;

                    $query = "UPDATE survey SET yes=$yes, no=$no Where id=$id";
                    $result = mysqli_query($conn, $query);
                } else {
                    print("<h3>Survey Incomplete</h3>");
                    break;
                }

                if ($completion == 10) {
                    echo "<h1>Thank You For Completing the Survey</h1>";
                    $query = "UPDATE passcodes SET complete=1 Where code=$code";
                    $result = mysqli_query($conn, $query);
                }
            }
        }
    }


    ?>

</body>

</html>