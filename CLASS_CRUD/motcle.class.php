<?php
require_once __DIR__ . '../../CONNECT/database.php';
class MOTCLE
{
  function get_1MotCle($numMotCle)
  {
    global $db;
    $queryText = 'SELECT * FROM motcle WHERE numMotCle = :numMotCle';
    $query = $db->prepare($queryText);
    $query->bindParam(':numMotCle', $numMotCle);
    $query->execute();
    $result = $query->fetch();
    $query->closeCursor();
    return ($result);
  }
  function get_AllMotCles()
  {
    global $db;
    $queryText = 'SELECT * FROM motcle';
    $query = $db->query($queryText);
    $result = $query->fetchAll();
    $query->closeCursor();
    return ($result);
  }
  function get_AllMotClesWithLang()
  {
    global $db;

    $queryText = 'SELECT * FROM motcle INNER JOIN langue ON motcle.numLang = langue.numLang';

    $query = $db->query($queryText);

    $result = $query->fetchAll();

    $query->closeCursor();
    return ($result);
  }

  function get_AllMotClesByLang($numLang)
  {
    global $db;
    $queryText = 'SELECT * FROM motcle WHERE numLang = :numLang';
    $query = $db->prepare($queryText);
    $query->bindParam(':numLang', $numLang);
    $query->execute();
    $result = $query->fetchAll();
    $query->closeCursor();
    return ($result);
  }
  function create($libMotCle, $numLang)
  {
    global $db;
    try {
      $queryText = "INSERT INTO motcle (numMotCle, libMotCle, numLang) VALUES (:numMotCle, :libMotCle, :numLang)";
      $db->beginTransaction();
      $query = $db->prepare($queryText);
      $query->bindParam(':numMotCle', $numMotCle);
      $query->bindParam(':libMotCle', $libMotCle);
      $query->bindParam(':numLang', $numLang);
      $query->execute();
      $db->commit();
      $query->closeCursor();
    } catch (PDOException $e) {
      die('Erreur insert MOTCLE : ' . $e->getMessage());
      $db->rollBack();
      $query->closeCursor();
    }
  }
  function update($numMotCle, $libMotCle, $numLang)
  {
    global $db;
    try {
      $db->beginTransaction();
      $queryText = "UPDATE motcle SET libMotCle = :libMotCle, numLang = :numLang WHERE numMotCle = :numMotCle";
      $query = $db->prepare($queryText);
      $query->bindParam(':libMotCle', $libMotCle);
      $query->bindParam(':numLang', $numLang);
      $query->bindParam(':numMotCle', $numMotCle);
      $query->execute();
      $db->commit();
      $query->closeCursor();
    } catch (PDOException $e) {
      die('Erreur update MOTCLE : ' . $e->getMessage());
      $db->rollBack();
      $query->closeCursor();
    }
  }
  function delete($numMotCle)
  {
    global $db;
    try {
      $queryText = "DELETE FROM motcle WHERE numMotCle = :numMotCle";
      $db->beginTransaction();
      $query = $db->prepare($queryText);
      $query->bindParam(':numMotCle', $numMotCle);
      $query->execute();
      $db->commit();
      $query->closeCursor();
    } catch (PDOException $e) {
      die('Erreur delete MOTCLE : ' . $e->getMessage());
      $db->rollBack();
      $query->closeCursor();
    }
  }
}	// End of class
