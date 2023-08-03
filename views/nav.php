<?php session_start(); ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="dashboard.php" class="navbar-brand">
        <h1 class="h5">The Company</h1>
    </a>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="profile.php" class="nav-link"><?= $_SESSION['username'] ?></a></li>
        <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Logout</a></li>
    </ul>
</nav>