<?php include("../Controler/ModifEntreprise.php"); 
$entrepriseId = $_GET['id'];
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une entreprise</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\FormulaireModifEntreprise-style.css">
</head>
<?php include('../Vue/header.php') ?>
<body>
    <h1>Modifier une entreprise</h1>
    <form id="formulaire">
    <?php echo '<form method="post" action="../Controler/ModifEntreprise.php?id='. $entrepriseId .'">' ?>


        <label for="nom" id="in-form">Nom de l'entreprise : </label>
        <input type="text" id="nom" name="nom" value="<?php echo $entreprise['ent_nom']; ?>"><br>


        <label for="secteur_activite" id="in-form">Secteur d'activité : </label>
        <input type="text" id="secteur_activite" name="secteur_activite" value="<?php echo $entreprise['ent_secteur_activite']; ?>"><br>




        <label for="localite" id="in-form">Localité: </label>
        <select id="localite" name="localite">
            <?php
            include('..\Controler\GetVille.php');
            ?>
        </select><br>
        <label for="nombre_stagiaires" id="in-form">Nombre de stagiaires : </label>
        <input type="text" id="nombre_stagiaires" name="nombre_stagiaires" value="<?php echo $entreprise['ent_place_utilise']; ?>"><br>

        <label for="confiance_pilote" id="in-form">Confiance du pilote (1-5):</label>
        <input type="number" id="confiance_pilote" name="confiance_pilote" min="1" max="5" value="<?php echo $entreprise['ent_confiance_pilote']; ?>"><br>
        <input type="submit" value='Modifier'>
    </form>

    
</body>

</html>