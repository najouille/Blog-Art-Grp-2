<?php
// CRUD ANGLE (ETUD)

require_once __DIR__ . '../../CONNECT/database.php';

class ARTICLE
{
    function get_1Article($numArt)
    {
        global $db;

        $query = 'SELECT * FROM article WHERE numArt = ?';

        $request = $db->prepare($query);

        $request->execute(array($numArt));

        $result = $request->fetch();

        $request->closeCursor();
        return ($result);
    }

    function get_AllArticles()
    {
        global $db;

        $query = 'SELECT * FROM article';

        $request = $db->query($query);

        $result = $request->fetchAll();

        $request->closeCursor();
        return ($result);
    }

    function get_AllArticlesWithAngleAndThematique()
    {
        global $db;

        $query = 'SELECT * FROM article INNER JOIN angle ON article.numAngl = angle.numAngl INNER JOIN thematique ON article.numThem = thematique.numThem';

        $request = $db->query($query);

        $result = $request->fetchAll();

        $request->closeCursor();
        return ($result);
    }

    function get_1ArticleWithAngleAndThematique($numArt)
    {
        global $db;

        $query = 'SELECT * FROM article INNER JOIN angle ON article.numAngl = angle.numAngl INNER JOIN thematique ON article.numThem = thematique.numThem WHERE numArt = ?';

        $request = $db->prepare($query);

        $request->execute(array($numArt));

        $result = $request->fetch();

        $request->closeCursor();
        return ($result);
    }

    function get_AllArticlesByAngle($numAngl)
    {
        global $db;

        $query = 'SELECT * FROM article WHERE numAngl = ?';

        $request = $db->prepare($query);

        $request->execute(array($numAngl));

        $result = $request->fetchAll();

        $request->closeCursor();
        return ($result);
    }

    function get_AllArticlesByThematique($numThem)
    {
        global $db;

        $query = 'SELECT * FROM article WHERE numThem = ?';

        $request = $db->prepare($query);

        $request->execute(array($numThem));

        $result = $request->fetchAll();

        $request->closeCursor();
        return ($result);
    }

    function create(
        $dtCreArt,
        $libTitrArt,
        $libChapoArt,
        $libAccrochArt,
        $parag1Art,
        $libSsTitr1Art,
        $parag2Art,
        $libSsTitr2Art,
        $parag3Art,
        $libConclArt,
        $urlPhotArt,
        $numAngl,
        $numThem
    ) {
        global $db;
        require_once __DIR__ . '/getNextNumAngl.php';
        //$numAngl = getNextNumAngl($numLang);
        try {
            $db->beginTransaction();
            $query = $db->prepare(
                'INSERT INTO article (dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, 
				libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numAngl, numThem)
				VALUES (:dtCreArt, :libTitrArt, :libChapoArt, :libAccrochArt, :parag1Art, :libSsTitr1Art, 
				:parag2Art, :libSsTitr2Art, :parag3Art, :libConclArt, :urlPhotArt, :numAngl, :numThem)'
            );
            $query->execute([
                'dtCreArt' => $dtCreArt,
                'libTitrArt' => $libTitrArt,
                'libChapoArt' => $libChapoArt,
                'libAccrochArt' => $libAccrochArt,
                'parag1Art' => $parag1Art,
                'libSsTitr1Art' => $libSsTitr1Art,
                'parag2Art' => $parag2Art,
                'libSsTitr2Art' => $libSsTitr2Art,
                'parag3Art' => $parag3Art,
                'libConclArt' => $libConclArt,
                'urlPhotArt' => $urlPhotArt,
                'numAngl' => $numAngl,
                'numThem' => $numThem
            ]);
            $db->commit();
            $query->closeCursor();
        } catch (PDOException $e) {
            $db->rollBack();
            $query->closeCursor();
            die('Erreur insert ARTICLE : ' . $e->getMessage());
        }
    }

    function update($numArt, $dtCreArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitrArt, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem)
    {
        global $db;
        try {
            $db->beginTransaction();

            $query = "UPDATE article SET dtCreArt = ?, libTitrArt = ?, libChapoArt = ?, libAccrochArt = ?, parag1Art = ?, libSsTitr1Art = ?, parag2Art = ?, libSsTitr2Art = ?, parag3Art = ?, libConclArt = ?, urlPhotArt = ?, numAngl = ?, numThem = ? WHERE numArt = ?";

            $request = $db->prepare($query);

            $request->execute(array($dtCreArt, $libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitrArt, $parag3Art, $libConclArt, $urlPhotArt, $numAngl, $numThem, $numArt));

            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            die('Erreur update ARTICLE : ' . $e->getMessage());
            $db->rollBack();
            $request->closeCursor();
        }
    }

    function delete($numArt)
    {
        global $db;
        try {
            $query = "DELETE FROM article WHERE numArt = ?";

            $db->beginTransaction();

            $request = $db->prepare($query);

            $request->execute(array($numArt));

            $db->commit();
            $request->closeCursor();
        } catch (PDOException $e) {
            die('Erreur delete ARTICLE : ' . $e->getMessage());
            $db->rollBack();
            $request->closeCursor();
        }
    }
}	// End of class
