<?php
$user = filter_var(trim($_POST["user"]), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST["pass"]), FILTER_SANITIZE_STRING);
$pass = md5($pass);

$mysqli = new mysqli("localhost", "phpdb", "1234", "users");
$query = "SELECT * FROM `users` WHERE `login` = '$user' AND `password` = '$pass'";
$result = $mysqli->query($query);
$qres = $result->fetch_assoc();

if (empty($qres)) {
    echo "<h1>Неверный логин/пароль!</h1>";
    exit();
} 

setcookie('user', $qres['login'], time() + 3600 * 24 * 30, "/");                    // Усанавливаем куки на месяц
$_COOKIE['user'] = $user;  

$mysqli->close();                                                                   // Закрытие соединения c БД     

header("Location: /team.php");
?>
                                               