<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 80%;
            margin: auto;
            background-color: snow;
            color: rgb(164, 177, 190);
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
        h1{
            color: rgb(129, 85, 27);
        }

        th {
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
    if (($_POST["Credits"] < 1) || ($_POST["Credits"] > 18))
        print("<p> Credits must be 1-18 </p>");
    else if (empty($_POST["radioGroup"]))
        print("<p> Must select Academic Status </p>");
    else if (empty($_POST["radioGroup2"]))
        print("<p> Must select State Status </p>");
    else {
        $credits = $_POST["Credits"];
        $grad = $_POST["radioGroup"];
        $state = $_POST["radioGroup2"];

        if ($_POST["radioGroup"] == "Under-Grad")
            $gradRate =  200;
        else
            $gradRate =  300;

        if ($_POST["radioGroup2"] == "In-State")
            $stateRate =  1;
        else
            $stateRate  =  2;

        if (isset($_POST["Dorm"]))
            $dorm = 1000;
        else
            $dorm = 0;

        if (isset($_POST["Dine"]))
            $dine = 500;
        else
            $dine = 0;

        if (isset($_POST["Park"]))
            $park = 200;
        else
            $park = 0;

        $tuition = ($credits * $gradRate * $stateRate);
        $totalCost = $tuition + $dine + $dorm + $park; ?>

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
            <tr>
                <td>Dorm</td>
                <td>$<?php echo $dorm ?>.00</td>
            </tr>
            <tr>
                <td>Dining</td>
                <td>$<?php echo $dine ?>.00</td>
            </tr>
            <tr>
                <td>Parking</td>
                <td>$<?php echo $park ?>.00</td>
            </tr>
            <tr>
                <td>Total Cost</td>
                <td>$<?php echo $totalCost ?>.00</td>
            </tr>
        </table>
    <?php
    }
    ?>
</body>

</html>