<!DOCTYPE html>
<html lang="fr">

<head>
	<?php include('./front/includes/commons/headRequired.php') ?>
	<title>Document</title>
	<link rel="stylesheet" href="./front/assets/contact.css" />
</head>

<body>
	<div id="intro">
		<h1>Contact</h1>
		<p> N'hésitez pas à nous contacter pour plus d’informations</p>
		<img src="front/assets/image/Line 3.svg" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
	</div>
	<div id="image">
		<img src="front/assets/image/Statue_portrait.png" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
	</div>

	<div id="formulaire">
		<form>
			<label for="name">Nom</label>
			<input type="text" name="name" id="name" />
			<br>

			<label for="firstname">Prénom</label>
			<input type="text" name="firstname" id="firstname" />
			<br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" />
			<br>


			<label for="body">Message</label>
			<textarea name="body" id="body" cols="30" rows="10"></textarea>
			<br>
		</form>
	</div>
</body>

</html>

</html>