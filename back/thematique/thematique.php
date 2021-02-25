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
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
    <link rel="stylesheet" href="../css/footer-back.css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Thématique</h1>
    </div>

    <div class="container-center">
        <a class="button-create input-button" href="./createThematique.php">Créer une thématique</a></h2>
        <table class="twa-table" border="3">
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
    </div>

    <div class="align-footer">
        <?php
        require_once __DIR__ . '/footer.php';
        ?>
    </div>

</body>

</html>