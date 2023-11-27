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
    echo "<br><br><br>";

    /*
        1) Les fonctions STATIQUES
    Une variable statique déclarée à l'intérieur d'une fonction à l'aide de l'instruction static permet à celle-ci de garder sa valeur à chaque appel de la fonction. L'initialisation d'une vairbale static se fait au début de la fonction et à chaque appel de la fonction dans le script et elle gardera la valeur du dernier appel.
    */
        function stat_fonc(){
            static $cpt = 0;
            $cpt++;
            echo $cpt;
        }

        echo "<br>Au premier affichage, cpt vaut : "; stat_fonc();
        // doit afficher 2 car le premier appel initialise $cpt à 0 une seule fois et l'incrémente de 1
        echo "<br>Au deuxième affichage, cpt vaut maintenant : "; stat_fonc();
        echo "<br>Au troisième affichage, cpt vaut dorénavent : "; stat_fonc();
        echo "<br><br><br>";

    /*
        1) Les fonctions AVANCEES
    Il existe trois fonctions utilisées dans la gestion des arguments passés à une fonction dans PHP. Il s'agit de :
    - func_get_arg : permet de lire un argument spécifique
    - func_get_args : permet d'obtenir l'ensemble des arguments sous forme d'un tableau
    - func_num_args : permet de connaître le nombre d'arguments reçu par la fonction
    */
        function gestion_arg1(){
            $numargs = func_num_args();
            echo "<u>gestion_arg1</u><br>";
            echo "Nombre d'arguments de la fonction 1 : $numargs\n <br>";
            // if($numargs >= 2){
            //     echo "Le premier argument est : ".func_get_arg(0)."\n <br>";
            //     echo "Le deuxième argument est : ".func_get_arg(1)."\n <br>";
            //     echo "Le troisième argument est : ".func_get_arg(2)."\n <br>";
            // }
        }
        gestion_arg1(89,654);

        echo "<br><br>";

        function gestion_arg2(){
            $numargs = func_num_args();
            echo "<u>gestion_arg2</u><br>";
            echo "Nombre d'arguments de la fonction 2 : $numargs\n <br>";
            if($numargs >= 2){
                echo "Le premier argument est : ".func_get_arg(0)."\n <br>";
                echo "Le deuxième argument est : ".func_get_arg(1)."\n <br>";
                echo "Le troisième argument est : ".func_get_arg(2)."\n <br>";
            }
        }
        gestion_arg2(25,250,1000);
        echo "<br><br>";

    /*
        3) Les fonctions DYNAMIQUES
    Vous pouvez vous trouver dans le cas où vous ne savez pas quelle fonction devra être appelée à un moment précis dans un script donné.
    Pour cela, il suffit de placer dans une variable le nom d'une fonction, puis d'utiliser cette variable comme une fonction.
    */
         function ecrire($texte){
            print($texte);
         }
         function ecrireEnGras($texte){
            print("<b>$texte</b>");
         }
         $fonction_var = "ecrire";
         $fonction_var ("toto") ; // Affiche toto
         echo "<br/>";
         $fonction_var = "ecrireEnGras";
         $fonction_var ("toto");
         echo "<br><br>";

    /*
        4) Les fonctions RECURSIVES
    Le langage PHP supporte les fonctions récursives. Une fonction récursive est une fonction qui s'appelle elle-même.

    Un exemple simple présentant le principe de la récursivité : affichage à l'envers d'une chaîne de caractères.
    */
        $str = "Hello World !";

        reverse_r($str);
        function reverse_r($str){
            if(strlen($str) > 0){
                // substr retourne le premier caractère
                reverse_r(substr($str, 1)); // Appel récursif
                echo "<br>";
                echo substr($str, 0, 1); // Affiche un caractère
                return;
            }
        }
        echo "<br><br>";

    /*
    Les fonctions récursives sont principalement utilisées pour naviguer dans les structures de données dynamiques (liste et arbre).
    Autrement, dans de nombreux cas, la récursivité est équivalente à une répétition (ou itération). Les fonctions récursives sont plus lentes et consomment plus de mémoire que les itérations.*/

    $str_1 = "Hello world !";
    reverse_r($str_1);
    function reverse_r_1($str_1){
        for($i=1; $i<=strlen($str_1); $i++){
            echo substr($str_1, -$i, 1); // Affiche un caractère en partant de la fin
        }
        return;
    }

        // Test :

        function FonctPrenom($prenom){
            return $prenom;
        }
        FonctPrenom("Anissa");
        $prenom = FonctPrenom("Anissa");

        function nomComplet($nom, $prenom){
            return $nom." ".$prenom;
        }

        echo nomComplet("Ben Saïd", $prenom);
        
    ?>

    </div>

<?php
    include_once('footer.php');
?>

</body>
</html>