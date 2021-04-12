<?php
setcookie('user', $_COOKIE['user'], time() - 3600 * 24 * 30, "/");  // Убираем куки и перенаправляем на главную
header("Location: /");
?>