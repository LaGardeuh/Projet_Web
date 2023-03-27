<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdd_web";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Offres de stage</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Liste des offres de stage</h1>
  <?php
  include 'Manage_Offer.php';
  // appel de la fonction recuperer_offres
  $result = recuperer_offres();

  // affichage des résultats dans un tableau HTML
  echo '<table>';
  echo '<tr>';
  echo '<th>Identifiant</th>';
  echo '<th>Entreprise</th>';
  echo '<th>Compétence</th>';
  echo '<th>Type de promotion</th>';
  echo '<th>Durée</th>';
  echo '<th>Rémunération</th>';
  echo '<th>Date</th>';
  echo '<th>Nombre de places</th>';
  echo '<th>Actions</th>';
  while ($row = $result->fetch()) {
    echo "<tr>";
    echo "<td>" . $row["off_id"] . "</td>";
    echo "<td>" . $row["off_entreprise"] . "</td>";
    echo "<td>" . $row["off_competence"] . "</td>";
    echo "<td>" . $row["off_type_promo"] . "</td>";
    echo "<td>" . $row["off_duree"] . "</td>";
    echo "<td>" . $row["off_remuneration"] . "</td>";
    echo "<td>" . $row["off_date"] . "</td>";
    echo "<td>" . $row["off_nombre_place"] . "</td>";
    echo "<td><a href='modif_offre.php?id=" . $row["off_id"] . "'>Modifier</a> | <a href='suppr_offre.php?id=" . $row["off_id"] . "'>Supprimer</a></td>";
    echo "</tr>";
  }
  echo '</table>';
  ?>

  </table>
</body>

</html>