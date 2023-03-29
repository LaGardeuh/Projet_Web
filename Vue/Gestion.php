<?php
include('..\Controler\verif_connexion.php');
?>

<!DOCTYPE html>
<div class="header-gestion">
    <?php include('header.php'); ?>
</div>
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
    <form id="form">
        <a id="button-create" href="../Vue/Formulaire_Create.php">Insérer un étudiant, un pilote, une entreprise ou une
            offre</a></br>
        <label for="entreprise" type="entreprise">Entreprise : </label>
        <select id="entreprise" name="entreprise" onchange="updateEntrepriseId(this.value)">
            <option value="">Choisir une entreprise</option>
            <?php
            include('..\Controler\GetEntreprise.php');
            ?>
        </select><br>
        <?php echo '<a href="#" id="suppr-entreprise-link">Supprimer l\'entreprise sélectionnée</a>' ?>
        <script>
            function updateEntrepriseId(entrepriseId) {
                document.getElementById("suppr-entreprise-link").href = "../Model/SupprEntreprise.php?id=" + entrepriseId;
            }
        </script>
        <?php echo '<a href="#" id="modif-entreprise-link">Modifier l\'entreprise sélectionnée</a>' ?>
        <script>
            function updateEntrepriseId(entrepriseId) {
                document.getElementById("modif-entreprise-link").href = "../Vue/FormulaireModifEntreprise.php?id=" + entrepriseId;
            }
        </script>

        <br>
        <label for="user">Étudiant : </label>
        <select id="user" name="user" onchange="updateEtudiantId(this.value)">
            <option value="">Choisir un étudiant</option>
            <?php include('..\Controler\GetEtudiant.php'); ?>
        </select><br>
        <?php echo '<a href="#" id="suppr-etudiant-link">Supprimer l\'étudiant sélectionné</a>' ?>
        <script>
            function updateEtudiantId(etudiantId) {
                document.getElementById("suppr-etudiant-link").href = "../Model/SupprEtudiant.php?id=" + etudiantId;
            }
        </script>
        <?php echo '<a href="#" id="modif-etudiant-link">Modifier l\'étudiant sélectionné</a>' ?>
        <script>
            function updateEtudiantId(etudiantId) {
                document.getElementById("modif-etudiant-link").href = "../Vue/FormulaireModifEtudiant.php?id=" + etudiantId;
            }
        </script>

        <br>

        <label for="offre">Offre de stage : </label>
        <select id="offre" name="offre" onchange="updateOffreId(this.value)">
            <option value="">Choisir une offre de stage</option>
            <?php include('..\Controler\GetOffre.php'); ?>
        </select><br>
        <?php echo '<a href="#" id="suppr-offre-link">Supprimer l\'offre de stage sélectionnée</a>' ?>
        <script>
            function updateOffreId(offreId) {
                document.getElementById("suppr-offre-link").href = "../Model/SupprOffre.php?id=" + offreId;
            }
        </script>
        <?php echo '<a href="#" id="modif-offre-link">Modifier l\'offre sélectionnée</a>' ?>
        <script>
            function updateOffreId(offreId) {
                document.getElementById("modif-offre-link").href = "../Vue/FormulaireModifOffre.php?id=" + offreId;
            }
        </script>

        <br>

        <?php include('../Controler/GestionAdmin.php') ?>

        <!-- <label for="etudiant">Étudiant : </label>
<select id="etudiant" name="etudiant" onchange="updateEtudiantId(this.value)">
    <option value="">Choisir un Pilote</option>
    <?php include('..\Controler\GetPilote.php'); ?>
</select><br>
<?php echo '<a href="#" id="suppr-etudiant-link">Supprimer l\'étudiant sélectionné</a>' ?>
<script>
function updateEtudiantId(etudiantId) {
    document.getElementById("suppr-etudiant-link").href = "../Model/SupprEtudiant.php?id=" + etudiantId;
}
</script> -->
    </form>
</body>
<?php include('footer.php'); ?>

</html>