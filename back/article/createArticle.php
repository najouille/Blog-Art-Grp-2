<?php
require_once __DIR__ . '/../../util/utilErrOn.php';
include __DIR__ . '/initArticle.php';
$created = false;


require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
require_once __DIR__ . '/../../CLASS_CRUD/statut.class.php';
$article = new ARTICLE;
$angle = new ANGLE;
$thematique = new THEMATIQUE;
$member  = new MEMBRE;
$statut = new STATUT;

include __DIR__ . '/initArticle.php';
$error = null;
$erreur = null;
$fileName = null;
$saved = null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        !empty($_POST['libTitrArt']) && !empty($_POST['libChapoArt']) && !empty($_POST['libAccrochArt'])
        && !empty($_POST['parag1Art']) && !empty($_POST['libSsTitr1Art']) && !empty($_POST['parag2Art'])
        && !empty($_POST['libSsTitr2Art']) && !empty($_POST['parag3Art']) && !empty($_POST['libConclArt'])
        /*&& !empty($_POST['urlPhotArt'])*/ && !empty($_POST['numAngl']) && !empty($_POST['numThem'])
    ) {
        $dtCreArt = date("Y-m-d H:i:s");
        $libTitrArt = $_POST['libTitrArt'];
        $libChapoArt = $_POST['libChapoArt'];
        $libAccrochArt = $_POST['libAccrochArt'];
        $parag1Art = $_POST['parag1Art'];
        $libSsTitr1Art = $_POST['libSsTitr1Art'];
        $parag2Art = $_POST['parag2Art'];
        $libSsTitr2Art = $_POST['libSsTitr2Art'];
        $parag3Art = $_POST['parag3Art'];
        $libConclArt = $_POST['libConclArt'];
        $urlPhotArt = null;
        $numAngl = $_POST['numAngl'];
        $numThem = $_POST['numThem'];

        if (strlen($parag1Art) >= 1000 && strlen($parag2Art) >= 1000 && strlen($parag3Art) >= 1000) {
            $article->create(
                $dtCreArt,
                $libTitrArt,
                $libChapoArt,
                $libAccrochArt,
                $parag1Art,
                $libSsTitr1Art,
                $parag2Art,
                $libSsTitr2Art,
                $parag3Art,
                $libConclArt,
                $urlPhotArt,
                $numAngl,
                $numThem
            );
            header('Location: ./article.php');
        } else {
            $error = 'La longueur minimale des paragraphes est de 1000 caractères';
        }
    } else if (!empty($_POST['Submit']) && $_POST['Submit'] === 'Initialiser') {
        header('Location: ./createArticle.php');
    } else {
        $error = 'Merci de renseigner tous les champs du formulaire.';
    }
}

$perpectives = $angle->get_AllAngles();
$thematics = $thematique->get_AllThematiques();


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
        echo '<p style="color:green;">Le mot-clé "' . $_POST['libTitrArt'] . '" a été créé.</p>';
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p style="color:red;">Le mot-clé n\'a pas été créé car : </p>';
        echo '<ul style="color:red;">' . $error . '</ul>';
    }
    ?>



    <form method="post" action="./createArticle.php" enctype="multipart/form-data">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Membre...</legend>
                <!-- ($prenomMemb, $nomMemb, $pseudoMemb, $passMemb, $eMailMemb, $souvenirMemb, $accordMemb) -->

                <div class="control-group-colonne">
                    <input type="hidden" id="id" name="id" value="<?= isset($_GET['id']) ?: '' ?>" />

                    <div class="container-input">
                        <label for="libTitrArt"><b>Titre de l'article :</b></label>
                        <input class="control-label" type="text" name="libTitrArt" id="libTitrArt" maxlength="100" value="<?= $libTitrArt ?>" placeholder="placeholder" autofocus="autofocus" />
                    </div>
                    <div class="container-input">
                        <label for="urlPhotArt"><b>Image :</b></label>
                        <input type="file" class="control-label" name="urlPhotArt">
                    </div>

                    <div class="container-input">
                        <label for="libChapoArt"><b>Chapeau :</b></label>
                        <textarea class="control-label" type="text" name="libChapoArt" id="libChapoArt" cols="30" rows="2" maxlength="500" placeholder="Paragraphe 1"><?= $libChapoArt ?></textarea>
                        <span class="pull-right label label-default" id="count_message" style="background-color: smoke; margin-top: -20px; margin-right: 5px;"></span>
                    </div>

                    <div class="container-input">
                        <label for="libAccrochArt"><b>Accroche :</b></label>
                        <input class="control-label" type="text" name="libAccrochArt" id="libAccrochArt" maxlength="100" value="<?= $libAccrochArt ?>" placeholder="placeholder" />
                    </div>

                    <div>
                        <label for="libSsTitr1Art"><b>Paragraphe 1 :</b></label>
                        <input class="control-label" type="text" name="libSsTitr1Art" id="libSsTitr1Art" maxlength="100" value="<?= $libSsTitr1Art ?>" placeholder="Titre 1er article" />
                        <textarea class="control-label" type="text" name="parag1Art" id="parag1Art" cols="30" rows="3" maxlength="1200" placeholder="pla"><?= $parag1Art ?></textarea>
                    </div>

                    <div>
                        <label for="libSsTitr2Art"><b>Paragraphe 2 :</b></label>
                        <input class="control-label" type="text" name="libSsTitr2Art" id="libSsTitr2Art" maxlength="100" value="<?= $libSsTitr2Art ?>" placeholder="Titre 2eme article" />
                        <textarea class="control-label" type="text" name="parag2Art" id="parag2Art" cols="30" rows="3" maxlength="1200" placeholder="placeholder"><?= $parag2Art ?></textarea>
                    </div>

                    <div>
                        <label for="parag3Art"><b>Paragraphe 3 :</b></label>
                        <textarea class="control-label" type="text" name="parag3Art" id="parag3Art" cols="30" rows="3" maxlength="1200" placeholder="placeholder"><?= $parag3Art ?></textarea>
                    </div>

                    <div>
                        <label for="libConclArt"><b>Conclusion :</b></label>
                        <textarea class="control-label" type="text" name="libConclArt" id="libConclArt" cols="30" rows="2" maxlength="800" placeholder="En conclusion..."><?= $libConclArt ?></textarea>
                    </div>

                    <div class="row">
                        <div>
                            <label for="numAngl"><b>Angle :</b></label>
                            <select name="numAngl" class="control-label" id="numAngl">
                                <option value="" selected disabled hidden>--Sélectionner un angle--</option>
                                <?php
                                global $db;
                                $request = 'SELECT * FROM ANGLE ;';
                                $result = $db->query($request);
                                $allAngles = $result->fetchAll();
                                foreach ($allAngles as $row) {
                                ?>
                                    <option value="<?php echo $row['numAngl']; ?>"><?php echo $row['libAngl']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="numThem"><b>Thématique :</b></label>
                            <select name="numThem" class="control-label" id="numThem">
                                <option value="">--Choississez une thématique--</option>
                                <?php
                                global $db;
                                $request = 'SELECT * FROM THEMATIQUE ;';
                                $result = $db->query($request);
                                $allThematiques = $result->fetchAll();
                                foreach ($allThematiques as $row) {
                                ?>
                                    <option value="<?php echo $row['numThem']; ?>"><?php echo $row['libThem']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
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
            require_once __DIR__ . '/footerArticle.php';

            require_once __DIR__ . '/footer.php';
            ?>
        </div>

    </form>

</body>

</html>
