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

    <link href="../css/style.css"  rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
</head>

<body class="twa-back">
    <div class="title">
    <img class="logo" src="../../front/assets/image/Townyart.png" alt="logotwy">
    <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
    </div>

    <h3>Créer un membre : <a href="./createMotCle.php">Créer Membre</a></h3>
<div class="twa-table">
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
                        <h4> <?php echo $row['numMotCle']; ?> </h4>
                    </td>
                    <td>
                        <h4> <?php echo $row['libMotCle']; ?> </h4>
                    </td>
                    <td>
                        <h4> <?php echo  $row['numLang']; ?> </h4>
                    </td>
                    
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>
    <?php
    require_once __DIR__ . '/footer.php';
    ?>
</body>

</html>