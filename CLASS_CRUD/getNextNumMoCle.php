<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table MOTCLE
//
//  Script : getNextNumMoCle.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/util/utilErrOn.php';

    function getNextNumMoCle($numLang) {

      global $db;

      // Découpage FK LANGUE
      $libLangSelect = substr($numLang, 0, 4);
      $parmNumLang = $libLangSelect . '%';

      $requete = "SELECT MAX(numLang) AS numLang FROM MOTCLE WHERE numLang LIKE '$parmNumLang';";
      $result = $db->query($requete);

      if ($result) {
          $tuple = $result->fetch();
          $numLang = $tuple["numLang"];
          if (is_null($numLang)) {    // New lang dans MOTCLE
              // Récup dernière PK utilisée
              $requete = "SELECT MAX(numMoCle) AS numMoCle FROM MOTCLE;";
              $result = $db->query($requete);
              $tuple = $result->fetch();
              $numMoCle = $tuple["numMoCle"];

              $numMoCleSelect = (int)substr($numMoCle, 4, 2);
              // No séquence suivant LANGUE
              $numSeq1MoCle = $numMoCleSelect + 1;
              // Init no séquence MOTCLE pour nouvelle lang
              $numSeq2MoCle = 1;
          }
          else {
              // Récup dernière PK pour FK sélectionnée
              $requete = "SELECT MAX(numMoCle) AS numMoCle FROM MOTCLE WHERE numLang LIKE '$parmNumLang' ;";
              $result = $db->query($requete);
              $tuple = $result->fetch();
              $numMoCle = $tuple["numMoCle"];

              // No séquence actuel LANGUE
              $numSeq1MoCle = (int)substr($numMoCle, 4, 2);
              // No séquence actuel MOTCLE
              $numSeq2MoCle = (int)substr($numMoCle, 6, 2);
              // No séquence suivant MOTCLE
              $numSeq2MoCle++;
          }

          $libMoCleSelect = "MTCL";
          // PK reconstituée : MTCL + no seq langue
          if ($numSeq1MoCle < 10) {
              $numMoCle = $libMoCleSelect . "0" . $numSeq1MoCle;
          }
          else {
              $numMoCle = $libMoCleSelect . $numSeq1MoCle;
          }
          // PK reconstituée : MOCL + no seq langue + no seq mot clé
          if ($numSeq2MoCle < 10) {
              $numMoCle = $numMoCle . "0" . $numSeq2MoCle;
          }
          else {
              $numMoCle = $numMoCle . $numSeq2MoCle;
          }
      }   // End of if ($result) / no seq LANGUE
      return $numMoCle;
    } // End of function
