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
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Membre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
</head>


<body class="twa-back">

    <h1>BLOGART21 Admin - Gestion du CRUD MotCle</h1>

    <h3>Créer un MotCle : <a href="./createMotCle.php">CREER MotCle</a></h3>

    <table border='3'>
        <thead>
            <tr>
                <th>numMotCle</th>
                <th>libMotCle</th>
                <th>numLang</th>

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
                    <td><a href="./deleteMotCle.php?id=<?= $row['numMotCle'] ?>"><i>Supprimer</i></a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>