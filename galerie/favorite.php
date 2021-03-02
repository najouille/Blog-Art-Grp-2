<?php

$jsonDataFile = file_get_contents("../front/assets/images.json");
if ($jsonDataFile === false) {
    // deal with error...
    echo 'error with json';
}
$jsonData = json_decode($jsonDataFile, true);
$images = $jsonData['collections'][1]['images'];
// var_dump($images);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../front/includes/commons/headRequired.php'); ?>
    <link rel="stylesheet" href="../front/assets/hzgallery/hzgallery.css" />
    <link rel="stylesheet" href="../front/assets/navbar.css" />
    <link rel="stylesheet" href="../front/assets/footer.css" />
    <link rel="stylesheet" href="../front/assets/master.css" />
</head>

<body>
    <?php include('../front/includes/commons/navbar.php'); ?>
    <main data-scroll-container>
        <div class="content">
            <div class="gallery">
                <?php foreach ($images as $item) {
                ?> <figure class="gallery__item <?= $item['orientation'] == "landscape" ? 'gallery__item_landscape' : '' ?>">
                        <div class="gallery__item-img">
                            <div class="gallery__item-imginner" style="background-image: url(<?= '../front/assets/galerie_images' . $item['url'] ?>)"></div>
                        </div>
                        <figcaption class="gallery__item-caption">
                            <h2 class="gallery__item-title" data-title="<?= $item['name'] ?>" data-scroll data-scroll-speed="1"><?= $item['name'] ?></h2>
                            <p class="gallery__item-tags">

                                <?php
                                foreach ($item['tags'] as $tag) {
                                    echo '<span>' . $tag . '</span>';
                                }
                                ?>

                            </p>
                            <a class="gallery__item-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z" />
                                </svg>
                            </a>
                        </figcaption>
                    </figure><?php

                            } ?>

                <div class="gallery__text">
                    <span class="gallery__text-inner" data-scroll data-scroll-speed="4">Thanks for</span>
                    <span data-scroll data-scroll-speed="1" class="gallery__text-inner">watching</span>
                    <a class="townyart-trademark" data-scroll data-scroll-direction="vertical" data-scroll-speed="1" href="../">TownyArt © 2021</a>
                </div>
            </div>
        </div>
    </main>

    <script src="../front/assets/hzgallery/hzgallery.js"></script>
</body>

</html>