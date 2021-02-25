<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
include __DIR__ . '/initArticle.php';
$created = false;


require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
$article = new ARTICLE;
$angle = new ANGLE;
$thematique = new THEMATIQUE;

// Gestion du $_SERVER["REQUEST_METHOD"] => En POST

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["Submit"] === "Initialiser") {
        header("Location: ./createArticle.php");
        die();
    }

    $erreur = "";
    $created = true;

    // prenomMemb
    // nomMemb
    // pseudoMemb
    // eMailMemb
    // passMemb
    // souvenirMemb
    // accordMemb

    if (empty($_POST['prenomMemb'])) {
        $prenomMemb = '';
        $erreur = $erreur . "<li>Il manque le prenomMemb.</li>";
        $created = false;
    } else {
        $prenomMemb = $_POST['prenomMemb'];
    }

    if (empty($_POST['nomMemb'])) {
        $nomMemb = '';
        $erreur = $erreur . "<li>Il manque la nomMemb.</li>";
        $created = false;
    } else {
        $nomMemb = $_POST['nomMemb'];
    }
    if (empty($_POST['pseudoMemb'])) {
        $pseudoMemb = '';
        $erreur = $erreur . "<li>Il manque la pseudoMemb.</li>";
        $created = false;
    } else {
        $pseudoMemb = $_POST['pseudoMemb'];
    }
    if (empty($_POST['eMailMemb'])) {
        $eMailMemb = '';
        $erreur = $erreur . "<li>Il manque la eMailMemb.</li>";
        $created = false;
    } else {
        $eMailMemb = $_POST['eMailMemb'];
    }
    if (empty($_POST['passMemb'])) {
        $passMemb = '';
        $erreur = $erreur . "<li>Il manque la passMemb.</li>";
        $created = false;
    } else {
        $passMemb = $_POST['passMemb'];
    }

    if (empty($_POST['souvenirMemb'])) {
        $souvenirMemb = '1';
    } else {
        $souvenirMemb = '0';
    }
    if (empty($_POST['accordMemb'])) {
        $accordMemb = '1';
    } else {
        $accordMemb = '0';
    }
    if (empty($_POST['idStat'])) {
        $idStat = '';
        $erreur = $erreur . "<li>Il manque la idStat.</li>";
        $created = false;
    } else {
        $idStat = $_POST['idStat'];
    }


    if ($created) {
        $member->create($prenomMemb, $nomMemb, $pseudoMemb, $eMailMemb, $passMemb, $souvenirMemb, $accordMemb, $idStat);
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Membre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
    </div>

    <h3>Création d'un membre</h3>

    <?php
    if ($created) {
        echo '<p style="color:green;">Le mot-clé "' . $_POST['prenomMemb'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';
        echo '<ul style="color:red;">' . $erreur . '</ul>';
    }
    ?>



    <form method="post" action="./createMembre.php" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Membre...</legend>
                <!-- ($prenomMemb, $nomMemb, $pseudoMemb, $passMemb, $eMailMemb, $souvenirMemb, $accordMemb) -->

                <div class="control-group-colonne">
                    <div class="container-input">
                        <label class="control-label" for="prenomMemb"><b>Prénom du membre :</b></label>
                        <input type="text" name="prenomMemb" id="prenomMemb" size="40" maxlength="80" autofocus /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="nomMemb"><b>Nom du membre :</b></label>
                        <input type="text" name="nomMemb" id="nomMemb" size="40" maxlength="80" autofocus="autofocus" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="pseudoMemb"><b>Pseudo :</b></label>
                        <input type="text" name="pseudoMemb" id="pseudoMemb" size="40" maxlength="80" autofocus="autofocus" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="eMailMemb"><b>Email :</b></label>
                        <input type="email" name="eMailMemb" id="eMailMemb" size="40" maxlength="80" autofocus="autofocus" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="passMemb"><b>Password :</b></label>
                        <input type="password" name="passMemb" id="passMemb" size="40" maxlength="80" autofocus="autofocus" /><br><br>
                    </div>

                    <div class="container-input">
                        <label for="idStat">Status</label>
                        <select name="idStat" id="idStat">
                            <?php
                            $allStatuts = $statut->get_AllStatuts();
                            foreach ($allStatuts as $row) {
                                echo '<option value="' . $row["idStat"] . '">' . $row["libStat"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="souvenirMemb"><b>Se souvenir de ce membre :</b></label>
                        <input type="checkbox" name="souvenirMemb" id="souvenirMemb" size="40" maxlength="80" autofocus="autofocus" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="accordMemb"><b>Accord :</b></label>
                        <input type="checkbox" name="accordMemb" id="accordMemb" size="40" maxlength="80" autofocus="autofocus" />
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <br><br>
                        <input class="input-button" type="submit" value="Initialiser" name="Submit" />
                        <input class="input-button" type="submit" value="Valider" name="Submit" />
                        <br>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="align-footer">
            <?php
            require_once __DIR__ . '/footerMembre.php';

            require_once __DIR__ . '/footer.php';
            ?>
        </div>

    </form>

</body>

</html>
