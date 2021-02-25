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
    <div class="container-profile">
        <div class="left-profile">
            <div class="top-profile">
                <div class="logo-profile logo-before"><?php include('../../assets/image/icones/user.svg') ?></div>
                <div class="top-container">
                    <div class="infos-profile">
                        <div class="nom-pseudo">
                            <h3>Nom</h3>
                            <p>Barre</p>
                            <h3>Pseudo</h3>
                            <p>eymeric-barre</p>
                        </div>
                        <div class="prenom-date">
                            <h3>Prénom</h3>
                            <p>Eymeric</p>
                            <h3>Date de naissance</h3>
                            <p>10/05/1990</p>
                        </div>
                    </div>
                    <div class="modifier-profile" href="" svg src="../../assets/image/icones/edit-profile.svg">
                        <h3>Modifier</h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class="email-profile">
                <div class="logo-email logo-before"><?php include('../../assets/image/icones/email.svg') ?></div>
                <div class="middle-container">
                    <div class="email-profile">
                        <h3>Votre adresse e-mail</h3>
                        <p>eymeric.barre@gmail.com</p>
                    </div>
                    <div class="modifier-profile" href="" svg src="../../assets/image/icones/edit-profile.svg">
                        <h3>Modifier</h3>
                    </div>
                </div>
            </div>
            <hr>
            <div class="password-profile">
                <div class="logo-password logo-before"><?php include('../../assets/image/icones/password.svg') ?></div>
                <div class="bottom-container">
                    <div class="password-set">
                        <h3>Votre mot de passe</h3>
                        <p>***********</p>
                    </div>
                    <div class="modifier-profile" href="" svg src="../../assets/image/icones/edit-profile.svg">
                        <h3>Modifier</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-profile"><img class="profile-img" src="../../assets/image/profil-picture.jpg"></div>
    </div>
</body>
