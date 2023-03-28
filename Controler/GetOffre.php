<?php
require_once '..\Model\pdo.php';
$QueryGetEtudiant = $pdo->prepare("SELECT * from offre");
$QueryGetEtudiant->execute();

$res = $QueryGetEtudiant->fetchAll();
$QueryGetEtudiant->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['off_id'] . '">' . $row['off_nom'] . '</option>';
}?>
