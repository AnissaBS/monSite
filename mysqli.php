<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
<?php
    include_once('entete.php');
?>
    <div class="content">
        <h1>My SQLi</h1>

<?php

# Interroger une BDD à l'aide de l'API MySQL

# On interroge les informations d'une table (BDD) par l'intermédiaire d'une requête SQL qui renvoie un jeu de résultats qu'on affiche par la suite dans le navigateur (ou client).

$cnx = mysqli_connect("localhost", "root", "", "casse");

# Test de la connexion à la BDD

if(mysqli_connect_errno()){
    echo "Erreur de connexion à la base ".mysqli_connect_error();
}

# Je défini la requête

$sql = "SELECT * FROM personne ORDER BY NUMACH asc";

if($result = mysqli_query($cnx, $sql)){
    echo "Pour cette requête <br> $sql <br><br>";
    echo "Il y a : ".mysqli_num_rows($result). "réponses <br>";
    echo "<br><br>";
    echo "<html><style> 
            table,th,td{
                border:1px solid black; 
                text-align:center;
            }
        </style>";
    echo "<body><table width=500>";
    echo "<th>"."NumAch"."</th>";
    echo "<th>"."Nom"."</th>";
    echo "<th>"."Age"."</th>";
    echo "<th>"."Ville"."</th>";
    echo "<th>"."Sexe"."</th>";

    # Mise en place d'une boucle pour faire les lignes
    // while($row = mysqli_fetch_row($result)){
    //     echo "<tr>";
    //     echo "<td>".$row[0]."</td>";
    //     echo "<td>".$row[1]."</td>";
    //     echo "<td>".$row[2]."</td>";
    //     echo "<td>".$row[3]."</td>";
    //     echo "<td>".$row[4]."</td>";
    //     echo "</tr>";
    // }
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        for($i=0;$i<count($row);$i++){
        echo "<td>".$row[$i]."</td>";
    }
        echo "</tr>";
    }
    echo "</table></body></html>";

    #Annule le jeu de résultats

    mysqli_free_result($result);
}

# Ferme la connexion à la base de données
mysqli_close($cnx);

/*
L'expression mysqli_num_row($result) renvoie le nombre le nombre de lignes dans le jeu de résultat qui est issu de la requête.

L'espression $result=msqli_query($cnx,$sql) se connecte à la base de données par l'intermédiaire de la variable déjà validée $cnx et utilise les requêtes spécifiées dans la variable $sql pour extraire un jeu de résultats qui est placé dans la variable $result.

L'expression mysqli_fetch_row(to fetch = aller chercher) récupère une ligne d'information dans le jeu de résultat et la renvoie en tant que tableau associatif où chaque colonne représente les champs. Chaque nouvel appel à mysqli_fetch_row() renverra la prochaine ligne dans le jeu de résultat ou la valeur NULL s'il n'y a plus de lignes.

Par conséquent, l'expression while(row = mysqli_fetch_row($result)) signifie "tant qu'il y a encore des lignes dans le jeu de résultats, répète les actions ci-dessous.

** Quelques fonctions MySQL **
    Pour gérer les informations dans une BDD avec PHP, on utilise communément des fonctions MySQLi.

        Opérateurs SQL          ||  Description
        
        MySQLi_affected_rox         Renvoie le nombre de lignes affectées par la dernière requête.
        
        MySQLi_close                Ferme une connexion.

        MySQLi_begin_transaction    Commence un transaction.

        MySQLi_connect_error        Renvoie un message d'erreur.

        MySQLi_errno                Renvoie le dernier message d'erreur.

        MySQLi_get_client_info      Renvoie des informations sur la librairie du client SQL.

        MySQLi_query                Éxécute une requête SQL.
*/

?>

</div>

<?php
include_once('footer.php');
?>

</body>
</html>