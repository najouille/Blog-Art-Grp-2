<!DOCTYPE html>
<html lang="fr">

<head>
	<?php include('./front/includes/commons/headRequired.php') ?>
	<title>Document</title>
	<link rel="stylesheet" href="./front/assets/master.css" />
	<link rel="stylesheet" href="./front/assets/master.css" />
	<link rel="stylesheet" href="./front/assets/contact.css" />
	<link rel="stylesheet" href="./front/assets/navbar.css" />
	<link rel="stylesheet" href="./front/assets/footer.css" />
</head>

<body>
	<?php include('./front/includes/commons/navbar.php') ?>
	<div class="contact-container">
		<div id="intro">
			<h1>Contact</h1>
			<p> N'hésitez pas à nous contacter pour plus d’informations</p>
		</div>
		<hr>
		<div id="formimg">

			<div id="formulaire">
				<form>
					<div>
						<h3>Nom</h3>
					</div>
					<input class="contact-input" type="text" name="name" id="name" placeholder="Insérez votre Nom ..." required/>
					<br>

					<div>
						<h3>Prénom</h3>
					</div>
					<input class="contact-input" type="text" name="firstname" id="firstname" placeholder="Insérez votre Prénom ..." required/>
					<br>

					<div>
						<h3>E-mail</h3>
					</div>
					<input class="contact-input" type="email" name="email" id="email" placeholder="Insérez votre adresse mail ..." required/>
					<br>

					<div>
						<h3>Message</h3>
					</div>
					<textarea class="contact-input-message" type="text" name="body" id="body" cols="30" rows="10" minlength="15" placeholder="Insérez votre message ..." required></textarea>
					<br>

					<button class="contact-button" type="submit" name="button">Envoyer</button>
				</form>
			</div>
			<div id="img">
				<img src="front/assets/image/statuehome.png" alt="[ABC Tech posssède 75% de part de marché et XYZ 25%]" />
			</div>
		</div>

	</div>
	<?php
    include('./front/includes/commons/footer.php');
    ?>
         
</body>

</html>

</html>
