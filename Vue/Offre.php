<?php 
include('..\Controler\verif_connexion.php');
include('header.php');
$id = $_GET["id"];
$id_se = $_SESSION['id'];
$detail = $bdd->query('SELECT * FROM offre WHERE off_id LIKE "%'.$id.'%"'); 
$detail = $detail->fetch();
$id_off = $detail['off_id'];
$add = 'Ajoutez à la wish-list';
?>

<html>
    <link rel="stylesheet" type="text/css" href="..\CSS\style.css">
    <h1><?php echo $detail['off_nom']; ?></h1>
    <main>
        Promo : <?php echo $detail['off_type_promo']; ?> <br>
        Compétence : <?php echo $detail['off_competence']; ?> <br>
        Durée du stage : <?php echo $detail['off_duree']; ?> <br>
        Date de début : <?php echo $detail['off_date']; ?> <br>
        Nombre de place : <?php echo $detail['off_nombre_place']; ?> <br>
        Rémunération : <?php echo $detail['off_remuneration']; ?> <br>
        <form name='form' method='post'>
            <input type='submit' name='submit'>
            <?php
                if(isset($_POST['submit'])){
                    $bdd->query("INSERT INTO wish_list (wl_id,use_id,off_id) VALUE (NULL,'$id_se','$id_off')");
                    echo $add;
                }
            ?>
        </form>
    </main>
    <a href="Postuler.php?id=<?php echo $id?>" class="button">Postuler</a>
</html>

<?php include('footer.php'); ?>
