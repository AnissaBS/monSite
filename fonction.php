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
        <h1>Les Fonctions</h1>
    <!-- Les fonctions en php 
    /*
        Une fonction correspond à une série d'instructions qui effectuent une tâche spécifique. Pour exécuter une fonction, il faut appeler la fonction par son nom en plaçant ou non des paramètres. On parle souvent de fonctions personnalisées quand on écrit soi-même les instructions mais on parle aussi de fonction PHP ou prédéfinies qand on utilise une commande qui effectue une tâche, comme par exemple "strval", "strtotime", ou d'autres encore.
    */-->

    <?php
    function bonjour(){
        print("Salut Jean");
    }
    bonjour();
    echo "<br>";

    function bonjour1($prenom){
        print("Salut ".$prenom);
    }
    bonjour1("Anissa");

    // Opérateur numérique dans les fonctions
    function addition($nbre1, $nbre2){
        $resultat = $nbre1 + $nbre2;
        echo "<br>".$resultat;
    }
    addition(1, 2);
    echo "<br>";


    function calculTVA(){
        return 100*1.2;
    }
    // J'exécute ma fonction calculTVA en l'appelant
    echo "fonction calcul tva 1 ".calculTVA()."<br>";
    echo "<br>";

    function calculTVA2($nombre){
        return $nombre*1.2;
    }
    // Exécuter la fonction
    echo calculTVA2(500)."<br>";
    echo calculTVA2(2500)."<br>";
    echo "<br>";

    function calculTVA3($montant, $taux){
        return $montant*$taux;
    }
    echo "Un produit à 500€ avec un taux de 5.5% font ".calculTVA3(500, 1.055)."€.<br>";
    echo "Un produit à 4000€ avec un taux de 20% font ".calculTVA3(4000, 1.2)."€.<br>";
    echo "<br>";


    function afficherDate($jr, $mois, $annee){
        echo $jr." ".$mois." ".$annee;
    }
    // Exécution de la fonction
    afficherDate(25, 'Octobre', 2023);
    echo "<br><br>";


    $a = 10;
    $b = 5;
    $c = 30;
    function volume($largeur, $longueur, $hauteur){
        echo "Le volume est : ".$largeur*$longueur*$hauteur;
    }
    volume($a,$b,$c); // Ou : volume(10,5,30); par exemple
    echo "<br><br>";


    // Notion de PORTEE DE VARIABLE

    /*
        La portée de variables indique l'emplacement dans lequel elle est accessible. Une variable locale ou globale.

        * Toute variable définie en dehors d'une fonction a une portée globale.

        * Toute fonction définie à l'intérieur d'une fonction aura une portée locale à la fonction. Cela signifie que la variable ne sera accessible qu'au sein de la fonction et sera détruite dès la fin de l'exécution de la dite fonction.

        * Toute variable définie dans une fonction avec le mot clé global sera considérée comme globale et pourra changer de valeur dans les différents scripts.
    */

    function calcul_remise($h1){
        global $taux_remise;
        $taux_remise = 0.3;
        return $h1 * $taux_remise;
    }

    // Je définis une fonction qui calcule la tva
    function calcTVA($h2){
        global $taux_tva;
        $taux_tva = 0.2;
        return $h2*$taux_tva;
    }

    $ht = 100; // Le hhots taxe

    // Je recupère la mise à déduire
    $remise = calcul_remise($ht);
    echo "La remise est : ".$remise."<br>";

    // Je récupère la tva à ajouter
    $tva = calctva($ht);
    echo "La tva est : ".$tva."<br>";

    // Calcul ttc
    $ttc = $ht - $remise+$tva;

    // Je récupère le ttc
    echo "Le ttc est : ".$ttc."<br>";

    /* Autre exemple :
    $ht5=100;

    calcul_remise($ht5);
    calcul_tva($ht5);

    $ttc5=$ht5+$tva5-$remise;

    Echo "La tva est $tva5 la remise $remise et le ttc est $ttc5" */
    
    function carre($cote){ // Ici, $cote => paramètre
        echo "L'aire du carré est : ".$cote*$cote;
    }
    carre(5); // Ici, on appelle la fonction + l'argument entre parenthèses

    ?>

    </div>

<?php
    include_once('footer.php');
?>

</body>
</html>