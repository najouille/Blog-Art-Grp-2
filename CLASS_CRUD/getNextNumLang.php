<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table LANGUE
//
//  Script : getNextNumLang.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/../util/utilErrOn.php';

    function getNextNumLang($numPays) {

      global $db;

      // Les 4 premiers caractères de la PK concernent le pays
      // les 4 suivants représentent un numéro de séquence
      // Récup dernière PK utilisée pour le pays concerné
      $numPaysSelect = $numPays;  // exemple : 'CHIN'
      $parmNumLang = $numPaysSelect . '%';
      $requete = "SELECT MAX(numLang) AS numLang FROM LANGUE WHERE numLang LIKE '$parmNumLang';";

      $result = $db->query($requete);

      $numSeqLang = 0;
      if ($result) {
          // Récup résultat requête
          $tuple = $result->fetch();
          $numLang = $tuple["numLang"];
          if (is_null($numLang)) {
              $numLang = 0;
              $strLang = $numPaysSelect;
          }
          else {
              // Récup dernière PK attribuée
              $numLang = $tuple["numLang"];
              $strLang = substr($numLang, 0, 4);
              $numSeqLang = (int)substr($numLang, 4);
          }
          $numSeqLang++;

          // PK reconstituée
          if ($numSeqLang < 10) {
              $numLang = $strLang . "0" . $numSeqLang;
          }
          else {
              $numLang = $strLang . $numSeqLang;
          }
      }   // End of if ($result)

      return $numLang;
    } // End of function
