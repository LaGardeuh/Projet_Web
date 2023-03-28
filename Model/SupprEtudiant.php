<?php
require_once '../Model/pdo.php';

$id = $_GET['id'];



// Vérifier s'il y a des données dans la table `wish_list`
$QuerySelectWishlist = $pdo->prepare("SELECT * FROM `wish_list` WHERE `use_id` = ?");
$QuerySelectWishlist->bindParam(1, $id);
$QuerySelectWishlist->execute();
if ($QuerySelectWishlist->rowCount() > 0) {
    // Supprimer les données de la table `wish_list`
    $QueryDeleteWishlist = $pdo->prepare("DELETE FROM `wish_list` WHERE `use_id` = ?");
    $QueryDeleteWishlist->bindParam(1, $id);
    $QueryDeleteWishlist->execute();
}

// Vérifier s'il y a des données dans la table `candidature`
$QuerySelectCandidature = $pdo->prepare("SELECT * FROM `candidature` WHERE `use_id` = ?");
$QuerySelectCandidature->bindParam(1, $id);
$QuerySelectCandidature->execute();
if ($QuerySelectCandidature->rowCount() > 0) {
    // Supprimer les données de la table `candidature`
    $QueryDeleteCandidature = $pdo->prepare("DELETE FROM `candidature` WHERE `use_id` = ?");
    $QueryDeleteCandidature->bindParam(1, $id);
    $QueryDeleteCandidature->execute();
}

// Supprimer l'étudiant
$QueryDeleteAppartientA = $pdo->prepare("DELETE FROM appartient_a WHERE use_id = ?");
$QueryDeleteAppartientA->bindParam(1, $id);
$QueryDeleteAppartientA->execute();

$QueryDeleteUser = $pdo->prepare("DELETE FROM `user` WHERE `use_id` = ?");
$QueryDeleteUser->bindParam(1, $id);
$QueryDeleteUser->execute();

// Ajout d'une alerte pour signaler que l'étudiant a bien été supprimé
echo "<script>alert('Etudiant supprimé avec succès.');</script>";

header('Location: ../Vue/Bienvenue.php');
exit();


