<?php

$page = "";
if (strpos($_SERVER['PHP_SELF'], 'blog/') !== false) {
    $page = "blog";
} else if (strpos($_SERVER['PHP_SELF'], 'index.php') !== false) {
    $page = "index";
}
?>


<div class="header">
    <img class="logo-navbar" src="<?= $dir . '/front/assets/image/Townyart-blanc (2).svg' ?>" alt="">
    <div class="navbar-content-right">
        <a href="<?= $dir . '/' ?>" class="bouton-space <?= $page == "index" ? 'active' : '' ?>">
            ACCUEIL
        </a>
        <a href="<?= $dir . '/blog' ?>" class="bouton-space <?= $page == "blog" ? 'active' : '' ?>">
            BLOG
        </a>
        <a href="<?= $dir . '/galerie' ?>" class="bouton-space">
            GALERIE
        </a>
        <a href="#" class="bouton-space">
            CONTACT
        </a>
        <a href="#" class="icon-right bouton-space">

            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000000" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"></circle>
                <path d="M63.79905,199.37405a72.02812,72.02812,0,0,1,128.40177-.00026" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path>
            </svg>
        </a>
    </div>

</div>
