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
require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
global $db;
$member = new MEMBRE;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>Admin - Gestion du CRUD Membre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/back-office.css" />
</head>

<body class="twa-back">
    <div class="title">
        <img class="logo" src="../../front/assets/image/Townyart.png" alt="logo-townyart">
        <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
    </div>

    <div class="container-center">
    <a class="button-create input-button" href="./createMembre.php">Créer Membre</a>
        <table class="twa-table" border='3'>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Pseudo</th>
                    <th>Password</th>
                    <th>E-mail</th>
                    <th>Date</th>
                    <th>souvenirMemb</th>
                    <th>accordMemb</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $allMembres = $member->get_AllMembres();
                foreach ($allMembres as $row) {
                ?>
                    <tr>
                        <td>
                            <h4> <?php echo $row['numMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['prenomMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo  $row['nomMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['pseudoMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['passMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['eMailMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['dtCreaMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['souvenirMemb']; ?> </h4>
                        </td>
                        <td>
                            <h4> <?php echo $row['accordMemb']; ?> </h4>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="align-footer">
        <?php
        require_once __DIR__ . '/footer.php';
        require_once __DIR__ . '/footerMembre.php';
        ?>
    </div>
</body>

</html>