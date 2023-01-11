<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) <= 0){
        echo "<script>
        alert('Ошибка: Недопустимая длина логина');
        location.href = 'register.php';
        </script>";
        exit();
    }else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
        echo "<script>
        alert('Ошибка: Недопустимая длина имени');
        location.href = 'register.php';
        </script>";
        exit();
    }else if(mb_strlen($password) < 2 || mb_strlen($password) > 11){
        echo "<script>
        alert('Ошибка: Недопустимая длина пароля (от 3 до 10 символов)');
        location.href = 'register.php';
        </script>";
        exit();
    }

    $password = md5($password."ElinaTheBest55555");

    $mysql = new mysqli('localhost','root','root','people');
    $mysql->query("INSERT INTO  `users`(`login`, `password`, `name`) VALUES ('$login', '$password', '$name')");
    echo "<script>
    alert('Аккаунт создан.');
    location.href = 'login.php';
    </script>";
    $mysql->close();
?>