<?php

    require_once 'bd.php';

    function recup(){ // voici un exemple de requete insere
                    //  dans une fonction
        global $bd;
        $avo = $bd->prepare('SELECT * FROM chauffeur');
        $avo->execute();
        return $avo->fetchAll();
    }
    $don= recup();
