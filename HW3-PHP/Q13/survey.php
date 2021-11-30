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
    <title>Survey</title>
    <style>
        table {
            width: 70%;
            margin: auto;
            background-color: snow;
            color: rgb(164, 177, 190);
            margin-top: 40px;
            text-align: left;
            font-size: 130%;
            font-family: verdana;

        }

        td, th{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        h1{
            color: rgb(129, 85, 27);
        }

        tr {
            background-color: rgb(220, 211, 199);
            color: rgb(129, 85, 27);
        }

        body {
            text-align: center;
            background-color: rgb(164, 177, 190);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(220, 211, 199);
        }
        input{
            background-color: rgb(209, 197, 181);
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="update.php">
        <h1>Animal Survey</h1>
        <table> 
            <?php
                $query = "SELECT * FROM survey";

                $result = mysqli_query($conn, $query);

                $num_rows = mysqli_num_rows($result);

                for ($i = 0; $i < $num_rows; $i++) {
                    $row = mysqli_fetch_assoc($result);
                    $id = $row['id'];
                    $question = $row["question"];
            ?>
            
                <tr>
                    <td><p><?php echo $question; ?> </p></td>
                    <td><input type="radio" name="<?php echo $id ?>" value="yes"> Yes</input></td>
                    <td><input type="radio" name="<?php echo $id ?>" value="no"> No</input></td>
                </tr>
            
            <?php 
                } ?> 
        </table>
        <input placeholder="Passcode" name="passcode"></input>
        <input type="submit">
    </form>
    
</body>
</html>