<?php


require_once __DIR__ . '../../CONNECT/database.php';

class PAYS
{
    function get_1Pays($numPays)
    {
        global $db;
        $query = 'SELECT * FROM pays WHERE numPays = :numPays';
        $query = $db->prepare($query);
        $query->bindParam(':numPays', $numPays);
        $query->execute();
        $result = $query->fetch();
        $query->closeCursor();
        return ($result);
    }
    function get_AllPays()
    {
        global $db;
        $query = 'SELECT * FROM pays';
        $query = $db->query($query);
        $result = $query->fetchAll();
        $query->closeCursor();
        return ($result);
    }
    function create($numPays, $cdPays, $frPays, $enPays)
    {
        global $db;
        try {
            $query = "INSERT INTO pays (numPays, cdPays, frPays, enPays) VALUES (:numPays, :cdPays, :frPays, :enPays)";
            $db->beginTransaction();
            $query = $db->prepare($query);
            $query->bindParam(':numPays', $numPays);
            $query->bindParam(':cdPays', $cdPays);
            $query->bindParam(':frPays', $frPays);
            $query->bindParam(':enPays', $enPays);
            $query->execute();
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            die('Erreur insert PAYS : ' . $e->getMessage());
            $db->rollBack();
            $query->closeCursor();
        }
    }
    function update($numPays, $cdPays, $frPays, $enPays)
    {
        global $db;
        try {
            $db->beginTransaction();
            $query = "UPDATE pays SET cdPays = :cdPays, frPays = :frPays, enPays = :enPays WHERE numPays = :numPays";
            $query = $db->prepare($query);
            $query->bindParam(':cdPays', $cdPays);
            $query->bindParam(':frPays', $frPays);
            $query->bindParam(':enPays', $enPays);
            $query->bindParam(':numPays', $numPays);
            $query->execute();
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            die('Erreur update PAYS : ' . $e->getMessage());
            $db->rollBack();
            $query->closeCursor();
        }
    }    // Ctrl FK sur THEMATIQUE, ANGLE, MOTCLE avec del
    function delete($numPays)
    {
        global $db;
        try {
            $query = "DELETE FROM pays WHERE numPays = :numPays";
            $db->beginTransaction();
            $query = $db->prepare($query);
            $query->bindParam(':numPays', $numPays);
            $query->execute();
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            die('Erreur delete PAYS : ' . $e->getMessage());
            $db->rollBack();
            $query->closeCursor();
        }
    }
}	// End of class