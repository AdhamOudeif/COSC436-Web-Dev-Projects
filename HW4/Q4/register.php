<?php
    //db conn
    include '../db_connection.php';
    echo ("<script>console.log('Connected Successfully');</script>");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering</title>
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
        $id = $_GET["ID"];
        $pwd = $_GET["PWD"];
        $name = $_GET["Name"];
        $email = $_GET["Email"];
        $visits = 0;
        $last = 'never';
    
        $idQuery = "SELECT id FROM users WHERE id = '$id'";
        $idResult = mysqli_query($conn, $idQuery);

        if (mysqli_num_rows($idResult) == 0){
            $query = "INSERT INTO users(id, password, name, email, visits, last) VALUES('$id', '$pwd', '$name', '$email', 0, 'never')";
            $result = mysqli_query($conn, $query);
            
            echo "<h1>You Have Been Registerd!!</h1>"; 
            echo "<br><a href='../Q4/login.html'><button>Back to Login</button></a>";
            
        } else {
            echo "<h1>Invalid ID!!</h1>";
            exit();
        }
            
       
    ?>
  
</body>
</html>