<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<head>
<?php
    include('./front/includes/commons/navbar.php');
    ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./front/assets/master.css" /><link rel="stylesheet" href="./front/assets/navbar.css" />
  <link rel="stylesheet" href="./front/assets/test.css" />
  <link rel="stylesheet" href="./front/assets/profile-edit.css" />
</head>

<body>
    

  <div class="top-text">
    <h2>Mon profil</h2>
    <br />
    <p>N'hésitez pas à modifier vos coordonnées ci-dessous pour que votre compte TownyArt soit parfaitement à jour.</p>
  </div>
  <div class="left-right">
        <div class="part1">
            <div class="left-profile">
                <div class="block-user">
                    <div class="icon-data">
                        <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
                            <rect width="256" height="256" fill="none"></rect>
                            <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                            <circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                            <path d="M63.79905,199.37405a72.02812,72.02812,0,0,1,128.40177-.00026" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
                        </svg>
                    </div>
                    <div class="block1-left block-data-user">
                        <h3>Nom</h3>
                        <input class="input-profil" type="text" placeholder="Votre Nom ..." required />
                        <h3 class="titre-bas">Pseudo</h3>
                        <input class="input-profil" type="text" placeholder="Votre Pseudo ..." required />
                    </div>
                    <div class="block2-droite block-data-user">
                        <h3>Prénom</h3>
                        <input class="input-profil" type="text" placeholder="Votre Prénom ..." required />
                        <h3 class="titre-bas">Date de naissance</h3>
                        <input class="input-profil" type="text" placeholder="JJ/MM/AAAA" required />
                    </div>
                </div>
                <a class="valider-profile" href="profile.php">
                    <span>
                        Valider
                    </span>
                </a>
            </div>
            <hr class="trait">
            <div class="left-profile email-elm">
                <div class="block-user">
                    <div class="icon-data">
                        <?php include('./front/assets/image/icones/email.svg') ?>
                    </div>
                    <div class="block1-left block-data-user">
                        <h3>Votre adresse email</h3>
                        <input class="input-profil" type="text" placeholder="Votre adresse mail ..." required />
                    </div>
                </div>
                <a class="valider-profile" href="profile.php">
                    <span>
                        Valider
                    </span>
                </a>
            </div>
            <hr class="trait">
            <div class="left-profile email-elm">
                <div class="block-user">
                    <div class="icon-data">
                        <?php include('./front/assets/image/icones/password.svg') ?>
                    </div>
                    <div class="block1-left block-data-user">
                        <h3>Votre mot de passe</h3>
                        <input class="input-profil" type="text" placeholder="Votre mot de passe actuel ..." required />
                        <input class="input-profil" type="text" placeholder="Votre nouveau mot de passe ..." required />
                        <a class ="mdpoublié" href="mdp.php">Mot de passe oublié ?</a>
                    </div>
                    
                </div>
                <a class="valider-profile" href="profile.php">
                    <span>
                        Valider
                    </span>
                </a>
            </div>
        </div>
        <div><img class="right-profile" src="front/assets/image/profil-picture.jpg"></div>
    </div>

    <?php
    include('./front/includes/commons/footer.php');
    ?>
  
</body>

</html>
