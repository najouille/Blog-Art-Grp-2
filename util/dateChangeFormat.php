<?
///////////////////////////////////////////////////////
//
//  Script : dateChangeFormat.php
//
///////////////////////////////////////////////////////
/******************************************************
*
* En entrée :
* 	Attribut date
*	Attribut avec format d'origine
*	Attribut format désiré en sortie
*En sortie :
*	Retourne tous les éléments de la fonction date() selon le format en E comme en S
*
*	$today = date("j, n, Y");		// 10, 3, 2001
*
*	$today = date("Y-m-d");			// 2001-03-10
*
*	$today = date("Y-m-d H:i:s");	// 2001-03-10 17:16:18 (le format DATETIME de MySQL)
*
*	En entrée :
*		$from='Y-m-d'
* ou
*		$from='Y-m-d H:i:s'
*
*	En sortie :
*		$to='d/m/Y'
* ou
*		$to='d/m/Y H:i:s'
*
*******************************************************/

  function dateChangeFormat($dateIn, $from, $to) {
      if ($dateIn != '') {
          $dateOut = DateTime::createFromFormat($from, $dateIn);
          return $dateOut->format($to);
      } else {
          return "";	// Si aucune date en entrée
      }
  }	// End of dateChangeFormat()

