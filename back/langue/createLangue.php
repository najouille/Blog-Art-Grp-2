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

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    <h2>Ajout d'une langue</h2>

    <form method="post" action="./createLangue.php" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Langue...</legend>

            <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

            <div class="control-group">
                <label class="control-label" for="lib1Lang"><b>Désignation :</b></label>
                <input type="text" name="lib1Lang" id="lib1Lang" size="80" maxlength="80" autofocus /><br><br>

                <label class="control-label" for="lib2Lang"><b>Dénomination :</b></label>
                <input type="text" name="lib2Lang" id="lib2Lang" size="80" maxlength="80" /><br><br>

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