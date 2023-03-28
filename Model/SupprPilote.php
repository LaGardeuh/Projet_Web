<?php
require_once '../Model/pdo.php';

$id = $_GET['id'];

// Supprimer les entreprises liées au pilote
$QueryGetEntreprises = $pdo->prepare("SELECT `ent_id` FROM `entreprise` WHERE `use_id` = ?");
$QueryGetEntreprises->bindParam(1, $id);
$QueryGetEntreprises->execute();

while ($row = $QueryGetEntreprises->fetch(PDO::FETCH_ASSOC)) {
    $ent_id = $row['ent_id'];

    // Vérifier si l'entreprise a des offres de stage associées
    $requete = $pdo->prepare("SELECT COUNT(*) FROM offre WHERE ent_id = :id");
    $requete->execute(array('id' => $ent_id));
    $nbOffres = $requete->fetchColumn();

    if ($nbOffres > 0) {
        // L'entreprise a des offres de stage associées, afficher un message d'erreur
        echo "Cette entreprise a des offres de stage associées. Supprimez d'abord les offres de stage associées avant de supprimer l'entreprise.";
    } else {


        $QueryDeleteEntreprise = $pdo->prepare("DELETE FROM siege_a WHERE ent_id = :id");
        $QueryDeleteEntreprise->execute(array('id' => $ent_id));

        $QueryDeleteEntreprise = $pdo->prepare("DELETE FROM `entreprise` WHERE `ent_id` = ?");
        $QueryDeleteEntreprise->bindParam(1, $ent_id);
        $QueryDeleteEntreprise->execute();
    }
}

// Supprimer le pilote
$QueryDeleteAppartientA = $pdo->prepare("DELETE FROM `appartient_a` WHERE `use_id` = ?");
$QueryDeleteAppartientA->bindParam(1, $id);
$QueryDeleteAppartientA->execute();

$QueryDeleteUser = $pdo->prepare("DELETE FROM `user` WHERE `use_id` = ?");
$QueryDeleteUser->bindParam(1, $id);
$QueryDeleteUser->execute();

// Ajout d'une alerte pour signaler que l'étudiant a bien été supprimé
echo "<script>alert('Etudiant supprimé avec succès.');</script>";

header('Location: ../Vue/Bienvenue.php');
exit();






// // Supprimer le pilote
// $QueryDeleteAppartientA = $pdo->prepare("DELETE FROM appartient_a WHERE use_id = ?");
// $QueryDeleteAppartientA->bindParam(1, $id);
// $QueryDeleteAppartientA->execute();

// $QueryDeleteUser = $pdo->prepare("DELETE FROM `user` WHERE `use_id` = ?");
// $QueryDeleteUser->bindParam(1, $id);
// $QueryDeleteUser->execute();

// // Ajout d'une alerte pour signaler que l'étudiant a bien été supprimé
// echo "<script>alert('Etudiant supprimé avec succès.');</script>";

// header('Location: ../Vue/Bienvenue.php');
// exit();
