<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) <= 0){
        echo "Ошибка: Недопустимая длина логина";
        exit();
    }else if(mb_strlen($username) < 3 || mb_strlen($username) > 50){
        echo "Ошибка: Недопустимая длина имени";
        exit();
    }else if(mb_strlen($password) < 2 || mb_strlen($password) > 11){
        echo "Ошибка: Недопустимая длина пароля (от 3 до 10 символов)";
        exit();
    }

    $mysql = new mysqli('localhost','root','root','people');
    $mysql->query("INSERT INTO  `users`(`login`, `password`, `name`)
    VALUES('$login', '$password', '$name')");

    $mysql->close();
    header ('Location: index.php');
?>