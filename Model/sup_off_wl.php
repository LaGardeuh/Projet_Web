<?php  
session_start();
require_once '../Model/pdo.php';
    $id_off = $_GET['id_off'];
    $id = $_SESSION['id'];
    $QueryDeleteWishList = $pdo->prepare("DELETE FROM wish_list WHERE off_id = ?");
    $QueryDeleteWishList->bindParam(1, $id_off);
    $QueryDeleteWishList->execute();
    header("Location: ../Vue/Wish-list.php?id=".$id.'');
?>