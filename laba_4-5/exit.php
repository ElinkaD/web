<?php
    setcookie('login',"", time() - 3600, "/");
    setcookie('name',"", time() - 3600, "/");
    setcookie('pass',"", time() - 3600, "/");
    setcookie('id', "", time() - 3600, "/");
    header ('Location: index.php');
?>