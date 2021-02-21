<?php
///////////////////////////////////////////////////////////////
//
//  Méthodes fournies - 23 Janvier 2021
//  Récupérer la prochaine PK de la table ANGLE
//
//  Script : getNextNumAngl.php   -   BLOGART21
//
///////////////////////////////////////////////////////////////

// Mode DEV



require_once __DIR__ . '/../util/utilErrOn.php';

function getNextNumAngl($numLang)
{

    global $db;

    // Découpage FK LANGUE
    $libLangSelect = substr($numLang, 0, 4);
    $parmNumLang = $libLangSelect . '%';

    $requete = "SELECT MAX(numLang) AS numLang FROM ANGLE WHERE numLang LIKE '$parmNumLang';";
    $result = $db->query($requete);

    if ($result) {
        $tuple = $result->fetch();
        $numLang = $tuple["numLang"];
        if (is_null($numLang)) {    // New lang dans ANGLE
            // Récup dernière PK utilisée
            $requete = "SELECT MAX(numAngl) AS numAngl FROM ANGLE;";
            $result = $db->query($requete);
            $tuple = $result->fetch();
            $numAngl = $tuple["numAngl"];

            $numAnglSelect = (int)substr($numAngl, 4, 2);
            // No séquence suivant LANGUE
            $numSeq1Angl = $numAnglSelect + 1;
            // Init no séquence ANGLE pour nouvelle lang
            $numSeq2Angl = 1;
        } else {
            // Récup dernière PK pour FK sélectionnée
            $requete = "SELECT MAX(numAngl) AS numAngl FROM ANGLE WHERE numLang LIKE '$parmNumLang' ;";
            $result = $db->query($requete);
            $tuple = $result->fetch();
            $numAngl = $tuple["numAngl"];

            // No séquence actuel LANGUE
            $numSeq1Angl = (int)substr($numAngl, 4, 2);
            // No séquence actuel LANGUE
            $numSeq2Angl = (int)substr($numAngl, 6, 2);
            // No séquence suivant ANGLE
            $numSeq2Angl++;
        }

        $libAnglSelect = "ANGL";
        // PK reconstituée : ANGL + no seq langue
        if ($numSeq1Angl < 10) {
            $numAngl = $libAnglSelect . "0" . $numSeq1Angl;
        } else {
            $numAngl = $libAnglSelect . $numSeq1Angl;
        }
        // PK reconstituée : ANGL + no seq langue + no seq angle
        if ($numSeq2Angl < 10) {
            $numAngl = $numAngl . "0" . $numSeq2Angl;
        } else {
            $numAngl = $numAngl . $numSeq2Angl;
        }
    }   // End of if ($result) / no seq angle
    return $numAngl;
    
} // End of function