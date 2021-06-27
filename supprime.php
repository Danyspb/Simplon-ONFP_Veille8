<?php
    require_once 'bd.php';

    if (isset($_GET['sup'])){
        $ok = delet();

        if ($ok == 1){
        }


    }
    function delet(){
        global $bd;
        $id = $_GET['sup'];
        $dlt = "DELETE FROM chauffeur WHERE id = $id";
        $bd->exec($dlt);
        header('location:index.php');
    }







