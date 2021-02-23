<?php
///////////////////////////////////////////////////////////////
//
//  CRUD STATUT (PDO) - Code Modifié - 23 Janvier 2021
//
//  Script  : updateStatut.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////////////

require_once __DIR__ . '/../../util/utilErrOn.php';

require_once __DIR__ . '/../../CLASS_CRUD/statut.class.php';
global $db;
$statut = new STATUT;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['libStat'])) {
        $statut->update($_GET['id'], $_POST['libStat']);
        echo ('statut ' . $_POST['libStat'] . ' a bien été modifié');
    }
} else {
    echo ('method not POST');
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

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Statut</h1>
    <h2>Modification d'un statut</h2>
    <?php
    $libStat = $db->prepare("SELECT libStat FROM statut WHERE idStat= :id");
    $libStat->bindParam(':id',  $_GET['id']);
    $libStat->execute();
    $libStat = $libStat->fetch();
    ?>
    <form method="post" action="" enctype="multipart/form-data">

        <fieldset>
            <legend class="legend1">Formulaire Statut...</legend>

            <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

            <div class="control-group">
                <label class="control-label" for="libStat"><b>Nom du statut :</b></label>
                <input type="text" name="libStat" id="libStat" size="80" maxlength="80" value="<?= $libStat['libStat'] ?>" autofocus="autofocus" />
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
    require_once __DIR__ . '/footerStatut.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>