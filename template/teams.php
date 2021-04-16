<div><p></p></div>
<?php
    $user = $_COOKIE['user'];
    $mysqli = new mysqli("localhost", "phpdb", "1234", "users");
    $query = "SELECT `team_name` FROM `junction` WHERE `login` = '$user'";
    $res_check = $mysqli->query($query);
    $res_team = $mysqli->query($query);
    $mysqli->close();
?>

<div class="container d-flex flex-wrap">

<?php
    $check = $res_check->fetch_row();
    if (empty($check)) {
        include ("no-team_card.html");
    } else {
        while($team = $res_team->fetch_assoc()) {
            include("card.php");
        }
    }
?>
<div> TEST </div>
</div>
