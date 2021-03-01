<?php
// CRUD ANGLE (ETUD)

require_once __DIR__ . '../../CONNECT/database.php';

class COMMENT
{
	function get_1Comment($numSeqCom, $numArt)
	{
		try {
			global $db;

			$query = 'SELECT * FROM comment WHERE (numSeqCom = ? AND numArt = ?)';

			$request = $db->prepare($query);

			$request->execute(array($numSeqCom, $numArt));

			$result = $request->fetch();

			$request->closeCursor();
			return ($result);
		} catch (PDOException $e) {
			die('Erreur get_1Comment COMMENT : ' . $e->getMessage());
			$db->rollBack();
			$request->closeCursor();
		}
	}

	function get_AllComments()
	{
		global $db;

		$query = 'SELECT * FROM comment';

		$request = $db->query($query);

		$result = $request->fetchAll();

		$request->closeCursor();
		return ($result);
	}

	function get_AllCommentsByArticle($numArt)
	{
		global $db;

		$query = 'SELECT * FROM comment INNER JOIN membre ON comment.numMemb = membre.numMemb WHERE numArt = ? ORDER BY numSeqCom';

		$request = $db->prepare($query);

		$request->execute(array($numArt));

		$result = $request->fetchAll();

		$request->closeCursor();
		return ($result);
	}

	function get_AllCommentsByMembre($numMemb)
	{
		global $db;

		$query = 'SELECT * FROM comment WHERE numMemb = ?';

		$request = $db->prepare($query);

		$request->execute(array($numMemb));

		$result = $request->fetchAll();

		$request->closeCursor();
		return ($result);
	}

	function get_AllCommentsWithMembre()
	{
		global $db;

		$query = 'SELECT * FROM comment INNER JOIN membre ON comment.numMemb = membre.numMemb ORDER BY `dtCreCom` DESC';

		$request = $db->prepare($query);

		$request->execute();

		$result = $request->fetchAll();

		$request->closeCursor();
		return ($result);
	}

	function get_1CommentWithMembre($numSeqCom, $numArt)
	{
		global $db;

		$query = 'SELECT * FROM comment INNER JOIN membre ON comment.numMemb = membre.numMemb WHERE (numSeqCom = :numSeqCom AND numArt = :numArt)';

		$request = $db->prepare($query);

		$request->bindParam(':numSeqCom',  $numSeqCom);
		$request->bindParam(':numArt',  $numArt);
		$request->execute();

		$result = $request->fetch();
		$myfile = fopen("./log.txt", "w") or die("Unable to open file!");
		$txt = "

		$numSeqCom
		
		$numArt

$result
            ";
		fwrite($myfile, $txt);

		$request->closeCursor();
		return ($result);
	}

	function create($numSeqCom, $numArt, $dtCreCom, $libCom, $attModOK, $affComOK, $notifComKOAff, $numMemb)
	{
		global $db;
		try {
			$query = "INSERT INTO comment (numSeqCom, numArt, dtCreCom, libCom, attModOK, affComOK, notifComKOAff, numMemb) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

			$db->beginTransaction();

			$request = $db->prepare($query);

			$request->execute(array($numSeqCom, $numArt, $dtCreCom, $libCom, $attModOK, $affComOK, $notifComKOAff, $numMemb));

			$db->commit();

			$request->closeCursor();
		} catch (PDOException $e) {
			die('Erreur insert COMMENT : ' . $e->getMessage());
			$db->rollBack();
			$request->closeCursor();
		}
	}

	function update($numSeqCom, $numArt, $dtCreCom, $libCom, $attModOK, $affComOK, $notifComKOAff, $numMemb)
	{
		global $db;
		try {
			$db->beginTransaction();

			$query = "UPDATE comment SET dtCreCom = ?, libCom = ?, attModOk = ?, affComOK = ?, notifComKOAff = ?, numMemb = ? WHERE (numSeqCom = ? AND numArt = ?)";

			$request = $db->prepare($query);

			$request->execute(array($dtCreCom, $libCom, $attModOK, $affComOK, $notifComKOAff, $numMemb, $numSeqCom, $numArt));

			$db->commit();
			$request->closeCursor();
		} catch (PDOException $e) {
			die('Erreur update COMMENT : ' . $e->getMessage());
			$db->rollBack();
			$request->closeCursor();
		}
	}

	function delete($numSeqCom, $numArt)
	{
		global $db;
		try {
			$query = "DELETE FROM `comment` WHERE `comment`.`numSeqCom` = :numSeqCom AND `comment`.`numArt` = :numArt";

			$db->beginTransaction();

			$request = $db->prepare($query);
			$request->bindParam(':numSeqCom',  $numSeqCom);
			$request->bindParam(':numArt',  $numArt);


			$request->execute();

			$db->commit();
			$request->closeCursor();
		} catch (PDOException $e) {
			die('Erreur delete COMMENT : ' . $e->getMessage());
			$db->rollBack();
			$request->closeCursor();
		}
	}
}	// End of class
