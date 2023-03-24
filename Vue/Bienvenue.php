<hmtl>
    <head>
    <?php include('header.php'); ?>
    </head>
    <body>
        <section class="afficher_entreprise">
        <?php
            if ($all_enterprise->rowCount() > 0){
                 while($enterprise = $all_enterprise->fetch()){
                 ?>
                 <main><?php echo $enterprise['off_entreprise']; ?></main>
                 <?php
                }
            }else{  
              ?>
              <main>Aucune entreprise trouvé</main>
              <?php
            }
        ?>
        </section>
    <?php include('footer.php'); ?>
    </body>
</html>