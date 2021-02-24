<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/getNextNumThem.php';
$lang = new LANGUE;
$thematique = new THEMATIQUE;
$created = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['libThem']) && !empty($_POST['numLang'])) {
        $thematique->create(getNextNumThem($_POST['numLang']), $_POST['libThem'], $_POST['numLang']);
        $created = true;
    }
}




// Init variables form
include __DIR__ . '/initThematique.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Thematique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Thématique</h1>
    </div>

    <h3>Ajout d'une thématique</h3>

    <?php
    if ($created) {
        echo '<p style="color:green;">Le mot-clé "' . $_POST['libThem'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';
    }
    ?>
    <form method="post" action="./createThematique.php" enctype="multipart/form-data">
        <div class="fieldset-container">

            <fieldset>
                <legend class="legend1">Formulaire Thématique...</legend>

                <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

                <div class="control-group">
                    <div class="container-input">
                        <label class="control-label" for="libThem"><b>Désignation :</b></label>
                        <input type="text" name="libThem" id="libThem" size="40" maxlength="80" autofocus /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="numLang">Langue :</label>
                        <select name="numLang" id="numLang">
                            <?php
                            $allLangues = $lang->get_AllLangues();
                            foreach ($allLangues as $row) {
                                echo '<option value="' . $row["numLang"] . '">' . $row["lib1Lang"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="control-group">
                        <div class="controls">


                            <input class="input-button" type="submit" value="Initialiser" name="Submit" />

                            <input class="input-button" type="submit" value="Valider" name="Submit" />

                        </div>
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