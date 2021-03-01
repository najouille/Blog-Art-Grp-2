<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/comment.class.php';
$comm = new COMMENT;

require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
$monMembre = new MEMBRE;

require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
$monArticle = new ARTICLE;
if (!isset($_GET['numArt'])) $_GET['numArt'] = '';
if (!isset($_GET['numSeqCom'])) $_GET['numSeqCom'] = '';

$updated = false;

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     if(!empty($_POST['libStat'])){
//         $monStatut->create($_POST['libStat']);
//         echo('Le statut ' . $_POST['libStat'] . ' a bien été créé.');
//     }
// }else{
//     echo('libStat n\'a pas été renseignée');
// }

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Annuler") {
        header("Location: ./comment.php");
        die();
    }

    $numSeqCom = $_POST["numSeqCom"];
    $numArt = $_POST["numArt"];
    $numMemb = $_POST["numMemb"];

    $comm->update($numSeqCom, $numArt, $_POST['dtCreCom'], $_POST['libCom'], $_POST['attModOK'], $_POST['affComOK'], $_POST['notifComKOAff'], $numMemb);
    $updated = true;

    $resultComment = $comm->get_1CommentWithMembre($numSeqCom, $numArt);
} else {
    $numSeqCom = $_GET['numSeqCom'];
    $numArt = $_GET['numArt'];

    $resultComment = $comm->get_1CommentWithMembre($numSeqCom, $numArt);

}


if ($resultComment) {
    $numSeqCom = $resultComment['numSeqCom'];
    $numArt = $resultComment['numArt'];
    $dtCreCom = $resultComment['dtCreCom'];
    $libCom = $resultComment['libCom'];
    $attModOK = $resultComment['attModOK'];
    $affComOK = $resultComment['affComOK'];
    $notifComKOAff = $resultComment['notifComKOAff'];
    $numMemb = $resultComment["numMemb"];
    $pseudoMemb = $resultComment["pseudoMemb"];
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

    <!-- <link href="../css/style.css" rel="stylesheet" type="text/css" /> -->
</head>

<body class="twa-back">
    <div class="title">
        <h1>BLOGART21 Admin - Gestion du CRUD Commentaire</h1>
        <h2>Suppression d'un Commentaire</h2>
    </div>
    <br>
    <form method="post" action=".\updateComment.php" >
        <div class="fieldset-container">
            <fieldset>
                <input type="hidden" name="numArt" placeholder="N° Article" value="<?= $_GET['numArt'] ?>">
                <input type="hidden" name="numSeqCom" placeholder="N° Commentaire" value="<?= $_GET['numSeqCom'] ?>">
                <input type="hidden" name="dtCreCom" value="<?php echo ($dtCreCom); ?>">
                <div class="controlgroup-colonne">
                    <div class="field">
                        <label>Article</label>
                        <select name="numArt" id="numArt">
                            <?php
                            $allArticles = $monArticle->get_AllArticles();
                            foreach ($allArticles as $row) {
                                if ($row["numArt"] === $numArt) {
                                    $selected = "selected";
                                } else {
                                    $selected = "";
                                } ?>
                                <option value="<?= $row['numArt'] ?>" <?= $selected ?>><?= $row['numArt'] ?> - <?= $row['libTitrArt'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Commentaire</label>
                        <input type="text" name="libCom" placeholder="Commentaire" value="<?php echo ($libCom); ?>">
                    </div>
                    <div class="field">
                        <label>attModOK</label>
                        <input type="number" name="attModOK" placeholder="attModOK" value="<?php echo ($attModOK); ?>">
                    </div>
                    <div class="field">
                        <label>affComOK</label>
                        <input type="number" name="affComOK" placeholder="affComOK" value="<?php echo ($affComOK); ?>">
                    </div>
                    <div class="field">
                        <label>notifComKOAff</label>
                        <input type="text" name="notifComKOAff" placeholder="notifComKOAff" value="<?php echo ($notifComKOAff); ?>">
                    </div>
                    <div class="field">
                        <label class="control-label" for="numMemb"><b>Membre :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
                        <br><select name="numMemb" id="numMemb">
                            <?php
                            $allMembres = $monMembre->get_AllMembres();
                            foreach ($allMembres as $row) {
                                if ($row["numMemb"] === $numMemb) {
                                    $selected = "selected";
                                } else {
                                    $selected = "";
                                }
                                echo '<option value="' . $row["numMemb"] . '" ' . $selected . '>' . $row["pseudoMemb"] . '</option>';
                            }
                            ?>
                        </select><br><br>
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
    <?php
    if ($updated) {
        echo '<p style="color:green;">Le commentaire ' . $numSeqCom . '#' . $numArt . ' a été modifié.</p>';
    }

    require_once __DIR__ . '/footerComment.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>