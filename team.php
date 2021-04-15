<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="style/bootstrap.css" rel="stylesheet">
<title>SimpleAgile</title> 
</head>
<body>
<?php
if (!empty($_COOKIE['user'])) {
    include('template/menu.php');
    include('template/teams.php'); 
}
else {
    header("Location: ../non-auth.html");
}
?>
</body>
</html>
