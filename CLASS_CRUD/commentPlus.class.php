<?php

	require_once __DIR__ . '../../CONNECT/database.php';

	class COMMENTPLUS{
		function get_1CommentR($numArt, $numSeqCom, $numSeqComR){
			global $db;

			$query = 'SELECT * FROM comment INNER JOIN commentplus ON (commentplus.numSeqComR = comment.numSeqCom AND commentplus.numArt = comment.numArt) WHERE commentplus.numArt = ? AND commentplus.numSeqCom = ? AND numSeqComR = ?';

			$request = $db->prepare($query);
	
			$request->execute(array($numArt, $numSeqCom, $numSeqComR));
	
			$result = $request->fetch();
	
			$request->closeCursor();
			return ($result);
		}

		function get_AllCommentsRByComment($numArt, $numSeqCom){
			global $db;

			$query = 'SELECT * FROM comment INNER JOIN commentplus ON commentplus.numSeqComR = comment.numSeqCom AND commentplus.numArt = comment.numArt WHERE numArt = ? AND numSeqCom = ?';

			$request = $db->prepare($query);
	
			$request->execute(array($numArt, $numSeqCom));
	
			$result = $request->fetchAll();
	
			$request->closeCursor();
			return ($result);
		}

        function get_AllCommentsRByArticle($numArt){
			global $db;

			$query = 'SELECT * FROM comment INNER JOIN commentplus ON commentplus.numSeqComR = comment.numSeqCom AND commentplus.numArt = comment.numArt WHERE numArt = ?';

			$request = $db->prepare($query);
	
			$request->execute(array($numArt));
	
			$result = $request->fetchAll();
	
			$request->closeCursor();
			return ($result);
		}

        function get_AllCommentsR(){
			global $db;

			$query = 'SELECT * FROM comment INNER JOIN commentplus ON commentplus.numSeqComR = comment.numSeqCom AND commentplus.numArt = comment.numArt';

			$request = $db->prepare($query);
	
			$request->execute();
	
			$result = $request->fetchAll();
	
			$request->closeCursor();
			return ($result);
		}

		function create($numArt, $numSeqCom, $numSeqComR){
			global $db;
			try {
				$query = "INSERT INTO commentplus (numArt, numSeqCom, numSeqComR, numArtR) VALUES (?, ?, ?, ?)";

				$db->beginTransaction();

				$request = $db->prepare($query);
				
				$request->execute(array($numArt, $numSeqCom, $numSeqComR, $numArt));

				$db->commit();

				$request->closeCursor();
			}
			catch (PDOException $e) {
					die('Erreur insert COMMENTPLUS : ' . $e->getMessage());
					$db->rollBack();
					$request->closeCursor();
			}
		}

		function delete($numArt, $numSeqCom, $numSeqComR){
			global $db;
			try {
				$query = "DELETE FROM commentplus WHERE numArt = ? AND numSeqCom = ? AND numSeqComR = ?";

          		$db->beginTransaction();

				$request = $db->prepare($query);

				$request->execute(array($numArt, $numSeqCom, $numSeqComR));

				$db->commit();
				$request->closeCursor();

			}
			catch (PDOException $e) {
					die('Erreur delete COMMENTPLUS : ' . $e->getMessage());
					$db->rollBack();
					$request->closeCursor();
			}
		}
	}	// End of class
