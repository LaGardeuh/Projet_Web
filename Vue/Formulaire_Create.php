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
            $h1 = 'Choisir le type de compte';
        }
        ?> -->
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
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

                    formHtml += '<label for="promo">Promotion :</label>';
                    formHtml += '<select name="promo" id="promo">';
                    formHtml += '<?php
                                    include('..\Controler\GetPromotion.php');
                                    ?>'
                    formHtml += '</select><br>';

                    formHtml += '<label for="mdp">Mot de passe :</label>';
                    formHtml += '<input type="password" name="mdp" id="mdp" required><br>';
                    formHtml += '<input type="submit" value="Inscription">';
                }


                if (type == 'pilote') {
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
                }

                if (type == 'entreprise') {
                    var formHtml = '';
                    formHtml += '<label for="nom_entreprise">Nom de l\'entreprise:</label>';
                    formHtml += '<input type="text" id="nom_entreprise" name="nom_entreprise"><br>';

                    formHtml += '<label for="localite">Localité:</label>';
                    formHtml += '<select id="localite" name="localite">'
                    formHtml += '<?php
                                    include('..\Controler\GetVille.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="secteur_activite">Secteur d\'activité:</label>';
                    formHtml += '<select id="secteur_activite" name="secteur_activite">';
                    formHtml += '<option value="BTP">BTP</option>'
                    formHtml += '<option value="Info">Informatique</option>'
                    formHtml += '<option value="Generaliste">Généraliste</option>'
                    formHtml += '<option value="S3E">S3E</option>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="nombre_stagiaires">Nombre de stagiaires:</label>'
                    formHtml += '<input type="number" id="nombre_stagiaires" name="nombre_stagiaires"><br>';

                    formHtml += '<label for="confiance_pilote">Confiance du pilote (1-5):</label>'
                    formHtml += '<input type="number" id="confiance_pilote" name="confiance_pilote" min="1" max="5"><br>'

                    formHtml += '<input type="submit" value="Créer compte entreprise">';
                }

                if (type == 'offre_de_stage') {
                    var formHtml = '';
                    formHtml += '<label for="competences">Compétences :</label>';
                    formHtml += '<input type="text" id="competences" name="competences"><br>';

                    formHtml += '<label for="localite">Localité(s) :</label>';
                    formHtml += '<select id="localite" name="localite">'
                    formHtml += '<?php
                                    include('..\Controler\GetVille.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="entreprise">Entreprise :</label>';
                    formHtml += '<select id="entreprise" name="entreprise">';
                    formHtml += '<?php
                                    include('..\Controler\GetEntreprise.php');
                                    ?>'
                    formHtml += '</select><br>'

                    formHtml += '<label for="duree">Durée du Stage :</label>'
                    formHtml += '<input type="text" id="duree" name="duree" min="1" max="5"><br>'

                    formHtml += '<label for="remuneration">Rémunération :</label>'
                    formHtml += '<input type="text" id="remuneration" name="remuneration"><br>'

                    formHtml += '<label for="nombre_de_places">Nombre de Places :</label>'
                    formHtml += '<input type="number" id="nombre_de_places" name="nombre_de_places"><br>';


                    formHtml += '<input type="submit" value="Créer compte entreprise">';
                }
                // Mettre à jour le formulaire dans le document HTML
                var formDiv = document.getElementById('form');
                formDiv.innerHTML = formHtml;
            }
        </script>
    </head>

    <body>
        <h1>Choisir le type de compte</h1>

        <!-- Liste déroulante "Type de compte" -->
        <label for="type">Type de compte :</label>
        <select name="type" id="type" onchange="generateForm()" required>
            <option value="">Choisir un type</option>
            <option value="etudiant">Étudiant</option>
            <option value="pilote">Pilote</option>
            <option value="entreprise">Entreprise</option>
            <option value="offre_de_stage">Offre de Stage</option>
        </select><br>

        <!-- Div pour le formulaire généré dynamiquement -->
        <div id="form"></div>

        <!-- <?php

                $QueryGetVille = $pdo->query("SELECT ville_ville from ville where ville_centre = 1");
                while ($donnees = $QueryGetVille->fetch()) {
                ?>
            <p>
                <strong>Jeu</strong> : <?php echo $donnees['ville_ville']; ?><br />
            </p>
        <?php
                }
                $QueryGetVille->closeCursor(); // Termine le traitement de la requête
        ?> -->
    </body>

    </html>