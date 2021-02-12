<?php

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// Init variables form
include __DIR__ . '/initMotCle.php';
$created = false;


require_once __DIR__ . '/../../CLASS_CRUD/motcle.class.php';
$tag = new MOTCLE;

require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
$lang = new LANGUE;

// Gestion du $_SERVER["REQUEST_METHOD"] => En POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["Submit"] === "Initialiser") {
        header("Location: ./createMotCle.php");
        die();
    }

    $erreur = "";
    $created = true;

    if (empty($_POST['libMotCle'])) {
        $libMotCle = '';
        $erreur = $erreur . "<li>Il manque le libellé.</li>";
        $created = false;
    } else {
        $libMotCle = $_POST['libMotCle'];
    }

    if (empty($_POST['numLang'])) {
        $numLang = '';
        $erreur = $erreur . "<li>Il manque la langue.</li>";
        $created = false;
    } else {
        $numLang = $_POST['numLang'];
    }

    if ($created) {
        $tag->create($_POST['libMotCle'], $_POST['numLang']);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!--<link href="../css/style.css" rel="stylesheet" type="text/css" />-->
</head>

<body >
    <h1>BLOGART21 Admin - Gestion du CRUD Mot-Clé</h1>
    <h2>Création d'un Mot-Clé</h2>
    <br>

    <?php
    if ($created) {
        echo '<p style="color:green;">Le mot-clé "' . $_POST['libMotCle'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';
        echo '<ul style="color:red;">' . $erreur . '</ul>';
    }
    ?>

    <form method="post" action=".\createMotCle.php">
        <div>
            <label>Libellé</label>
            <input type="text" name="libMotCle" id="libMotCle" placeholder="Libellé">
        </div>
        <div>
            <label>Langue</label>
            <select name="numLang" id="numLang">
                <?php
                $allLangues = $lang->get_AllLangues();
                foreach ($allLangues as $row) {
                    echo '<option value="' . $row["numLang"] . '">' . $row["lib1Lang"] . '</option>';
                }
                ?>
            </select>
        </div>
        <br>

        <button type="submit" value="Initialiser" name="Submit">Initialiser</button>

        <button type="submit" value="Valider" name="Submit">Valider</button>
    </form>
    <?php

    require_once __DIR__ . '/footerMotCle.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>