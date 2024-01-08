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
        <h1>Création des tracés d'arc, de cercles et d'ellipses</h1>
        <?php
            /*
            Pour tracer des arcs de cercle ou des ellipse, vous disposez de la fonction imagearc (), dont la syntaxe est la suivante:
            int imagearc(resource $idimg, in tXc, int Yc, int Larg, int Haut, int Ang1, int Ang2,int $couleur).
            Les paramettre Xc et Yc sont les coordonnée du centre. Larg et HAut representent la LArgeur et la Hauteur (égaux pour le cercle).
            Ang1 et Ang2 sont les angles en degrés, qui permettent d'indiquer la portion de cercle ou l'ellipse qui sera représentée.
            L'origine des angles est la position horaire 3 heures, et le sens positif est horaire.
            
            Pour créer des secteurs circulaires ou elliptiques pleins, vous utilisez la fonction imagefilledarc(), dont la syntaxe est quasiment identique:
            bool imagefilledarc(resource $idimg, in tXc, int Yc, int Larg, int Haut, int Ang1, int Ang2,int $couleur, int style).

            Le parametre supplementaire style est une constante entière, qui peut prendre les valeurs suivantes:
            IMG_ARC_PIE: La secteur est plein, et les rayons sont tracés. Vous obtenez un camembert.
            IMG_ARC_NOFILL: seul le contour est tracé sans les rayons. Dans ce cas, vous utilisez de préférence imagearc().
            IMG_ARC_CHORS:les rayons et la corde qui relie les extremités de l'arc sont tracés, et le complement du secteur tracé est rempli. Vous 
            obtenez un triange isocéle dont vous connaissez l'angle au sommet.
            
            Pour tracer des cercles ou des ellipses complets, il est simple d'utiliser la fonction:
            bool imagefilledarc(resource $idimg, in tXc, int Yc, int Larg, int Haut, int Ang1, int Ang2,int $couleur, int style).
*/

        // header("image/png");
        
        $idimg= imagecreate(800,400);
       
        $fond =imagecolorallocate($idimg, 255,255,51);
        $noir= imagecolorallocate($idimg,0,0,0);$rouge = imagecolorallocate($idimg, 255,0,0);

    //tracer d'arc 
    imagearc($idimg,200,100,180,180,180,360,$noir);
    imagearc($idimg,200,100,180,180,180,360,$noir);
    imagefilledarc($idimg,500,200,480,300,0,290,$rouge, IMG_ARC_PIE);

    //tracé d'ellipses
    imageellipse($idimg,200,150,100,50,$noir);
    imagefilledellipse($idimg,120,300,200,80,$rouge);
    imagepng($idimg, "Ressources/cercle.png");    
    imagedestroy($idimg);
        ?>
        <img src="Ressources/cercle.png" alt="">
        </div>


        

        
        
       
        
        
       

       

   
    
    
   
</body>
</html>