<?php
include '../db_connection.php';
$conn = OpenCon();
echo ("<script>console.log('Connected Successfully');</script>");
CloseCon($conn);

$name = $_GET["Name"];
$principle = $_GET["Principle"];
$rate = $_GET["Rate"];
$years = $_GET["Years"];
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest Calculations</title>
    <style>
        div.a {
            margin-top: 65px;
            margin-left: 200px;
            font-size: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        span.white {
            color: whitesmoke;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 16px;
        }

        table {
            width: 90%;
            height: 100px;
            margin-right: auto;
            margin-left: auto;
            text-align: center;
            background-color: green;
            color: antiquewhite;
            margin-top: 100px;
            text-align: left;
            font-size: 130%;
            font-family: verdana;
        }

        h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }

        tr:hover {
            background-color: purple;

        }

        a:link {
            text-decoration: none;
            color: brown;
        }

        h3 {
            font-size: 200%;
            font-family: times;
            font-weight: bold;
            font-style: italic;
            text-align: center;

        }
    </style>
</head>

<body style="background-color: green;">
    <h1 style="text-align: center">Compound Interest Calculator</h1>
    <div class="a" id="displayInfo">
        <h2>Welcome <span class="white"><?php echo $name; ?></span></h2>
        <p>You made a Principle Investment of: <span class="white">$<?php echo $principle; ?></span></p>
        <p>At a rate of: <span class="white"><?php echo $rate; ?>%</span></p>
        <p>for <span class="white"><?php echo $years; ?></span> years</p>
    </div>

    <script>
        var p = "<?php echo $principle; ?>";
        var r = "<?php echo $rate; ?>"
        var n = "<?php echo $years; ?>"
        document.write("<table><tr><th>Years</th><th>Money</th></tr>");
        for (let j = 1; j <= "<?php echo $years; ?>"; j++) {
            let calculation2 = p * Math.pow((1 + (r / 100)), j);
            document.write("<tr><td>" + j + "</td><td>" + calculation2.toFixed(2) + "</td></tr>");
            console.log(calculation2.toFixed(2));
        }
        document.write("</table>")
    </script>


    <p id="val"> </p>
</body>

</html>