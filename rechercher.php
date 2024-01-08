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
        <h1>Rechercher ici</h1>
        <br><br>

        <form action="" method="post">
            <label>Recherche un nom :</label> <input type="text" name="recherche">
            <input type="submit" value="Rechercher">
            <br><br><br><br>
        </form>
<?php
$db_server = 'localhost';   // Adresse du serveur MySQL
$db_user = 'root';          // Nom de l'utilisateur
$db_user_pass = '';         // Mot de passe
$db_name = 'casse';        // Nom de la base de données

// J'ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server, $db_user, $db_user_pass, $db_name);

// Je récupère la recherche
$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';
//J'écris la requête SQL
$q = $conn->query(
    "select nom, ville from personne
    where nom like '%$recherche%'
    or ville like '%$recherche%'
    limit 10");

// J'affiche le résultat
while($r = mysqli_fetch_array($q)){
    echo 'Résultat de la recherhe : '.$r['nom'].', '.$r['ville'].'<br>';
}

echo "<br><br>";

?>
</div>
    
<?php
    include_once('footer.php');
?>

</body>
</html>