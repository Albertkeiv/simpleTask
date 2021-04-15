<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style/bootstrap.css" rel="stylesheet">
<title>Login</title> 
</head>
<body>
<?php
if (!empty($_COOKIE['user'])) {
    header("Location: /team.php");
}
?>
<div class="container-sm">
    <div class="row">
        <div class="col">
            <h1>Вход</h1>
            <form method="post" action="php-scripts/login.php">
                <p>Логин  <input class="form-control" id="user" name="user" type="text"></p>
                <p>Пароль <input class="form-control" id="pass" name="pass" type="password"></p>
                <button class="btn btn-primary">Вход</button>
            </form>
        </div>
        <div class="col">
            <h1> Регистрация</h1>
            <form method="post" action="php-scripts/register.php">
                <p>E-Mail <input class="form-control" id="reg-mail" name="reg-mail" type="email"></p>
                <p>Логин  <input class="form-control" id="reg-user" name="reg-user" type="text"></p>
                <p>Пароль <input class="form-control" id="reg-pass" name="reg-pass" type="password"></p>
                <button class="btn btn-secondary">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
