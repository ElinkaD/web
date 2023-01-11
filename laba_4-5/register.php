<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="css/stylelog.css" />
	<meta charset="UTF-8" />
	<meta name="n=viewport" content="width=device-width" />
</head>

<body>
<form method="post" action="create_profile.php" name="signup-form">
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
    <button type="submit" name="register" value="register">Зарегестрировать</button>
    <br><br>
    <a href="http://localhost/laba_4-5/login.php">Уже есть аккаунт</a>
    <a href="http://localhost/laba_4-5/index.php">Назад</a>
</form>

</body>
</html>