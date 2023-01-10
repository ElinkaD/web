<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/stylelog.css" />
	<meta charset="UTF-8" />
	<meta name="n=viewport" content="width=device-width" />
</head>

<body>
<?php
    if($_COOKIE['user'] == ''):
?>
<form method="post" action="authorization.php" name="signin-form">
    <div class="form-element">
        <label>Логин</label>
        <input type="text" name="login" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Пароль</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="loginb" value="loginb">Войти</button>
    <br><br>
    <a href="http://localhost/laba_4-5/register.php">Регистрация</a>
    <a href="http://localhost/laba_4-5/index.php">Назад</a>
</form>
<?php else: ?>
    <p>Здравсвуйте, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p>
<form method="post" action="update_profile.php" name="signup-form">
    <div class="form-element">
        <label>Логин</label>
        <input type="text" name="login" required />
    </div>
    <div class="form-element">
        <label>Имя</label>
        <input type="text" name="name" required />
    </div>
    <div class="form-element">
        <label>Пароль</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="edit" class="">Сохранить изменения</button>
    <br><br>
    <button><a href="delete_profile.php?id=<?php echo $product['id'] ?>">Удалить профиль</a></button>
    <br><br>
    <a href="http://localhost/laba_4-5/index_admin.php">Назад</a>
</form>
<?php endif;?>
</body>
</html>