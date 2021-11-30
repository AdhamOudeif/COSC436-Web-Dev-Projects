<?php
//db
include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");


//Process Inputs
$name = $_POST["Name"];
$creditcard = $_POST["creditcard"];
$address = $_POST["address"];

//array declarations
$food = array();
$foodPrice = array();
//check in user input are T/F, then initialize variables and populate array
if (isset($_POST["Haneeth"])=="on"){
    $haneeth = "Haneeth";
    $haneethPrice = 40;
    array_push($food,$haneeth);
    array_push($foodPrice,$haneethPrice);
}
if (isset($_POST["Salta"])=="on"){
    $salta = "Salta";
    $saltaPrice = 25;
    array_push($food,$salta);
    array_push($foodPrice,$saltaPrice);
}
if (isset($_POST["Mandi"])=="on"){
    $mandi = "Mandi";
    $mandiPrice = 30;
    array_push($food,$mandi);
    array_push($foodPrice,$mandiPrice);
}
if (isset($_POST["Kabsa"])=="on"){
    $kabsa = "Kabsa";
    $kabsaPrice = 35;
    array_push($food,$kabsa);
    array_push($foodPrice,$kabsaPrice);
}
if (isset($_POST["Aseed"])=="on"){
    $aseed = "Aseed";
    $aseedPrice = 15;
    array_push($food,$aseed);
    array_push($foodPrice,$aseedPrice);
}
if (isset($_POST["Mareq"])=="on"){
    $mareq = "Mareq";
    $mareqPrice = 25;
    array_push($food,$mareq);
    array_push($foodPrice,$mareqPrice);
}
if (isset($_POST["Zubaidi"])=="on"){
    $zubaidi = "Zubaidi";
    $zubaidiPrice = 30;
    array_push($food,$zubaidi);
    array_push($foodPrice,$zubaidiPrice);
}
if (isset($_POST["Shaffut"])=="on"){
    $shaffut = "Shaffut";
    $shaffutPrice = 35;
    array_push($food,$shaffut);
    array_push($foodPrice,$shaffutPrice);
}



$total=0;
for($i=0; $i<count($foodPrice); $i++){
    $total += $foodPrice[$i];
}
//convert array to string
$foodString= implode(", ",$food);
$foodPriceString = implode(", ",$foodPrice);
//update database
$query = "INSERT INTO orders(name,creditcard,address,food,prices,total) VALUES('$name','$creditcard','$address','$foodString','$foodPriceString','$total')";
$result = mysqli_query($conn,$query);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Affordable">
    <title>OrderConfirmation</title>
    <link href="styles.css" rel="StyleSheet">
    <style>
        table {
            border: 1px #a39485 solid;
            font-size: .9em;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
            width: 500px;
            height: 700px;
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

<body class="order">
    <!--DISPLAY ORDER CONFIRMATION-->
    <div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Menu.html">Menu</a></li>
            <li><a class="active" href="Order.html">Order</a></li>
            <li style="float:right"><a href="Contact.html">Contact</a></li>
        </ul>
    </div>

    <div>
        <table>
            <tr><th colspan="2">Order Confirmation</th></tr>
            <tr><td>Name: </td><td><?php echo $name; ?></td></tr>
            <tr><td>Address: </td><td><?php echo $address; ?></td></tr>
            <tr><td>Credit Card: </td><td><?php echo $creditcard; ?></td></tr>
            <tr><td>Food Ordered: </td><td><?php echo $foodString ?></td></tr>
            <tr><td>Corressponding Prices: </td><td><?php echo "$ " . $foodPriceString ?></td></tr>
            <tr><td>Total: </td><td><?php echo "$".$total; ?></td></tr>
        </table>
    </div>

</body>
</html>