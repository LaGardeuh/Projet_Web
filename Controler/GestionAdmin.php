<?php
if ($_SESSION['role'] == 3) {
?>
    <label for="pilote">Pilote : </label>
    <select id="pilote" name="pilote" onchange="updatePiloteId(this.value)">
        <option value="">Choisir un Pilote</option>
        <?php include('..\Controler\GetPilote.php'); ?>
    </select><br>
    <?php echo '<a href="#" id="suppr-pilote-link">Supprimer le pilote sélectionné</a>' ?>
    <script>
        function updatePiloteId(piloteId) {
            document.getElementById("suppr-pilote-link").href = "../Model/SupprPilote.php?id=" + piloteId;
        }
    </script>
    <?php echo '<a href="#" id="modif-pilote-link">Modifier le pilote sélectionné</a>' ?>
    <script>
        function updatePiloteId(piloteId) {
            document.getElementById("modif-pilote-link").href = "../Vue/FormulaireModifEtudiant.php?id=" + piloteId;
        }
    </script>
<?php }else ?>