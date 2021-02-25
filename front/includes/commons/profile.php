<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../commons/headRequired.php') ?>
    <link rel="stylesheet" href="../../assets/test.css">
    <link rel="stylesheet" href="../../assets/profile.css">
    <link rel="stylesheet" href="../../assets/master.css" />
</head>

<body>
    <?php include('../commons/navbar.php') ?>
    <div class="top-text">
        <h2>Mon profil</h2><br>
        <p>N'hésitez pas à modifier vos coordonnées ci-dessous pour que votre compte TownyArt soit parfaitement à jour.</p>
    </div>
    <div class="left-right">
        <div class="left-profile">
            <svg class="premier-logo" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <path d="M63.79905,199.37405a72.02812,72.02812,0,0,1,128.40177-.00026" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            </svg>

            <div class="block1-left">
                <h3>Nom</h3>
                <input type="text" disabled value="Eymeric" />
                <h3 class="titre-bas">Pseudo</h3>
                <input type="text" disabled value="Barre" />
            </div>
            <div class="block2-droite">
                <h3>Prénom</h3>
                <input type="text" disabled value="Eymeric" />
                <h3 class="titre-bas">Date de naissance</h3>
                <input type="text" disabled value="Barre" />
            </div>
            <button class="button1">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                    <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                </svg>Modifier</button>
        </div>
        <div><img class="right-profile" src="../../assets/image/profil-picture.jpg"></div>
        <hr>
    </div>


</body>