<?php
include('..\Controler\verif_connexion.php');
?>

<!DOCTYPE html>
<?php include('header.php'); ?>
<hmtl>
    <body>
        <section class="show_enterprise">
        <?php
            if ($all_enterprise->rowCount() > 0){
                 while($enterprise = $all_enterprise->fetch()){
                 ?>
                 <main><a href="Enterprise_page.php?id=<?php echo $enterprise['ent_id']; ?>"><?php echo $enterprise['ent_nom']; ?></a></main>
                 <?php 
                }
            }else{  
              ?>
              <main>Aucune entreprise trouvé</main>
              <?php
            }
        ?>
        </section>
    </body>
</html>
<?php include('footer.php'); ?>