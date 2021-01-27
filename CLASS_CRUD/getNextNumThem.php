<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table THEMATIQUE
//
//  Script : getNextNumThem.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/util/utilErrOn.php';

    function getNextNumThem($numLang) {

      global $db;

      // Découpage FK LANGUE
      $libLangSelect = substr($numLang, 0, 4);
      $parmNumLang = $libLangSelect . '%';

      $requete = "SELECT MAX(numLang) AS numLang FROM THEMATIQUE WHERE numLang LIKE '$parmNumLang';";
      $result = $db->query($requete);

      if ($result) {
          $tuple = $result->fetch();
          $numLang = $tuple["numLang"];
          if (is_null($numLang)) {    // New lang dans THEMATIQUE
              // Récup dernière PK utilisée
              $requete = "SELECT MAX(numThem) AS numThem FROM THEMATIQUE;";
              $result = $db->query($requete);
              $tuple = $result->fetch();
              $numThem = $tuple["numThem"];

              $numThemSelect = (int)substr($numThem, 3, 2);
              // No séquence suivant LANGUE
              $numSeq1Them = $numThemSelect + 1;
              // Init no séquence THEMATIQUE pour nouvelle lang
              $numSeq2Them = 1;
          }
          else {
              // Récup dernière PK pour FK sélectionnée
              $requete = "SELECT MAX(numThem) AS numThem FROM THEMATIQUE WHERE numLang LIKE '$parmNumLang' ;";
              $result = $db->query($requete);
              $tuple = $result->fetch();
              $numThem = $tuple["numThem"];

              // No séquence actuel LANGUE
              $numSeq1Them = (int)substr($numThem, 3, 2);
              // No séquence actuel LANGUE
              $numSeq2Them = (int)substr($numThem, 5, 2);
              // No séquence suivant THEMATIQUE
              $numSeq2Them++;
          }

          $libThemSelect = "THE";
          // PK reconstituée : THE + no seq langue
          if ($numSeq1Them < 10) {
              $numThem = $libThemSelect . "0" . $numSeq1Them;
          }
          else {
              $numThem = $libThemSelect . $numSeq1Them;
          }
          // PK reconstituée : THE + no seq langue + no seq thématique
          if ($numSeq2Them < 10) {
              $numThem = $numThem . "0" . $numSeq2Them;
          }
          else {
              $numThem = $numThem . $numSeq2Them;
          }
      }   // End of if ($result) / no seq LANGUE
      return $numThem;
    } // End of function
