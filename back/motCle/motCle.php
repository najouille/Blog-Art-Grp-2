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
require_once __DIR__ . '/../../CLASS_CRUD/motcle.class.php';
global $db;
$motcle = new MOTCLE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Admin - Gestion du CRUD Motclé</title>
    <meta name="description" content="" />
    <?php
    include("../../front/includes/commons/headRequired.php")
    ?>
    <meta name="author" content="" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link rel="stylesheet" href="../css/footer-back.css" />
</head>


<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD MotClé</h1>
    </div>

    <a class="align-footer" class="button" href="./createMotCle.php">Créer un Mot-clé</a></h3>
    <div class="container-center">
        <table class="twa-table" border='3'>
            <thead>
                <tr>
                    <th>numMotCle</th>
                    <th>libMotCle</th>
                    <th colspan="1">numLang</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $allMotCles = $motcle->get_AllMotCles();
                foreach ($allMotCles as $row) {
                ?>
                    <tr>
                        <td>
                            <h4> <?= $row['numMotCle']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?= $row['libMotCle']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?= $row['numLang']; ?> </h4>
                        </td>
                        <td><a href="./updateMotCle.php?id=<?= $row['numMotCle'] ?>"><i>Modifier</i></a>
                        </td>
                        <td><a class='link-delete' href="./deleteMotCle.php?id=<?= $row['numMotCle'] ?>"><i>Supprimer</i></a>
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
        ?>
    </div>
</body>

</html>