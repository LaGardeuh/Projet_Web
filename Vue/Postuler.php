<?php
include('..\Controler\verif_connexion.php');
include('header.php');
?>

<! DOCTYPE html>
    <html>

    <head>
        <title>Page de postulation</title>
        <link rel="stylesheet" type="text/css" href="..\CSS\postuler-style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Veuillez choisir vos documents :</h1>
        <main>
            <form name='form' method='post'>
                CV : <input type='file' name='name'><br>
                Lettre de Motivation : <input type='file' name='letter'><br>
                <input type='submit' name='submit'>
                <?php include('../Controler/Insertcandidature.php'); ?>
            </form>
        </main>
    </body>

    </html>

    <?php include('footer.php'); ?>