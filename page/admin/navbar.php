<nav class="sb-topnav navbar navbar-expand navbar-light bg-white">
    <a class="navbar-brand" href=""><i class="far fa-smile"></i> Siprakerin</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-sm"><?= $_SESSION['username']; ?></span>
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="../../longout.php"><i class="fas fa-power-off"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>