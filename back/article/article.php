<?php
/////////////////////////////////////////////////////
//
//  CRUD MEMBRE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : membre.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
global $db;
$article = new ARTICLE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Admin - Gestion du CRUD Articles</title>
    <?php include('../../front/includes/commons/headRequired.php') ?>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../front/assets/master.css" />
    <link rel="stylesheet" href="../css/back-office.css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
    </div>

    <a class="button-create input-button" href="./createArticle.php">Créer Membre</a>
    <div class="container-center">
        <table class="twa-table" border='3'>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Pseudo</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    <th>Date</th>
                    <th>souvenirMemb</th>
                    <th>accordMemb</th>
                    <th>ACTION</th>
                    <th>ACTION</th>
                    <th>ACTION</th>
                    <th>ACTION</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $allArticles = $article->get_AllArticles();
                foreach ($allArticles as $row) {
                ?>
                    <tr>
                        <td>
                            <h4> <?php echo $row['numArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['dtCreArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo  $row['libTitrArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['libChapoArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['libAccrochArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['parag1Art']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['libSsTitr1Art']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['parag2Art']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['libSsTitr2Art']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['parag3Art']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['libConclArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['urlPhotArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['urlPhotArt']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['numAngl']; ?> </h4>
                        </td>
                        <td><a href="./updateArticle.php?id=<?= $row['numArt'] ?>"><i>Modifier</i></a>
                        </td>
                        <td><a class='link-delete' href="./deleteArticle.php?id=<?= $row['numArt'] ?>"><i>Supprimer</i></a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="align-footer">
        <?php
        require_once __DIR__ . '/footer.php';
        require_once __DIR__ . '/footerArticle.php';
        ?>
    </div>
</body>

</html>