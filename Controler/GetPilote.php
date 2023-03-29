<?php
require_once '..\Model\pdo.php';
$QueryGetEtudiant = $pdo->prepare("SELECT * from user where role_id = 1");
$QueryGetEtudiant->execute();

$res = $QueryGetEtudiant->fetchAll();
$QueryGetEtudiant->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['use_id'] . '">' . $row['use_mail'] . '</option>';
}?>
