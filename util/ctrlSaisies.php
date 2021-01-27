<?
///////////////////////////////////////////////////////
//
//  Script : ctrlSaisies.php
//
///////////////////////////////////////////////////////

    function ctrlSaisies($saisie){

      // Convertion caractères spéciaux en entités HTML => peu performant
      // Préférer htmlentities()
      $saisie = htmlspecialchars($saisie);
      // Suppression des espaces (ou d'autres caractères) en début et fin de chaîne
      $saisie = trim($saisie);
      // Suppression des antislashs d'une chaîne
      $saisie = stripslashes($saisie);
      // Conversion des caractères spéciaux en entités HTML
      $saisie = htmlentities($saisie);

      return $saisie;
    }
