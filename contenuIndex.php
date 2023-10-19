<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="content">
<h1>Présentation PHP (index)</h1>

<?php
// J'affiche le prénom
echo "paul";
echo "<br>"; // Je saute une ligne
echo "ochon"; // J'affiche le nom
# Ceci est aussi un commentaire
echo "<br> paul ochon";

/**
 * Les commentaires vous aideront lorsque vous reviendrez dans 6 mois et que vou saurez tout oublié sans doute.
 * 
 */

echo "<br> Super";
echo "<br>";

/* Si vous souhaitez voir les caractères qui sont utilisés pour entourer les mots. */
echo 'J\'écris à l\'encre de chine';

/*
    Le caractère anti-slash précède le 2ème apostrophe qui échappe aunsi à sa fonction naturelle qui est d'entourer des chaînes de caratères. Ici, on met des guillemets au début et à la fin du texte et il n'est donc pas nécessaire d'échapper l'apostrophe. Par contre, il faut échapper le guillemet du prénom.

    */
echo "<br> j'envoie des lettres à \"ma dulcinée\"";

/* Les variables
Une variable est un conteneur d'une donnée unique, c'est à dire une boîte à chaussures qui ne contient qu'une seule chaussure.
Une variable contient une information temporaire qui peut être numérique, de type alphabétique (chaîne de caractères), de type date, de type objet ou d'autres types. */

echo "<br>";
$largeur = 5;
echo $largeur;

/* Le nom d'une variable doit commencer le caractère $ suivi d'une lettre ou d'un signe _ (barre du huit) et ne doit jamais commencer par un chiffre.Les noms des variables sont sensibles à la casse (miniscule/majuscule).
Le signe = sert donc à affecter une valeur à la variable, il s'agit donc d'un opérateur d'affectin et non le signe égal que l'on utilise pour calculer. */

$prenom = "téo";
$nom = "Durant";
$prenom_nom = $prenom."".$nom;
echo '<br>'.$prenom_nom;
echo "<br>";

/**
 * Fonctions qui s'appliquent aux variables
 * 
 * strlen(variable) : renvoie la longueur d'une chaîne de caractères.
 * substr(variable, début, longueur) : renvoie une partie de la chaîne de caractères.
 * trim(variable) : supprime les espaces (ou d'autres caractères) en début et en fin de chaîne.
 * number_format(variable "point ou point virgule"; "caractères pour les milliers").
 * round(variable, nombre de décimale) : arrondit le nombre.
 */

 $nom2 = "MARIE ROSE";
 echo strlen($nom2); // Affiche le nombre de caractères de la variable "$nom2" : ici, 10 à cause des espaces
 echo "<br>";
 var_dump($nom2); // Affiche string (10) "MARIE ROSE"
 echo "<br>";
 echo trim($nom2); // Affiche MARIE ROSE sans espaces
 echo "<br>";
 echo substr($nom2, 3, 5);
 echo "<br>";
 echo $prix = 2050900.7854;
 echo "<br>";
 echo number_format($prix, 2, ", ", ","); // Affiche 2 050 900.79 en plaçant 2 décimales après un ppoint et un espace comme séparateur de milliers.
 echo "<br>";
 echo round($prix, 1); // Arrondit à une décimale près
 echo "<br>";

 // AFFECTATION DE VARIABLES PAR LA VALEUR OU PAR ALIAS

 /**
  * Losqu'on affecte une donnée dans une variable, on dit qu'on affecte la variable par valeur. Toutefois, on pourrait aussi créer un alias à une autre variable. On dit parfois qu'on affecte la variable par référence.
  * Pour créer un alias vers une autre variable, on utilise le signe & (et commercial ou perpluette).
  */

  $v1 = "Jacques Chirac <br>";
  $alias = &$v1; // Créer un alias vers $v1
  $alias = "Mon nom est $alias"; // Affectation par référence : affecter une valeur à l'aide d'une autre variable
  echo $alias;

  $prenom2 = "Alain";
  echo "Salut les gars mon nom est : ".$prenom2." Dupont";

?>

    </div>

</body>
</html>