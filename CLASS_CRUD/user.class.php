<?php
// CRUD USER (ETUD)

require_once __DIR__ . '../../CONNECT/database.php';

class USER
{
	function get_1User($pseudoUser, $passUser)
	{
		global $db;

		$query = $db->prepare('SELECT * FROM user WHERE pseudoUser = :pseudoUser AND passUser = :passUser');
		$query->bindParam(':pseudoUser',  $pseudoUser);
		$query->bindParam(':passUser',  $passUser);

		$query->execute();

		$result = $query->fetch();

		$query->closeCursor();
		return ($result);
	}

	function get_AllUsers()
	{
		global $db;
		$query = $db->query('SELECT * FROM user');
		$result = $query->fetchAll();
		$query->closeCursor();
		return ($result);
	}

	function get_ExistPseudo($pseudoUser)
	{
		global $db;
		$query = $db->prepare('SELECT pseudoUser FROM user WHERE pseudoUser = ?');
		$query->bindParam(':pseudoUser',  $pseudoUser);
		$query->execute();
		$result = $query->fetch();
		$query->closeCursor();
		return (boolval($result));
	}

	function get_AllUsersByStat()
	{
		global $db;
		$query = $db->prepare('SELECT * FROM user WHERE idStat = :idStat');
		$query->bindParam(':idStat',  $idStat);
		$query->execute();
		$result = $query->fetchAll();
		$query->closeCursor();
		return ($result);
	}

	function get_NbAllUsersByidStat($idStat)
	{
		global $db;
		$query = $db->prepare('SELECT COUNT(*) FROM user WHERE idStat = :idStat');
		$query->bindParam(':idStat',  $idStat);
		$query->execute();
		$result = $query->fetch();
		$query->closeCursor();
		return (intval($result[0]));
	}

	function create($pseudoUser, $passUser, $nomUser, $prenomUser, $emailUser, $idStat)
	{
		global $db;
		try {
			$db->beginTransaction();
			$query = $db->prepare("INSERT INTO user (pseudoUser, passUser, nomUser, prenomUser, eMailUser, idStat) VALUES (?, ?, ?, ?, ?, ?)");
			$query->execute(array($pseudoUser, $passUser, $nomUser, $prenomUser, $emailUser, $idStat));
			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur insert USER : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}

	function update($pseudoUser, $passUser, $nomUser, $prenomUser, $emailUser, $idStat)
	{
		global $db;
		try {
			$db->beginTransaction();
			$query = $db->prepare("UPDATE user SET passUser = ?, nomUser = ?, prenomUser = ?, emailUser = ?, idStat = ? WHERE pseudoUser = ?");
			$query->execute(array($passUser, $nomUser, $prenomUser, $emailUser, $idStat, $pseudoUser));

			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur update USER : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}

	function delete($pseudoUser, $passUser)
	{
		global $db;
		try {
			$db->beginTransaction();
			$query = $db->prepare("DELETE FROM user WHERE pseudoUser = ? AND passUser = ?");
			$query->bindParam(':pseudoUser',  $pseudoUser);
			$query->bindParam(':passUser',  $passUser);
			$query->execute();

			$db->commit();
			$query->closeCursor();
		} catch (PDOException $e) {
			die('Erreur delete USER : ' . $e->getMessage());
			$db->rollBack();
			$query->closeCursor();
		}
	}
}	// End of class

