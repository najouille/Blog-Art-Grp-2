<?php
require_once __DIR__ . '/../../util/utilErrOn.php';

require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
$lang = new LANGUE;

require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/getNextNumAngl.php';
$angle = new ANGLE;
$created = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['libAngl']) && !empty($_POST['numLang'])) {
        $angle->create(getNextNumAngl($_POST['numLang']), $_POST['libAngl'], $_POST['numLang']);
        $created = true;
    }
}




// Init variables form
include __DIR__ . '/initAngle.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Angle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Angle</h1>
    </div>
    <h3>Ajout d'une angle</h3>
    <?php
    if ($created) {
        echo '<p style="color:green;">Le mot-clé "' . $_POST['libAngl'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';
    }
    ?>
    <form method="post" action="./createAngle.php" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Angle...</legend>

                <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

                <div class="control-group">
                    <div class="container-input">
                        <label for="libAngl">libAngl</label>
                        <input type="text" name="libAngl" id="libAngl" size="80" maxlength="80" autofocus /><br><br>
                    </div>

                    <div class="container-input">
                        <label for="numLang"><b>Langue :</b></label>
                        <select name="numLang" id="numLang">
                            <?php
                            $allLangues = $lang->get_AllLangues();
                            foreach ($allLangues as $row) {
                                echo '<option value="' . $row["numLang"] . '">' . $row["lib1Lang"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <br><br>

                    <input class="input-button" type="submit" value="Initialiser" name="Submit" />

                    <input class="input-button" id="button-valid" type="submit" value="Valider" name="Submit" />
                    <br>
                </div>
            </fieldset>
        </div>
        <div class="align-footer">
            <?php
            require_once __DIR__ . '/footerAngle.php';

            require_once __DIR__ . '/footer.php';
            ?>
        </div>
    </form>

</body>

</html>