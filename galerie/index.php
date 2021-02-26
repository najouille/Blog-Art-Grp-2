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
        <div class="gradient" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">TOUTES </span>
            <span class="texte-bas"> les photos</span>
        </div>
        <div class="gradient2" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">VOS PHOTOS </span>
            <span class="texte-bas"> favorite</span>
        </div>
        <div class="gradient3" data-tilt data-tilt-speed="3000" data-tilt-max="20" data-tilt-glare="true" data-tilt-perspective="1200" data-tilt-max-glare="0.2">
            <span class="texte-haut">TENDANCE </span>
            <span class="texte-bas"> du moment</span>
        </div>


    </div>
    <script type="text/javascript" src="https://unpkg.com/vanilla-tilt@1.7.0/dist/vanilla-tilt.min.js"></script>
    <?php
    include('../front/includes/commons/footer.php');
    ?>
</body>

</html>