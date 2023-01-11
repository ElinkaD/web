<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    
    $password = md5($password."ElinaTheBest55555");

    $mysql = new mysqli('localhost','root','root','people');
    $result = $mysql->query("SELECT * FROM `users` WHERE (`login` = '$login') AND (`password` = '$password')");
    $user = $result->fetch_assoc();

    if(count($user) == 0){
        echo "<script>
        alert('Пользователь не был найден в базе данных, проверьте логин и пароль');
        location.href = 'login.php';
        </script>";
        exit();
    }
    setcookie('pass', $user['password'], time() + 3600, "/");
    setcookie('id', $user['id'], time() + 3600, "/");
    echo "<script>
    alert('Вы успешно авторизированы!');
    location.href = 'index_admin.php';
    </script>";
    
    $mysql->close();
?>