<?php
require_once '..\Model\pdo.php';
$QueryGetVille = $pdo->prepare("SELECT * from ville");
$QueryGetVille->execute();

$res = $QueryGetVille->fetchAll();
// print_r($res);
$QueryGetVille->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['ville_id'] . '">' . $row['ville_ville'] . '</option>';
}?>
