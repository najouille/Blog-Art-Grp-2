<?php
/////////////////////////////////////////////////////
//
//  CRUD LANGUE (PDO) - Modifié - 6 Décembre 2020
//
//  Script  : updateLangue.php  (ETUD)   -   BLOGART21
//
/////////////////////////////////////////////////////

// FIX image change don't works

require_once __DIR__ . '/../../util/utilErrOn.php';
require_once __DIR__ . '/../../util/ctrlSaisies.php';
require_once __DIR__ . '/../../CLASS_CRUD/article.class.php';
include __DIR__ . '/initArticle.php';

if (!isset($_GET['id'])) $_GET['id'] = '';

$article = new ARTICLE;
$erreur = '';
$updated = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $numArt = $_POST["id"];

  if ($_POST["Submit"] === "Annuler") {
    header("Location: ./motcle.php");
    die();
  }

  if (
    empty($_POST['numArt']) &&
    empty($_POST['dtCreArt']) &&
    empty($_POST['libTitrArt']) &&
    empty($_POST['libChapoArt']) &&
    empty($_POST['libAccrochArt']) &&
    empty($_POST['parag1Art']) &&
    empty($_POST['libSsTitr1Art']) &&
    empty($_POST['parag2Art']) &&
    empty($_POST['libSsTitr2Art']) &&
    empty($_POST['parag3Art']) &&
    empty($_POST['libConclArt']) &&
    // empty($_POST['urlPhotArt']) &&
    empty($_POST['numAngl']) &&
    empty($_POST['numThem'])
  ) {
    $numAngl = null;
    $erreur = $erreur . "<span>il manque des arguments</span>";
    $updated = false;
  } else {
    $numArt = $_POST['id'];
    $dtCreArt = $_POST['dtCreArt'];
    $libTitrArt = $_POST['libTitrArt'];
    $libChapoArt = $_POST['libChapoArt'];
    $libAccrochArt = $_POST['libAccrochArt'];
    $parag1Art = $_POST['parag1Art'];
    $libSsTitr1Art = $_POST['libSsTitr1Art'];
    $parag2Art = $_POST['parag2Art'];
    $libSsTitr2Art = $_POST['libSsTitr2Art'];
    $parag3Art = $_POST['parag3Art'];
    $libConclArt = $_POST['libConclArt'];
    // $urlPhotArt = $_POST['urlPhotArt'];
    $numAngl = $_POST['numAngl'];
    $numThem = $_POST['numThem'];
  }

  if (
    isset($numArt) &&
    isset($dtCreArt) &&
    isset($libTitrArt) &&
    isset($libChapoArt) &&
    isset($libAccrochArt) &&
    isset($parag1Art) &&
    isset($libSsTitr1Art) &&
    isset($parag2Art) &&
    isset($libSsTitr2Art) &&
    isset($parag3Art) &&
    isset($libConclArt) &&
    // isset($urlPhotArt) &&
    isset($numAngl) &&
    isset($numThem)
  ) {
    $fffile = fopen("./log.txt", "w") or die("Unable to open file!");
    $txt = "
    $numArt,
    $dtCreArt,
    $libTitrArt,
    $libChapoArt,
    $libAccrochArt,
    $parag1Art,
    $libSsTitr1Art,
    $parag2Art,
    $libSsTitr2Art,
    $parag3Art,
    $libConclArt,
    $urlPhotArt,
    $numAngl,
    $numThem
    ";
    fwrite($fffile, $txt);
    $article->update(
      $numArt,
      $dtCreArt,
      $libTitrArt,
      $libChapoArt,
      $libAccrochArt,
      $parag1Art,
      $libSsTitr1Art,
      $parag2Art,
      $libSsTitr2Art,
      $parag3Art,
      $libConclArt,
      $urlPhotArt,
      $numAngl,
      $numThem
    );
    $updated = true;
  } else {
    $updated = false;
  }
} else {
  $numArt = $_GET["id"];
}

$resultArticle = $article->get_1Article($numArt);

