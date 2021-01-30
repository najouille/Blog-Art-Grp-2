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
    <h2>Nouvelle Langue :&nbsp;<a href="./createLangue.php"><i>Créer une langue</i></a></h2>
    <br />
    <hr />
    <h2>Tous les statuts</h2>

    

    <table border="3" bgcolor="aliceblue">
        <thead>
            <tr>
                <th>&nbsp;NumLang&nbsp;</th>
                <th>&nbsp;Lib1&nbsp;</th>
                <th>&nbsp;Lib2&nbsp;</th>
                <th>&nbsp;NumPays&nbsp;</th>
                <th colspan="2">&nbsp;Action&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $allLang = $statut->get_AllLangues();
            foreach ($allLang as $row) {
            ?>
                <tr>
                    <td>
                        <h4>&nbsp; <?php echo $row["numLang"]; ?> &nbsp;</h4>
                    </td>
                    <td>&nbsp; <?php echo $row["lib1Lang"]; ?> &nbsp;</td>
                    <td>&nbsp; <?php echo $row["lib2Lang"]; ?> &nbsp;</td>
                    <td>&nbsp; <?php echo $row["numPays"]; ?> &nbsp;</td>

                    <td>&nbsp;<a href="./updateLangue.php?id=<?= $row["numLang"]; ?>"><i>Modifier</i></a>&nbsp;
                        <br />
                    </td>
                    <td>&nbsp;<a href="./deleteLangue.php?id=<?= $row["numLang"]; ?>"><i>Supprimer</i></a>&nbsp;
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