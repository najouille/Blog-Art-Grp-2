<?php
///////////////////////////////////////////////////////////////
//
//  CRUD STATUT (PDO) - Code Modifié - 23 Janvier 2021
//
//  Script  : statut.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';

// controle des saisies du formulaire


// insertion classe STATUT
require_once __DIR__ . '/../../CLASS_CRUD/statut.class.php';
global $db;
$statut = new STATUT;



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion du Statut</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <style type="text/css">
        .error {
            padding: 2px;
            border: solid 0px black;
            color: red;
            font-style: italic;
            border-radius: 5px;
        }
    </style>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link rel="stylesheet" href="../css/footer-back.css" />
</head>

<body>

    <body class="twa-back">
        <div class="title">
            <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
            <h1>BLOGART21 Admin - Gestion du CRUD Statut</h1>
        </div>

        <div class="container-center">
            <a class="button-create input-button" id="button-create-motcle" href="./createStatut.php">Créer un statut</a>
            <table class="twa-table" border="3">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Appel méthode : tous les statuts en BDD

                    $allStatuts = $statut->get_AllStatuts();
                    foreach ($allStatuts as $row) {
                        // Boucle pour afficher
                    ?>
                        <tr>
                            <td>
                                <h4> <?php echo $row["idStat"]; ?> </h4>
                            </td>

                            <td> <?php echo $row["libStat"]; ?> </td>

                            <td><a href="./updateStatut.php?id=<?= $row["idStat"]; ?>"><i>Modifier</i></a>
                                <br />
                            </td>
                            <td><a href="./deleteStatut.php?id=<?= $row["idStat"]; ?>"><i>Supprimer</i></a>
                                <br />
                            </td>
                        </tr>
                    <?php
                    }    // End of foreach
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