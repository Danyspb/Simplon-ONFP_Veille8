<?php
    require_once 'bd.php';


    if (isset($_GET['mod'])){

        function getchuaffe(){
            $id = $_GET['mod'];
            global $bd;
            $info= "SELECT * FROM chauffeur WHERE id=$id";
            return $bd->query($info)->fetch();
        }
        $test = getchuaffe();
    }

    if (isset($_GET['ok']))
        extract($_POST);

    function mdfi($nom,$prenom,$telephone,$email,$login,$password,$nbr_voiture /* la liste des arguments*/){
        global $bd;
        $up =  $bd->prepare('UPDATE chauffeur SET id = ?, nom = ? 
                    , prenom = ?, telephone = ?,email = ?, login = ? ,password = ?, nbr_voiture');
        $up->execute([$nom,$prenom,$telephone,$email,$login,$password,$nbr_voiture,$_GET['ok']]);
        header('location:index.php');
    }



?>
<html>
<head>
    <meta charset="UTF-8">
    <title>CRUD CHAUFFEUR</title>
</head>
<body>
<section>
    <h2>Modification du chauffeur: <?=$test['id']?></h2>
    <form method="post" action="modifie.php?ok">
        <label>NOM</label><br>
        <input type="text" name="nom"<?php  echo 'value='.$test['nom'].''?>><br>
        <label>PRENOM</label><br>
        <input type="text" name="prenom" <?php  echo 'value='.$test['prenom'].''?>><br>
        <label>TELEPHONE</label><br>
        <input type="text" name="telephone"<?php  echo 'value='.$test['telephone'].''?>><br>
        <label>EMAIL</label><br>
        <input type="text" name="email" <?php  echo 'value='.$test['email'].''?>><br>
        <label>LOGIN</label><br>
        <input type="text" name="login" <?php  echo 'value='.$test['login'].''?>><br>
        <label>PASSWORD</label><br>
        <input type="password" name="password" <?php  echo 'value='.$test['password'].''?>"><br>
        <label>VOITURE</label><br>
        <input type="number" name="voiture" <?php  echo 'value='.$test['nbr_voiture'].''?>><br><br>
        <input type="submit" value="Modifier">
    </form>
</section>
</body>
</html>
