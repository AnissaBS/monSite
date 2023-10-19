<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Opérations sur les variables</title>
</head>
<body>

<?php
    include_once('entete.php');
?>

    <div class="content">
        <h1>Opérations sur variables</h1>

    <?php
        $hab = 15230;
        echo $hab;

        $hab = 102;
        echo $hab;
        
        echo "<br>";

        $ville = "Orléans";
        $dep = "Centre";
        $titre = $ville.", ".$dep;
        echo $titre;

        echo "<br>";

        $nn = "Salut";
        $mm = "Bob";
        $pp = "Copaiiiiing";

        $affiche = $nn." ".$mm.", tu veux être mon ".$pp."?";
        echo $affiche;
        echo "<br>";

        $a = 1;
        $b = 3;
        $a = $a + 2;
        echo "Premier : " .$a;
        echo "<br>";

        $a = $a * $b;
        echo "Deuxième : " .$a;
        echo "<br>";

        $a = $a -1;
        echo "Troisième : " .$a;
        echo "<br>";

        $a = $a /4;
        echo "Quatrième : " ,$a; // On peut remplacer le point par une virgule
        echo "<br>";

        print("Cinquième " .$a); //
        // ou : print"Cinquième " .$a;  -> possibilité sans les paranthèses aussi

    ?>

    </div>
    
<?php
    include_once('footer.php');
?>

</body>
</html>