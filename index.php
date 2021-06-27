<?php
    include 'donnes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD CHAUFFEUR</title>
    </head>
    <body>
        <section>
            <h2>les chauffeur</h2>
            <form method="post" action="ajout.php">
                <label>NOM</label><br>
                <input type="text" name="nom" placeholder="Saisissez votre nom"><br>
                <label>PRENOM</label><br>
                <input type="text" name="prenom" placeholder="Saisissez votre prenom"><br>
                <label>TELEPHONE</label><br>
                <input type="number" name="telephone" placeholder="Saisissez votre telephone"><br>
                <label>EMAIL</label><br>
                <input type="text" name="email" placeholder="Saisissez votre email"><br>
                <label>LOGIN</label><br>
                <input type="text" name="login" placeholder="Saisissez votre login"><br>
                <label>PASSWORD</label><br>
                <input type="password" name="password" placeholder="Saisissez votre password"><br>
                <label>VOITURE</label><br>
                <input type="number" name="voiture" placeholder="Saisissez le nombre de voiture"><br><br>
                <input type="submit" name="new" value="Ajouter">
            </form>
        </section>

        <table width="80" border="1" style="background-color: purple; color: white">
            <tr>
                <td>ID</td>
                <td>NOM</td>
                <td>PRENOM</td>
                <td>TELEPHONE</td>
                <td>EMAIL</td>
                <td>LOGIN</td>
                <td>PASSWORD</td>
                <td>VOITURE</td>
                <td>ACTION</td>
            </tr>
            <?php foreach ($don as $chauffeurs):?>
            <tr>
                <td><?=$chauffeurs['id']?></td>
                <td><?=$chauffeurs['nom']?></td>
                <td><?=$chauffeurs['prenom']?></td>
                <td><?=$chauffeurs['telephone']?></td>
                <td><?=$chauffeurs['email']?></td>
                <td><?=$chauffeurs['login']?></td>
                <td><?=$chauffeurs['password']?></td>
                <td><?=$chauffeurs['nbr_voiture']?></td>
                <td>
                    <a href="supprime.php?sup=<?=$chauffeurs['id']?>" style="color: red ">Supprimer</a>
                    <a href="modifie.php?mod=<?=$chauffeurs['id']?>" style="color: darkorchid">Modifier</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
