<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleGrid.css">
</head>
<body>
    <div class="content">
        <h1>Gestion des images</h1>
        <?php
        /*Php permet non seulement de créer des pages contenant du texte affiché dynamiquement mais également des images dynamiques en fonctions
        des besoins. IL est question ici de voir comment créer des images aux formats gif, jpg, png et même wbmp à destination des terminaux mobiles.
        php est livré avec l'exention GD (Graphic Device). LA version actuelle, livrée vous permet de créer des images aux formats cités plus haut.*/ 
        // echo phpinfo();

        /*Principes généraux
        Sur le serveur local installé par wampErveur ou MAMP, l'extension D est installée par défaut. Sur un serveur sur lequel 
        elle ne serait pas disponible, vous decommenter la ligne suivante en supprimant le point-virgule au debut de la ligne:
        extension=php_gd2.dll
        cette ligne se trouve dans le fichier php.ini.

        Les Scripts de creation d'image doivent suivre les etapes suivantes:
        1. Envoi d'un entête pricisant le type d'image qui sera envoyé du serveur vers le navigateur. On trouve aussi la fonction header() 
        sous la forme suivante pour une image de type PNG:
            header("Content-type: image/png");
            2.Creation du cadre de l'image dans lequel vont être tracés les éléments de l'image en appelant la fonction imagecreate().
            qui définit les dimansions de l'image en pixels et reserve l'éspace mémoire nécessaire sur le serveur.
             
            3.Création des couleurs qui vont étre utilisées pour effectuer les tracés en utilisants les codes décimaux des couleurs RGB(red green Blue)
            à l'aide de la fonction imagecolorallocate().

            4. Tracé des formes géométriques dans le cadre. Les formes disponibles sont variées.

            5. Ecriture du texte dans l'image à l'aide des polices incorporées ou de police TrueType ou FreeRType.

            6. Envoi de l'image créee vers le navigateur ou dans un fichier image enregistré sur le serveur et utilisable dans n'importe quel page
            ou image au moyen de l'elément HTML <img>.

            7.Libération facultative de l'espace mémoire occupé par l'image sur le serveur à l'aide de la fonction imagedestroy().
        */ 
        header("image/png");
        //creation du cadre 800*400 pixels
        $id_img= imagecreate(800,400);
        //Création des couleurs
        $fond =imagecolorallocate($id_img, 255,255,51);
        $noir= imagecolorallocate($id_img,0,0,0);

        //TRACE DES FORMES

        //Enregistre l'image dans un fichier
        imagepng($id_img, "Ressources/imagedwwm.png");

        //Envoi de l'image au navigateur 
        // imagepng($id_img);

        //libération de l'espace mémoire
        imagedestroy($id_img);

        
        ?>
    </div>
    <img src="imagedwwm.png" alt=""/>
    
    
</body>
</html>