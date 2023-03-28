<?php
//
include('..\Controler\verif_connexion.php');
?>

<!DOCTYPE html>
<?php include('header.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\CSS\Gestion-style.css">

    <title>Document</title>
</head>

<body>
    <h1>Gestion</h1><br>
    <a id="button-create" href="../Vue/Formulaire_Create.php">Insérer un étudiant, un pilote, une entreprise ou une offre</a></br>
    <label for="entreprise">Entreprise : </label>
    <select id="entreprise" name="entreprise" onchange="updateEntrepriseId(this.value)">
    <option value="">Choisir une entreprise</option>
        <?php
        include('..\Controler\GetEntreprise.php');
        ?>
    </select><br>
    <?php echo'<a href="#" id="suppr-entreprise-link">Supprimer l\'entreprise sélectionnée</a>'?>
    <script>
        function updateEntrepriseId(entrepriseId) {
            document.getElementById("suppr-entreprise-link").href = "../Model/SupprEntreprise.php?id=" + entrepriseId;
        }
    </script>
    <?php echo'<a href="#" id="modif-entreprise-link">Modifier l\'entreprise sélectionnée</a>'?>
    <script>
        function updateEntrepriseId(entrepriseId) {
            document.getElementById("modif-entreprise-link").href = "../Vue/FormulaireModif.php?id=" + entrepriseId;
        }
    </script>
</body>

</html>
