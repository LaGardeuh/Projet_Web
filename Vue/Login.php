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
                case 'identifiant':
        ?>
                    <div class="popup">
                        <span class="message">Mot de passe ou email incorrect !</span>
                    </div>

        <?php
                    break;
            }
        } ?>
    </div>
</body>

</html>