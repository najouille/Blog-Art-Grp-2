<?php
///////////////////////////////////////////////////////////////
//
//  CRUD thematique (PDO) - Code Modifié - 23 Janvier 2021
//
//  Script  : thematique.php  (ETUD)   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/thematique.class.php';

global $db;
$thematique = new THEMATIQUE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gestion du thematique</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD thematique</h1>

    <hr /><br />
    <h2>Nouveau Angle :<a href="./createThematique.php"><i>Créer un thematique</i></a></h2>
    <br />
    <hr />
    <h2>Tous les thematique</h2>

    <table border="3" bgcolor="aliceblue">
        <thead>
            <tr>
                <th>numThem</th>
                <th>libThem</th>
                <th colspan="1">numLang</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Appel méthode : tous les statuts en BDD

            $allThematiques = $thematique->get_AllThematiques();
            foreach ($allThematiques as $row) {
                // Boucle pour afficher
            ?>
                <tr>
                    <td>
                        <h4> <?php echo $row["numThem"]; ?> </h4>
                    </td>

                    <td> <?php echo $row["libThem"]; ?> </td>
                    <td> <?php echo $row["numLang"]; ?> </td>

                    <td><a href="./updateThematique.php?id=<?= $row["numThem"]; ?>"><i>Modifier</i></a>
                        <br />
                    </td>
                    <td><a href="./deleteThematique.php?id=<?= $row["numThem"]; ?>"><i>Supprimer</i></a>
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