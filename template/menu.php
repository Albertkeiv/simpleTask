<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/main.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="php-scripts/temp.php">Second</a>
            </li>
        </ul>
        <span class="navbar-text"> <?php echo $_COOKIE['user']; ?> </span>
    </div>
</nav>