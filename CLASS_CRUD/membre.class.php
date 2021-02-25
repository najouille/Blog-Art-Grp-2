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

    function get_1MembreByEmail($eMailMemb)
    {
        global $db;
        $query = $db->prepare('SELECT * FROM membre WHERE `eMailMemb` = :eMailMemb');
        $query->bindParam(':eMailMemb',  $eMailMemb);
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

    // INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `souvenirMemb`, `accordMemb`) VALUES (NULL, 'Hey', 'Mattèo', 'matt', 'mama', 'ma;a', '2021-02-11 20:33:04', '1', '1');
    function create($prenomMemb, $nomMemb, $pseudoMemb, $passMemb, $eMailMemb, $souvenirMemb, $accordMemb, $idStat)

    {
        global $db;
        try {
            $queryText = "INSERT INTO membre (prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb,idStat) VALUES (:prenomMemb, :nomMemb, :pseudoMemb, :passMemb, :eMailMemb, :dtCreaMemb, :souvenirMemb, :accordMemb, :idStat)";

            $db->beginTransaction();

            $password = password_hash($passMemb, PASSWORD_BCRYPT);
            $ladate = date('Y-m-d H:i:s');

            $query = $db->prepare($queryText);
            $query->bindParam(':prenomMemb',  $prenomMemb);
            $query->bindParam(':nomMemb',  $nomMemb);
            $query->bindParam(':pseudoMemb',  $pseudoMemb);
            $query->bindParam(':passMemb',  $password);
            $query->bindParam(':eMailMemb',  $eMailMemb);
            $query->bindParam(':dtCreaMemb', $ladate);
            $query->bindParam(':souvenirMemb',  $souvenirMemb);
            $query->bindParam(':accordMemb',  $accordMemb);
            $query->bindParam(':idStat',  $idStat);


            $query->execute();

            $db->commit();

            $query->closeCursor();
        } catch (PDOException $e) {
            die('Erreur insert MEMBRE : ' . $e->getMessage());
            $db->rollBack();
            $query->closeCursor();
        }
    }

    function update(
        $numMemb,
        $prenomMemb,
        $nomMemb,
        $pseudoMemb,
        $eMailMemb,
        $passMemb,
        $souvenirMemb,
        $accordMemb,
        $idStat
    ) {
        global $db;
        try {
            $db->beginTransaction();
            $password = password_hash($passMemb, PASSWORD_BCRYPT);
            $query = $db->prepare('UPDATE membre SET prenomMemb=:prenomMemb, nomMemb=:nomMemb, pseudoMemb=:pseudoMemb, eMailMemb=:eMailMemb, passMemb=:passMemb, idStat = :idStat, souvenirMemb=:souvenirMemb,accordMemb=:accordMemb WHERE numMemb=:numMemb');
            $query->bindParam(':numMemb',  $numMemb);
            $query->bindParam(':prenomMemb',  $prenomMemb);
            $query->bindParam(':nomMemb',  $nomMemb);
            $query->bindParam(':pseudoMemb',  $pseudoMemb);
            $query->bindParam(':passMemb',  $password);
            $query->bindParam(':eMailMemb',  $eMailMemb);
            $query->bindParam(':idStat', $idStat);
            $query->bindParam(':souvenirMemb',  $souvenirMemb);
            $query->bindParam(':accordMemb',  $accordMemb);

            $query->execute();
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $query->closeCursor();
            die('Erreur update MEMBRE : ' . $e->getMessage());
        }
    }


    function delete($numMemb)
    {
        global $db;
        try {
            $query = "DELETE FROM membre WHERE numMemb = ?";

            $db->beginTransaction();

            $request = $db->prepare($query);

            $request->execute(array($numMemb));

            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            die('Erreur delete MEMBRE : ' . $e->getMessage());
            $db->rollBack();
            $request->closeCursor();
        }
    }
}	// End of class
