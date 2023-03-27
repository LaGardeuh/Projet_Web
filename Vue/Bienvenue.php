<?php
//
include('..\Controler\verif_connexion.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\CSS\style.css">
    <link rel="stylesheet" type="text/css" href="..\CSS\header_style.css">


</head>

<body>
	<?php include('header.php'); ?>
	<div class="main">
		<h2>Bienvenue sur notre site !</h2>

		<p>Nous sommes une entreprise spécialisée dans la création de sites web modernes et performants. Nous mettons notre expertise à votre service pour vous aider à réaliser vos projets en ligne.</p>

		<h3>Nos services</h3>
		<ul>
			<li>Conception de sites web personnalisés</li>
			<li>Optimisation pour les moteurs de recherche (SEO)</li>
			<li>Création de contenus (textes, images, vidéos)</li>
			<li>Intégration de fonctionnalités avancées (e-commerce, blog, forum, etc.)</li>
			<li>Maintenance et support technique</li>
		</ul>

		<p>Nous travaillons avec une équipe de professionnels passionnés et expérimentés pour vous offrir un service de qualité supérieure. Nous sommes à l'écoute de vos besoins et nous engageons à vous fournir une solution adaptée à votre budget et à vos objectifs.</p>

		<h3>Contactez-nous</h3>
		<p>N'hésitez pas à nous contacter pour discuter de votre projet. Nous sommes disponibles pour répondre à vos questions et vous guider dans toutes les étapes de votre projet web.</p>
		<p><a href="#">Cliquez ici</a> pour accéder à notre formulaire de contact.</p>
	</div>


	<?php include('footer.php'); ?>
</body>

</html>