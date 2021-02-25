<!DOCTYPE html>
<html lang="fr">

<head>
	<?php include('./front/includes/commons/headRequired.php') ?>
	<title>Document</title>
	<link rel="stylesheet" href="./front/assets/contact.css" />
</head>

<body>
<?php
    include('./front/includes/commons/navbar.php')
    ?>
	<div id="intro">
		<h1>Contact</h1>
		<p> N'hésitez pas à nous contacter pour plus d’informations</p>
	</div>
	<hr>
	<div id="formimg">
		<div id="img">
			<img src="front/assets/image/Statue_portrait.png" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
		</div>
		<div id="formulaire">
			<form>
				<div class="name">
					<h3>Nom</h3>
				</div>
				<input type="text" name="name" id="name" placeholder="Insérez votre Nom ..." />
				<br>

				<div>
					<h3>Prénom</h3>
				</div>
				<input type="text" name="firstname" id="firstname" placeholder="Insérez votre Prénom ..." />
				<br>

				<div>
					<h3>E-mail</h3>
				</div>
				<input type="email" name="email" id="email" placeholder="Insérez votre adresse mail ..." />
				<br>


				<div>
					<h3>Message</h3>
				</div>
				<textarea name="body" id="body" cols="30" rows="10" placeholder="Insérez votre message ..."></textarea>
				<br>
				<button name="button">Envoyer</button>
			</form>
		</div>
	</div>



</body>

</html>

</html>