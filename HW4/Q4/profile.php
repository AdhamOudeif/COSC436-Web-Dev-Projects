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
    <title>User Home</title>
    <style>
        body{
            text-align: center;
            background-color: bisque;
            color: rgb(89, 97, 106);
        }
        table{
            margin:auto;  
            border: solid; 
            width: 45%; 
            height: 25%;     
            font-size: 20px;
        }
        button, input{
            background-color: rgba(247, 202, 89, 0.756);
        }
        
    </style>
</head>
<body>
    <h1>Profile</h1>
    <?php
        $id = $_SESSION['Id'];

        $userQuery = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $userQuery);
        $row = mysqli_fetch_assoc($result);
        
        $name = $row['name'];
        $email = $row['email'];
        $visits = $row['visits'];
        $last = $row['last'];
    ?>
    <table>
        <tr>
            <td>Name: </td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Visits: </td>
            <td><?php echo $visits ?></td>
        </tr>
        <tr>
            <td>Last: </td>
            <td><?php echo $last ?></td>
        </tr>
    </table>

    <a href='../Q4/home.php'><button>Home</button></a>
    <a href='../Q4/profile.php'><button>Profile</button></a>
    <a href='../Q4/logout.php'><button>Logout</button></a>

</body>
</html>