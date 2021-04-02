<?php
$page = "";
$pathElm = "";


$here = $_SERVER['PHP_SELF'];
if (strpos($here, 'blog/') !== false) {
  $page = "blog";
  $pathElm = "../";
} else if (strpos($here, 'home.php') !== false) {
  $page = "home";
  $pathElm = "./";
} else if (strpos($here, 'insolites.php') !== false) {
  $page = "insolites";
  $pathElm = "./";
} else if (strpos($here, 'sitemap.php') !== false) {
  $page = "sitemap";
  $pathElm = "./";
} else if (strpos($here, 'contact.php') !== false) {
  $page = "contact";
  $pathElm = "./";
} else if (strpos($here, 'connexion.php') !== false) {
  $page = "connexion";
  $pathElm = "./";
} else if (strpos($here, 'profile.php') !== false) {
  $page = "profil";
  $pathElm = "./";
} else if (strpos($here, 'mdp.php') !== false) {
  $page = "mdp";
  $pathElm = "./";
} else if (strpos($here, 'galerie') !== false) {
  $page = "galerie";
  $pathElm = "../";
} else if (strpos($here, 'blog') !== false) {
  $page = "blog";
  $pathElm = "../";
} else if (strpos($here, 'contact') !== false) {
  $page = "contact";
  $pathElm = "./";
}

$checkMainPage = $page == "home" || $page == "insolites" || $page == "mdp" || $page == "contact" || $page == "connexion" || $page == "profil" || $page == "sitemap";
$imageResolver = $checkMainPage ? "./front/assets/image/Townyart-blanc (2).svg" :  "../front/assets/image/Townyart-blanc (2).svg";
?>


<footer>

  <div class="line-top">
    <hr class="right" />
    <img class="footer-logo" src="<?= $imageResolver ?>" alt="">

    <hr class="left" />
  </div>
  <div class="footer-top-section">
    <div class="footer-left-section">
      <!-- SOCIAL NETWORK -->
      <div class="social-network">
        <h4 class="title-network">Suivez nous sur :</h4>
        <div class="social-network-icon">
          <a href="https://www.facebook.com/TownyArt">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-network" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg></a><a href="https://twitter.com/ArtTowny"><svg xmlns="http://www.w3.org/2000/svg" class="icon-network" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg></a><a href="https://www.pinterest.fr/townyartblog/_created/"><svg xmlns="http://www.w3.org/2000/svg" class="icon-network" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="8" y1="20" x2="12" y2="11" />
              <path d="M10.7 14c.437 1.263 1.43 2 2.55 2c2.071 0 3.75 -1.554 3.75 -4a5 5 0 1 0 -9.7 1.7" />
              <circle cx="12" cy="12" r="9" />
            </svg></a><a href="https://www.instagram.com/townyart/?hl=fr"><svg xmlns="http://www.w3.org/2000/svg" class="icon-network" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <rect x="4" y="4" width="16" height="16" rx="4" />
              <circle cx="12" cy="12" r="3" />
              <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg></a>
        </div>
      </div>
      <!-- NEWSLETTER -->
      <div class="newsletter">
        <form target="_blank" action="https://formsubmit.co/clement.calles@mmibordeaux.com" method="post">
          <h3 class="name">Newsletter</h3>
          <input class="footer-input" type="email" name="email" placeholder="Votre adresse mail ..." required /><button type="submit" class="submit-button">Je m'inscris</button>
        </form>
      </div>

    </div>
    <!-- NAVBAR -->
    <div class="navbar">
      <a href="<?= $pathElm . "home" ?>" <?= $page == "home" ? 'active' : '' ?>>ACCUEIL</a>
      <a href="<?= $pathElm . "blog" ?>" <?= $page == "blog" ? 'active' : '' ?>>BLOG</a>
      <a href="<?= $pathElm . "galerie" ?>" <?= $page == "galerie" ? 'active' : '' ?>>GALERIE</a>
      <a href="<?= $pathElm . "contact" ?>" <?= $page == "contact" ? 'active' : '' ?>>CONTACT</a>
    </div>
  </div>
  <div class="footer-bottom-section">
    <div class="footer-flex">
      <a href="<?= $pathElm . "mentionslegales.php" ?>">Mentions légales</a>
      <span class="vertical-line"></span>
      <a href="<?= $pathElm . "C.G.U.php" ?> ">Conditions Générales d'Utilisation</a>
    </div>
  </div>
</footer>

</html>