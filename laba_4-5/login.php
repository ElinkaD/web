<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/stylelog.css" />
	<meta charset="UTF-8" />
	<meta name="n=viewport" content="width=device-width" />
</head>

<body>
<form method="post" action="authorization.php" name="signin-form">
    <div class="form-element">
        <label>Логин</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Пароль</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login"><a href="http://localhost/laba_4/index_admin.php">Войти</a></button>
    <br><br>
    <a href="http://localhost/laba_4/register.php">Регистрация</a>
    <a href="http://localhost/laba_4/index.php">Назад</a>
</form>

</body>
</html>