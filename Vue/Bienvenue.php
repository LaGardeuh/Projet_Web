<?php
include('..\Controler\verif_connexion.php');
include('header.php'); 


?>
<!DOCTYPE html>
<hmtl>
<head>
    <meta charset="UTF-8">
    <title>Page de login</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\bienvenue-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
        <h1 type="title">Liste des Entreprises</h1><br>
        <section class="show_company">
        <?php
            if ($all_company->rowCount() > 0){
                 while($company = $all_company->fetch()){
                 ?>
                 <main><a href="Company_page.php?id=<?php echo $company['ent_id']; ?>"><?php echo $company['ent_nom']; ?></a></main>
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