if ($resultArticle) {

  $numArt = $resultArticle['numArt'];
  $dtCreArt = $resultArticle['dtCreArt'];
  $libTitrArt = $resultArticle['libTitrArt'];
  $libChapoArt = $resultArticle['libChapoArt'];
  $libAccrochArt = $resultArticle['libAccrochArt'];
  $parag1Art = $resultArticle['parag1Art'];
  $libSsTitr1Art = $resultArticle['libSsTitr1Art'];
  $parag2Art = $resultArticle['parag2Art'];
  $libSsTitr2Art = $resultArticle['libSsTitr2Art'];
  $parag3Art = $resultArticle['parag3Art'];
  $libConclArt = $resultArticle['libConclArt'];
  $urlPhotArt = $resultArticle['urlPhotArt'];
  $numAngl = $resultArticle['numAngl'];
  $numThem = $resultArticle['numThem'];
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
  <pre>

  <?=
  ($_GET["id"]) .
    "\n" .
    ($_POST["id"])
    . "\n" .
    $numArt . "\n"

  ?>
  </pre>
  <?php
  if ($updated) {
    echo '<p style="color:blue;">Le mot-clé "' . $libTitrArt . '" a été bien modifié.</p>';
  } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<p style="color:red;">Le mot-clé pas été modifié ' . $erreur . ' </p>';
  }
  ?>

  <form method="post" action="<?= "./updateArticle.php?id=" . $numArt ?>" enctype="multipart/form-data">
    <div class="fieldset-container">
      <fieldset>
        <legend class="legend1">Formulaire Langue...</legend>

        <input type="hidden" id="id" name="id" value="<?= $_GET['id']; ?>" />
        <input type="hidden" id="dtCreArt" name="dtCreArt" value="<?= $dtCreArt; ?>" />

        <div class="control-group-colonne">



          <div class="container-input">
            <label for="libTitrArt"><b>Titre de l'article :</b></label>
            <input class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libTitrArt" id="libTitrArt" maxlength="100" value="<?= $libTitrArt ?>" placeholder="placeholder" autofocus="autofocus" />
          </div>

          <div class="container-input">
            <label for="urlPhotArt"><b>Image :</b></label>
            <input type="file" class="control-label" onkeyup="charcountupdate(this.value)" value="<?= $urlPhotArt ?>" name="urlPhotArt">
          </div>

          <div class="container-input">
            <label for="libChapoArt"><b>Chapeau :</b></label>
            <textarea class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libChapoArt" id="libChapoArt" cols="30" rows="2" maxlength="500" placeholder="Paragraphe 1"><?= $libChapoArt ?></textarea>
            <span class="pull-right label label-default" id="count_message" style="background-color: smoke; margin-top: -20px; margin-right: 5px;"></span>
          </div>

          <div class="container-input">
            <label for="libAccrochArt"><b>Accroche :</b></label>
            <input class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libAccrochArt" id="libAccrochArt" maxlength="100" value="<?= $libAccrochArt ?>" placeholder="placeholder" />
          </div>

          <div>
            <label for="libSsTitr1Art"><b>Paragraphe 1 :</b></label>
            <input class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libSsTitr1Art" id="libSsTitr1Art" maxlength="100" value="<?= $libSsTitr1Art ?>" placeholder="Titre 1er article" />
            <textarea class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="parag1Art" id="parag1Art" cols="30" rows="3" maxlength="1200" placeholder="pla"><?= $parag1Art ?></textarea>
          </div>

          <div>
            <label for="libSsTitr2Art"><b>Paragraphe 2 :</b></label>
            <input class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libSsTitr2Art" id="libSsTitr2Art" maxlength="100" value="<?= $libSsTitr2Art ?>" placeholder="Titre 2eme article" />
            <textarea class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="parag2Art" id="parag2Art" cols="30" rows="3" maxlength="1200" placeholder="placeholder"><?= $parag2Art ?></textarea>
          </div>

          <div>
            <label for="parag3Art"><b>Paragraphe 3 :</b></label>
            <textarea class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="parag3Art" id="parag3Art" cols="30" rows="3" maxlength="1200" placeholder="placeholder"><?= $parag3Art ?></textarea>
          </div>

          <div>
            <label for="libConclArt"><b>Conclusion :</b></label>
            <textarea class="control-label" type="text" onkeyup="charcountupdate(this.value)" name="libConclArt" id="libConclArt" cols="30" rows="2" maxlength="800" placeholder="En conclusion..."><?= $libConclArt ?></textarea>
          </div>

          <div class="row">
            <div>
              <label for="numAngl"><b>Angle :</b></label>
              <select name="numAngl" class="control-label" id="numAngl">
                <option value="" selected disabled hidden>--Sélectionner un angle--</option>
                <?php
                global $db;
                $request = 'SELECT * FROM ANGLE ;';
                $result = $db->query($request);
                $allAngles = $result->fetchAll();
                foreach ($allAngles as $row) {
                  if ($row["numAngl"] === $numAngl) {
                    $selected = "selected";
                  } else {
                    $selected = "";
                  }
                ?>
                  <option value="<?= $row['numAngl'] ?>" <?= $selected ?>><?= $row['libAngl'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div>
              <label for="numThem"><b>Thématique :</b></label>
              <select name="numThem" class="control-label" id="numThem">
                <option value="">--Choississez une thématique--</option>
                <?php
                global $db;
                $request = 'SELECT * FROM THEMATIQUE';
                $result = $db->query($request);
                $allThematiques = $result->fetchAll();
                foreach ($allThematiques as $row) {
                  if ($row["numThem"] === $numThem) {
                    $selected = "selected";
                  } else {
                    $selected = "";
                  }
                ?>
                  <option value="<?php echo $row['numThem']; ?>" <?= $selected ?>><?php echo $row['libThem']; ?></option>
                <?php
                }
                ?>

              </select>
            </div>
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

  </form>

  <div class="align-footer">
    <?php
    require_once __DIR__ . '/footerArticle.php';
    require_once __DIR__ . '/footer.php';
    ?>
  </div>
</body>

</html>