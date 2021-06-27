<?php

    include 'bd.php';

    if (isset($_POST)){
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $telephone= $_POST['telephone'];
        $email= $_POST['email'];
        $login= $_POST['login'];
        $password= $_POST['password'];
        $nbr_voiture= $_POST['voiture'];

        if (empty($nom) || empty($prenom) || empty($telephone) ||
            empty($email) || empty($login) || empty($password) ||
            empty($nbr_voiture)){
            echo "veillez remplire tout les champs";

        }else{
            extract($_POST);
            $ajout = insert($nom,$prenom,$telephone,$email,$login,$password,$nbr_voiture);

            if ($ajout == true){
            }

        }
    }
    function insert($nom,$prenom,$telephone,$email,$login,$password,$nbr_voiture){
        global $bd;
        $ins = $bd->prepare('INSERT INTO chauffeur VALUES (?,?,?,?,?,?,?,?)');
        $ins->execute([null,$nom,$prenom,$telephone,$email,$login,$password,$nbr_voiture]);

        header('location:index.php');
    }


