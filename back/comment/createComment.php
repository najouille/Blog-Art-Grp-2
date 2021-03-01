<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/comment.class.php';
$class = new COMMENT;

require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
$monMembre = new MEMBRE;

require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
$monArticle = new ARTICLE;

$created = false;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['numArt']) && !empty($_POST['dtCreCom']) && !empty($_POST['libCom']) && isset($_POST['attModOK']) && isset($_POST['affComOK']) && !empty($_POST['numMemb'])) {
        $numArt = $_POST['numArt'];

        $myComments = $class->get_AllCommentsByArticle($numArt);
        $numSeqCom = intval(end($myComments)['numSeqCom']) + 1;


        $class->create($numSeqCom, $numArt, $_POST['dtCreCom'], $_POST['libCom'], $_POST['attModOK'], $_POST['affComOK'], $_POST['notifComKOAff'], $_POST['numMemb']);
        $created = true;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin - Gestion du CRUD Commentaire</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
    <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />

    <!-- <link href="../css/style.css" rel="stylesheet" type="text/css" /> -->
</head>

<body class="twa-back">
    <div class="title">
        <h1>BLOGART21 Admin - Gestion du CRUD Commentaire</h1>
        <h2>Ajout d'un Commentaire</h2>
    </div>
    <br>
    <form method="post" action=".\createComment.php" class="ui form">
        <div class="fieldset-container">
            <fieldset>
                <input type="hidden" name="dtCreCom" value="<?= date('Y-m-d H:i:s'); ?>">
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
                        <input type="text" name="libCom" placeholder="Commentaire">
                    </div>
                    <div class="field">
                        <label>attModOK</label>
                        <input type="number" name="attModOK" placeholder="attModOK">
                    </div>
                    <div class="field">
                        <label>affComOK</label>
                        <input type="number" name="affComOK" placeholder="affComOK">
                    </div>
                    <div class="field">
                        <label>notifComKOAff</label>
                        <input type="text" name="notifComKOAff" placeholder="notifComKOAff">
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
                    <br>
                </div>
                
            </fieldset>
        </div>
    </form>
    <?php
    if ($created) {
        echo '<p style="color:green;">Le commentaire ' . $numSeqCom . '#' . $numArt . ' a été créé.</p>';
    }

    require_once __DIR__ . '/footerComment.php';

    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>