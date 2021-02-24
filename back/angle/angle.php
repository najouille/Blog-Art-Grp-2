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
    <title>Gestion de l'angle</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Angle</h1>
    </div>

    <br />
    <a class="button-create input-button"  href="./createAngle.php">Créer un Angle</a>
    <br />
    
    <div class="container-center">
        <table class="twa-table" border="3">
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
                        <td><a class='link-delete' href="./deleteAngle.php?id=<?= $row["numAngl"]; ?>"><i>Supprimer</i></a>
                            <br />
                        </td>
                    </tr>
                <?php
                }    // End of foreach
                ?>
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="align-footer">
        <?php
        require_once __DIR__ . '/footer.php';
        ?>
    </div>
</body>

</html>