<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active shadow-sm bg-body rounded" aria-current="page" href="/team.php">Команды</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active shadow-sm bg-body rounded" aria-current="page" href="php-scripts/temp.php">Second</a>
            </li>
        </ul>
        <span class="navbar-text">Привет, <?php echo $_COOKIE['user']; ?>! </span>
        <span class="border-end border-5"></span>
        <a class="nav-link active shadow-sm bg-body rounded" href="../php-scripts/logout.php">Выход</a>
    </div>
</nav>
