<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="/style/bootstrap.css" rel="stylesheet">
<title>Регистрация команды</title> 
</head>
<body>
<?php
if (!empty($_COOKIE['user'])) {
    include('reg_team.html'); 
}
else {
    header("Location: ../non-auth.html");
}
?>
</body>
</html>