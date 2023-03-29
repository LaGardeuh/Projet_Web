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
</head>
<?php include('../Vue/header.php') ?>
<body>
    <h1>Modifier un étudiant</h1>
    <?php echo '<form method="post" action="../Controler/ModifEtudiant.php?id=' . $EtudiantID . '">' ?>


    <label for="nom">Nom : </label>
    <input type="text" id="nom" name="nom" value="<?php echo $etudiant['use_nom']; ?>"><br>


    <label for="prenom">Prenom : </label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $etudiant['use_prenom']; ?>"><br>

    <label for="email">Email : </label>
    <input type="text" id="email" name="email" value="<?php echo $etudiant['use_mail']; ?>"><br>




    <label for="localite">Localité: </label>
    <select id="localite" name="localite">
        <?php
        include('..\Controler\GetVille.php');
        ?>
    </select><br>

    <label for="promo">Promotion: </label>
    <select id="promo" name="promo">
        <?php
        include('..\Controler\GetPromotion.php');
        ?>
    </select><br>
    <input type="submit" value='Modifier'>
    </form>


</body>

</html>