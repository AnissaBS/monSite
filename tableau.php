<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
    <style>
        table,td,th,tr{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    
<?php
    include_once('entete.php');
?>

    <div class="content">
        <h1>Les Tableaux</h1>


<?php
    $tb = ['Paris', 'Londres', 'Rome', 'Berlin'];
    // echo $tb[1];
echo ". Sans count <br>";
for($i=0;$i<3;$i++){
    echo $tb[$i], "<br>";
}

echo "<br>";
echo ". Avec count<br>";
for($i=0; $i<count($tb);$i++){
    echo $tb[$i], "<br>";
}

echo "<br><br>";

    $tab = [
        'Paris'=>'France',
        'Londres' => 'Angleterre',
        'Rome' => 'Italie',
        'Berlin' => 'Allemagne',
    ];
    echo $tab['Berlin'];
    // Pour parcourir un tel tableau, il faut employer la boucle foreach
    foreach($tab as $ville=>$pays){
        echo $ville."->".$pays."<br>";
    }

    echo "<br><br>";

    // Création du tableau de 9 éléments :
    for($i=0;$i<=11;$i++){
        $tab2[$i] = pow(2,$i);
    }

    // $val = "une valeur";
    // echo $val, "<br>";

    // Lecture des valeurs du tableau
    echo "Les puissances de 2 sont : ","<br>";
    foreach($tab2 as $val){
        echo $val." : ";
    }

    echo "<br><br>";

    // Créer un tableau associatif dont les clés sont les identifiants. Associer à chacun un code aléatoire compris entre 100 et 1000, puis lis et affiche le clés et les valeurs du tableau.

    // Création du tableau

    for($i=0;$i<=8;$i++){
        $tob["client ".$i] = rand(100, 1000);
    }

    // Lecture des clés et des valeurs
    foreach($tob as $cle => $val){
        echo "Le client de login <b>$cle</b> a le code <b>$val</b> <br>";
    }

    echo "<br><br>";

    // Création du tableau
    for($i=0; $i<=10; $i++){
        $tab3[$i] = pow(2, $i);
    }

    // La lecture des indices et des valeurs
    foreach($tab3 as $ind=>$val){
        echo "<br> 2 puissances $ind vaut $val";
    }

    echo "<br><br> Le dernier indice :".$ind," , la dernière valeur :", $val, "<br><br>";

    $Teb = array(
        array ("<b>LIBRAIRIE</b>", "<b>TITRES</b>", "<b>REMISE</b>"),
        array ("FNAC", "GOOGLE SHEETS", "40%"),
        array ("FNAC", "EXCEL", "40%"),
        array ("EXPRESS", "GOOGLE DOCS", "38%"),
        array ("EXPRESS", "GOOGLE SLIDES", "40%")
    );
    echo "<table border=1 width=\"50%\">";

    // La lecture de chaque ligne
    foreach($Teb as list($librairie, $titre,$remise)){
        // J'affiche les données dans des cases d'un tableau
        echo "<tr><td>".$librairie."</td><td>".$titre."</td>"."<td>".$remise."</td>"."</tr><br>";
    }
    echo "</table>";

    echo "<br><br>";

    $tablo[1]= "Pomme";
    $tablo[2]= "Poire";
    $tablo[3]= "Orange";
    $tablo[4]= "Cerise";
    $tablo[5]= "Mangue";

    // Je relie les éléments en les affichant dans le browser
    echo "<ol>"; // Je prépare une liste numérotée
    for($i=1;$i<=5;$i++){
        echo "<li>".$tablo[$i]."</li>"; //J'affiche chaque élément du tableau
    }
    echo "</ol>";

    echo "<br><br>";

    $tablo1[]="Stylo";
    $tablo1[]="Crayon";
    $tablo1[]="Gomme";
    $tablo1[]="Règle";

    // Je relie les éléments en commençant à 0
    for($i=0; $i<count($tablo1); $i++){
        echo $tablo1[$i]."<br>";
    }

    echo "<br><br>";

    $tablo2= ["Voiture", "Vélo", "Moto", "Camion", "Bateau"];
    echo "<br>";
    print_r($tablo2);

    /* En résumé :
        Les tableaux sont des structures de variables complexes à une ou plusieurs dimensions.
        Un indice numérique ou texte permet de récupérer la valeur d'une case d'un tableau. Duns un indice numérique, on utilise une boucle for ou while pour lire les éléments d'un tableau.
        Dans le cas d'un indice de type texte, il faut employer la boucle foreach.
        Les tableaux servent aussi à organiser des matrices d'informations que l'on récupère si besoin en les parcourant à l'aide d'une ou plusieurs boucles.
    */

    ?>
</div>

<?php
    include_once('footer.php');
?>

</body>
</html>