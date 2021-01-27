<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table ARTICLE
//
//  Script : getNextNumArt.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/util/utilErrOn.php';

    // Fonction pour recupérer la prochaine PK de la table ARTICLE
    function getNextNumArt() {

      global $db;

      $requete = "SELECT MAX(numArt) AS numArt FROM ARTICLE;";
      $result = $db->query($requete);

      if ($result) {
          $tuple = $result->fetch();
          $numArt = $tuple["numArt"];
          // No PK suivante ARTICLE
          $numArt++;

      }   // End of if ($result)
      return $numArt;
    } // End of function
