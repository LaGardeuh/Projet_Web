<!-- <?php
        // Définit la durée d'expiration du cookie de session à 15 minutes
        session_set_cookie_params(60);

        // Définit la durée d'expiration de la session à 15 minutes
        session_cache_expire(1);

        // Démarre la session
        session_start();
        if (!isset($_SESSION['prenom']))
            header('Location: ../Vue/Login.php');
        // Vérifie si la session est active depuis plus de 15 minutes
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
            // Si la session est inactive depuis plus de 15 minutes, détruire la session et rediriger l'utilisateur vers la page de connexion
            session_unset();
            session_destroy();
            header("Location: ../Vue/login.php");
            exit();
        }

        // Met à jour le temps de dernière activité de la session
        $_SESSION['LAST_ACTIVITY'] = time(); ?>-->

<?php
if (!isset($_SESSION['prenom']))
    header('Location: ../Vue/Login.php');
if ($_SESSION['last_activity'] < time() - $_SESSION['expire_time']) { //have we expired?
    //redirect to logout.php
    header('Location: ../Controler/Deconnexion.php'); //change yoursite.com to the name of you site!!
} else { //if we haven't expired:
    $_SESSION['last_activity'] = time(); //this was the moment of last activity.
}
