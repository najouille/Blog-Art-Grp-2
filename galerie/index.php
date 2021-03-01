<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="../front/assets/gallerie.css" />
    <link rel="stylesheet" href="../front/assets/master.css" />
    <link rel="stylesheet" href="../front/assets/navbar.css" />
    <link rel="stylesheet" href="../front/assets/footer.css" />
</head>

<body class="style">
    <?php include('../front/includes/commons/navbar.php') ?>
    <h1> Les galeries Towny'Art </h1>
    <div class="img-gallerie">
        <a href="./all.php" class="gradient" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">TOUTES </span>
            <span class="texte-bas"> les photos</span>
        </a>
        <a class="gradient2" href="./favorite.php" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">VOS PHOTOS </span>
            <span class="texte-bas"> favorite</span>
        </a>
        <a class="gradient3" href="./tendance.php" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">TENDANCE </span>
            <span class="texte-bas"> du moment</span>
        </a>


    </div>
    <script type="text/javascript" src="../front/assets/vendors/vanilla-tilt.min.js"></script>
    <?php
    include('../front/includes/commons/footer.php');
    ?>
</body>

</html>