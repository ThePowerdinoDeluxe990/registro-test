<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="main.php" method="post">
        <label>username: </label>
            <input type="text" name="username"><br>
        <label>Password:</label>
            <input type="text" name="password"><br>
        <input type="submit" name="login" value="log in">
        <br>
    </form>
    
</body>
</html>

<?php
/*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    */

    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Falta el usuario";
        }elseif(empty($password)){
            echo"Falta la contraseña";
        }
        else{
            echo"Bienvenido {$username}";
        }
    }
?>