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
        <div>
        <div class="right-profile"><img src="../../assets/image/profil-picture.jpg"></div>
    <svg class="premier-logo" xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="#000000" viewBox="0 0 256 256">
    <rect width="256" height="256" fill="none"></rect>
    <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
    <circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
    <path d="M63.79905,199.37405a72.02812,72.02812,0,0,1,128.40177-.00026" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
</svg>
            <h3>Nom</h3>
            <input type="text" disabled value="Eymeric" />
            <h3 class="espace">Pseudo</h3>
            <input type="text" disabled value="Barre" />
        </div>
        <div>
            <h3>Prénom</h3>
            <input type="text" disabled value="Eymeric" />
            <h3>Date de naissance</h3>
            <input type="text" disabled value="Barre" />
        </div>
        <button>Modifier</button>
        <hr>
    </div>


</body>







