<?php

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/motcle.class.php';
include __DIR__ . '/initLangue.php';


// Init variables form
$supprImpossible = false;
$deleted = false;
if (!isset($_GET['id'])) $_GET['id'] = '';
$numPays = '';
$frPays = '';
$maLangue = new LANGUE;
$maThematique = new THEMATIQUE;
$monAngle = new ANGLE;
$monMotCle = new MOTCLE;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Annuler") {
        header("Location: ./langue.php");
        die();
    }

    $numLang = $_POST["id"];
    $resultLangue = $maLangue->get_1LangueByPays($numLang);

    $thematiques = $maThematique->get_AllThematiquesByLang($numLang);
    $angles = $monAngle->get_AllAnglesByLang($numLang);
    $motcles = $monMotCle->get_AllMotClesByLang($numLang);

    if (!$thematiques && !$angles && !$motcles) {
        $maLangue->delete($numLang);
        $deleted = true;
    } else {
        $supprImpossible = true;
    }
} else {
    $numLang = $_GET["id"];
    $resultLangue = $maLangue->get_1LangueByPays($numLang);
}

if ($resultLangue) {
    $lib1Lang = $resultLangue["lib1Lang"];
    $lib2Lang = $resultLangue["lib2Lang"];
    $numPays = $resultLangue["numPays"];
    $frPays = $resultLangue["frPays"];
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

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        #p1 {
            max-width: 600px;
            width: 600px;
            max-height: 200px;
            height: 200px;
            border: 1px solid #000000;
            background-color: whitesmoke;
            /* Coins arrondis et couleur du cadre */
            border: 2px solid grey;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
        }

        .error {
            padding: 2px;
            border: solid 0px black;
            color: red;
            font-style: italic;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    <h2>Suppression d'une langue</h2>
    <form method="post" action="<?= "./deleteLangue.php?id=" . $numLang; ?>" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Langue...</legend>

            <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

            <div class="control-group">
                <label class="control-label" for="lib1Lang"><b>Désignation :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="text" name="lib1Lang" id="lib1Lang" size="80" maxlength="80" value="<?= $deleted ? '' : $lib1Lang; ?>" disabled /><br><br>

                <label class="control-label" for="lib2Lang"><b>Dénomination :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <input type="text" name="lib2Lang" id="lib2Lang" size="80" maxlength="80" value="<?= $deleted ? '' : $lib2Lang; ?>" disabled /><br><br>

                <label class="control-label" for="numPays"><b>Pays :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                <select name="numPays" id="numPays" disabled>
                    <option value="<?= $deleted ? '' : $numPays; ?>" selected><?php echo $deleted ? '' : $frPays; ?></option>
                </select>
            </div>

            <div class="control-group">
                <div class="controls">
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Annuler" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Valider" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                    <br>
                </div>
            </div>
        </fieldset>
    </form>
    <br>
    <?php

    if ($supprImpossible) {
        echo '<p style="color:red;">Impossible de supprimer la langue "' . $lib2Lang . '" car elle est référencée par les éléments suivant :</p>';

        if ($thematiques) {
            echo '<p>Table THEMATIQUE :</p>';
            echo '<ul>';
            foreach ($thematiques as $row) {
                echo '<li>' . $row["libThem"] . '</li>';
            }
            echo '</ul>';
        }

        if ($angles) {
            echo '<p>Table ANGLE :</p>';
            echo '<ul>';
            foreach ($angles as $row) {
                echo '<li>' . $row["libAngl"] . '</li>';
            }
            echo '</ul>';
        }

        if ($motcles) {
            echo '<p>Table MOTCLE :</p>';
            echo '<ul>';
            foreach ($motcles as $row) {
                echo '<li>' . $row["libMotCle"] . '</li>';
            }
            echo '</ul>';
        }
    } elseif ($deleted) {
        echo '<p style="color:green;">La langue "' . $lib2Lang . '" a été supprimée.</p>';
    }

    require_once __DIR__ . '/footerLangue.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>