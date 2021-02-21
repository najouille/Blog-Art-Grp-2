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
require_once __DIR__ . '/../../CLASS_CRUD/pays.class.php';
include __DIR__ . '/initLangue.php';

if (!isset($_GET['id'])) $_GET['id'] = '';
$lang = new LANGUE;
$country = new PAYS;
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numLang = $_POST["id"];
    $lib1Lang = $_POST["lib1Lang"];
    $lib2Lang = $_POST["lib2Lang"];
    $numPays = $_POST["numPays"];
    if (isset($lib1Lang) && isset($lib2Lang) && isset($numPays)) {
        $lang->update($numLang, $lib1Lang, $lib2Lang, $numPays);
        $updated = true;
    }
} else {
    $numLang = $_GET["id"];
}

$resultLangue = $lang->get_1LangueByPays($numLang);

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
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    <h2>Ajout d'une langue</h2>

    <?php
    if ($updated) {
        echo '<p style="color:green;">La langue "' . $lib2Lang . '" a été bien modifiée.</p>';
    }
    ?>

    <form method="post" action="<?= "./updateLangue.php?id=" . $numLang; ?>" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Langue...</legend>

            <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

            <div class="control-group">
                <label class="control-label" for="lib1Lang"><b>Désignation :</b></label>
                <input type="text" name="lib1Lang" id="lib1Lang" size="80" maxlength="80" value="<?= isset($lib1Lang) ? $lib1Lang : ''; ?>" /><br><br>

                <label class="control-label" for="lib2Lang"><b>Dénomination :</b></label>
                <input type="text" name="lib2Lang" id="lib2Lang" size="80" maxlength="80" value="<?= isset($lib2Lang) ? $lib2Lang : ''; ?>" /><br><br>

                <label class="control-label" for="numPays"><b>Pays :</b></label>
                <select name="numPays" id="numPays">
                    <?php
                    $allPays = $country->get_AllPays();
                    foreach ($allPays as $row) {
                        if ($row["numPays"] === $numPays) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                        echo '<option value="' . $row["numPays"] . '" ' . $selected . '>' . $row["frPays"] . '</option>';
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

    require_once __DIR__ . '/footerLangue.php';
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>