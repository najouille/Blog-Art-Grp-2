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
    <link rel="stylesheet" href="../css/back-office.css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Langue</h1>
    </div>

    <h3>Toutes les Langues</h3>
    <a class="align-footer" class="button" href="./createLangue.php">Créer une langue</a>
    <div class="container-center">
        <table class="twa-table" border="3" bgcolor="aliceblue">
            <thead>
                <tr>
                    <th>NumLang</th>
                    <th>Lib1</th>
                    <th>Lib2</th>
                    <th colspan="1">Numpays</th>
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
    </div>
    <div class="align-footer">
    <?php
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/footerLangue.php';
?>
    </div>
    
</body>

</html>