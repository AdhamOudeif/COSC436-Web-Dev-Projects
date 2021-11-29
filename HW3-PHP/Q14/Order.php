<?php

include '../db_connection.php';
echo ("<script>console.log('Connected Successfully');</script>");


//Process Inputs
$name = $_POST["Name"];
$creditcard = $_POST["creditcard"];
$address = $_POST["address"];

$food = array();
$foodPrice = array();

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


print_r($food);
print_r($foodPrice);
$total=0;
for($i=0; $i<count($foodPrice); $i++){
    $total += $foodPrice[$i];
}
print_r($total);
$foodString= implode(" ",$food);
$foodPriceString = implode(" ",$foodPrice);
$query = "INSERT INTO orders(name,creditcard,address,food,prices,total) VALUES('$name','$creditcard','$address','$foodString','$foodPriceString','$total')";
$result = mysqli_query($conn,$query);
?>
<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
</html>