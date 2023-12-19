<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Structures de contrôle</title>
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
        echo "<b>. Boucle WHILE</b>";
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

        echo "<b>. Boucle DO WHILE</b>";
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

        echo "<b>. Notion d'incrémentation et de décrémentation</b>";

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
        echo "<b>. BOUCLE FOR</b>";
        echo"<br><br>";

        for($p=0; $p<=5; $p++){
            echo "Je dis bonjour avec la boucle for : ".$p."<br>";
        }

        echo "Les niveaux de titres en html";
        for($i=1; $i<7; $i++) {
            echo "<h$i> $i : Titre de niveau $i</h$i>";
        }
        echo "<br><br>";

        for($i=1, $j=9; $i<10, $j>0; $i++, $j--) {
            echo "<span style =\"border-style:double;border-width:3;\"> $i + $j=10</span>";
        }
        echo "<br><br><br>";

        echo "<h3>. Révisez votre table de multiplication</h3><br>";

    // Début du tableau
        echo "<table border =\"2\" style=\"background-color:rgb(100, 100, 180)\"><tr><th>&nbsp; X &nbsp;</th>";

    // Créer une première ligne
        for($i=1; $i<10; $i++) {
            echo "<th> &nbsp; $i&nbsp; </th>";
        }

        echo "</tr>";

    // Fin de la boucle
    // Création du corps de la table :
    // Boucles de création du contenu de la table
        for($i=1; $i<10; $i++){
            echo "<tr><th> &nbsp; $i&nbsp; </th>";

        //Remplissage de la table
            for ($j=1; $j<10; $j++){
                echo "<td style=\"background-color:rgb(147, 147, 222);color:white\">&nbsp;".$i*$j."&nbsp; &nbsp; </td>";
            }
        }

        echo "</tr>";

        echo "</table><br><br>";

    // Autre tableau
        echo "<h5>Autre mise en forme de tableau</h5>";
        
        echo "<table border=2 width=\"50%\" style=\"color:white;\">"; // Création de la balise table avec bordure, largeur 50% et couleur du texte blanc
        echo "<tr><td style=\"background-color: rgb(0, 15, 225);\">X</td>"; // Début de la première ligne et déclaration de la première cellule qui ne s'incrémentera pas X
        for($i=1;$i<=10;$i++){ // Déclaration de la boucle de la première ligne
            echo "<td style=\"background-color: rgb(" . ($i * 10) . ", 15, 225);\">" . $i . "</td>"; //Écriture des cellules de la première ligne avec un bckground qui change de couleur avec la boucle
        }
        echo "</tr>"; //Fin de la première ligne
        for($i=1;$i<=10;$i++){ //déclaration de la boucle pour le tableau
            echo "<tr><td style=\"background-color: rgb(" . ($i * 10) . ", 15, 225);\">".$i."</td>"; //première cellule la ligne
            for($j=1;$j<=10;$j++){ //boucle qui remplit la ligne à partir de la 2ème cellule
                echo "<td style=\"background-color: rgb(" . ($i * 10) . "," . ($j * 10) . ", 225);\">".($i*$j)."</td>";
            }
            echo "</tr>"; //fin de ligne
        }

        echo "</table>"; //Fermeture de la table


    //La boucle FOREACH
        /*
        
        */

        echo"<br><br><br>";
        echo "<b>. BOUCLE FOREACH</b>";
        echo"<br>";

        $T["janvier "] = " école";
        echo"<br>";
        $T["septembre "] = " vacances";
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