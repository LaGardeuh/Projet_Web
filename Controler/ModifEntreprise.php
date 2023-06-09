<?php
// Récupérer l'ID de l'entreprise à modifier depuis l'URL
$entrepriseId = $_GET['id'];

// Connexion à la base de données
require_once '../Model/pdo.php';

// Récupérer les informations de l'entreprise à modifier
$requete = $pdo->prepare("SELECT * FROM entreprise WHERE ent_id = :id");
// $requete->bindParam(1, $entrepriseId);
$requete->execute(array('id' => $entrepriseId));
$entreprise = $requete->fetch();


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire

  $nom = $_POST['nom'];
  $secteur_activite = $_POST['secteur_activite'];
  $nombre_stagiaires = $_POST['nombre_stagiaires'];
  $confiance_pilote = $_POST['confiance_pilote'];


  // Mettre à jour les informations de l'entreprise dans la base de données
  $requeteUpdateEntreprise = $pdo->prepare("UPDATE entreprise SET ent_nom = ?, ent_secteur_activite = ?, ent_place_utilise = ?, ent_confiance_pilote = ? WHERE ent_id = ?");
  // $requeteUpdateEntreprise = $pdo->prepare("UPDATE entreprise SET ent_nom = :nom, ent_secteur_activite = :secteur_activite, ent_place_utilise = :nombre_stagiaires, ent_confiance_pilote = :confiance_pilote WHERE ent_id = :id");
  // $requeteUpdateEntreprise->execute(array('nom' => $nom, 'secteur_activite' => $secteur_activite, 'nombre_stagiaires' => $nombre_stagiaires, 'confiance_pilote' => $confiance_pilote, 'id' => $entrepriseId));
  $requeteUpdateEntreprise->bindParam(1, $nom);
  $requeteUpdateEntreprise->bindParam(2, $secteur_activite);
  $requeteUpdateEntreprise->bindParam(3, $nombre_stagiaires);
  $requeteUpdateEntreprise->bindParam(4, $confiance_pilote);
  $requeteUpdateEntreprise->bindParam(5, $entrepriseId);
  // $requete = $pdo->prepare("UPDATE entreprise SET ent_nom = '$nom', ent_secteur_activite = '$secteur_activite', ent_place_utilise = '$nombre_stagiaires', ent_confiance_pilote = '$confiance_pilote' WHERE ent_id = '$entrepriseId'");
  // // $requete->execute(array('nom' => $nom, 'secteur_activite' => $secteur_activite, 'nombre_stagiaires' => $nombre_stagiaires, 'confiance_pilote' => $confiance_pilote, 'id' => $entrepriseId));
  $requeteUpdateEntreprise->execute();
  // $requete->closeCursor();

  // Redirection vers une page de confirmation
  header('Location: ../Vue/Bienvenue.php');
  exit();
}
