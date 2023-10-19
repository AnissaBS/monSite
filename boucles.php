<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Strucutres de contrôle</title>
</head>
<body>

<?php
    include_once('entete.php');
?>

    <div class="content">
        <h1>Les Boucles</h1>
        <!-- Elles permettent d'exécuter plusieurs fois des blocs de code en fonction de la valeur d'une variable.
        On distingue les boucles : while, for, foreach -->

    <?php
    // La boucle while :
    /*
        Elle exécute un bloc de lignes de code tant que la condition est vraie.
    */
        echo ". Boucle WHILE";
        echo "<br><br>";
        $a = 1;
        // Tant que la variable est inférieure ou égale à 10
        while($a<=10) {
            echo "La valeur est $a <br>";
            // J'incrémente la valeur de a
            $a++; // Ici, la valeur de $a augmente de 1 à chaque fois
        }

        echo "<br><br><br> ";

    // La boucle Do ... While
    /*
        Cette boucle ressemble à la précédente mais le code est exécuté avant que  la condition ne soit testée.
        En d'autres termes, vous êtes sûr que le 1er passage sera effectué dans la boucle même si la condition s'avère fausse.
    */

        echo ". Boucle DO WHILE";
        echo "<br><br>";

    // je définis  l'environnement en français
        setlocale(LC_TIME, ['fr','fra','french']);
    //j'initialise une variable
        $nombre = 0;
    //faire
        do {
            //je récupère la date du jour avec un formatage et le nombre du jour
            $d1 = date("d/m/Y", strtotime('+'.$nombre.'days'));
            //j'affiche la date
            echo "<p>".$d1."<p>";
            //j'incrémente la variable
            $nombre++;
        }

    //tant que la variable est inférieure ou égale à 15
        while($nombre<=15);

        echo "<br><br><br> ";

    
    // Notions d'incrémentation et de décrémentation

        echo ". Notion d'incrémentation et de décrémentation";

        $x = 20;
        echo "<br><br>";

        echo "x = ",$x;
        echo "<br>";

        $y = 12;
        
        echo 'y = ', $y;
        echo "<br>";

        $x++; //j'incrémente
        $y--; //je décrémente
        echo 'La variable $x est incrémentée et vaut : '.$x.'. En revanche, la variable $y est décrémentée et vaut maintenant = '.$y.'.';


    // La boucle FOR
    /*
        Elle indique de répéter une action un certain nombre de fois en fonction de la valeur d'un pointeur.
        Le structure possède trois paramètres :
        - un début
        - un test 
        - une incrémentation, qui s'effectue à la  fin de hcaque passage dans la boucle
    */
        echo"<br><br><br>";
        echo ". BOUCLE FOR";
        echo"<br><br>";

        for($p=0; $p<=5; $p++){
            echo "Je dis bonjour avec la boucle for :".$p."<br>";
        }

    //La boucle FOREACH
    /*
    
    */

        echo"<br><br><br>";
        echo ". BOUCLE FOREACH";
        echo"<br>";

        $T["janvier"] = "école";
        echo"<br>";
        $T["septembre"] = "vacances";
        foreach($T as $mois => $periode){
            echo $mois."===>".$periode."<br>";
        }


    ?>

    </div>

<?php
    include_once('footer.php');
?>

</body>
</html>