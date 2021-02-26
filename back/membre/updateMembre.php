<?php
/////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : updateLangue.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/statut.class.php';
include __DIR__ . '/initMembre.php';

if (!isset($_GET['id'])) $_GET['id'] = '';

$member = new MEMBRE;
$statut = new STATUT;
$erreur = '';
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numMemb = $_POST["id"];

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

    if (isset($prenomMemb) && isset($nomMemb) && isset($pseudoMemb) && isset($eMailMemb) && isset($passMemb) && isset($souvenirMemb) && isset($accordMemb) && isset($idStat)) {
        $member->update($numMemb, $prenomMemb, $nomMemb, $pseudoMemb, $eMailMemb, $passMemb, $idStat, $souvenirMemb, $accordMemb);
        $updated = true;
    } else {
        $updated = false;
    }
} else {
    $numMemb = $_GET["id"];
}

$resultMembre = $member->get_1Membre($numMemb);

if ($resultMembre) {
    $prenomMemb = $resultMembre["prenomMemb"];
    $nomMemb = $resultMembre["nomMemb"];
    $pseudoMemb = $resultMembre["pseudoMemb"];
    $eMailMemb = $resultMembre["eMailMemb"];
    $passMemb = $resultMembre["passMemb"];
    $souvenirMemb = $resultMembre["souvenirMemb"];
    $accordMemb = $resultMembre["accordMemb"];
    $idStat = $resultMembre["idStat"];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Membre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
    </div>
    <h3>Modification d'un membre</h3>

    <?php
    if ($updated) {
        echo '<p style="color:blue;">Le mot-clé "' . $prenomMemb . '" a été bien modifié.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé pas été modifié</p>';
    }
    ?>

    <form method="post" action="<?= "./updateMembre.php?id=" . $numMemb; ?>" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Langue...</legend>

                <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

                <div class="control-group">



                    <div class="container-input">
                        <label class="control-label" for="prenomMemb"><b>Prénom du membre :</b></label>
                        <input type="text" name="prenomMemb" id="prenomMemb" size="40" maxlength="80" autofocus value="<?= $prenomMemb ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="nomMemb"><b>Nom du membre :</b></label>
                        <input type="text" name="nomMemb" id="nomMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $nomMemb ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="pseudoMemb"><b>Pseudo :</b></label>
                        <input type="text" name="pseudoMemb" id="pseudoMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $pseudoMemb ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="eMailMemb"><b>Email :</b></label>
                        <input type="email" name="eMailMemb" id="eMailMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $eMailMemb ?>" /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="passMemb"><b>Password :</b></label>
                        <input type="password" name="passMemb" id="passMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $passMemb ?>" /><br><br>
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
                        <input type="checkbox" name="souvenirMemb" id="souvenirMemb" size="40" maxlength="80" autofocus="autofocus" <?= $souvenirMemb ? 'checked' : '' ?> /><br><br>
                    </div>

                    <div class="container-input">
                        <label class="control-label" for="accordMemb"><b>Accord :</b></label>
                        <input type="checkbox" name="accordMemb" id="accordMemb" size="40" maxlength="80" autofocus="autofocus" <?= $accordMemb ? 'checked' : '' ?> />
                    </div>

                    <div class="controls">
                        <br><br>
                        <input class="input-button" type="submit" value="Initialiser" name="Submit" />
                        <input class="input-button" id="button-valid" type="submit" value="Valider" name="Submit" />
                        <br>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
    <div class="align-footer">
        <?php

        require_once __DIR__ . '/footerMembre.php';
        require_once __DIR__ . '/footer.php';
        ?>
    </div>

</body>

</html>