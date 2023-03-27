<?php
require_once '..\Model\pdo.php';
$QueryGetVille = $pdo->prepare("SELECT * from entreprise");
$QueryGetVille->execute();

$res = $QueryGetVille->fetchAll();
// print_r($res);
$QueryGetVille->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['ent_id'] . '">' . $row['ent_nom'] . '</option>';
}?>
