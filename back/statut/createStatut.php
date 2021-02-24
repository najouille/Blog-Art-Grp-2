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

require_once __DIR__ . '/../../CLASS_CRUD/statut.class.php';
$statut = new STATUT;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['libStat'])) {
        $statut->create($_POST['libStat']);
        echo 'statut ' . $_POST['libStat'] . ' créé';
    }
} else {
    echo 'method not POST';
}



include __DIR__ . '/initStatut.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Statut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Statut</h1>
    </div>

    <h3>Création d'un Statut</h3>

    <form method="post" action="" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Statut...</legend>

                <!-- <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" /> -->

                <div class="control-group">
                    <div class="container-input">
                        <label class="control-label" for="libStat"><b>Nom du statut :</b></label>
                        <input type="text" name="libStat" id="libStat" size="40" maxlength="80" value="<?= $libStat; ?>" autofocus="autofocus" />
                    </div>
                </div>

                <div class="control-group">

                    <div class="controls">
                        <input class="input-button" type="submit" value="Initialiser" name="Submit" />

                        <input class="input-button" type="submit" value="Valider" name="Submit" />
                    </div>
                </div>
            </fieldset>
        </div>
    <div class="align-footer"> 
    <?php
    require_once __DIR__ . '/footerStatut.php';
    require_once __DIR__ . '/footer.php';
    ?>
    </div>
    </form>
    
</body>

</html>