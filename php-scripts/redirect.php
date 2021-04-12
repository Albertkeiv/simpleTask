<?php
echo "Вы успешно зарегистрировались, редирект произойдёт в течении 5 секунд";

$referrer = $_SERVER['HTTP_REFERER'];
header("Refresh:5; url=$referrer");
?>