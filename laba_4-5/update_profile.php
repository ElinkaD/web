<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $id = $_COOKIE['id'];

    $mysql = new mysqli('localhost','root','root','people');

    if(empty($password)){
        $mysql->query("UPDATE users SET login='$login', name='$name' WHERE id=$id");
    }else{
        $password = md5($password."ElinaTheBest55555");
        $mysql->query("UPDATE users SET login='$login', name='$name', password='$password' WHERE id=$id");
    }

    echo "<script>
    alert('Данные изменены');
    location.href = 'login.php';
    </script>";
    
    $mysql->close();
?>