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
        <h1>Structures de contrôle</h1>
<!-- Les tructure de contrôle en PHP :
Elles permettent d'exécuter des blocs en fonction d'une condition qui doit être vérifiées.
On distingue 1)les strucutres conditionnelles (ou test) et 2)les structures de boucles. -->

    <!-- 1) LES STRUCTURES CONDITIONNELLES : if, if ... else, elseif, switch et les ternaires -->
    <?php
    // Test avec if :
    $a = 2;
    if($a > 1){
        echo "La variable $a est plus grand que 1. <br><br>";
    }

    // Test avec if ... else :
    $b = 5;
    $c = 17;
    if($b > $c){
        echo "Test if else : La variable $b est plus grand que $c. <br><br>";
    }else{
        echo "Test if else : La vairable $b est plus petite ou égale à $c. <br><br>";
    }

    // Test elseif :
    $d = 2;
    $e = 7;
    if($d < $e){
        echo "La variable $d est plus petite que $e. <br><br>";
    }elseif($d > $e){
        echo "La variable $d est plus grand que $e. <br><br>";
    }else {
        echo "La variable $d est égale à $e. <br><br>";
    }

// Les opérateurs de comparaison :
/*
    == : égale à..
    != : différent de..
    > : strictement suprérieur à..
    < : strictement inférieur à..
    >= : supérieur ou égal à..
    <= : inférieur ou égal à..
*/

    $nbr = 5;
    $nbr2 = 10;

    var_dump($nbr == $nbr2);
    echo "<br>";
    
    echo "La condition 2 est : ",var_dump($nbr != $nbr2);
    echo "<br>";

    echo "La condition 3 est : ",var_dump($nbr > $nbr2);
    echo "<br>";

    echo "La condition 4 est : ",var_dump($nbr < $nbr2);
    echo "<br>";

    echo "La condition 5 est : ",var_dump($nbr >= $nbr2);
    echo "<br>";

    echo "La condition 6 est : ",var_dump($nbr <= $nbr2);
    echo "<br><br><br>";

// Les opérateurs logiques :
/* Ils permettent de combiner des tests et des conditions. */

    $nb = 15;
    $nb1 = 8;
    $nb2 = 1;

    if($nb && $nb1 && $nb2)
        echo "Les variables $nb, $nb1, $nb2 contionnent des valeurs différentes. <br />";
    else
        echo "Une des variables contient dalse comme valeur. <br>";

    if ($nb >= 10 || $nb1 >= 10 || $nb2 >=10)
        echo "La variable $nb2 a une valeur équivalente à false. <br>";
    if(!$nb2)
        echo "La variable $nb2 a une valeur équivalente à false. <br>";
    else
        echo "La variable $nb2 a une valeur équivalente à truc. <br>";


    ?>

    </div>
    
<?php
    include_once('footer.php');
?>

</body>
</html>