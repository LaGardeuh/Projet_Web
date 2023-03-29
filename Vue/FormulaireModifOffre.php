<?php include("../Controler/ModifOffre.php");
$OffreID = $_GET['id'];
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une offre de stage</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\FormulaireModifOffre-style.css">

</head>
<?php include('../Vue/header.php') ?>

<body>
    <h1>Modifier une offre de stage</h1>
    <form id="formulaire">

        <?php echo '<form method="post" action="../Controler/ModifOffre.php?id=' . $OffreID . '">' ?>


        <label for="competence" id="in-form">Compétences requises : </label>
        <input type="text" id="competence" name="competence" value="<?php echo $offre['off_competence']; ?>"><br>


        <label for="nom" id="in-form">Nom de l'offre : </label>
        <input type="text" id="nom" name="nom" value="<?php echo $offre['off_nom']; ?>"><br>

        <label for="type" id="in-form">Type de de l'offre: </label>
        <input type="text" id="type" name="type" value="<?php echo $offre['off_type_promo']; ?>"><br>

        <label for="duree" id="in-form">Email : </label>
        <input type="text" id="duree" name="duree" value="<?php echo $offre['off_duree']; ?>"><br>

        <label for="remuneration" id="in-form">Email : </label>
        <input type="text" id="remuneration" name="remuneration" value="<?php echo $offre['off_remuneration']; ?>"><br>

        <input type="submit" value='Modifier'>
    </form>


</body>

</html>