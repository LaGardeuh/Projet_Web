<?php
// Récupérer l'ID de l'entreprise à modifier depuis l'URL
$etudiantId = $_GET['id'];

// Connexion à la base de données
require_once '../Model/pdo.php';

// Récupérer les informations de l'entreprise à modifier
$requete = $pdo->prepare("SELECT * FROM user WHERE use_id = :id");
// $requete->bindParam(1, $entrepriseId);
$requete->execute(array('id' => $etudiantId));
$etudiant = $requete->fetch();


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $localite = $_POST['localite'];


  // Mettre à jour les informations de l'entreprise dans la base de données
  $requeteUpdateEtudiant = $pdo->prepare("UPDATE user SET use_nom = ?, use_prenom = ?, use_mail = ?, ville_id = ? WHERE use_id = ?");
  // $requeteUpdateEntreprise = $pdo->prepare("UPDATE entreprise SET ent_nom = :nom, ent_secteur_activite = :secteur_activite, ent_place_utilise = :nombre_stagiaires, ent_confiance_pilote = :confiance_pilote WHERE ent_id = :id");
  // $requeteUpdateEntreprise->execute(array('nom' => $nom, 'secteur_activite' => $secteur_activite, 'nombre_stagiaires' => $nombre_stagiaires, 'confiance_pilote' => $confiance_pilote, 'id' => $entrepriseId));
  $requeteUpdateEtudiant->bindParam(1, $nom);
  $requeteUpdateEtudiant->bindParam(2, $prenom);
  $requeteUpdateEtudiant->bindParam(3, $email);
  $requeteUpdateEtudiant->bindParam(4, $localite);
  $requeteUpdateEtudiant->bindParam(5, $etudiantId);
  // $requete = $pdo->prepare("UPDATE entreprise SET ent_nom = '$nom', ent_secteur_activite = '$secteur_activite', ent_place_utilise = '$nombre_stagiaires', ent_confiance_pilote = '$confiance_pilote' WHERE ent_id = '$entrepriseId'");
  // // $requete->execute(array('nom' => $nom, 'secteur_activite' => $secteur_activite, 'nombre_stagiaires' => $nombre_stagiaires, 'confiance_pilote' => $confiance_pilote, 'id' => $entrepriseId));
  $requeteUpdateEtudiant->execute();
  // $requete->closeCursor();

  // Redirection vers une page de confirmation
  header('Location: ../Vue/Bienvenue.php');
  exit();
}
