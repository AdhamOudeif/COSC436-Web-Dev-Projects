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

<body class="splash">
        <div style="margin: auto;">
            <h2 class="splash1">Orders</h2>
        </div>
    <?php
        //update
         $orderID = $_GET["orderID"];
         $query = "DELETE FROM orders WHERE id = $orderID";
         $result = mysqli_query($conn, $query);
        //gen once again
         $query = "SELECT * FROM orders";

         $result = mysqli_query($conn, $query);
 
         $num_rows = mysqli_num_rows($result);
         print "<table>";
         print "<tr><th>List</th></tr>";
         for ($i = 0; $i < $num_rows; $i++) {
             $row = mysqli_fetch_assoc($result);
 
             $id = $row["id"];
             $name = $row["name"];
             $creditcard = $row["creditcard"];
             $address = $row["address"];
             $food = $row["food"];
             $prices = $row["prices"];
             $total = $row["total"];
            
            
             print "<tr><td>";
             print "ID: #$id<br>";
             print "Name: $name<br>";
             print "Credit Card: $creditcard<br>";
             print "Address: $address<br>";
             print "Food: $food<br>";
             print "Prices: $prices<br>";
             print "Total: $total<br>";
             print "</td></tr>";
         }
         print "</table>";
    
    ?>
     <br>

<form method="get" action="updateOrders.php" style="margin-left: 45%;">
    <input type="number" size="10" , maxlength="3" , name="orderID"></input>
    <input type="submit" value="Update"></input>
</form>
    <!--UPDATE-->
    


</body>

</html>