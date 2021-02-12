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
    function create($prenomMemb, $nomMemb, $pseudoMemb, $passMemb, $eMailMemb, $souvenirMemb, $accordMemb)

    {
        global $db;
        try {
            $queryText = "INSERT INTO membre (prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, souvenirMemb, accordMemb) VALUES (:prenomMemb, :nomMemb, :pseudoMemb, :passMemb, :eMailMemb, :dtCreaMemb, :souvenirMemb, :accordMemb)";

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


            $query->execute();

            $db->commit();

            $query->closeCursor();
        } catch (PDOException $e) {
            die('Erreur insert MEMBRE : ' . $e->getMessage());
            $db->rollBack();
            $query->closeCursor();
        }
    }



    function update($numSeqCom, $numArt)
    {

        // try {
        //     $db->beginTransaction();



        //     $db->commit();
        //     $request->closeCursor();
        // } catch (PDOException $e) {
        //     $db->rollBack();
        //     $request->closeCursor();
        //     die('Erreur update COMMENT : ' . $e->getMessage());
        // }
    }

    function delete($numSeqCom, $numArt)
    {

        // try {
        //     $db->beginTransaction();



        //     $db->commit();
        //     $request->closeCursor();
        // } catch (PDOException $e) {
        //     $db->rollBack();
        //     $request->closeCursor();
        //     die('Erreur delete COMMENT : ' . $e->getMessage());
        // }
    }
}	// End of class