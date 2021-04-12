<?php
if (!empty($_COOKIE['user'])) {
    echo "Вы авторизованы!";
}
else {
    echo "УХАДИ!";
}
?>