<?php

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
include __DIR__ . '/initAngle.php';


// Init variables form
if (!isset($_GET['id'])) $_GET['id'] = '';
$supprImpossible = false;
$deleted = false;
$libAngl = '';
$numLang = '';
$numAngl = '';
$langue = new LANGUE;
$angl = new ANGLE;
$article = new ARTICLE;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Initialiser") {
        header("Location: ./langue.php");
        die();
    }

    $numAngl = $_POST["id"];

    $articles = $article->get_AllArticlesByAngle($numAngl);
    $resultAngle = $angl->get_1Angle($numAngl);

    if (!$articles) {
        $angl->delete($numAngl);
        $deleted = true;
    } else {
        $supprImpossible = true;
    }
} else {
    $resultAngle = $angl->get_1Angle($numAngl);
    $numAngl = $_GET["id"];
}

if ($resultAngle) {
    $libAngl = $resultAngle["libAngl"];
    $numLang = $resultAngle["numLang"];
    $numAngl = $resultAngle["numAngl"];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Langue</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Angle</h1>
    </div>
    <h3>Suppression d'un Angle</h3>
    <form method="post" action="<?= "./deleteAngle.php?id=" . $numLang; ?>" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Angle...</legend>

                <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

                <div class="control-group">
                    <div class="container-input">
                        <label class="control-label" for="numAngl"><b>NumAngl :</b></label>
                        <input type="text" name="numAngl" id="numAngl" size="40" maxlength="80" value="<?= $deleted ? '' : $numAngl; ?>" disabled /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="libAngl"><b>libAngl :</b></label>
                        <input type="text" name="libAngl" id="libAngl" size="40" maxlength="80" value="<?= $deleted ? '' : $libAngl; ?>" disabled /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="numLang">Langue :</b></label>
                        <select name="numLang" id="numLang" disabled>
                            <option value="<?= $deleted ? '' : $numLang; ?>" selected><?php echo $deleted ? '' : $numLang; ?></option>
                        </select>
                    </div>

                    <div class="controls">
                        <br>
                        <input class="input-button" type="submit" value="Initialiser" name="Submit" />
                        <input class="input-button" type="submit" value="Valider" name="Submit" />
                    </div>
                </div>
            </fieldset>

        </div>
        <div class="align-footer">
            <?php

            if ($supprImpossible) {
                echo '<p style="color:red;">Impossible de supprimer l angle "' . $libAngl . '" car elle est référencée par les éléments suivant :</p>';

                if ($articles) {
                    echo '<p>Table article :</p>';
                    echo '<ul>';
                    foreach ($articles as $row) {
                        echo '<li>' . $row["numArt"] . ' - ' . $row["libTitrArt"] . '</li>';
                    }
                    echo '</ul>';
                }
            } elseif ($deleted) {
                echo '<p style="color:green;">L\'angle "' . $libAngl . '" a été supprimée.</p>';
            }

            require_once __DIR__ . '/footerAngle.php';
            require_once __DIR__ . '/footer.php';
            ?>
        </div>
    </form>
    <br>
</body>

</html>