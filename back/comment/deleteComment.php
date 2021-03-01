<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/comment.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/commentplus.class.php';
$class = new COMMENT;
$commPlus = new COMMENTPLUS;
$deleted = false;
if (!isset($_GET['numArt'])) $_GET['numArt'] = '';
if (!isset($_GET['numSeqCom'])) $_GET['numSeqCom'] = '';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Annuler") {
        header("Location: ./comment.php");
        die();
    }

    $numSeqCom = $_POST["numSeqCom"];
    $numArt = $_POST["numArt"];

    $resultComment = $class->get_1CommentWithMembre(intval($numSeqCom), intval($numArt));

    $resultCommentPlus = $commPlus->get_AllCommentsRByComment(intval($numSeqCom), intval($numArt));
    if ($resultCommentPlus) {
        $deleted = false;
        $error = " commentaire reéférencé";
    } else {

        $class->delete(intval($numSeqCom), intval($numArt));
        $deleted = true;
    }
} else {
    $numSeqCom = $_GET['numSeqCom'];
    $numArt = $_GET['numArt'];

    $resultComment = $class->get_1CommentWithMembre(intval($numSeqCom), intval($numArt));
}

if ($resultComment) {
    $numSeqCom = $resultComment['numSeqCom'];
    $numArt = $resultComment['numArt'];
    $dtCreCom = $resultComment['dtCreCom'];
    $libCom = $resultComment['libCom'];
    $attModOK = $resultComment['attModOK'];
    $affComOK = $resultComment['affComOK'];
    $notifComKOAff = $resultComment['notifComKOAff'];
    $numMemb = $resultComment['numMemb'];
    $pseudoMemb = $resultComment['pseudoMemb'];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Commentaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />


    <!--
<?php
print_r($resultComment)
?>
     -->
    <!--
<?php
print_r($numSeqCom)
?>
     -->
</head>

<body class="twa-back">
    <div class="title">
        <h1>BLOGART21 Admin - Gestion du CRUD Commentaire</h1>
        <h2>Suppression d'un Commentaire</h2>
    </div>
    <br>
    <form method="post" action=".\deleteComment.php" class="ui form">
        <div class="fieldset-container">
            <fieldset>
                <input type="hidden" name="dtCreCom" value="<?php echo ($dtCreCom); ?>">

                <div class="controlgroup-colonne">

                    <div class="field">
                        <label>Numéro du commentaire</label>
                        <input type="number" name="numSeqCom" placeholder="N° Commentaire" value="<?php echo ($numSeqCom); ?>" readonly>
                    </div>
                    <div class="field">
                        <label>Numéro de l'Article</label>
                        <input type="number" name="numArt" placeholder="N° Article" value="<?php echo ($numArt); ?>" readonly>
                    </div>
                    <div class="field">
                        <label>Commentaire</label>
                        <input type="text" name="libCom" placeholder="Commentaire" value="<?php echo ($libCom); ?>" readonly>
                    </div>
                    <div class="field">
                        <label>attModOK</label>
                        <input type="number" name="attModOK" placeholder="attModOK" value="<?php echo ($attModOK); ?>" readonly>
                    </div>
                    <div class="field">
                        <label>affComOK</label>
                        <input type="number" name="affComOK" placeholder="affComOK" value="<?php echo ($affComOK); ?>" readonly>
                    </div>
                    <div class="field">
                        <label>notifComKOAff</label>
                        <input type="text" name="notifComKOAff" placeholder="notifComKOAff" value="<?php echo ($notifComKOAff); ?>" readonly>
                    </div>
                    <div class="field">
                        <label class="control-label" for="numMemb"><b>Statut :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                        <br><select name="numMemb" id="numMemb" disabled>
                            <option value="<?= $deleted ? '' : $numMemb; ?>" selected><?php echo $deleted ? '' : $pseudoMemb; ?></option>
                        </select><br><br>
                    </div>
                    <br>
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
    <?php
    if ($deleted) {
        echo '<p style="color:green;">Le commentaire ' . $numSeqCom . '#' . $numArt . ' a été supprimé.</p>';
    } elseif ($error) {

        echo '<p style="color:red;">' . $error . '</p>';
    }

    require_once __DIR__ . '/footerComment.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>