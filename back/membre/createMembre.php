<?php
///////////////////////////////////////////////////////////////
//
//  CRUD STATUT (PDO) - Code Modifié - 23 Janvier 2021
//
//  Script  : createStatut.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
$member = new MEMBRE;
$created = false;

$souvenirMemb = isset($_POST['souvenirMemb']) ? 1 : 0;
$accordMemb = isset($_POST['accordMemb']) ? 1 : 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'hey';
    if ($_POST["Submit"] === "Initialiser") {
        header("Location: ./createMembre.php");
        die();
    }
    try {
        if (!empty($_POST['prenomMemb']) && !empty($_POST['nomMemb']) && !empty($_POST['pseudoMemb']) && !empty($_POST['passMemb']) && !empty($_POST['eMailMemb']) && !empty($_POST['accordMemb'])) {
            $member->create($_POST['prenomMemb'], $_POST['nomMemb'], $_POST['pseudoMemb'], $_POST['passMemb'], $_POST['eMailMemb'], $souvenirMemb, $accordMemb);
            $created = true;
            
        } else {
            echo "ça marche pas";
        }
    } catch (PDOException $e) {
        throw $e;
    }
} else {
    echo 'method not POST';
}


include __DIR__ . '/initMembre.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Membre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD M</h1>
    <h2>Ajout d'un statut</h2>

    <?php
    // if($created) {
    //     // $numMembResult = $member->get_1MembreByMail($_POST['eMailMemb']);
    //     $numMemb = $numMembResult['numMemb'];
    //     echo '<p style="color:green;">Le membre ' . $_POST['pseudoMemb'] . ' #' . $numMemb . ' a été créé.</p>';
    // }
    ?>



    <form method="post" action="./createMembre.php" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Membre...</legend>
            <!-- ($prenomMemb, $nomMemb, $pseudoMemb, $passMemb, $eMailMemb, $souvenirMemb, $accordMemb) -->

            <div class="control-group">
                <label class="control-label" for="prenomMemb"><b>Prènom du membre :</b></label>
                <input type="text" name="prenomMemb" id="prenomMemb" size="80" maxlength="80" autofocus /><br><br>

                <label class="control-label" for="nomMemb"><b>Nom du membre :</b></label>
                <input type="text" name="nomMemb" id="nomMemb" size="80" maxlength="80" autofocus="autofocus" /><br><br>

                <label class="control-label" for="pseudoMemb"><b>Pseudo :</b></label>
                <input type="text" name="pseudoMemb" id="pseudoMemb" size="80" maxlength="80" autofocus="autofocus" /><br><br>

                <label class="control-label" for="eMailMemb"><b>Email :</b></label>
                <input type="email" name="eMailMemb" id="eMailMemb" size="80" maxlength="80" autofocus="autofocus" /><br><br>

                <label class="control-label" for="passMemb"><b>Password :</b></label>
                <input type="password" name="passMemb" id="passMemb" size="80" maxlength="80" autofocus="autofocus" /><br><br>

                <label class="control-label" for="souvenirMemb"><b>Se souvenir de ce membre :</b></label>
                <input type="checkbox" name="souvenirMemb" id="souvenirMemb" size="80" maxlength="80" autofocus="autofocus" /><br><br>

                <label class="control-label" for="accordMemb"><b>Accord :</b></label>
                <input type="checkbox" name="accordMemb" id="accordMemb" size="80" maxlength="80" autofocus="autofocus" />

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
    require_once __DIR__ . '/footerMembre.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>