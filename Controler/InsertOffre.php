<?php
session_start();
require_once '..\Model\pdo.php';

$nom = $_POST['off_nom'];
$competences = $_POST['competences'];
$secteur = $_POST['off_type_promo'];
$localite = $_POST['localite'];
$entreprise = $_POST['entreprise'];
$duree = $_POST['duree'];
$remuneration = $_POST['remuneration'];
$nombre_de_places = $_POST['nombre_de_places'];
$date = date('l jS \of F Y');
$id_pilote = $_SESSION['id'];

$QueryInsertOffre = $pdo->prepare("INSERT INTO `offre` (`off_competence`, `off_nom`, `off_type_promo`, `off_duree`, `off_remuneration`, `off_date`, `off_nombre_place`, `ent_id`, `use_id`) VALUES ('$competences','$nom','$secteur','$duree', '$remuneration\€','$date', '$nombre_de_places','$entreprise','$id_pilote')");

$QueryInsertOffre->execute();
$res = $QueryInsertOffre->fetch();
$QueryInsertOffre->closeCursor();

// Ajout d'une alerte pour signaler que L'offre de stage a bien été créé
echo "<script>alert('L'offre de stage a été créé avec succès.');</script>";

header('Location: ../Vue/Bienvenue.php');