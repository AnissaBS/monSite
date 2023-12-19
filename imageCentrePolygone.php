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
        // header("image/jpeg");
        $myImg=imagecreate(800,400);
        $fond=imagecolorallocate($myImg,255,255,51);
        $noir=imagecolorallocate($myImg,0,0,0);
        $blanc=imagecolorallocate($myImg,255,255,255);
        
        // définition de l'epaisseur de trait de 3 pixels
        imagesetthickness($myImg,3);
        //Coordonnées du quadrilatère
       $tab = array(100,50,500,100,750,300,50,350);
       //tracé du quatrilatère
       imagepolygon($myImg,$tab,4,$noir);
       //tracé du triangle plein
       imagefilledpolygon($myImg,array(150,80,500,150,250,310),3,$blanc);
        imagegif($myImg,"Ressources/polygon.jpeg");
        imagedestroy($myImg);

        
       
        
        
        ?>
        <img src="Ressources/polygon.jpeg" alt="">

       

    </div>
    
    
   
</body>
</html>