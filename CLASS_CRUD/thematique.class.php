<?php


// FIX
require_once __DIR__ . '../../CONNECT/database.php';
class THEMATIQUE
{
	function get_1Thematique($numThem)
	{
		global $db;
		$queryText = 'SELECT * FROM thematique WHERE numThem = :numThem';
		$query = $db->prepare($queryText);
		$query->bindParam(':numThem', $numThem);
		$query->execute();
		$result = $query->fetch();
		$query->closeCursor();
		return ($result);
	}
	function get_AllThematiques()
	{
		global $db;
		$queryText = 'SELECT * FROM thematique';
		$query = $db->query($queryText);
		$result = $query->fetchAll();
		$query->closeCursor();
		return ($result);
	}
	function get_AllThematiquesByLang($numLang)
	{
		global $db;
		$queryText = 'SELECT * FROM thematique WHERE numLang = :numLang';
		$query = $db->prepare($queryText);
		$query->bindParam(':numLang', $numLang);
		$query->execute();
		$result = $query->fetchAll();
		$query->closeCursor();
		return ($result);
	}
	function create($numThem, $libThem, $numLang)
	{
		global $db;
		try {
			$queryText = "INSERT INTO thematique (numThem, libThem, numLang) VALUES (:numThem, :libThem, :numLang)";
			$db->beginTransaction();
			$query = $db->prepare($queryText);
			$query->bindParam(':numThem', $numThem);
			$query->bindParam(':libThem', $libThem);
			$query->bindParam(':numLang', $numLang);
			$query->execute();
			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur insert THEMATIQUE : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}
	function update($numThem, $libThem, $numLang)
	{
		global $db;
		try {
			$db->beginTransaction();
			$queryText = "UPDATE thematique SET libThem = :libThem , numLang =  :numLang WHERE numThem = :numThem ";
			$query = $db->prepare($queryText);
			$query->bindParam(':numThem', $numThem);
			$query->bindParam(':libThem', $libThem);
			$query->bindParam(':numLang', $numLang);
			$query->execute();
			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur update THEMATIQUE : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}
	function delete($numThem)
	{
		global $db;
		try {
			$queryText = "DELETE FROM thematique WHERE numThem = :numThem";
			$db->beginTransaction();
			$query = $db->prepare($queryText);
			$query->bindParam(':numThem', $numThem);
			$query->execute();
			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur delete THEMATIQUE : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}
}	// End of class
