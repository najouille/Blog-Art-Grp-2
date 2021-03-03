<?php
require_once('../front/assets/vendors/parsedown.php');
require_once('../CLASS_CRUD/article.class.php');
require_once('../CLASS_CRUD/motclearticle.class.php');

if (!isset($_GET['id'])) $_GET['id'] = '16';
$article = new ARTICLE;
$motcle = new MOTCLEARTICLE;
$articleData = $article->get_1Article($_GET['id']);

$Parsedown = new ParsedownExtraPlugin();
$Parsedown->linkAttributes = function($Text, $Attributes, &$Element, $Internal) {
    if (!$Internal) {
        return [
            'rel' => 'nofollow',
            'target' => '_blank'
        ];
    }
    return [];
};
$numArt = "";
$dtCreArt = "";

///
$libTitrArt = "FREDERIC DUCOS";

$libChapoArt = $articleData['libChapoArt'];

$libAccrochArt = $articleData['libAccrochArt'];
$libSsTitr1Art = $articleData['libSsTitr2Art'];
$parag1Art = $articleData['parag1Art'];

$libSsTitr2Art = $articleData['libSsTitr2Art'];
$parag2Art = $articleData['parag2Art'];

$parag3Art = $articleData['parag3Art'];
$libConclArt = $articleData['libConclArt'];
///
$urlPhotArt = "";
$urlPhotArt = "";
$numAngl = "";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include('../front/includes/commons/headRequired.php') ?>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../front/assets/master.css" />
  <link rel="stylesheet" href="../front/assets/navbar.css" />
  <link rel="stylesheet" href="../front/assets/portrait.css" />
  <link rel="stylesheet" href="../front/assets/footer.css" />
  <link rel="stylesheet" href="../front/assets/commentaire.css" />
</head>

<body>
  <?php include('../front/includes/commons/navbar.php') ?>
  <main class="portrait-container">
    <section class="introduction">
      <h1 class="portrait-container">
        <?php
        echo $Parsedown->line($libTitrArt);
        ?>
      </h1>
      <p id="intro">
        <?php
        echo $Parsedown->text($libChapoArt);
        ?>
      <div class="tags">
        <h5>architecture</h5>
        <h5>photographie</h5>
        <h5>urbain</h5>
        <h5>art</h5>
      </div>
      <div class="button">
        <a href="https://www.fredericducos.com" id="Voir ses photos" target="blank">Voir ses photos</a>
      </div>
    </section>
    <div class="bandeau">
      <div class="portrait">
        <img src="../front/assets/image/portraitfredericducos.png" alt="frederic ducos" width="250" id="frederic" />
      </div>
      <?php
      echo $Parsedown->text($libAccrochArt);
      ?>
      <div class="quote">
        <img src="../front/assets/image/quote.svg" alt="" width="190" />
      </div>
    </div>
    <section class="article">
      <?php
      echo $Parsedown->text($libSsTitr1Art);
      echo $Parsedown->text($parag1Art);
      echo $Parsedown->text($libSsTitr2Art);
      echo $Parsedown->text($parag2Art);
      echo $Parsedown->text($parag3Art);
      ?>
      <br>
      <br>
      <?php
      echo $Parsedown->text($libConclArt);
      ?>

      <h6>Le 27/01/2021, Bordeaux</h6>
      <div class="social">
        <a class="social-button" href="https://www.instagram.com/fredericducosphotographer/" target="blank">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <rect x="4" y="4" width="16" height="16" rx="4" />
            <circle cx="12" cy="12" r="3" />
            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
          </svg>
          <span>@fredericducosphotographer</span>
        </a>
        <a class="social-button" href="https://www.fredericducos.com" target="blank">
          <svg width="44" height="44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 38.5c9.113 0 16.5-7.387 16.5-16.5S31.113 5.5 22 5.5 5.5 12.887 5.5 22 12.887 38.5 22 38.5zM6.6 16.5h30.8M6.6 27.5h30.8M21.083 5.5a31.166 31.166 0 000 33M22.916 5.5a31.167 31.167 0 010 33" stroke="currentColor" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round" />
          </svg>

          <span>www.fredericducos.com</span>
        </a>

        <!-- <a class="website">
            <a href="https://www.fredericducos.com/" target="blank">
              <img
                src="./front/assets/image/internet.svg"
                alt="website"
                width="34"
                id="internet"
            /></a>
            <a href="" id="website" class="links">www.fredericducos.com</a>
          </a> -->
      </div>
    </section>
    <div class="oeuvres">
      <h4>Les oeuvres du photographe</h4>
      <div class="galerie">
        <img src="../front/assets/image/eiffel.jpg" alt="tour-eiffel" id="eiffel" />
        <img src="../front/assets/image/quais.jpg" alt="quais" id="quais" />
        <a href="https://www.fredericducos.com/" id="portfolio" target="blank">Découvrir son portfolio</a>
        <img src="../front/assets/image/bourse2.jpg" alt="bourse2" id="bourse2" />
        <img src="../front/assets/image/arene.jpg" alt="arene" id="arene" />
        <img src="../front/assets/image/bourse1.jpg" alt="bourse1" id="bourse1" />
      </div>
    </div>
  </main>
  <?php
  include('../commentaire.php');

  include('../front/includes/commons/footer.php');
  ?>
</body>

</html>

</html>