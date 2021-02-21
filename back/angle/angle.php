<?php
///////////////////////////////////////////////////////////////
//
//  CRUD ANGLE (PDO) - Code Modifié - 23 Janvier 2021
//
//  Script  : angle.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/angle.class.php';

global $db;
$angle = new ANGLE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion du angle</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Angle</h1>

    <hr /><br />
    <h2>Nouveau Angle :<a href="./createAngle.php"><i>Créer un statut</i></a></h2>
    <br />
    <hr />
    <h2>Tous les statuts</h2>

    <table border="3" bgcolor="aliceblue">
        <thead>
            <tr>
                <th>numAngl</th>
                <th>libAngl</th>
                <th colspan="1">numLang</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Appel méthode : tous les statuts en BDD

            $allAngles = $angle->get_AllAngles();
            foreach ($allAngles as $row) {
                // Boucle pour afficher
            ?>
                <tr>
                    <td>
                        <h4> <?php echo $row["numAngl"]; ?> </h4>
                    </td>

                    <td> <?php echo $row["libAngl"]; ?> </td>
                    <td> <?php echo $row["numLang"]; ?> </td>

                    <td><a href="./updateAngle.php?id=<?= $row["numAngl"]; ?>"><i>Modifier</i></a>
                        <br />
                    </td>
                    <td><a href="./deleteAngle.php?id=<?= $row["numAngl"]; ?>"><i>Supprimer</i></a>
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