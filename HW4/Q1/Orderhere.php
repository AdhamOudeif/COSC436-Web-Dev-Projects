<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Affordable">
    <title>Order</title>
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
    <!--FORM-->
    <div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Menu.html">Menu</a></li>
            <li><a class="active" href="Orderhere.php">Order</a></li>
            <li style="float:right"><a href="Contact.html">Contact</a></li>
        </ul>
    </div>
    <div>
        <form method="post" action="Order.php">
            <table>
                <tr>
                    <th>Dish</th>
                    <th>Price</th>
                    <th>Add Item</th>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Haneeth'">Haneeth</td>
                    <td>$40.00</td>
                    <td><input type="checkbox" name="Haneeth"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Salta'">Salta</td>
                    <td>$25.00</td>
                    <td><input type="checkbox" name="Salta"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Mandi'">Mandi</td>
                    <td>$30.00</td>
                    <td><input type="checkbox" name="Mandi"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Kabsa'">Kabsa</td>
                    <td>$35.00</td>
                    <td><input type="checkbox" name="Kabsa"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Aseed'">Aseed</td>
                    <td>$15.00</td>
                    <td><input type="checkbox" name="Aseed"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Mareq'">Mareq</td>
                    <td>$25.00</td>
                    <td><input type="checkbox" name="Mareq"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Zubaidi'">Zubaidi</td>
                    <td>$30.00</td>
                    <td><input type="checkbox" name="Zubaidi"></input></td>
                </tr>
                <tr>
                    <td onclick="location.href='Menu.html#Shaffut'">Shaffut</td>
                    <td>$10.00</td>
                    <td><input type="checkbox" name="Shaffut"></input></td>
                </tr>

            </table>
            <table>
                <tr>
                    <th>Info</th>
                    <th>Text</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <?php
                    //then we check to see if the cookies exist, and if so then display them
                    if(!isset($_COOKIE["name"])){
                        print "<td><input type='textbox' name='Name'></input></td>";
                    }
                    else{
                        $name = $_COOKIE["name"];
                        print "<td><input type='textbox' name='Name' value='$name'></input></td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td>Credit Card Number</td>
                    <td><input type="textbox" placeholder="1234 1234 1234 1234" name="creditcard"></input></td>
                </tr>
                <tr>
                    <td>Delivery Address</td>
                    <?php 
                    if(!isset($_COOKIE["address"])){
                        print "<td><input type='textbox' placeholder='1234 Elm St, Ann Arbor MI' name='address'></input></td>";
                    }
                    else{
                        $address = $_COOKIE["address"];
                        print "<td><input type='textbox' placeholder='1234 Elm St, Ann Arbor MI' name='address' value='$address'></input></td>";
                    }
                    ?>
                    
                </tr>
                <tr>
                    <td><input type="reset" value="Clear"></td>
                    <td><input type="submit" value="Place Order"></td>
                </tr>


            </table>

        </form>
    </div>

</body>

</html>