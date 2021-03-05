<?php
require_once __DIR__ .  '/front/assets/vendors/parsedown.php';
require_once __DIR__ .  '/CLASS_CRUD/article.class.php';
require_once __DIR__ .  '/CLASS_CRUD/motclearticle.class.php';

$sitemapMd = "
# Plan du site

- [Home](home.php)
- [Administration](admin.php)
- [Blog](./blog)
- [Galerie](./galerie)
- [Mentions Légales](mentionslegales.php)
- [CGU](C.G.U.php)

";
$Parsedown = new ParsedownExtraPlugin();
$Parsedown->linkAttributes = function ($Text, $Attributes, &$Element, $Internal) {
    if (!$Internal) {
        return [
            'rel' => 'nofollow',
            'target' => '_blank'
        ];
    }
    return [];
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include "./front/includes/commons/headRequired.php"; ?>

    <link rel="stylesheet" href="./front/assets/master.css" />
    <link rel="stylesheet" href="./front/assets/master.css" />
    <link rel="stylesheet" href="./front/assets/contact.css" />
    <link rel="stylesheet" href="./front/assets/navbar.css" />
    <link rel="stylesheet" href="./front/assets/footer.css" />
</head>

<body>
    <?php include "./front/includes/commons/navbar.php"; ?>
    <div class="sitemap">
        <?= $Parsedown->text($sitemapMd) ?>
    </div>
    <?php include "./front/includes/commons/footer.php"; ?>

</body>

</html>

</html>