<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tuition costs</title>
    
    <style>
        body {
            text-align: center;
            background-color: rgb(164, 177, 190);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color:  rgb(220, 211, 199);
        }

        table {
            margin: auto;
            text-align: left;
        }
        label{
            color: snow;
        }
        input{
            background-color: rgb(209, 197, 181);
        }
        h2, button{
            color: rgb(129, 85, 27);
        }
    </style>
</head>

<body>
    <form method="post" action="tutioncalculator.php">
        <h2>Tuition Cost</h2>
        <table>
            <tr>
                <td><label>Enter Credits Amount: </label></td>
                <td ><input size="17" type="text" name="Credits"></input></td>
            </tr>
            <tr>
                <td><label>Select Student Satus: </label></td>
                <td><input type="radio" name="radioGroup" value="Under-Grad"> Under-Graduate</input></td>
                <td><input type="radio" name="radioGroup" value="Graduate"> Graduate</input></td>
            </tr>
            <tr>
                <td><label>Select State Satus: </label></td>
                <td><input type="radio" name="radioGroup2" value="In-State"> In-State</input></td>
                <td><input type="radio" name="radioGroup2" value="Out-State"> Out-State</input></td>
            </tr>
            <tr>
                <td><label>Select Accommodations: </label></td>
                <td><input type="checkbox" name="Dorm"> Dorm</input></td>
                <td><input type="checkbox" name="Dine"> Dining</input></td>
                <td><input type="checkbox" name="Park"> Parking</input></td>
            </tr>

        </table><br>
        <input type="submit" value="Calculate Tution">
        <input type="reset" value="Clear">
    </form>
</body>

</html>