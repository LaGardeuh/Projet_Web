<?php
$id = $_SESSION['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdd_web;', 'root', '');
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 2;

// Partie "Requête"
/* On commence par récupérer le nombre d'éléments total. Comme c'est une requête,
 * il ne faut pas oublier qu'on ne récupère pas directement le nombre.
 * Ici, comme la requête ne contient aucune donnée client pour fonctionner,
 * on peut l'exécuter ainsi directement */
$resultFoundRows = $bdd->query('SELECT count(ent_id) FROM `entreprise`');
/* On doit extraire le nombre du jeu de résultat */
$nombredElementsTotal = $resultFoundRows->fetchColumn();

$debut = ($page - 1) * $limite;
/* Cette requête ne change pas */
$all_enterprise = 'SELECT * FROM `entreprise` LIMIT :limite OFFSET :debut';
$all_enterprise = $bdd->prepare($all_enterprise);
$all_enterprise->bindValue('debut', $debut, PDO::PARAM_INT);
$all_enterprise->bindValue('limite', $limite, PDO::PARAM_INT);
$all_enterprise->execute();
//$all_company = $bdd->query('SELECT ent_nom,ent_id FROM entreprise ORDER BY ent_id DESC');
if (isset($_GET['s']) and !empty($_GET['s'])) {
    $search = htmlspecialchars($_GET['s']);
    $all_enterprise = $bdd -> query('SELECT ent_nom,ent_id FROM entreprise WHERE ent_nom LIKE "%' . $search . '%" ORDER BY ent_id DESC');
}

?>

<!DOCTYPE html>

<head>
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/header_style.css">
    <script src="JS\header_script.js"></script>
</head>
<html>
<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="../Vue/Bienvenue.php">
                        <img type="image-header" src="../Image/logo_cesi_ton_stage.jpg" alt="">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <a href="../Vue/Gestion.php" class="button-gestion">Gestion</a>
                    <a href="../Vue/Bienvenue.php" class="button-entreprise">Liste des entreprises</a>
                </div>
            </div>
            <form class="d-flex search-bar" role="search" method="get">
                <input class="form-control me-2" type="search" name="s" placeholder="Company Name" aria-label="Search">
                <button class="btn btn-outline" type="submit">Search</button>
            </form>
            <div class="btn-group">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle btn-profil" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profil
                    </a>
                    <!-- <a class="dropdown-item" href="../Controler/Deconnexion.php">Déconnexion</a> -->

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <?php
                            include('../Controler/BtnGestion.php');
                            ?>
                            <a class="dropdown-item" href="Wish-list.php?id=<?php echo $id ?>">Ma Wish-list</a>
                            <a class="dropdown-item" href="Login.php">Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="JS\header_script.js"></script>