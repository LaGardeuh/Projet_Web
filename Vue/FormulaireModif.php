<?php include("../Controler/ModifEntreprise.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une entreprise</title>
</head>

<body>
    <h1>Modifier une entreprise</h1>
    <form method="post" action="../Controler/ModifEntreprise.php">


        <label for="nom">Nom de l'entreprise : </label>
        <input type="text" id="nom" name="nom" value="<?php echo $entreprise['ent_nom']; ?>"><br>


        <label for="secteur_activite">Secteur d'activité : </label>
        <input type="text" id="secteur_activite" name="secteur_activite" value="<?php echo $entreprise['ent_secteur_activite']; ?>"><br>


        

        <label for="localite">Localité: </label>
        <select id="localite" name="localite" value="<?php echo $entreprise['ent_secteur_activite']; ?>">
            <?php
            include('..\Controler\GetVille.php');
            ?>
        </select><br>
        <label for="secteur_activite">Secteur d'activité: </label>
        <select id="secteur_activite" name="secteur_activite">
            <option value="BTP">BTP</option>
            <option value="Info">Informatique</option>
            <option value="Generaliste">Généraliste</option>
            <option value="S3E">S3E</option>
        </select><br>
        <label for="nombre_stagiaires">Nombre de stagiaires : </label>
        <input type="text" id="nombre_stagiaires" name="nombre_stagiaires" value="<?php echo $entreprise['ent_place_utilise']; ?>"><br>

        <label for="confiance_pilote">Confiance du pilote (1-5):</label>
        <input type="number" id="confiance_pilote" name="confiance_pilote" min="1" max="5" value="<?php echo $entreprise['ent_place_utilise']; ?>"><br>
    </form>

        <button type="submit">Modifier</button>
    </form>
</body>

</html>