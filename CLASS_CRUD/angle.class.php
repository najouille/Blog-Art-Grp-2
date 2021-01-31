<?php

	require_once __DIR__ . '../../CONNECT/database.php';

	class ANGLE{
		function get_1Angle($numAngl){
			global $db;

			$query = 'SELECT * FROM angle WHERE numAngl = :numAngl';

			$query = $db->prepare($query);
			$query->bindParam(':numAngl', $numAngl);

	
			$query->execute();
	
			$result = $query->fetch();
	
			$query->closeCursor();
			return ($result);
		}

		function get_AllAngles(){
			global $db;

			$query = 'SELECT * FROM angle';

			$query = $db->query($query);
		
			$result = $query->fetchAll();
	
			$query->closeCursor();
			return ($result);
		}

		function get_AllAnglesByLang($numLang){
			global $db;

			$query = 'SELECT * FROM angle WHERE numLang = :numLang';

			$query = $db->prepare($query);
			$query->bindParam(':numLang', $numLang);
	
			$query->execute();
	
			$result = $query->fetchAll();
	
			$query->closeCursor();
			return ($result);
		}

		function create($numAngl, $libAngl, $numLang){
			global $db;
			try {
				$queryText = "INSERT INTO angle (numAngl, libAngl, numLang) VALUES (:numAngl, :libAngl, :numLang)";

				$db->beginTransaction();

				$query = $db->prepare($queryText);
				$query->bindParam(':numAngl', $numAngl);
				$query->bindParam(':libAngl', $libAngl);
				$query->bindParam(':numLang', $numLang);

				$query->execute();

				$db->commit();

				$query->closeCursor();
			}
			catch (PDOException $e) {
					die('Erreur insert ANGLE : ' . $e->getMessage());
					$db->rollBack();
					$query->closeCursor();
			}
		}

		function update($numAngl, $libAngl, $numLang){
			global $db;
			try {
				$db->beginTransaction();

				$queryText = "UPDATE angle SET libAngl = :libAngl, numLang = :numLang WHERE numAngl = :numAngl";

				$query = $db->prepare($queryText);
				$query->bindParam(':numAngl', $numAngl);
				$query->bindParam(':libAngl', $libAngl);
				$query->bindParam(':numLang', $numLang);

				$query->execute();

				$db->commit();
				$query->closeCursor();
			}
			catch (PDOException $e) {
					die('Erreur update ANGLE : ' . $e->getMessage());
					$db->rollBack();
					$query->closeCursor();
			}
		}

		function delete($numAngl){
			global $db;
			try {
				$queryText = "DELETE FROM angle WHERE numAngl = :numAngl";

          		$db->beginTransaction();

				$query = $db->prepare($queryText);
				$query->bindParam(':numAngl', $numAngl);

				$query->execute();

				$db->commit();
				$query->closeCursor();

			}
			catch (PDOException $e) {
					die('Erreur delete ANGLE : ' . $e->getMessage());
					$db->rollBack();
					$query->closeCursor();
			}
		}
	}	// End of class
