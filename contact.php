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
		<div id="line">
			<img src="front/assets/image/Line 3.svg" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
		</div>
	</div>
	<div id="formimg">
		<div id="formulaire">
			<form>
				<div>
					<label for="name">Nom</label>
				</div>
				<input type="text" name="name" id="name" />
				<br>

				<div>
					<label for="firstname">Prénom</label>
				</div>
				<input type="text" name="firstname" id="firstname" />
				<br>

				<div>
					<label for="email">Email</label>
				</div>
				<input type="email" name="email" id="email" />
				<br>


				<div>
					<label for="body">Message</label>
				</div>
				<textarea name="body" id="body" cols="30" rows="10"></textarea>
				<br>
				<button name="button">Envoyer</button>
			</form>
		</div>
		<div id="image">
		<img src="front/assets/image/Statue_portrait.png" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
	</div>
	</div>
	


</body>

</html>

</html>