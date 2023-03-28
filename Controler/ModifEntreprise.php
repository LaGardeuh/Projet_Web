<?php
// Récupérer l'ID de l'entreprise à modifier depuis l'URL
$entrepriseId = $_GET['id'];

// Connexion à la base de données
require_once '../Model/pdo.php';

// Récupérer les informations de l'entreprise à modifier
$requete = $pdo->prepare("SELECT * FROM entreprise WHERE ent_id = :id");
$requete->execute(array('id' => $entrepriseId));
$entreprise = $requete->fetch();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire
  $nom = $_POST['nom'];
  $secteur_activite = $_POST['secteur_activite'];
  $nombre_stagiaires = $_POST['nombre_stagiaires'];

  // Mettre à jour les informations de l'entreprise dans la base de données
  $requete = $pdo->prepare("UPDATE entreprise SET ent_nom = :nom, ent_secteur_activite = :secteur_activite, ent_place_utilise = :nombre_stagiaires WHERE ent_id = :id");
  $requete->execute(array('nom' => $nom, 'secteur_activite' => $secteur_activite, 'nombre_stagiaires' => $nombre_stagiaires, 'id' => $entrepriseId));

  // Redirection vers une page de confirmation
  header('Location: ../Vue/Bienvenue.php');
  exit();
}
?>