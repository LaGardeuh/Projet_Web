<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" type="text/css" href="..\CSS\Formulaire_Connexion_style.css">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
    </head>

    <body>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Inscription</title>
        </head> 
    
        <body>
            <div class="colonne">
                <div class="container">
                    <div class = "header">
                    <img src="..\Image\logo_cesi_ton_stage.jpg" alt="logo">    
                </div>
            <h1>Connectez vous !</h1>

            <form method="POST" action="Formulaire_Connexion.php">
 
            <label for="email">Mail:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Connexion">

                <p>Vous n'avez pas de compte ? <a href="Formulaire_Create.php" class="hyperlink" type="hyperlink">Inscription</a></p>
            </form>
            </div>
        </body>

    </html>    
    </body>


</html>

