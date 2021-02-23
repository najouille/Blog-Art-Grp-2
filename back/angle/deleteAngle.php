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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Angle</h1>
    <h2>Suppression d'un angle</h2>
    <form method="post" action="<?= "./deleteAngle.php?id=" . $numLang; ?>" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Angle...</legend>

            <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

            <div class="control-group">
                <label class="control-label" for="numAngl"><b>NumAngl :</b></label>
                <input type="text" name="numAngl" id="numAngl" size="80" maxlength="80" value="<?= $deleted ? '' : $numAngl; ?>" disabled /><br><br>

                <label class="control-label" for="libAngl"><b>libAngl :</b></label>
                <input type="text" name="libAngl" id="libAngl" size="80" maxlength="80" value="<?= $deleted ? '' : $libAngl; ?>" disabled /><br><br>

                <label class="control-label" for="numLang"><b>Langue :</b></label>
                <select name="numLang" id="numLang" disabled>
                    <option value="<?= $deleted ? '' : $numLang; ?>" selected><?php echo $deleted ? '' : $numLang; ?></option>
                </select>
            </div>

            <div class="control-group">
                <div class="controls">
                    <br><br>

                    <input type="submit" value="Initialiser" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />

                    <input type="submit" value="Valider" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                    <br>
                </div>
            </div>
        </fieldset>
    </form>
    <br>
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
</body>

</html>