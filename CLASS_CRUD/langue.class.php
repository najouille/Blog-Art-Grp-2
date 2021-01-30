	<?php
	require_once __DIR__ . "../../CONNECT/database.php";
	class LANGUE
	{
		function get_1Langue($numLang)
		{
			global $db;
			$queryText = "SELECT * FROM langue WHERE numLang = :numLang";
			$query = $db->prepare($queryText);
			$query->bindParam(":numLang", $numLang);
			$query->execute();
			$result = $query->fetch();
			$query->closeCursor();
			return $result;
		}
		function get_1LangueByPays($numLang)
		{
			global $db;
			$queryText =
				"SELECT * FROM langue INNER JOIN pays ON langue.numPays = pays.numPays WHERE numLang =:numLang";
			$query = $db->prepare($queryText);
			$query->bindParam(":numLang", $numLang);
			$query->execute();
			$result = $query->fetch();
			$query->closeCursor();
			return $result;
		}
		function get_AllLangues()
		{
			global $db;
			$queryText = "SELECT * FROM langue";
			$query = $db->query($queryText);
			$result = $query->fetchAll();
			$query->closeCursor();
			return $result;
		}
		function get_AllLanguesByPays()
		{
			global $db;
			$queryText =
				"SELECT * FROM langue INNER JOIN pays ON langue.numPays = pays.numPays";
			$query = $db->prepare($queryText);
			$query->execute();
			$result = $query->fetchAll();
			$query->closeCursor();
			return $result;
		}
		function create($numLang, $lib1Lang, $lib2Lang, $numPays)
		{
			global $db;
			try {
				$queryText =
					"INSERT INTO langue (numLang, lib1Lang, lib2Lang, numPays) VALUES (?, ?, ?, ?)";
				$db->beginTransaction();
				$query = $db->prepare($queryText);
				$query->execute([$numLang, $lib1Lang, $lib2Lang, $numPays]);
				$db->commit();
				$query->closeCursor();
			} catch (PDOException $e) {
				die("Erreur insert LANGUE : " . $e->getMessage());
				$db->rollBack();
				$query->closeCursor();
			}
		}
		function update($numLang, $lib1Lang, $lib2Lang, $numPays)
		{
			global $db;
			try {
				$db->beginTransaction();
				$queryText =
					"UPDATE langue SET lib1Lang = ?, lib2Lang = ?, numPays = ? WHERE numLang = ?";
				$query = $db->prepare($queryText);
				$query->execute([$lib1Lang, $lib2Lang, $numPays, $numLang]);
				$db->commit();
				$query->closeCursor();
			} catch (PDOException $e) {
				die("Erreur update LANGUE : " . $e->getMessage());
				$db->rollBack();
				$query->closeCursor();
			}
		}
		function delete($numLang)
		{
			global $db;
			try {
				$queryText = "DELETE FROM langue WHERE numLang = :numLang";
				$db->beginTransaction();
				$query = $db->prepare($queryText);
				$query->bindParam(":numLang", $numLang);
				$query->execute();
				$db->commit();
				$query->closeCursor();
			} catch (PDOException $e) {
				die("Erreur delete LANGUE : " . $e->getMessage());
				$db->rollBack();
				$query->closeCursor();
			}
		}
	} // End of class
