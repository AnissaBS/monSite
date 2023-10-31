<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>Programmation orientée Objet</title>
</head>
<body>

<?php
    include_once('entete.php');
?>

    <div class="content">
        <h1>Programmation orientée Objet</h1>

    <?php
        class Personne{
            public $prenom;
            public $nom;
            public $age;

            public function __construct($prenom, $nom, $age){
                $this->prenom=$prenom;
                $this->nom=$nom;
                $this->age=$age;
            }

            public function nomComplet(){
                // echo $this->nom . ' ' . $this->prenom . ' ' . $this->age . PHP_EOL; // 1ère manière
                return sprintf('%s %s', $this->nom, $this->prenom, $this->age); // 2ème manière
            }

            public function danser(){
                echo $this->prenom." est en train de danser".PHP_EOL; // EOL = END OF LINE : retour à la ligne
            }
        }

        // Création d'un nouvel objet à partir de la classe Personne ou création d'une nouvelle instance de la classe Personne
        $magne = new Personne('Magne', 'Matangou', 43);
        $isaac = new Personne('Isaac', 'Boun', 24);

        echo $magne->prenom;
        echo "<br>";
        echo $isaac->prenom;
        echo "<br>";

        echo $magne->prenom . PHP_EOL;
        echo $magne->nom . PHP_EOL;
        echo $magne->age . "ans" . PHP_EOL;
        echo "<br>";

        echo $magne->danser();
        echo "<br>";

        $ToutLeNom = $magne->nomComplet();
        echo "Voici le nom complet ainsi que l'âge : ".$ToutLeNom.PHP_EOL;



    ?>

    </div>
    
<?php
    include_once('footer.php');
?>

</body>
</html>