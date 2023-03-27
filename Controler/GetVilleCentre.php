<?php
require_once '..\Model\pdo.php';
$QueryGetVilleCentre = $pdo->prepare("SELECT * from ville where ville_centre = 1");
$QueryGetVilleCentre->execute();

$res = $QueryGetVilleCentre->fetchAll();
// print_r($res);
$QueryGetVilleCentre->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['ville_id'] . '">' . $row['ville_ville'] . '</option>';
}?>
