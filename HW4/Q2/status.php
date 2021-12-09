<?php
    $credits = $_GET["Credits"];
    setcookie("Credits", $credits);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get status</title>
    <style>
        body{
            background-color: skyblue;
            color: lavenderblush;
        }
        h1{
            font-size: 30px;
            color: black;
        }
        table {
            margin: auto;
        }
        
        form {
            margin: 100px;
        }

        #button {
            width: 10%;
            margin-left: 45%;
            margin-right: 45%;
            background-color: lavenderblush;
        }
    </style>
</head>

<body>
    <form method="get" action="state.php">
        <table>
            <tr>
                <td>
                    <h1>Select Student Satus</h1>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="radioGroup" value="Under-Grad"> Under-Graduate</input></td>
            </tr>
            <tr>
                <td><input type="radio" name="radioGroup" value="Graduate"> Graduate</input></td>
            </tr>
        </table><br>
        <br><input id="button" type="submit" value="Next">
    </form>
</body>

</html>