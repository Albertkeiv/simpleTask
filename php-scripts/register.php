<?php

//VARS
$email = filter_var(trim($_POST["reg-mail"]), FILTER_SANITIZE_STRING);
$user = filter_var(trim($_POST["reg-user"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["reg-pass"]), FILTER_SANITIZE_STRING);

//VARS For DB
$server = "localhost";
$dbuser = "phpdb";
$dbpass = "1234";
$db = "users";

if (empty($email)) {
    echo "Не указан E-mail!";
    exit();
}
if (empty($user)) {
    echo "Не указано имя пользователя!";
    exit();
}
if (empty($pass)) {
    echo "Пароль не указан!";
    exit();
}
$pass=md5($pass);                                                       //После проверок полей хэшировать

// Проверки существующих пользователей
$mysqli = new mysqli($server, $dbuser, $dbpass, $db);
$query = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = $mysqli->query($query);
$qres = $result->fetch_assoc();
$mysqli->close();

if (!empty($qres)) {
    echo "Пользователь с таким E-mail уже зарегистрирован!";
    exit();
}

$mysqli = new mysqli($server, $dbuser, $dbpass, $db);
$query = "SELECT * FROM `users` WHERE `login` = '$user'";
$result = $mysqli->query($query);
$qres = $result->fetch_assoc();
$mysqli->close();

if (!empty($qres)) {
    echo "Пользователь с таким логином уже зарегистрирован!";
    exit();
}

//Если всё норм то регистрируем

$mysqli = new mysqli($server, $dbuser, $dbpass, $db);
$query = "INSERT INTO `users`(`login`, `password`, `email`) VALUES ('$user', '$pass', '$email')";
$result = $mysqli->query($query);
$mysqli->close();

if ($result == "1") {
    header("Location: redirect.php");
} else {
    echo "Что-то пошло не так, свяжитесь с администратором!";
    exit();
}
?>