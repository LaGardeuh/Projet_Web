<?php
// Récupérer l'ID de l'entreprise à supprimer depuis l'URL
$entrepriseId = $_GET['id'];

// Connexion à la base de données
require_once '../Model/pdo.php';

// Vérifier si l'entreprise a des offres de stage associées
$requete = $pdo->prepare("SELECT COUNT(*) FROM offre WHERE ent_id = :id");
$requete->execute(array('id' => $entrepriseId));
$nbOffres = $requete->fetchColumn();

if ($nbOffres > 0) {
  // L'entreprise a des offres de stage associées, afficher un message d'erreur
  echo "Cette entreprise a des offres de stage associées. Supprimez d'abord les offres de stage associées avant de supprimer l'entreprise.";
} else {


$QueryDeleteEntreprise = $pdo->prepare("DELETE FROM siege_a WHERE ent_id = :id");
$QueryDeleteEntreprise->execute(array('id' => $entrepriseId));

// Suppression de la colonne correspondante dans la table entreprise
$requete = $pdo->prepare("DELETE FROM entreprise WHERE ent_id = :id");
$requete->execute(array('id' => $entrepriseId));

// Ajout d'une alerte pour signaler que l'Entreprise a bien été supprimé
echo "<script>alert('Entreprise supprimé avec succès.');</script>";

// Redirection vers une page de confirmation
header('Location: ../Vue/Bienvenue.php');
exit();
}