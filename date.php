<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Pour manipuler les dates, on utilise un groupe date/heure aussi appelé times-stamp qui est issu de la notion UNIX.
        PHP utilise le fuseau horaire qui défini par défaut dans la rubrique [Date] du fichier php.ini. Ce fichier regroupe tous les paramètres de base. On peut ouvrir ce fichier avec n'importe quel éditeur.
        [Date]
        ;date.timezone = "Europe/eBerlin"
        Vous pouvez donc récuperer le nom du fuseau horaire en cours par le code ci-dessus. */

        //Je récupère le fuseau horaire local

        $fuseau = date_default_timezone_get(); // Affiche UTC
        echo $fuseau;
        echo "<br>";

        /*
        Le programme renvoie UTC qui signifie
        */

        echo date("j m y")."<br>"; // Affiche la date au format 17 10 23
        echo date("j m Y")."<br>"; // Affiche la date au format 17 10 2023
        echo date("j M Y")."<br>"; // Affiche la date au format 17 oct 2023

        //setLocale(LC_TIME, "french"); //en français
        echo strftime("%A")."<br>"; // Affiche le Jour de la semaine, ici Tuesday
        echo date("D F Y")."<br>"; // Affiche Tue October 2023
        echo date("D d M Y")."<br>"; // Affiche Tue 17 Oct 2023

        /*
            Différents paramètres de la fonction Date :
                a : am ou pm
                A : AM ou PM
                d : Le jour du mois sur 2 chiffres
                D : Le jour de la semaine en anglais sur 3 lettres
                F : Le nom du mois en anglais
                j : Le jour sur un chiffre
                m : Le numéro du mois sur deux chiffres
                M : Le numéro du mois en anglais sur 3 lettres
                n : Le numéro du mois sur un chiffre
                y : L'année sur 2 chiffres
                Y : L'année sur 4 chiffres
                A : Le numéro du jour de la semaine (0 à 6 en commençant par le dimanche)

                Il est à noter que pour afficher en format local, par exemple en français, il faut utiliser l'instruction "strftime avec les paramètres.
        */

        echo strftime("%A")."<br>"; // Affiche Tuesday
        setLocale(LC_TIME, "french"); // On définit le français
        echo strftime("%A")."<br>"; // Affiche mardi
        echo strftime("%a")."<br>"; // Affiche mar.
        echo strftime("%A %d %B %Y")."<br>"; // Affiche mardi 17 octobre 2023
        echo strftime("%d/%m/%Y")."<br>"; // Affiche 17/10/2023
        echo strftime("%d-%m-%Y")."<br>"; // Affiche 17-10-2023

        /* Comparaison des deux dattes */
        $Date1 = "04-09-2023";
        $Date2 = "17-10-2023";

        // Je transforme les variables en timestamps
        $t1 = strtotime($Date1);
        echo "le 04/09/2023 est égal à . ".$t1."secondes<br>";

        
        $t2 = strtotime($Date2);
        echo "le 17/10/2023 est égal à . ".$t2."secondes<br>";

        if($t1 < $t2){
            echo "La première date est bien avant la 2nd date <br>";
        }else{
            echo "La deuxième date est bien avant la 1ère date <br>";
        }

        /*
            Tester la validité d'une date
            D'une manière générale PHP est employé pour répondre à une intéraction d'un client qui envoie ses informations vers un serveur par l'intermédiaire d'un formulaire. Si la personne transfère des dates, le programme PHP devra les valider avant de les utiliser.  Pour ce faire, PHP possède une fonction qui peut aider à tester les dates à traiter : chackdate().
            Cette fonction est un boléen qui renvoie truc ou false. Les paramètres en entrée sont le mois de la date à tester, ainsi que le jour et l'année (dans cet ordre). Bien évidemment, le mois doit être compris entre 1 et 12, le jour doit être compris entre 1 et 31 et les années doivent être comprises entre 1 et 32767.
            Les anées bisextiles sont prises en compte.
        */
        echo checkdate(12,25,2022);
        echo "<br>";
        if(checkdate(13,25,2021)==false){
            echo "Mauvaise date"; // Si la date ne correspond pas aux normes du calendrier : par exemple 13 pour le mois ou 35 pour le jour
        }else{
            echo "Bonne date !";
        }

        //Calculer, qelles étaient les années bissextiles de 1800 à nos jours
        echo "<br>";
        for($i = 1980; $i<2024; $i++ ){
            if(checkdate (02,29,$i)==true){
            echo $i." est une année bissectile"."<br>";
            }
        }

        // Date et heures
        $dateTemps = date("Y-m-d H:i:s");
        echo"<br>Date actuelle : $dateTemps";



    ?>
</body>
</html>