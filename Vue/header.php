<header>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CESI ton stage</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>

            <form class="d-flex search-bar" role="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline" type="submit">Search</button>
            </form>

            <div class="btn-group">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="../Controler/Deconnexion.php">Déconnexion</a></li>
                    </ul>
                </li>
            </div>

        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="JS\header_script.js"></script>