<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>Регистрация команды</title> 
</head>
<body>
<?php
if (!empty($_COOKIE['user'])) {
    include('../template/menu.php');
    echo $_SERVER['SCRIPT_NAME'];
    if (preg_match("\.\_team.php" ,$_SERVER['SCRIPT_NAME'])) {
        echo "1";
    }
}
else {
    header("Location: ../non-auth.html");
}
?>
</body>
</html>