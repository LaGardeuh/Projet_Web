<?php 
    include('header.php');
    include('..\Controler\verif_connexion.php');
    $id = $_GET["id"];
    $name  = $bdd->query('SELECT offre.ent_id, entreprise.ent_id,entreprise.ent_nom,off_nom,off_id,off_competence FROM entreprise INNER JOIN offre WHERE entreprise.ent_id LIKE "%'.$id.'%"');
    $off  = $bdd->query('SELECT offre.ent_id,entreprise.ent_id,entreprise.ent_nom,off_nom,off_id,off_competence FROM entreprise INNER JOIN offre WHERE entreprise.ent_id = offre.ent_id AND entreprise.ent_id LIKE "%'.$id.'%"'); 
    $id = $name->fetch();

?>
<hmtl>
<link rel="stylesheet" type="text/css" href="..\CSS\style.css">
    <body>
        <h1><?php echo $id["ent_nom"] ?></h1>
        <section class="show_offers">
        <?php
            if ($off->rowCount() > 0){
                 while($offer = $off->fetch()){
                 ?>
                 <main><a href="Offre.php?name=<?php echo $offer ['ent_nom'];?>&id=<?php echo $offer['off_id']; ?>"><?php echo $offer['off_competence']; ?></a></main>
                 <?php 
                }
            }else{  
              ?>
              <main>Aucune offre disponible</main>
              <?php
            }
        ?>
        </section>
        
    </body>
</html>
<?php include('footer.php'); ?>