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
        <h1>Tests Conditions</h1>

    <?php
    // Appli remise
        $tarif = 800;
        $remise = 0.05;
        $prix_net = $tarif*(1-$remise);
        echo $prix_net;

        if($prix_net >= 1500)
            echo "<br> Wouaaaah c'est trop cher !";
        elseif($prix_net >= 1000)
            echo "<br> Vas-y ça passe..";
        else
            echo "<br> Làààà ça passe, là j'achète ! On signe où ?";

        echo "<br><br><br>";

        echo "Début de mon application code postal";
        echo "<br>";
        echo "//---------------------------------//";
        echo "<br>";
    // End appli remise


    // Appli Code postal
        $code_postal = "45000";

        if(substr($code_postal,0,2)=="45") // 0 : commence à compter à partir de 0 / 2 : compte les 2ers chiffres
            echo "Orléans";
        elseif(substr($code_postal,0,2)=="75")
                echo "Paris";
        elseif(substr($code_postal,0,2)=="69")
                echo "Lyon";
        elseif(substr($code_postal, 0, 2)=="94")
                echo "Quimpère";
        elseif(substr($code_postal, 0, 2)=="29")
                echo "Saint Maur";
        else{
            echo "Province";
        }
        
        echo "<br>";
        echo "//---------------------------------//";
        echo "<br>";


    // Appli code postal avec switch
        $codePost = "18350";

        switch(substr($codePost,0,2)){
            case "69";
                echo "Lyon";
                break;
            case "33";
                echo "Bordeaux";
                break;
            case "45";
                echo "Orléans";
                break;
            case "18";
                echo "Bourges";
                break;
            case "33";
            echo "Toulouse";
                break;
            case "13";
                echo "Marseille";
                break;
            default:
                echo "Ailleurs";
        }

    /*
        Avec le switch, le code peut tester plusieurs cas les uns à la suite des autres. Mais switch ne  peut tester que des égalités contrairement à if...elseif...else où toutes les comparaisons sont possibles.
    */
        
    echo "<br>";
    echo "//---------------------------------//";
    echo "<br>";

    // TEST avec la condition ternaire :

    /*
        Les conditions ternaire sont des expressions dans lesquelles les conditions vraies et fausses sont écrites sur une même ligne.
    */

    $c_postal = "75008";
    echo substr($c_postal,0,2)=="75" ? "Paris" : "Province";




    ?>

    </div>
    
<?php
    include_once('footer.php');
?>

</body>
</html>