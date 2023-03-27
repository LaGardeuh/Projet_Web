<?php
require_once '..\Model\pdo.php';
$QueryGetPromo = $pdo->prepare("SELECT * from promotion");
$QueryGetPromo->execute();

$res = $QueryGetPromo->fetchAll();
// print_r($res);
$QueryGetPromo->closeCursor();

foreach ($res as $row) {
    echo '<option value="' . $row['promo_id'] . '">' . $row['promo_promo'] . '</option>';
}?>