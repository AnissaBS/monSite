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
        <h1>Les Tableaux</h1>


<?php
    $tb = ['Paris', 'Londres', 'Rome', 'Berlin'];
    // echo $tb[1];
echo "sans count <br>";
for($i=0;$i<3;$i++){
    echo $tb[$i], "<br>";
}

echo "<br>";
echo "avec count<br>";
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

?>
</div>

<?php
    include_once('footer.php');
?>

</body>
</html>