<?php 
include('header.php');
$id = $_GET["id"];
$name = $_GET['name'];
$detail = $bdd->query('SELECT * FROM offre WHERE off_id LIKE "%'.$id.'%"'); 
$detail = $detail->fetch();
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
    </main>
    <a href="Postuler.php?id=<?php echo $id?>" class="button">Postuler</a>
</html>

<?php include('footer.php'); ?>