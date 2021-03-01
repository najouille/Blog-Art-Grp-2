<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./front/includes/commons/headRequired.php') ?>
    <link rel="stylesheet" href="./front/assets/profile.css">
    <link rel="stylesheet" href="./front/assets/master.css" />
    <link rel="stylesheet" href="./front/assets/navbar.css" />
    <link rel="stylesheet" href="./front/assets/footer.css" />
</head>

<body>
    <?php include('./front/includes/commons/navbar.php') ?>
    <div class="top-text">
        <h2>Mon profil</h2><br>
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
                        <input type="text" disabled value="Eymeric" />
                        <h3 class="titre-bas">Pseudo</h3>
                        <input type="text" disabled value="Barre" />
                    </div>
                    <div class="block2-droite block-data-user">
                        <h3>Prénom</h3>
                        <input type="text" disabled value="Eymeric" />
                        <h3 class="titre-bas">Date de naissance</h3>
                        <input type="text" disabled value="Barre" />
                    </div>
                </div>
                <a class="button1" href="profile-edit.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                    </svg>
                    <span>
                        Modifier
                    </span>
                </a>
            </div>
            <hr>
            <div class="left-profile email-elm">
                <div class="block-user">
                    <div class="icon-data">
                        <?php include('./front/assets/image/icones/email.svg') ?>
                    </div>
                    <div class="block1-left block-data-user">
                        <h3>Votre adresse email</h3>
                        <input type="text" disabled value="matt@gmail.com" />
                        
                    </div>
                    
                </div>
                <a class="button1" href="profile-edit.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                    </svg>
                    <span>
                        Modifier
                    </span>
                </a>
            </div>
            <hr>
            <div class="left-profile email-elm">
                <div class="block-user">
                    <div class="icon-data">
                        <?php include('./front/assets/image/icones/password.svg') ?>
                    </div>
                    <div class="block1-left block-data-user">
                        <h3>Votre mot de passe</h3>
                        <input type="text" disabled value="************" />
                        
                    </div>
                    
                </div>
                <a class="button1" href="profile-edit.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                    </svg>
                    <span>
                        Modifier
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