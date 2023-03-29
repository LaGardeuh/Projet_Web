<?php
include('..\Controler\verif_connexion.php');
include('header.php');
$id = $_SESSION['id'];
$off = $bdd->query('SELECT wl_id,offre.off_id,off_nom,wish_list.off_id FROM offre INNER JOIN wish_list WHERE offre.off_id = wish_list.off_id AND wish_list.use_id LIKE "%' . $id . '%" ORDER BY offre.off_id DESC');
?>
<html>

<head>
  <title>Page Wish-List</title>
  <link rel="stylesheet" type="text/css" href="..\CSS\wish-list-style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
  <h1>Gérer votre wish-list : </h1>
  <section class="show_enterprise">
    <?php
    if ($off->rowCount() > 0) {
      while ($offer = $off->fetch()) {
        ?>
        <main>
          <a href='Offre.php?id=<?php echo $offer['off_id'] ?>'><?php echo $offer['off_nom']; ?></a>
          <a href='../Model/sup_off_wl.php?id_off=<?php echo $offer['off_id']; ?>' class='button' name='sup'>| Supprimer
            l'offre de la Whish-list</a>
        </main>
        <?php
      }
    } else {
      ?>
      <main>Aucune offre enregistré</main>
      <?php
    }
    ?>
  </section>

</body>

</html>
<?php include('footer.php') ?>