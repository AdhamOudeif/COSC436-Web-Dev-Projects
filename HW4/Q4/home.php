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
        td{
            text-align: right;
        }table{
            margin:auto;          
        }
        button, input{
            background-color: rgba(247, 202, 89, 0.756);
        }
        
    </style>
</head>
<body>
    <?php
        $id = $_SESSION['Id'];

        $userQuery = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $userQuery);
        $row = mysqli_fetch_assoc($result);
        
        $name = $row['name'];
        
        echo '<h1>Welcome '. strtoupper($name) .' </h1>';
    ?>

    <br><a href='../Q4/home.php'><button>Home</button></a>
    <a href='../Q4/profile.php'><button>Profile</button></a>
    <a href='../Q4/logout.php'><button>Logout</button></a>

</body>
</html>