<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table COMMENT
//
//  Script : getNextNumCom.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV
require_once __DIR__ . '/util/utilErrOn.php';

// Fonction : recupérer next numéro séquence de article recherché (PK COMMENT)
// Commentaire suivant sur un article
// => Pour table COMMENT & table COMMENTPLUS

    function getNextNumCom($numArt) {

      global $db;

      //récup id de l'article et num séquence comment
      $queryText = "SELECT CO.numArt, MAX(numSeqCom) AS numSeqCom FROM ARTICLE AR INNER JOIN COMMENT CO ON AR.numArt = CO.numArt WHERE AR.numArt = ?;";
      $result = $db->prepare($queryText);
      $result->execute(array($numArt));

      if ($result) {
          $tuple = $result->fetch();
          $numArtCom = $tuple["numArt"];
          $numSeqCom = $tuple["numSeqCom"];
          // New comment dans COMMENT ou REPONSE pour ARTICLE
          if (is_null($numArtCom)) { // si l'id de l'article est null
              // Init no séquence
              $numSeqCom = 1; //première fois qu'on rentre un commentaire pour cet article
          }
          else {
            if ((!is_null($numArtCom)) AND (!is_null($numSeqCom))) { //si num de sequence existe alors numéro de séquence++
              // No séquence suivant
              $numSeqCom++;
            } else {
              // Pbl cohérence select NumArt & NumCom
              return -1;
            }
          }
          return $numSeqCom;
      }   // End of if ($result)
      else {
        return -1;  // Pbl select / BDD
      }
    } // End of function
