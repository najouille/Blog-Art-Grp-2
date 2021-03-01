<!-- -->

<?php
/////////////////////////////////////////////////////
//
//  CRUD COMMENT (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : comment.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/comment.class.php';
$class = new COMMENT;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Admin - Gestion du CRUD Commentaire</title>
    <?php include('../../front/includes/commons/headRequired.php') ?>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../front/assets/master.css" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <!--<link href="../css/style.css" rel="stylesheet" type="text/css" />-->
</head>

<body class="twa-back">
    <div class="title">
        <h1>BLOGART21 Admin - Gestion du CRUD Commentaire</h1>
    </div>
    <h2><a class="button-create input-button" href="./createComment.php">Nouveau commentaire</a></h2>
    <h2>Tous les commentaires</h2>
    <div class="container-center">

        <table class="twa-table">
            <thead>
                <tr>
                    <th>Numéro Commentaire</th>
                    <th>Numéro Article</th>
                    <th>Date de création</th>
                    <th>Commentaire</th>
                    <th>attModOK</th>
                    <th>affComOK</th>
                    <th>notifComKOAff</th>
                    <th>Membre</th>
                    <th colspan="2">&nbsp;Action&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php $allComments = $class->get_AllCommentsWithMembre();
                foreach ($allComments as $row) { ?>
                <!-- <?php print_r( $row) ?> -->
                    <tr>
                        <td><?= $row['numSeqCom'] ?></td>
                        <td><?= $row['numArt'] ?></td>
                        <td><?= $row['dtCreCom'] ?></td>
                        <td><?= $row['libCom'] ?></td>
                        <td><?= $row['attModOK'] ?></td>
                        <td><?= $row['affComOK'] ?></td>
                        <td><?= $row['notifComKOAff'] ?></td>
                        <td><?= $row['pseudoMemb'] ?></td>
                        <td>&nbsp;<a href="./updateComment.php?numSeqCom=<?= $row['numSeqCom'] ?>&numArt=<?= $row['numArt'] ?>"><i>Modifier</i></a>&nbsp;
                            <br />
                        </td>
                        <td>&nbsp;<a href="./deleteComment.php?numSeqCom=<?= $row['numSeqCom'] ?>&numArt=<?= $row['numArt'] ?>"><i>Supprimer</i></a>&nbsp;
                            <br />
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    require_once __DIR__ . '/footerComment.php';
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>