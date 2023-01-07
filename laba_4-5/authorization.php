<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    

    $mysql = new mysqli('localhost','root','root','people');
    $result = $mysql->query("SELECT * FROM `users` WHERE 'login' = '$login' AND 'password' = '$password'");

    $user = 

    $mysql->close();
    header ('Location: index.php');
?>