<?php
require_once __DIR__ . '/../../util/utilErrOn.php';

require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/getNextNumLang.php';
$lang = new LANGUE;

require_once __DIR__ . '/../../CLASS_CRUD/pays.class.php';
$country = new PAYS;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['lib1Lang']) && !empty($_POST['lib2Lang']) && !empty($_POST['numPays'])) {
        $lang->create(getNextNumLang($_POST['numPays']), $_POST['lib1Lang'], $_POST['lib2Lang'], $_POST['numPays']);
        echo ('La langue ' . $_POST['lib2Lang'] . 'à été créée.');
    }
}




// Init variables form
include __DIR__ . '/initLangue.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Langue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    </div>

    <h3>Ajout d'un langue</h3>

    <form method="post" action="./createLangue.php" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Langue...</legend>

                <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

                <div class="control-group">

                    <div class="container-input">
                        <label class="control-label" for="lib1Lang"><b>Désignation :</b></label>
                        <input type="text" name="lib1Lang" id="lib1Lang" size="40" maxlength="80" autofocus /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="lib2Lang"><b>Dénomination :</b></label>
                        <input type="text" name="lib2Lang" id="lib2Lang" size="40" maxlength="80" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="numPays"><b>Pays :</b></label>
                        <select name="numPays" id="numPays">
                            <?php
                            $allPays = $country->get_AllPays();
                            foreach ($allPays as $row) {
                                echo '<option value="' . $row["numPays"] . '">' . $row["frPays"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">

                        <input class="input-button" type="submit" value="Initialiser" name="Submit" />
                        
                        <input class="input-button" type="submit" value="Valider" name="Submit" />
                        <br>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="align-footer">
            <?php
            require_once __DIR__ . '/footerLangue.php';

            require_once __DIR__ . '/footer.php';
            ?>
        </div>
    </form>

</body>

</html>