<?php
/////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : updateLangue.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
include __DIR__ . './initAngle.php';

$angle = new ANGLE;
if (!isset($_GET['id'])) $_GET['id'] = '';
$lang = new LANGUE;
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numAngl = $_POST["id"];
    $resultAngle = $angle->get_1Angle($numAngl);
    if (!empty($numAngl) && !empty($_POST["libAngl"]) && !empty($_POST["numLang"])) {
        $angle->update($numAngl, $_POST["libAngl"], $_POST["numLang"]);
        $resultAngle = $angle->get_1Angle($numAngl);
        $numLang = $resultAngle["numLang"];
        $libAngl = $resultAngle["libAngl"];
        $updated = true;
    }
} else {
    $numAngl = $_GET["id"];
    $resultAngle = $angle->get_1Angle($numAngl);
    $numLang = $resultAngle["numLang"];
    $libAngl = $resultAngle["libAngl"];
}


if ($resultAngle) {
    $libAngl = $resultAngle["libAngl"];
    $numLang = $resultAngle["numLang"];
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Langue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    <h2>Ajout d'une langue</h2>

    <?php
    if ($updated) {
        echo '<p style="color:green;">L angle "' . $libAngl . '" a été bien modifiée.</p>';
    }
    ?>

    <pre>

    </pre>

    <form method="post" action="<?= "./updateAngle.php?id=" . $numLang; ?>" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Langue...</legend>

            <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

            <div class="control-group">
                <label class="control-label" for="numAngl"><b>Désignation :</b></label>
                <input type="text" name="numAngl" id="numAngl" size="80" maxlength="80" disabled value="<?= isset($numAngl) ? $numAngl : ''; ?>" /><br><br>

                <label class="control-label" for="libAngl"><b>Dénomination :</b></label>
                <input type="text" name="libAngl" id="libAngl" size="80" maxlength="80" value="<?= (isset($libAngl) ? ($libAngl) : ""); ?>" /><br><br>

                <label class="control-label" for="numLang"><b>Lang :</b></label>
                <!-- <select name="numLang" id="numLang">
                    
                    $allLangues = $lang->get_AllLangues();
                    foreach ($allLangues as $row) {
                        echo '<option value="' . $row["numLang"] . '">' . $row["lib1Lang"] . '</option>';
                    }
                    ?>
                </select> -->
                <select name="numLang" id="numLang">
                    <?php
                    $allLangues = $lang->get_AllLangues();
                    foreach ($allLangues as $row) {
                        if ($row["numLang"] === $numLang) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                        echo '<option value="' . $row["numLang"] . '" ' . $selected . '>' . $row["lib1Lang"] . '</option>';
                    }
                    ?>
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
    <?php

    require_once __DIR__ . '/footerAngle.php';
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>