<?php
session_start();
require_once '..\Model\pdo.php';

$nom_entreprise = $_POST['nom_entreprise'];
$localite = $_POST['localite'];
$secteur_activite = $_POST['secteur_activite'];
$nombre_stagiaires = $_POST['nombre_stagiaires'];
$confiance_pilote = $_POST['confiance_pilote'];
$id_pilote = $_SESSION['id'];

$QueryInsertEntreprise = $pdo->prepare("INSERT INTO `entreprise` (`ent_nom`, `ent_secteur_activite`, `ent_place_utilise`, `ent_confiance_pilote`, `use_id`, `use_id_User`) VALUES ('$nom_entreprise','$secteur_activite','$nombre_stagiaires','$confiance_pilote', '$id_pilote','$id_pilote')");

$QueryInsertEntreprise->execute();
$res = $QueryInsertEntreprise->fetch();
$QueryInsertEntreprise->closeCursor();

// Récupération de l'id de l'entreprise inséré
$ent_id = $pdo->lastInsertId();

// Insertion dans la table siege_a
$QueryInsertSiege = $pdo->prepare("INSERT INTO siege_a (ent_id, ville_id) VALUES (?, ?)");
$QueryInsertSiege->bindParam(1, $ent_id);
$QueryInsertSiege->bindParam(2, $localite);
$QueryInsertSiege->execute();

// Ajout d'une alerte pour signaler que l'Entreprise a bien été créé
echo "<script>alert('Entreprise créé avec succès.');</script>";

header('Location: ../Vue/Bienvenue.php');