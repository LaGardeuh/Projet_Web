<?php
//gestion des erreurs
$db = new PDO(
    'mysql:host=localhost;dbname=bdd_web;charset=utf8',
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);

//Création d'une offre
function ajouter_offre($off_entreprise, $off_competence, $off_type_promo, $off_duree, $off_remuneration, $off_date, $off_nombre_place)
{
  global $conn;

  $sql = "INSERT INTO offre (off_entreprise, off_competence,off_type_promo, off_duree, off_remuneration, off_date, off_nombre_place)
            VALUES ('$off_entreprise', '$off_competence', '$off_type_promo', '$off_duree', '$off_remuneration' ,'$off_date', '$off_nombre_place')";

  if ($conn->query($sql) === TRUE) {
    echo "Nouvelle offre de stage ajoutée avec succès.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


//modification d'une offre
function modifier_offre($off_id, $off_entreprise, $off_competence, $off_type_promo, $off_duree, $off_remuneration, $off_date, $off_nombre_place)
{
  global $conn;

  $sql = "UPDATE offre
            SET off_entreprise='$off_entreprise', off_competence='$off_competence', off_type_promo='$off_type_promo', off_duree='$off_duree', off_remuneration='$off_remuneration' ,off_date='$off_date', off_nombre_place='$off_nombre_place'
            WHERE off_id='$off_id'";

  if ($conn->query($sql) === TRUE) {
    echo "Offre de stage mise à jour avec succès.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

//Suppr une offre 
function supprimer_offre($off_id)
{
  global $conn;

  $sql = "DELETE FROM offre WHERE off_id='$off_id'";

  if ($conn->query($sql) === TRUE) {
    echo "Offre de stage supprimée avec succès.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

//Récup offre
function recuperer_offres() {
    $serveur = 'localhost'; // adresse du serveur MySQL
    $utilisateur = 'root'; // nom d'utilisateur pour se connecter à la base de données
    $motDePasse = ''; // mot de passe pour se connecter à la base de données
    $baseDeDonnees = 'bdd_web'; // nom de la base de données à laquelle se connecter
    
    // création de la connexion à la base de données
/*     $conn = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
 */    $conn = new PDO('mysql:host=localhost;dbname=bdd_web;charset=utf8','root','');
    // Requête SQL pour récupérer toutes les offres de stage
    $requete = 'SELECT * FROM offre';
    $result = $conn->query($requete); 

    // Retourne les résultats de la requête
    return $result;
  }
  
?>
