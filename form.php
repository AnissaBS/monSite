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
        <h1>Les Formulaires</h1>

<!-- Les formulaires en php 
/*
    Ils sont utilisés pour la gestion interactive d'un  site et sont à la base des pages web dynamiques.

    *Mise en oeuvre*
    Un formulaire html est défini entre les balises <form>  et </form>

    method : mode de détransmission vers le serveur des informations saisies dzns le formulaire.
    action : qui contient le script qui va traiter le ofrmulaire ou les données du formulaire.

    L'attribut method comprend deux types de valeurs : GET et POST
    GET : se rapporte aux donnée du formulaire qui seront transmises par URL et utilise la variable superglobale $_GET.
    POST : se rapporte aux donnée du formulaire qui seront transmises dans le corps de la requête et utilise la variable superglobale $_POST.

    Syntaxe : 
    $data = $_GET['dt']; // GET
    $data = $_POST['dt']; // POST
*/-->

    <form action="" method="get">
        NOM : <input type="text" name="nom"><br><br>
        Prénom : <input type="text" name="prenom" id=""><br><br>
        <input type="submit" name="" id="">
    </form>
    <!--
        La méthode GET envoie les données sous forme d'une suite de couples nom/valeur ajoutés à l'URL de la page appelée.
        La partie d'une URL précédée par ? est appelée chaîne de requête. Si la chaîne de requête contient plusieurs éléments, alors chaque élément/valeur doit êtrre séparé par la caractère &amp;
        Par ailleurs, elle ne doit pas dépasser les 255 caractères.
        Les données transmises au serveur par la méthode GET sont visibles par les utilisateurs directement dans la barre d'adresse du navigateur.
    -->

    <p>Bonjour !</p>
    <p>Votre nom est <?php echo $_GET['nom'];?>, et votre prénom est <?php echo $_GET['prenom'];?></p>
    <p>Faites un autre essaie, <a href="#">Cliquez ici</a></p>

    </div>

<?php
    include_once('footer.php');
?>

</body>
</html>