<?php
///////////////////////////////////////////////////////////////
//
//  Gestion des CRUD (PDO) - 23 Janvier 2021
//
//  Script  : index1.php 	-		BLOGART21 (Etud)
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/util/utilErrOn.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Gestion des CRUD</title>
	<?php include('./front/includes/commons/headRequired.php') ?>

	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" href="./back/css/back-office.css" />
	<link href="./back/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
	<div class="title">
		<img class='logo' src="./front/assets/image/Townyart.png" alt="logo-townyart">
		<h1>Panneau d'Admin : Gestion des CRUD - BLOGART21</h1>
	</div>

	<div >
		
		<a id="button-admin" class="input-button" href="./BACK/angle/angle.php">Angle </a>
		
		<a id="button-admin" class="input-button" href="./BACK/article/article.php">Article </a>
		
		<a id="button-admin" class="input-button" href="./BACK/comment/comment.php">Commentaire </a>
		
		<a id="button-admin" class="input-button" href="./BACK/commentplus/commentplus.php">Réponse sur Commentaire </a>
		
		<a id="button-admin" class="input-button" href="./BACK/langue/langue.php">Langue</a>
		
		<a id="button-admin" class="input-button" href="./BACK/likeart/likeart.php">Like Article </a>
		
		<a id="button-admin" class="input-button" href="./BACK/likecom/likecom.php">Like Commentaire </a>
		
		<a id="button-admin" class="input-button" href="./BACK/membre/membre.php">Membre </a>
		
		<a id="button-admin" class="input-button" href="./BACK/motcle/motcle.php">Mot-clé </a>
		
		<a id="button-admin" class="input-button" href="./BACK/motclearticle/motclearticle.php">Mot-clé Article </a>
		
		<a id="button-admin" class="input-button" href="./BACK/statut/statut.php">Statut (*)</a>
		
		<a id="button-admin" class="input-button" href="./BACK/thematique/thematique.php">Thématique </a>
		
		<a id="button-admin" class="input-button" href="./BACK/user/user.php">User </a>
	</div>

</body>

</html>