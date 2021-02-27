<?php
/////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : updateLangue.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../CLASS_CRUD/membre.class.php';
include __DIR__ . '/initMembre.php';

if (!isset($_GET['id'])) $_GET['id'] = '';

$article = new ARTICLE;
$member = new MEMBRE;
$erreur = '';
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $numMemb = $_POST["id"];

  if ($_POST["Submit"] === "Annuler") {
    header("Location: ./motcle.php");
    die();
  }
  
  if (isset($prenomMemb) && isset($nomMemb) && isset($pseudoMemb) && isset($eMailMemb) && isset($passMemb) && isset($souvenirMemb) && isset($accordMemb) && isset($idStat)) {
    // $article->update($numMemb, );
    $updated = true;
  } else {
    $updated = false;
  }
} else {
  $numMemb = $_GET["id"];
}

$resultMembre = $member->get_1Membre($numMemb);

if ($resultMembre) {
  $prenomMemb = $resultMembre["prenomMemb"];
  $nomMemb = $resultMembre["nomMemb"];
  $pseudoMemb = $resultMembre["pseudoMemb"];
  $eMailMemb = $resultMembre["eMailMemb"];
  $passMemb = $resultMembre["passMemb"];
  $souvenirMemb = $resultMembre["souvenirMemb"];
  $accordMemb = $resultMembre["accordMemb"];
  $idStat = $resultMembre["idStat"];
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Admin - Gestion du CRUD Membre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <link href="../css/back-office.css" rel="stylesheet" type="text/css" />
  <link href="../css/footer-back.css" rel="stylesheet" type="text/css" />
</head>

<body class="twa-back">
  <div class="title">
    <img class='logo' src="../../front/assets/image/Townyart.png" alt="logo-townyart">
    <h1>BLOGART21 Admin - Gestion du CRUD Membre</h1>
  </div>
  <h3>Modification d'un membre</h3>
  <?
    // Modif : récup id à modifier
    if (isset($_GET['id']) and $_GET['id'] > 0) {

        $numArt = ctrlSaisies(($_GET['id']));

        $query = (array)$monArticle->get_1Art($numArt);

        if ($query) {
            $libTitrArt = $query['libTitrArt'];
            $libChapoArt = $query['libChapoArt'];
            $libAccrochArt = $query['libAccrochArt'];
            $parag1Art = $query['parag1Art'];
            $libSsTitr1Art = $query['libSsTitr1Art'];
            $parag2Art = $query['parag2Art'];
            $libSsTitr2Art = $query['libSsTitr2Art'];
            $parag3Art = $query['parag3Art'];
            $libConclArt = $query['libConclArt'];
            $idAngl = $query['numAngl'];
            $idThem = $query['numThem'];

        }   // Fin if ($query)
    }   // Fin if (isset($_GET['id'])...)
?>
  <form method="post" action="<?= "./updateMembre.php?id=" . $numMemb; ?>" enctype="multipart/form-data">
    <div class="fieldset-container">
      <fieldset>
        <legend class="legend1">Formulaire Langue...</legend>

        <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />

        <div class="control-group">



          <div class="container-input">
            <label class="control-label" for="prenomMemb"><b>Prénom du membre :</b></label>
            <input type="text" name="prenomMemb" id="prenomMemb" size="40" maxlength="80" autofocus value="<?= $prenomMemb ?>" /><br><br>
          </div>

          <div class="container-input">
            <label class="control-label" for="nomMemb"><b>Nom du membre :</b></label>
            <input type="text" name="nomMemb" id="nomMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $nomMemb ?>" /><br><br>
          </div>

          <div class="container-input">
            <label class="control-label" for="pseudoMemb"><b>Pseudo :</b></label>
            <input type="text" name="pseudoMemb" id="pseudoMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $pseudoMemb ?>" /><br><br>
          </div>

          <div class="container-input">
            <label class="control-label" for="eMailMemb"><b>Email :</b></label>
            <input type="email" name="eMailMemb" id="eMailMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $eMailMemb ?>" /><br><br>
          </div>

          <div class="container-input">
            <label class="control-label" for="passMemb"><b>Password :</b></label>
            <input type="password" name="passMemb" id="passMemb" size="40" maxlength="80" autofocus="autofocus" value="<?= $passMemb ?>" /><br><br>
          </div>

          <div class="container-input">
            <label for="idStat">Status</label>
            <select name="idStat" id="idStat">
              <?php
              $allStatuts = $statut->get_AllStatuts();
              foreach ($allStatuts as $row) {
                echo '<option value="' . $row["idStat"] . '">' . $row["libStat"] . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="container-input">
            <label class="control-label" for="souvenirMemb"><b>Se souvenir de ce membre :</b></label>
            <input type="checkbox" name="souvenirMemb" id="souvenirMemb" size="40" maxlength="80" autofocus="autofocus" <?= $souvenirMemb ? 'checked' : '' ?> /><br><br>
          </div>

          <div class="container-input">
            <label class="control-label" for="accordMemb"><b>Accord :</b></label>
            <input type="checkbox" name="accordMemb" id="accordMemb" size="40" maxlength="80" autofocus="autofocus" <?= $accordMemb ? 'checked' : '' ?> />
          </div>

          <div class="controls">
            <br><br>
            <input class="input-button" type="submit" value="Initialiser" name="Submit" />
            <input class="input-button" id="button-valid" type="submit" value="Valider" name="Submit" />
            <br>
          </div>
        </div>
      </fieldset>
    </div>
    <div class="align-footer">
      <?php

      require_once __DIR__ . '/footerMembre.php';
      require_once __DIR__ . '/footer.php';
      ?>
    </div>
  </form>

  <div class="align-footer">
    <?php
    //require_once __DIR__ . '/footerMotCle.php';
    // require_once __DIR__ . '/footer.php';
    ?>
  </div>
</body>

</html>
