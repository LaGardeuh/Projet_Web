<?php 
    include('header.php');
    $id = $_GET["id"];
    $detail  = $bdd->query('SELECT * FROM offre WHERE off_id LIKE "%'.$id.'%"');
    $id = $detail->fetch();
?>
<hmtl>
    <body>
        <h1><?php echo $id["off_entreprise"] ?></h1>
        <main>Compétences requises : <?php echo $id["off_competence"] ?></main>
        <main>Durée demandée : <?php echo $id["off_duree"] ?></main>
        <main>Rémunération : <?php echo $id["off_remuneration"] ?></main>
        <main>Date de début : <?php echo $id["off_date"] ?></main>
        <main>Nombre de place : <?php echo $id["off_nombre_place"] ?></main>
    </body>
</html>
<?php include('footer.php'); ?>