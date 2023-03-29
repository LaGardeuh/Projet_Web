<?php
include('..\Controler\verif_connexion.php');
?>


<!-- <?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['type'])) {
    $type = $_POST['type'];
    $h1 = $type == 'etudiant' ? 'Créer compte étudiant' : 'Créer compte pilote';
} else {
    $type = '';
    $h1 = 'Menu Création ';
}
?> -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\formulaire_create_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Inscription</title>
        <script>
            // Fonction pour générer le formulaire en fonction du type de compte sélectionné
            function generateForm() {
                // Récupérer le type de compte sélectionné
                var typeSelect = document.getElementById('type');
                var type = typeSelect.value;

                // Générer le formulaire approprié
                var formHtml = '';
                if (type == 'etudiant') {
                    formHtml += '<form method="post" action="../Controler/InsertEtudiant.php">';
                    formHtml += '<label for="nom">Nom :</label>';
                    formHtml += '<input type="text" name="nom" id="nom" required><br>';

                    formHtml += '<label for="prenom">Prénom :</label>';
                    formHtml += '<input type="text" name="prenom" id="prenom" required><br>';

                    formHtml += '<label for="email">Email :</label>';
                    formHtml += '<input type="email" name="email" id="email" required><br>';

                    formHtml += '<label for="localite">Localité(s) :</label>';
                    formHtml += '<select id="localite" name="localite">'

                    formHtml += '<?php
                                    include('..\Controler\GetVilleCentre.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="promo">Promotion :    </label>';
                    formHtml += '<select name="promo" id="promo">';
                    formHtml += '<?php
                                    include('..\Controler\GetPromotion.php');
                                    ?>'
                    formHtml += '</select><br>';

                    formHtml += '<label for="mdp">Mot de passe :</label>';
                    formHtml += '<input type="password" name="mdp" id="mdp" required><br>';
                    formHtml += '<input type="submit" name="submit" value="Flute de zut">';
                    formHtml += '</form>';
                }


                if (type == 'pilote') {
                    formHtml += '<form method="post" action="../Controler/InsertPilote.php">';
                    formHtml += '<label for="nom">Nom du Pilote :</label>';
                    formHtml += '<input type="text" name="nom" id="nom" required><br>';

                    formHtml += '<label for="prenom">Prénom du Pilote :</label>';
                    formHtml += '<input type="text" name="prenom" id="prenom" required><br>';

                    formHtml += '<label for="email">Email :</label>';
                    formHtml += '<input type="email" name="email" id="email" required><br>';

                    formHtml += '<label for="localite">Localité(s) :</label>';
                    formHtml += '<select id="localite" name="localite">'

                    formHtml += '<?php
                                    include('..\Controler\GetVilleCentre.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="promo">Promotion en charge :</label>';
                    formHtml += '<select name="promo" id="promo">';
                    formHtml += '<?php
                                    include('..\Controler\GetPromotion.php');
                                    ?>'
                    formHtml += '</select><br>';

                    formHtml += '<label for="mdp">Mot de passe :</label>';
                    formHtml += '<input type="password" name="mdp" id="mdp" required><br>';
                    formHtml += '<input type="submit" value="Inscription">';
                    formHtml += '<a href="Formulaire_Connexion.php" class="hyperlink" type="hyperlink">Vous avez déjà un compte ?</a>';
                    formHtml += '</form>';
                }

                if (type == 'entreprise') {
                    var formHtml = '';
                    formHtml += '<form method="post" action="../Controler/InsertEntreprise.php">';
                    formHtml += '<label for="nom_entreprise">Nom de l\'entreprise:</label>';
                    formHtml += '<input type="text" id="nom_entreprise" name="nom_entreprise"><br>';

                    formHtml += '<label for="localite">Localité:    </label>';
                    formHtml += '<select id="localite" name="localite">'
                    formHtml += '<?php
                                    include('..\Controler\GetVille.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="secteur_activite">Secteur d\'activité:    </label>';
                    formHtml += '<select id="secteur_activite" name="secteur_activite">';
                    formHtml += '<option value="BTP">BTP</option>'
                    formHtml += '<option value="Info">Informatique</option>'
                    formHtml += '<option value="Generaliste">Généraliste</option>'
                    formHtml += '<option value="S3E">S3E</option>'
                    formHtml += '</select><br><br>'

                    formHtml += '<label for="nombre_stagiaires">Nombre de stagiaires:</label>'
                    formHtml += '<input type="number" id="nombre_stagiaires" name="nombre_stagiaires"><br>';

                    formHtml += '<label for="confiance_pilote">Confiance du pilote (1-5):</label>'
                    formHtml += '<input type="number" id="confiance_pilote" name="confiance_pilote" min="1" max="5"><br>'

                    formHtml += '<input type="submit" value="Créer compte entreprise">';
                    formHtml += '<a href="Formulaire_Connexion.php" class="hyperlink" type="hyperlink">Vous avez déjà un compte ?</a>';
                    formHtml += '</form>';
                }

                 if (type == 'offre_de_stage') {
                    var formHtml = '';
                    formHtml += '<form method="post" action="../Controler/InsertOffre.php">';
                    formHtml += '<label for="off_nom">Nom de l\'offre :</label>';
                    formHtml += '<input type="text" id="off_nom" name="off_nom"><br>';

                    formHtml += '<label for="competences">Compétences :</label>';
                    formHtml += '<input type="text" id="competences" name="competences"><br>';

                    formHtml += '<label for="localite">Localité(s) :    </label>';
                    formHtml += '<select id="localite" name="localite">'
                    formHtml += '<?php
                                    include('..\Controler\GetVille.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="entreprise">Entreprise :    </label>';
                    formHtml += '<select id="entreprise" name="entreprise">';
                    formHtml += '<?php
                                    include('..\Controler\GetEntreprise.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="off_type_promo">Secteur d\'activité:    </label>';
                    formHtml += '<select id="off_type_promo" name="off_type_promo">';
                    formHtml += '<option value="BTP">BTP</option>'
                    formHtml += '<option value="Informatique">Informatique</option>'
                    formHtml += '<option value="Généraliste">Généraliste</option>'
                    formHtml += '<option value="S3E">S3E</option>'
                    formHtml += '</select><br><br>'

                    formHtml += '<label for="duree">Durée du Stage :</label>'
                    formHtml += '<input type="text" id="duree" name="duree" min="1" max="5"><br>'

                    formHtml += '<label for="remuneration">Rémunération en euro:</label>'
                    formHtml += '<input type="number" id="remuneration" name="remuneration"><br>'

                    formHtml += '<label for="nombre_de_places">Nombre de Places :</label>'
                    formHtml += '<input type="number" id="nombre_de_places" name="nombre_de_places"><br>';


                    formHtml += '<input type="submit" value="Créer compte entreprise">';
                    formHtml += '<a href="connexion.php">Vous avez déjà un compte ?</a>';
                } 
                // Mettre à jour le formulaire dans le document HTML
                var formDiv = document.getElementById('form');
                formDiv.innerHTML = formHtml;
            }
        </script>
    </head>

    <body>
        <div class="colonne">

            <div class="container">
                <div class="header">
                    <a href="../Vue/Bienvenue.php">
                    <img src="..\Image\logo_cesi_ton_stage.jpg" alt="logo">
                </a>
                </div>
                <h1>Menu Création</h1>

                <!-- Liste déroulante "Type de compte" -->
                <form method="post" action="">


                    <label for="type">Type de compte : </label>
                    <select title="Sélectionnez le type de compte à créer" type="type" name="type" id="type"
                        onchange="generateForm()" required>
                        <option value="">Choisir un type</option>
                        <option value="etudiant">Étudiant</option>
                        <option value="pilote">Pilote</option>
                        <option value="entreprise">Entreprise</option>
                        <option value="offre_de_stage">Offre de Stage</option>
                    </select><br><br>

                    <!-- Div pour le formulaire généré dynamiquement -->
                    <div id="form"></div>
                </form><br>
            </div>
    </body>

    </html>