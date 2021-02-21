<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/getNextNumThem.php';
$lang = new LANGUE;
$thematique = new THEMATIQUE;
$created = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['libThem']) && !empty($_POST['numLang'])){
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

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Thematique</h1>
    <h2>Ajout d'une Thematique</h2>
    <?php
    if ($created) {
        echo '<p style="color:green;">Le mot-clé "' . $_POST['libThem'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';

    }
    ?>
    <form method="post" action="./createThematique.php" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Thematique...</legend>

            <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

            <div class="control-group">
                <label class="control-label" for="libThem"><b>Désignation :</b></label>
                <input type="text" name="libThem" id="libThem" size="80" maxlength="80" autofocus /><br><br>

                <label class="control-label" for="numLang"><b>Lang :</b></label>
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
                    <br><br>

                    <input type="submit" value="Initialiser" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />

                    <input type="submit" value="Valider" style="cursor:pointer; padding:5px 20px; background-color:lightsteelblue; border:dotted 2px grey; border-radius:5px;" name="Submit" />
                    <br>
                </div>
            </div>
        </fieldset>
    </form>
    <?php
    require_once __DIR__ . '/footerThematique.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>