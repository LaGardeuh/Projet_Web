<?php
// Définir les paramètres de connexion à la base de données
$serveur = "mysql:dbname=bdd_web;host=127.0.0.1";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base_de_donnees = "bdd_web";

// Créer une connexion à la base de données
//$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);
try{
$pdo = new PDO($serveur, $utilisateur, $mot_de_passe);
}catch(PDOException $e){
    die('Erreur'.$e->getMessage());
}
?>