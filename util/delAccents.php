<?
///////////////////////////////////////////////////////
//
//  Script : delAccents.php
//
///////////////////////////////////////////////////////

    // del esapces
    function delEspaces($string) {
        //$string = str_replace(" ", "", $string);
        $string = preg_replace("/\s+/", "", $string);
        return ($string);
    }

    // Remplace tous les accents par leur équivalent sans accent
    // Encodage UTF-8
    function delAccents($string) {
        $string = htmlentities($string, ENT_NOQUOTES, 'utf-8');
        $string = preg_replace('#&([A-za-z])(?:uml|circ|tilde|acute|grave|cedil|ring);#', '\1', $string);
        $string = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $string);
        $string = preg_replace('#&[^;]+;#', '', $string);
        return ($string);
    }
