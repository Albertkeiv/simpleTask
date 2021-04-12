<?php
setcookie('user', $qres['login'], time() - 3600 * 24 * 30);  // Убираем куки и перенаправляем на главную
header("Location: /");
?>