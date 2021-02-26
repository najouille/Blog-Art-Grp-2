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

$checkMainPage = $page == "home" || $page == "insolites" || $page == "mdp" || $page == "contact" || $page == "connexion" || $page == "profil";
$imageResolver = $checkMainPage ? "./front/assets/image/Townyart-blanc (2).svg" :  "../front/assets/image/Townyart-blanc (2).svg";


?>


<div class="header">
    <!-- <pre style="color:white">
    // $_SERVER['PHP_SELF']
    </pre>
    <pre style="color:white">
      //$page 
    </pre> -->
    <a href="<?= $pathElm . "home.php" ?>" class="bouton-space <?= $page == "home" ? 'active' : '' ?>">
        <img class="logo-navbar" src="<?= $imageResolver ?>" alt="">
    </a>
    <div class=" navbar-content-right">
        <a href="<?= $pathElm . "home" ?>" class="bouton-space <?= $page == "home" ? 'active' : '' ?>">
            ACCUEIL
        </a>
        <a href="<?= $pathElm . "blog" ?>" class="bouton-space <?= $page == "blog" ? 'active' : '' ?>">
            BLOG
        </a>
        <a href="<?= $pathElm . "galerie" ?>" class="bouton-space <?= $page == "galerie" ? 'active' : '' ?>">
            GALERIE
        </a>
        <a href="<?= $pathElm . "contact" ?>" class="bouton-space <?= $page == "contact" ? 'active' : '' ?>"">
            CONTACT
        </a>
        <a href=" ../../../BlogArt/connexion.php" class="icon-right bouton-space">

            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <path d="M63.79905,199.37405a72.02812,72.02812,0,0,1,128.40177-.00026" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            </svg>
        </a>
    </div>

</div>