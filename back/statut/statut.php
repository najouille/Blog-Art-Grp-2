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
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Statut</h1>

    <hr /><br />
    <h2>Nouveau statut :<a href="./createStatut.php"><i>Créer un statut</i></a></h2>
    <br />
    <hr />
    <h2>Tous les statuts</h2>

    <table border="3" bgcolor="aliceblue">
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
    <br><br>
    <?php
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>