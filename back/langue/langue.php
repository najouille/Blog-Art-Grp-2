<?php
/////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : langue.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/langue.class.php';
global $db;
$statut = new LANGUE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Langue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>

    <h2>Tous les Langues</h2>
    <hr /><br />
    <h2>Nouvelle Langue :<a href="./createLangue.php"><i>Créer une langue</i></a></h2>
    <br />
    <hr />
    <h2>Tous les statuts</h2>

    

    <table border="3" bgcolor="aliceblue">
        <thead>
            <tr>
                <th>NumLang</th>
                <th>Lib1</th>
                <th>Lib2</th>
                <th>NumPays</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $allLang = $statut->get_AllLangues();
            foreach ($allLang as $row) {
            ?>
                <tr>
                    <td>
                        <h4> <?php echo $row["numLang"]; ?> </h4>
                    </td>
                    <td> <?php echo $row["lib1Lang"]; ?> </td>
                    <td> <?php echo $row["lib2Lang"]; ?> </td>
                    <td> <?php echo $row["numPays"]; ?> </td>

                    <td><a href="./updateLangue.php?id=<?= $row["numLang"]; ?>"><i>Modifier</i></a>
                        <br />
                    </td>
                    <td><a href="./deleteLangue.php?id=<?= $row["numLang"]; ?>"><i>Supprimer</i></a>
                        <br />
                    </td>
                </tr>
            <?php
            }    // End of foreach
            ?>
        </tbody>
    </table>

    <br><br>

    <?
require_once __DIR__ . '/footer.php';
?>
</body>

</html>