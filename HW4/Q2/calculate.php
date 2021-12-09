<?php
$credits = $_COOKIE["Credits"];
$grad = $_COOKIE["Status"];
$state = $_GET["radioGroup2"];

if ($grad == "Under-Grad")
    $gradRate =  200;
else
    $gradRate =  300;

if ($state == "In-State")
    $stateRate =  1;
else
    $stateRate  =  2;

$tuition = ($credits * $gradRate * $stateRate);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Tuition Cost</title>
    <style>
        table {
            width: 80%;
            margin: auto;
            background-color: snow;
            margin-top: 100px;
            text-align: left;
            font-size: 130%;
            font-family: verdana;
        }

        td,
        th {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        th {
            color: slategrey;
            background-color: lightsteelblue;
        }

        body {
            text-align: center;
            background-color: skyblue;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <h1><u>Tuition Itemized Bill</u></h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Credits</td>
            <td><?php echo $credits ?></td>
        </tr>
        <tr>
            <td>Acadamic Status</td>
            <td> <?php echo $grad ?> </td>
        </tr>
        <tr>
            <td>State Status</td>
            <td> <?php echo $state ?> </td>
        </tr>
        <tr>
            <td>Tuition</td>
            <td>$<?php echo $tuition ?>.00</td>
        </tr>
    </table>
    <br><a href="../Q2/start.html"><button>Start over</button></a>
</body>

</html>