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
        // header("image/png");
        $monimg= imagecreate(800,400);
        $fond=imagecolorallocate($monimg,255,255,51);
        $noir=imagecolorallocate($monimg,0,0,0);
        //définition l'epaiseur de trait de 2pixels
        imagesetthickness($monimg,2);

        //tracé des droites
        for($x=0;$x<800;$x+=10){
            imageline($monimg,400,399,$x,0,$noir);
        }
        imagepng($monimg,"Ressources/rayons.png");
        imagedestroy($monimg);
        
        
       
       
        
        
        ?>
        <img src="Ressources/rayons.png" alt="">

       

    </div>
    
    
   
</body>
</html>