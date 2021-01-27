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
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style type="text/css">
				div {
					padding-top: 60px;
					padding-bottom: 40px;
					margin-bottom: 0px;
					margin-left: 60px;
				}
        span {
            background-color: yellow;
        }
    </style>
</head>
<body>
	<br />
	<h1>Panneau d'Admin : Gestion des CRUD - BLOGART21</h1>
	<small><span><i>CRUD fini et valide (reste à tester et à intégrer)</i></span></small>
	<br /><hr />
	<div>
	Gestion du CRUD :
	<a href="./BACK/angle/angle.php">Angle </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/article/article.php">Article </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/comment/comment.php">Commentaire </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/commentplus/commentplus.php">Réponse sur Commentaire </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/langue/langue.php">Langue </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/likeart/likeart.php">Like Article </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/likecom/likecom.php">Like Commentaire </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/membre/membre.php">Membre </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/motcle/motcle.php">Mot-clé </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/motclearticle/motclearticle.php">Mot-clé Article </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/statut/statut.php"><span>Statut (*)</span></a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/thematique/thematique.php">Thématique </a>
	<br /><br />
	Gestion du CRUD :
	<a href="./BACK/user/user.php">User </a>
	</div>
	<br>
	<hr>
	<h3><i>- - Etudiants - -</i></h3>
<?php
require_once __DIR__ . '/footer.php';
?>
</body>
</html>
