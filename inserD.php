<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
</head>
<body>

<?php
    include_once('entete.php');
?>

    <div class="content">
        <h1>Inserer ici</h1>
        <?php 
        /*
        Inserer les données dans Mysql
        Pour inserer de nouveaux enregistrement dans une table, on se sert de la commande SQL insert into Les chaines sont placées entre apostrophes
        excepté par les valeur numeriques ou la valeur NULL, s'il n'a pas de données à inserer. Il y a autant de valeurs que de champs. */ 
        $con = mysql_connect("localhost","root","","casse2");
        if(mysqli_connect_errno()){
            echo "erreur de connexion à la base". mysqli_connect_error();
            exit();
        }
        //on crée la requête sql
        $sql = "insert into personne (NumAch, Nom, Age, Ville, Sexe) values ('', 'Alain',32, 'Monchester', 'M')";
        echo "insertion réalisée avec succés !";

        $result = mysqli_query($con, $sql) or die ("echec de la requete insert");
        //ferme la connexion à la bdd
        mysqli_close($con);
        ?>
    </div>

<?php
    include_once('footer.php');
?>
</body>
</html>