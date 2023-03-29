<?php 
    include('..\Controler\verif_connexion.php');
    include('header.php');
    $id = $_GET["id"];
    $name  = $bdd->query('SELECT ent_eval,ent_confiance_pilote,ent_place_utilise,ent_secteur_activite,offre.ent_id, entreprise.ent_id,entreprise.ent_nom,off_nom,off_id,off_competence FROM entreprise INNER JOIN offre WHERE entreprise.ent_id LIKE "%'.$id.'%"');
    $off  = $bdd->query('SELECT offre.ent_id,entreprise.ent_id,entreprise.ent_nom,off_nom,off_id,off_competence FROM entreprise INNER JOIN offre WHERE entreprise.ent_id = offre.ent_id AND entreprise.ent_id LIKE "%'.$id.'%"'); 
    $id = $name->fetch();
    $i = 0;
?>
<hmtl>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="..\CSS\company-page-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <body>
        <h1><?php echo $id["ent_nom"] ?></h1>
        <main id="infos">
        Secteur d'activité : <?php echo $id["ent_secteur_activite"] ?><br>
        Nombre de stagiaire CESI : <?php echo $id["ent_place_utilise"] ?><br>
        Confiance pilote : <?php echo $id["ent_confiance_pilote"] ?>/5 &#9733 <br>
        Note d'évaluation : <?php echo $id["ent_eval"] ?> /5 &#9733
        </main>
        <h2>Offre disponible : </h2>
        <section class="show_offers">
        <?php
            if ($off->rowCount() > 0){
                 while($offer = $off->fetch()){
                    $i++;
                 ?>
                 <main><?php echo $i ?>. <a href="Offre.php?id=<?php echo $offer['off_id']; ?>"><?php echo $offer['off_nom']; ?></a></main>
                 <?php 
                }
            } else {
                ?>
                <main>Aucune offre disponible</main>
                <?php
            }
        ?>
        </section>  
    </body>
    <?php include('footer.php'); ?>
</html>
