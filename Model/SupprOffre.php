<?php
require_once '../Model/pdo.php';

$id = $_GET['id'];


// Vérifier si l'offre est dans la table wish_list
$QueryCheckWishList = $pdo->prepare("SELECT * FROM `wish_list` WHERE `off_id` = ?");
$QueryCheckWishList->bindParam(1, $id);
$QueryCheckWishList->execute();
if ($QueryCheckWishList->rowCount() > 0) {
    // Supprimer les lignes correspondantes dans la table wish_list
    $QueryDeleteWishList = $pdo->prepare("DELETE FROM `wish_list` WHERE `off_id` = ?");
    $QueryDeleteWishList->bindParam(1, $id);
    $QueryDeleteWishList->execute();
}

// Vérifier si l'offre est dans la table candidature
$QueryCheckCandidature = $pdo->prepare("SELECT * FROM `candidature` WHERE `off_id` = ?");
$QueryCheckCandidature->bindParam(1, $id);
$QueryCheckCandidature->execute();
if ($QueryCheckCandidature->rowCount() > 0) {
    // Supprimer les lignes correspondantes dans la table candidature
    $QueryDeleteCandidature = $pdo->prepare("DELETE FROM `candidature` WHERE `off_id` = ?");
    $QueryDeleteCandidature->bindParam(1, $id);
    $QueryDeleteCandidature->execute();
}

// Supprimer l'offre
$QueryDeleteOffre = $pdo->prepare("DELETE FROM `offre` WHERE `off_id` = ?");
$QueryDeleteOffre->bindParam(1, $id);
$QueryDeleteOffre->execute();

header('Location: ../Vue/Bienvenue.php?success=offre_deleted');
// header('Location: ../Vue/Bienvenue.php?success=offre_deleted');
exit();
