<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
Une variable contient une information temporaire qui peut être numérique, de type alphabétique (chaîne de caractères), de type date, de type objet ou d'autres types.
Le nom d'une variable doit commencer le caractère $ suivi d'une lettre ou d'un signe _ (barre du huit) et ne doit jamais commencer par un chiffre.Les noms des variables sont sensibles à la casse (miniscule/majuscule).
Le signe = sert donc à affecter une valeur à la variable, il s'agit donc d'un opérateur d'affectin et non le signe égal que l'on utilise pour calculer. */

$prenom = "téo";
$nom = "Durant";
$prenom_nom = $prenom."".$nom;
echo '<br>'.$prenom_nom;

?>
</body>
</html>