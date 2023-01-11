<?php 
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    $password = md5($password."ElinaTheBest55555");
    $id = $_COOKIE['id'];

    $link = new mysqli('localhost','root','root','people');

    if($password == $_COOKIE['pass']){
        $query = "DELETE FROM users WHERE id='$id'";
        mysqli_query($link, $query);
        setcookie('pass',"", time() - 3600, "/");
        setcookie('id', "", time() - 3600, "/");
        echo "<script>
        alert('Аккаунт удален.');
        location.href = 'index.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Пароль введен неверно!');
        location.href = 'login.php';
        </script>";
    }
    $link->close();
?>