<?php
include('header.php');
include('..\Controler\verif_connexion.php');
$id = $_GET["id"];
$detail  = $bdd->query('SELECT * FROM offre WHERE off_id LIKE "%' . $id . '%"');
$id = $detail->fetch();
?>
<hmtl>
    <link rel="stylesheet" type="text/css" href="..\CSS\style.css">

    <body>
        <h1><?php echo $id["off_entreprise"] ?></h1>
        <main>Compétences requises : <?php echo $id["off_competence"] ?></main>
        <main>Durée demandée : <?php echo $id["off_duree"] ?></main>
        <main>Rémunération : <?php echo $id["off_remuneration"] ?></main>
        <main>Date de début : <?php echo $id["off_date"] ?></main>
        <main>Nombre de place : <?php echo $id["off_nombre_place"] ?></main>
        <style>
            .button {
                background-color: #FEC845;
                box-shadow: 0 5px 0 #c69b37;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                position: relative;
                text-decoration: none;
                display: inline-block;
            }
        </style>
        <a href="Postuler.php" class="button">Postuler</a>
    </body>

    </html>
    <?php include('footer.php'); ?>