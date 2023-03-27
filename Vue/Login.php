<!-- <?php
        // Vérifie si l'utilisateur a soumis le formulaire
        if (isset($_POST['submit'])) {
            // Vérifie si le nom d'utilisateur et le mot de passe sont corrects
            if ($_POST['email'] === 'admin@gmail.com' && $_POST['password'] === 'admin') {
                // Redirige l'utilisateur vers la page d'accueil s'il est authentifié
                header('Location: Bienvenue.php');
                exit;
            } else {
                // Affiche un message d'erreur si les informations d'identification sont incorrectes
                $error = 'Nom d\'utilisateur ou mot de passe incorrect';
            }
        }
        ?> -->

<!-- <?php
//include('../Controler/Connexion.php');
$aff_error = $error;
?> -->


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page de login</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\login_style.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <img src="..\Image\logo_cesi_ton_stage.jpg" alt="test">
        </div>
        <h1>CESI ton Stage</h1>
        <form method="post" action="..\Controler\Connexion.php">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" require="require" value="admin@gmail.com"><br>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" value="admin"><br>

            <input type="submit" name="submit" value="Se connecter">
        </form>
        <?php if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'erreur':
        ?>
                    <div class="popup">
                        <span class="message">Nom d'utilisateur ou mot de passe incorrect</span>
                    </div>

        <?php
                    break;
            }
        } ?>
    </div>
</body>

</html>