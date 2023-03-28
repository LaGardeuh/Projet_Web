<?php
session_start();
require_once '..\Model\pdo.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

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
        $_SESSION['logged_in'] = true; //set you've logged in
        $_SESSION['last_activity'] = time(); //your last activity was now, having logged in.
        $_SESSION['expire_time'] = 900; //expire time in seconds: three hours (you must change this)
        header('Location: ../Vue/Bienvenue.php');
    } else header('Location: ../Vue/Login.php?login_err=identifiant');
} else header('Location:Login.php');


//     if ($row == 1) {
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

//             // $passwordhash = password_hash($password, PASSWORD_BCRYPT);
//             // if ($data['use_mdp'] === $passwordhash) {
//                 if(password_verify($password, $mdpHash)){
//                 // Redirige l'utilisateur vers la page d'accueil s'il est authentifié
//                 $_SESSION['id'] = $res['use_id'];
//                 $_SESSION['prenom'] = $res['use_prenom'];
//                 $_SESSION['nom'] = $res['use_nom'];
//                 $_SESSION['role'] = $res['role_id'];
//                 header('Location: ../Vue/Bienvenue.php');
//             } else header('Location: ../Vue/Login.php?login_err=password');
//         } else header('Location: ../Vue/Login.php?login_err=email');
//     } else header('Location: ../Vue/Login.php?login_err=already');
// } else header('Location:Login.php');





// if($row == 1){
//     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//         // $password = hash('sha526', $password);

//         if($data['password'] === $password){

//             $_SESSION['user'] = $data['ele_prenom'];
//             header('Location: Bienvenue.php');

//         }else header('Location:Login.php?login_err=password');

//     }else header('Location:Login.php?login_err=email');

// }else header('Location:Login.php?login_err=already');


    // $error = 'Nom d\'utilisateur ou mot de passe incorrect';
