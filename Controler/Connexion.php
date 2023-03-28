<?php
session_start();
require_once '..\Model\pdo.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = ($_POST['password']);

    $check = $pdo->prepare('SELECT * FROM user WHERE use_mail = ?');
    $check->bindParam(1, $_POST['email']);
    $check->execute();
    $res = $check->fetch();


        $mdpHash = $res['use_mdp'];
        if (password_verify($password, $mdpHash)) {
            $_SESSION['id'] = $res['use_id'];
            $_SESSION['prenom'] = $res['use_prenom'];
            $_SESSION['nom'] = $res['use_nom'];
            $_SESSION['role'] = $res['role_id'];
            header('Location: ../Vue/Bienvenue.php');
        } else header('Location: ../Vue/Login.php?login_err=identifiant');
} else header('Location:Login.php');

