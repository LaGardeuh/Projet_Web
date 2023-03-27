<?php include('header.php'); ?>
<hmtl>
    <body>
        <section class="show_enterprise">
        <?php
            if ($all_enterprise->rowCount() > 0){
                 while($enterprise = $all_enterprise->fetch()){
                 ?>
                 <main><a href="Offre_Enterprise.php?id=<?php echo $enterprise['off_id']; ?>"><?php echo $enterprise['off_entreprise']; ?></a></main>
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