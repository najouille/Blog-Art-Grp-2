<?php
require_once('../front/assets/vendors/parsedown.php');
require_once('../CLASS_CRUD/article.class.php');
require_once('../CLASS_CRUD/motclearticle.class.php');

if (!isset($_GET['id'])) $_GET['id'] = '17';
$article = new ARTICLE;
$motcle = new MOTCLEARTICLE;
$articleData = $article->get_1Article($_GET['id']);

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


$jsonDataFile = file_get_contents("../front/assets/articles.json");
if ($jsonDataFile === false) {
    // deal with error...
    echo 'error with json';
}
$insolite = json_decode($jsonDataFile, true);

$numArt = "";
$dtCreArt = "";

///
$libTitrArt = $articleData['libTitrArt'];

$libChapoArt = $articleData['libChapoArt'];

$libAccrochArt = $articleData['libAccrochArt'];
$parag1Art = $articleData['parag1Art'];

$libSsTitr2Art = $articleData['libSsTitr2Art'];
$parag2Art = $articleData['parag2Art'];

$parag3Art = $articleData['parag3Art'];


$libConclArt = "";
///
$urlPhotArt1 = "![Ville](blogart/front/assets/image/bordeaux2.jpg)";
$urlPhotArt2 = "";
$urlPhotArt3 = "";
$urlPhotArt4 = "";
$urlPhotArt5 = "";
$urlPhotArt6 = "";
$urlPhotArt7 = "";

$numAngl = "";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../front/includes/commons/headRequired.php') ?>
    <title>Document</title>
    <link rel="stylesheet" href="../front/assets/insolites.css" />
    <link rel="stylesheet" href="../front/assets/navbar.css" />
    <link rel="stylesheet" href="../front/assets/footer.css" />
    <link rel="font" href="../front/assets/fonts/subset-MonumentExtended-Regular.svg" />
</head>

<body>
    <?php
    include('../front/includes/commons/navbar.php')
    ?>

    <img src="../front/assets/image/bordeaux2.jpg" alt="ville" id="banniere" />

    <h1>TOP 3 </h1>
    <h2> des oeuvres les plus insolites de Bordeaux</h2>

    <section class="intro">
        <?php echo $Parsedown->text($libChapoArt) ?>
    </section>

    <div class="tags">
        <?php
        $resultOfAllMotcles = $motcle->get_AllMotClesByArticle($_GET['id']);
        $allMotcle = array_splice($resultOfAllMotcles, 0, 4);
        foreach ($allMotcle as $motcleElm) {
            echo '<div class="etiquette"><h5>' . $motcleElm['libMotCle'] . '</h5></div>';
        }

        ?>
    </div>

    <div class="top1">
        <div class="photol">
            <img src="../front/assets/image/Jaguar.png" alt="jaguar" />
        </div>
        <div class="number_left">
            <img src="../front/assets/image/icones/number1.svg" alt="number" />
        </div>
        <div class="descriptionr">
            <?php
            echo $Parsedown->text($libAccrochArt);
            echo $Parsedown->text($parag1Art);
            ?>
        </div>
    </div>

    <div class="top2">
        <div class="photor">
            <img src="../front/assets/image/statuehome.png" alt="statue" />
        </div>
        <div class="number_right">
            <img src="../front/assets/image/icones/number2.svg" alt="number" />
        </div>
        <div class="descriptionl">
            <?php
            echo $Parsedown->text($libSsTitr2Art);
            echo $Parsedown->text($parag2Art);
            ?>
        </div>
    </div>

    <div class="top3">
        <div class="photol">
            <img src="../front/assets/image/fresque.png" alt="fresque" />
        </div>
        <div class="number_left">
            <img src="../front/assets/image/icones/number3.svg" alt="number" />
        </div>
        <div class="descriptionr">
            <?php
            echo $Parsedown->text($parag3Art);
            ?>
        </div>
    </div>
    <?php
    include('../front/includes/commons/footer.php');
    ?>

</body>

</html>
