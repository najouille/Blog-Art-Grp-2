<?php
	// CONNEXION BDD
  // Variables connexion
  require_once __DIR__.'/config.php';

  try {
    $db = new PDO($serverBD, $userBD, $passBD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  } catch (PDOException $err) {
    die('Echec connexion BLOGART : ' . $err->getMessage());
  }
