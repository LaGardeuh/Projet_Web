<?php 
include('..\Controler\verif_connexion.php');
include ('header.php');
$id = $_SESSION['id'];
$off = $bdd->query('SELECT wl_id,offre.off_id,off_nom,wish_list.off_id FROM offre INNER JOIN wish_list WHERE offre.off_id = wish_list.off_id AND wish_list.use_id LIKE "%'.$id.'%" ORDER BY offre.off_id DESC');
?>
<html>
<section class="show_enterprise">
        <?php
            if ($off->rowCount() > 0){
                 while($offer = $off->fetch()){
                 ?>
                 <main><a href ='Offre.php?id=<?php echo $offer['off_id']?>'><?php echo $offer['off_nom']; ?></a></main>
                 <?php 
                }
            }else{  
              ?>
              <main>Aucune offre enregistré</main>
              <?php
            }
        ?>
        </section>


</html>
<?php include ('footer.php')?>