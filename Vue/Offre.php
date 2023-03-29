<?php
include('..\Controler\verif_connexion.php');
include('header.php');
$id = $_GET["id"];
$id_se = $_SESSION['id'];
$detail = $bdd->query('SELECT * FROM offre WHERE off_id LIKE "%' . $id . '%"');
$detail = $detail->fetch();
$id_off = $detail['off_id'];
$add = 'Ajouté à la wish-list !';
?>

<html>

<head>
    <title>Page d'Offre</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\Offre-style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>
        <?php echo $detail['off_nom']; ?>
    </h1>
    <main id="info">
        Promo :
        <?php echo $detail['off_type_promo']; ?> <br>
        Compétence :
        <?php echo $detail['off_competence']; ?> <br>
        Durée du stage :
        <?php echo $detail['off_duree']; ?> <br>
        Date de début :
        <?php echo $detail['off_date']; ?> <br>
        Nombre de place :
        <?php echo $detail['off_nombre_place']; ?> <br>
        Rémunération :
        <?php echo $detail['off_remuneration']; ?> <br>
        <?php echo '<form name="form" method="post" action="../Controler/AddToWishlist.php?idoff=' . $id . '&id_se='. $id_se . '">'?>
            <input type='submit' name='submit' value="Ajouter à la wish-list">

            <a href="Postuler.php?id=<?php echo $id ?>" class="postuler">Postuler</a>
        </form>
        <?php if (isset($_GET['err'])) {
            $err = htmlspecialchars($_GET['err']);

            switch ($err) {
                case 'repetition':
                    ?>
                    <div class="popup">
                        <span class="message">Offre déjà dans la wishlist</span>
                    </div>

                    <?php
                    break;
            }
        } ?>
    </main>

</body>

</html>

<?php include('footer.php'); ?>