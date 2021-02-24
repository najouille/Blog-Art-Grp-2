<?php

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
include __DIR__ . '/initMotCle.php';

$supprImpossible = false;
$deleted = false;
if (!isset($_GET['id'])) $_GET['id'] = '';

require_once __DIR__ . '/../../CLASS_CRUD/motcle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/motclearticle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';

$motcle = new MOTCLE;
$motcleArticle = new MOTCLEARTICLE;
$lang = new LANGUE;

// Gestion du $_SERVER["REQUEST_METHOD"] => En POST
// suppression effective du statut
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Annuler") {
        header("Location: ./motcle.php");
        die();
    }

    $numMotCle = $_POST["id"];
    $resultMotCle = $motcle->get_1MotCleWithLang($numMotCle);
    $motcleArticles = $motcleArticle->get_AllArticlesByMotCle($numMotCle);

    if (!$motcleArticles) {
        $motcle->delete($numMotCle);
        $deleted = true;
    } else {
        $supprImpossible = true;
    }
} else {
    $numMotCle = $_GET["id"];
    $resultMotCle = $motcle->get_1MotCleWithLang($numMotCle);
}

if ($resultMotCle) {
    $libMotCle = $resultMotCle['libMotCle'];
    $numLang = $resultMotCle['numLang'];
    $lib1Lang = $resultMotCle['lib1Lang'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Mot-Clé</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD MotClé</h1>
    </div>
    <h3>Suppression d'un Mot-Clé</h3>

    <?php
    if ($supprImpossible) {
        echo '<div style="color:red;">';
        echo '<p>Impossible de supprimer le mot-clé "' . $libMotCle . '" car il est référencé par les éléments suivants :</p>';

        if ($motcleArticles) {
            echo '<p>Table motcleArticleICLE :</p>';
            echo '<ul>';
            foreach ($motcleArticles as $row) {
                echo '<li>Article n°' . $row["numArt"] . ' (' . $row["libTitrArt"] . ')</li>';
            }
            echo '</ul>';
        }

        echo '</div>';
    } elseif ($deleted) {
        echo '<p style="color:green;">Le mot-clé "' . $libMotCle . '" a été supprimé.</p>';
    }
    ?>

    <form method="post" action=".\deleteMotCle.php?id=<?= $numMotCle ?>">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Mot clé...</legend>

                <div class="control-group">

                    <div class="container-input">
                        <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />
                        <label>Libellé</label>
                        <input type="text" name="libMotCle" id="libMotCle" placeholder="Désignation" value="<?= $libMotCle ?>" disabled>
                    </div>

                    <div class="container-input">
                        <label>Langue</label>
                        <input class="select-especial" name="numLang" id="numLang" value="<?php $langue = $lang->get_1Langue($numLang);                                                                    echo $langue['lib1Lang'];  ?>" disabled>
                    </div>

                    <div class="controls">
                        <br>
                        <button class="input-button" type="submit" value="Annuler" name="Submit">Annuler</button>
                        <button class="input-button" type="submit" value="Valider" name="Submit">Valider</button>
                    </div>
                </div>
            </fieldset>
            
        </div>
        <div class="align-footer">
                <?php

                require_once __DIR__ . '/footerMotCle.php';
                require_once __DIR__ . '/footer.php';
                ?>
            </div>
    </form>
    <br>


</body>

</html>