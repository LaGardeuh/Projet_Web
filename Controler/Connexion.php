<?php
    session_start();
    require_once '..\Model\pdo.php';

    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $pdo->prepare('SELECT ele_nom, ele_prenom, ele_mail, ele_mdp FROM eleves WHERE ele_mail = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();


        if ($_POST['email'] === $data['ele_mail'] && $_POST['password'] === $data['ele_mdp']) {
            // Redirige l'utilisateur vers la page d'accueil s'il est authentifié
            $_SESSION['user'] = $data['ele_prenom'];
            header('Location: ../Vue/Bienvenue.php');
            exit;
        } else {
            // Affiche un message d'erreur si les informations d'identification sont incorrectes
            header('Location: ../Vue/Login.php?login_err=erreur');
            
        }



        // if($row == 1){
        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        //         // $password = hash('sha526', $password);

        //         if($data['password'] === $password){

        //             $_SESSION['user'] = $data['ele_prenom'];
        //             header('Location: Bienvenue.php');

        //         }else header('Location:Login.php?login_err=password');

        //     }else header('Location:Login.php?login_err=email');

        // }else header('Location:Login.php?login_err=already');

    }else{
        header('Location:Login.php');
        // $error = 'Nom d\'utilisateur ou mot de passe incorrect';
    }