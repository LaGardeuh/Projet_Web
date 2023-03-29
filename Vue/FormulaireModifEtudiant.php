<?php include("../Controler/ModifEtudiant.php");
$EtudiantID = $_GET['id'];
session_start()
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Etudiant</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\FormulaireModifEtudiant-style.css">

</head>
<?php include('../Vue/header.php') ?>

<body>
    <h1>Modifier un étudiant</h1>
    <form id="formulaire">

        <?php echo '<form method="post" action="../Controler/ModifEtudiant.php?id=' . $EtudiantID . '">' ?>


        <label for="nom" id="in-form">Nom : </label>
        <input type="text" id="nom" name="nom" value="<?php echo $etudiant['use_nom']; ?>"><br>


        <label for="prenom" id="in-form">Prenom : </label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $etudiant['use_prenom']; ?>"><br>

        <label for="email" id="in-form">Email : </label>
        <input type="text" id="email" name="email" value="<?php echo $etudiant['use_mail']; ?>"><br>




        <label for="localite" id="in-form">Localité: </label>
        <select id="localite" name="localite">
            <?php
            include('..\Controler\GetVille.php');
            ?>
        </select><br>

        <label for="promo" id="in-form">Promotion: </label>
        <select id="promo" name="promo">
            <?php
            include('..\Controler\GetPromotion.php');
            ?>
        </select><br>
        <input type="submit" value='Modifier'>
    </form>


</body>

</html>