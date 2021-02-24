<!DOCTYPE html>
<html lang="en">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./front/assets/master.css" />
  <link rel="stylesheet" href="../../assets/test.css" />
  <link rel="stylesheet" href="../../assets/profile-edit.css" />
</head>

<body>
  <div class="top-text">
    <h2>Mon profil</h2>
    <br />
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
              <input type="text" name="nom" placeholder="Insérez votre nom ..." required />
              <h3>Pseudo</h3>
              <input type="text" name="pseudo" placeholder="Choisissez un pseudo ..." required />
            </div>
            <div class="prenom-date">
              <h3>Prénom</h3>
              <input type="text" name="prenom" placeholder="Insérez votre prénom ..." required />
              <h3>Date de naissance</h3>
              <input type="text" name="date" placeholder="JJ/MM/AAAA" required />
            </div>
          </div>
          <a class="valider-profile" href="">
            <h3>Valider</h3>
          </a>
        </div>
      </div>
      <hr />
      <div class="email-profile">
        <div class="logo-email logo-before"><?php include('../../assets/image/icones/email.svg') ?></div>
        <div class="middle-container">
          <div class="email-profile">
            <h3>Votre adresse e-mail</h3>
            <input type="text" name="mail" placeholder="Insérez votre adresse mail ..." required />
          </div>
          <a class="valider-profile" href="">
            <h3>Valider</h3>
          </a>
        </div>
      </div>
      <hr />
      <div class="password-profile">
        <div class="logo-password logo-before"><?php include('../../assets/image/icones/password.svg') ?></div>
        <div class="bottom-container">
          <div class="password-set">
            <h3>Modifier votre mot de passe</h3>
            <input type="text" name="mdp" placeholder="Mot de passe actuel ..." required />
            <input type="text" name="mdp" placeholder="Nouveau mot de passe actuel ..." required />
            <a class="mdpoublié" href="">Mot de passe oublié ?</a>
          </div>
          <a class="valider-profile" href="">
            <h3>Valider</h3>
          </a>
        </div>
      </div>
    </div>
    <div class="right-profile"><img class="profile-img" src="../../assets/image/profil-picture.jpg" /></div>
  </div>
</body>

</html>
