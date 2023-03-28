<?php
include('..\Controler\verif_connexion.php');
?>

<!DOCTYPE html>
<?php include('header.php'); ?>
<hmtl>
<head>
    <meta charset="UTF-8">
    <title>Page de login</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\bienvenue-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <h1 type="title">Liste des Entreprises</h1><br>
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