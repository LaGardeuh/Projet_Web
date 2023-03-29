<?php
include('..\Controler\verif_connexion.php');
include('header.php'); 
include('header.php');


?>
<!DOCTYPE html>
<hmtl>

    <head>
        <meta charset="UTF-8">
        <title>Page de login</title>
        <link rel="stylesheet" type="text/css" href="../CSS/bienvenue-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1 type="title">Liste des Entreprises</h1><br>

        <section class="show_company">
        <?php
            if ($all_enterprise->rowCount() > 0){
                 while($company = $all_enterprise->fetch()){
                 ?>
                 <main><a href="Company_page.php?id=<?php echo $company['ent_id']; ?>"><?php echo $company['ent_nom']; ?></a></main>
                 <?php 
            <?php
            if ($all_company->rowCount() > 0) {
                while ($company = $all_company->fetch()) {
                    ?>
                    <main><a href="Company_page.php?id=<?php echo $company['ent_id']; ?>"><?php echo $company['ent_nom']; ?></a>
                    </main>
                    <?php
                }
            } else {
                ?>
                <main>Aucune entreprise trouvé</main>
                <?php
            }
            ?>
        </section>
        <?php // Partie "Liens"
            /* On calcule le nombre de pages */
            $nombreDePages = ceil($nombredElementsTotal / $limite);

            /* Si on est sur la première page, on n'a pas besoin d'afficher de lien
            * vers la précédente. On va donc ne l'afficher que si on est sur une autre
            * page que la première */
            if ($page > 1):
                ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
            endif;

            /* On va effectuer une boucle autant de fois que l'on a de pages */
            for ($i = 1; $i <= $nombreDePages; $i++):
                ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
            endfor;

            /* Avec le nombre total de pages, on peut aussi masquer le lien
            * vers la page suivante quand on est sur la dernière */
            if ($page < $nombreDePages):
                ?>— <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
            endif;
        ?>
    </body>
 
    <?php include('footer.php'); ?>

    </html>