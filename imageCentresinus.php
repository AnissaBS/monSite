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
       
        $fond =imagecolorallocate($monimg, 255,255,51);
        $noir= imagecolorallocate($monimg,0,0,0);
        for($x=0;$x<800;$x++){
            $y = 200*sin($x/100)+200;
            imagesetpixel($monimg,$x,$y,$noir);
            imagesetpixel($monimg,$x,$y+1,$noir);

        }
        imagepng($monimg, "Ressources/imageSinus.png");
        imagedestroy($monimg);
        ?>
        <img src="Ressources/imageSinus.png" alt="">

       

    </div>
    
    
   
</body>
</html>