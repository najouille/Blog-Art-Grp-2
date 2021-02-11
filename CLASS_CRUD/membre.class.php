<?php
// CRUD STATUT (ETUD)

require_once __DIR__ . '../../CONNECT/database.php';

class MEMBRE
{
    function get_1Membre($numMemb)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM membre WHERE `numMemb` = :numMemb');
        $query->bindParam(':numMemb',  $numMemb);
        $query->execute();

        $result = $query->fetch();

        $query->closeCursor();
        return ($result);
    }

    function get_AllMembres()
    {
        global $db;
        $query = 'SELECT * FROM MEMBRE;';
        $result = $db->query($query);
        $allMembres = $result->fetchAll();
        return ($allMembres);
    }

    function createMembre($libsMembre)
    {
        global $db;
        try {
            $db->beginTransaction();
            $query = $db->prepare('INSERT INTO MEMBRE (libsMembre) VALUES (:libsMembre)');
            $query->bindParam(':libsMembre',  $libsMembre);
            $query->execute();
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $query->closeCursor();
            die('Erreur insert MEMBRE : ' . $e->getMessage());
        }
    }

    function create()
    {

        try {
            $db->beginTransaction();

            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $request->closeCursor();
            die('Erreur insert COMMENT : ' . $e->getMessage());
        }
    }

    function update($numSeqCom, $numArt)
    {

        try {
            $db->beginTransaction();



            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $request->closeCursor();
            die('Erreur update COMMENT : ' . $e->getMessage());
        }
    }

    function delete($numSeqCom, $numArt)
    {

        try {
            $db->beginTransaction();



            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $request->closeCursor();
            die('Erreur delete COMMENT : ' . $e->getMessage());
        }
    }
}	// End of class