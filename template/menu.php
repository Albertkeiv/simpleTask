<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="nav me-auto mb-2 mb-lg-0 nav-pills">
            <li class="nav-item">
                <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME']=="/team.php") echo "active"; ?>" aria-current="page" href="/team.php">Команды</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME']=="/php-scripts/temp.php") echo "active"; ?>" aria-current="page" href="/php-scripts/temp.php">Тест</a>
            </li>
        </ul>
        <span class="navbar-text">Привет, <?php echo $_COOKIE['user']; ?>! </span>
        <span class="border-end border-5"></span>
        <a class="nav-link" href="../php-scripts/logout.php">Выход</a>
    </div>
</nav>
