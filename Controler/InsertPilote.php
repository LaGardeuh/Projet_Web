<?php
require_once '..\Model\pdo.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$localite = $_POST['localite'];

$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

$promo = $_POST['promo'];

$QueryInsertUser = $pdo->prepare("INSERT INTO `user` (`use_nom`, `use_prenom`, `use_mdp`, `use_mail`, `ville_id`, `stat_id`, `role_id`) VALUES ('$nom','$prenom','$mdp','$email','$localite', '4', '1')");

$QueryInsertUser->execute();
$res = $QueryInsertUser->fetch();
$QueryInsertUser->closeCursor();

// Récupération de l'id de l'utilisateur inséré
$user_id = $pdo->lastInsertId();

// Insertion dans la table appartient_a
$QueryInsertPromo = $pdo->prepare("INSERT INTO appartient_a (use_id, promo_id) VALUES (?, ?)");
$QueryInsertPromo->bindParam(1, $user_id);
$QueryInsertPromo->bindParam(2, $promo);
$QueryInsertPromo->execute();

header('Location: ../Vue/Bienvenue.php');