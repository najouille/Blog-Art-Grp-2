<?php

// Pas fonctionnel lorsque dèja refférencer
// FIXME
// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
include __DIR__ . '/initMembre.php';

$supprImpossible = false;
$deleted = false;
if (!isset($_GET['id'])) $_GET['id'] = '';

require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';

$hey = null;
$article = new ARTICLE;

// Gestion du $_SERVER["REQUEST_METHOD"] => En POST
// suppression effective du statut
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST["Submit"] === "Annuler") {
        header("Location: ./motcle.php");
        die();
    }

    $numArt = $_POST["id"];
    $resultArticle = $article->get_1Article($numArt);
    
    if ($resultArticle) {
        $article->delete($numArt);
        $deleted = true;
    } else {
        $supprImpossible = true;
        $hey = "wtf";
    }
} else {
    $numArt = $_GET["id"];
    $resultArticle = $article->get_1Article($numArt);
}

if ($resultMember) {
    $libTitrArt = $resultMember['libTitrArt'];
    $numArt = $resultMember['numArt'];
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
    <h3>Suppression d'un Membre</h3>

    <?php
    if ($supprImpossible) {
        echo '<div style="color:red;">';
        echo '<p>Impossible de supprimer le membre "' . $libTitrArt . '" car il est référencé par les éléments suivants :</p>';

        // if ($motcleArticles) {
        //     echo '<p>Table motcleArticleICLE :</p>';
        //     echo '<ul>';
        //     foreach ($motcleArticles as $row) {
        //         echo '<li>Article n°' . $row["numArt"] . ' (' . $row["libTitrArt"] . ')</li>';
        //     }
        //     echo '</ul>';
        // }
        echo $supprImpossible;
        
        echo '</div>';
    } elseif ($deleted) {
        echo '<p style="color:green;">Le mot-clé "' . $libTitrArt . '" a été supprimé.</p>';
    }
    ?>



    <form method="post" action=".\deleteMembre.php?id=<?= $numMemb ?>">
        <div class="fieldset-container">
            <fieldset>
                <legend class="legend1">Formulaire Mot clé...</legend>

                <div class="control-group">

                    <div class="container-input">
                        <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />
                        <label>Libellé</label>
                        <input type="text" name="libTitrArt" id="libTitrArt" placeholder="Désignation" value="<?= $numArt ?>" disabled>
                    </div>

                    <div class="container-input">
                        <label>Prénom Membre</label>
                        <input type="text" class="select-especial" name="libTitrArt" id="libTitrArt" value="<?php $arti = $article->get_1Article($libTitrArt);
                                                                                                            echo $arti['libTitrArt'];  ?>" disabled>
                    </div>

                    <div class="controls">
                        <button class="input-button" type="submit" value="Valider" name="Submit">Valider</button>
                    </div>
                </div>
            </fieldset>
            <div class="align-footer">
                <?php
                require_once __DIR__ . '/footerMembre.php';
                require_once __DIR__ . '/footer.php';
                ?>
            </div>
        </div>

    </form>
    <br>


</body>

</html>
