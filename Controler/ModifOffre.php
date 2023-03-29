<?php
// Récupérer l'ID de l'entreprise à modifier depuis l'URL
$OffreId = $_GET['id'];

// Connexion à la base de données
require_once '../Model/pdo.php';

// Récupérer les informations de l'entreprise à modifier
$requete = $pdo->prepare("SELECT * FROM offre WHERE off_id = :id");
// $requete->bindParam(1, $entrepriseId);
$requete->execute(array('id' => $OffreId));
$offre = $requete->fetch();


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les valeurs du formulaire

  $competence = $_POST['competence'];
  $nom = $_POST['nom'];
  $type = $_POST['type'];
  $duree = $_POST['duree'];
  $remuneration = $_POST['remuneration'];


  // Mettre à jour les informations de l'entreprise dans la base de données
  $requeteUpdateOffre = $pdo->prepare("UPDATE offre SET off_competence = ?, off_nom = ?, off_type_promo = ?, off_duree = ?, off_remuneration =? WHERE off_id = ?");
  $requeteUpdateOffre->bindParam(1, $competence);
  $requeteUpdateOffre->bindParam(2, $nom);
  $requeteUpdateOffre->bindParam(3, $type);
  $requeteUpdateOffre->bindParam(4, $duree);
  $requeteUpdateOffre->bindParam(5, $remuneration);
  $requeteUpdateOffre->bindParam(6, $OffreId);
  $requeteUpdateOffre->execute();

  // Redirection vers une page de confirmation
  header('Location: ../Vue/Bienvenue.php');
  exit();
}
