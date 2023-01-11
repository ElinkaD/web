<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/stylelog.css" />
	<meta charset="UTF-8" />
	<meta name="n=viewport" content="width=device-width" />
</head>

<body>
<?php if($_COOKIE['id'] == ''): ?>

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
<?php 
    $id = $_COOKIE['id'];
    $mysql = new mysqli('localhost','root','root','people');

    $query = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($mysql, $query);
	$user = mysqli_fetch_assoc($result);
?>
<p>Здравствуйте, <?= $user['name'] ?>. Чтобы выйти из аккаунта нажмите <a href="exit.php">здесь</a>.</p>
<form method="post" action="update_profile.php" name="signup-form">
    <p>Редактирование профиля</p>
    <div class="form-element">
        <label>Логин</label>
        <input type="text" name="login" value = "<?= $user['login'] ?>"/>
    </div>
    <div class="form-element">
        <label>Имя</label>
        <input type="text" name="name" value = "<?= $user['name'] ?>"/>
    </div>
    <div class="form-element">
        <label>Пароль</label>
        <input type="password" name="password" />
    </div>
    <button type="submit" name="edit" class="">Сохранить изменения</button>
    <br><br>
    <a href="http://localhost/laba_4-5/index_admin.php">Назад</a>
</form>

<form action="delete_profile.php" method="post" name="remove">
    <p>Для удаления профиля введите пароль</p>
    <div class="form-element">
        <label>Пароль</label>
        <input type="password" name="password" required />
    </div> 
    <button>Удалить профиль</button>
    <br><br>
    <a href="http://localhost/laba_4-5/index_admin.php">Назад</a>
</form>

<?php endif;?>
</body>
</html>
