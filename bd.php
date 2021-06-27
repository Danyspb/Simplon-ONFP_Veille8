<?php
    $host='localhost';
    $user='root';
    $password='';
    $dbname='taxibokko';

    try {
        $bd = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password);
    }catch (PDOException $e){
        die('erreur de la connexion'.$e->getMessage());
    }

