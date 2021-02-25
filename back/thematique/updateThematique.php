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
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
include __DIR__ . '/initThematique.php';

$thematique = new THEMATIQUE;
if (!isset($_GET['id'])) $_GET['id'] = '';
$lang = new LANGUE;
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numThem = $_POST["id"];
    $resultThem = $thematique->get_1Thematique($numThem);
    if (!empty($numThem) && !empty($_POST["libThem"]) && !empty($_POST["numLang"])) {
        $thematique->update($numThem, $_POST["libThem"], $_POST["numLang"]);
        $resultThem = $thematique->get_1Thematique($numThem);

        $numLang = $resultThem["numLang"];
        $libThem = $resultThem["libThem"];
        $updated = true;
    }
} else {
    $numThem = $_GET["id"];
    $resultThem = $thematique->get_1Thematique($numThem);

    $numLang = $resultThem["numLang"];
    $libThem = $resultThem["libThem"];
}


if ($resultThem) {
    $libThem = $resultThem["libThem"];
    $numLang = $resultThem["numLang"];
}



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Thematique</title>
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
    <h3>Modification d'une thématique</h3>

    <?php
    if ($updated) {
        echo '<p style="color:green;">L angle "' . $libThem . '" a été bien modifiée.</p>';
    }
    ?>

    <pre>
    <?php
    echo $updated;
    ?>
    </pre>

    <form method="post" action="<?= "./updateThematique.php?id=" . $numThem; ?>" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Thématique...</legend>

                <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

                <div class="control-group">$

                    <div class="container-input">
                        <label class="control-label" for="numThem">numThem :</label>
                        <input type="text" name="numThem" id="numThem" size="40" maxlength="80" disabled value="<?= isset($numThem) ? $numThem : ''; ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="libThem">Nom de la thématique</label>
                        <input type="text" name="libThem" id="libThem" size="40" maxlength="80" value="<?= (isset($libThem) ? ($libThem) : ""); ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="numLang">Langue :</label>
                        <!-- <select name="numThem" id="numThem">
                    
                    $allLangues = $lang->get_AllLangues();
                    foreach ($allLangues as $row) {
                        echo '<option value="' . $row["numThem"] . '">' . $row["lib1Lang"] . '</option>';
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

                            <input class="input-button" type="submit" value="Initialiser" name="Submit" />

                            <input class="input-button" type="submit" value="Valider" name="Submit" />
                        </div>
                    </div>
            </fieldset>
        </div>
    </form>
    <div class="align-footer"> 
    <?php
    require_once __DIR__ . '/footerThematique.php';
    require_once __DIR__ . '/footer.php';
    ?>
    </div>
</body>

</html>