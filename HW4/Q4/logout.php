<?php
    //db conn
    include '../db_connection.php';
    echo ("<script>console.log('Connected Successfully');</script>");
    //start session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body{
            text-align: center;
            background-color: bisque;
            color: rgb(89, 97, 106);
        }
        td{
            text-align: right;
        }table{
            margin:auto;          
        }
        button, input{
            background-color: rgba(247, 202, 89, 0.756);
        }
        button{
            margin: 10px;
            background-color: rgb(220, 151, 78);
        }
        
    </style>
</head>
<body>
    <?php
    $id = $_SESSION['Id'];

    date_default_timezone_set('America/Detroit');
    $date = date("m/d/Y l h:ia");

    $userQuery = "UPDATE users SET visits = visits+1, last = '$date' WHERE id='$id' ";
    $result = mysqli_query($conn, $userQuery);

    session_destroy();
    ?>
    <form method="GET" action="login.php">
        <h1>Log-In</h1>
        <table>
            <tr>
                <td><label>ID: </label></td>
                <td><input size="17" type="text" name="ID"></input></td>
            </tr>
            <tr>
                <td><label>Password: </label></td>
                <td><input size="17" type="text" name="PWD"></input></td>
            </tr>
        </table><br>

        <input type="submit" value="Log In">
    </form>

    <a href="../Q4/register.html"><button>Register</button></a>
</body>

</html>