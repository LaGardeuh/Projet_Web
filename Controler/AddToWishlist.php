<?php
require_once '../Model/pdo.php';
$idoff = $_GET["idoff"];
$idUser = $_GET['id_se'];

if (isset($_POST['submit'])) {
    // $off_id = $_POST['off_id'];
    $query = $pdo->prepare("SELECT COUNT(*) FROM wish_list WHERE use_id = ? AND off_id = ?");
    $query->bindParam(1, $idUser);
    $query->bindParam(2, $idoff);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_NUM);
    if ($result[0] == 0) {
        $InsertWL = $pdo->prepare("INSERT INTO wish_list (use_id, off_id) VALUES (?, ?)");
        $InsertWL->bindParam(1, $idUser);
        $InsertWL->bindParam(2, $idoff);
        $InsertWL->execute();
        header('Location: ../Vue/Wish-list.php?id='.$idUser);
    } else {
        header('Location: ../Vue/Offre.php?id='.$idoff.'&err=repetition');
    }
}
