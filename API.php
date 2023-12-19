<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>API HTML 5 / JS</title>
</head>
<body>

<?php
    include_once('entete.php');
?>
    <div class="content">
        <h1>Les API</h1>

<!--    INTRODUCTION

    -- Objectif --
    
        A l'issue de ce cours, vous serez capable de :
            - Identifier les différentes API de HTML5.
            - Utiliser les API de HTML5 pour créer des applications web intéractives.
    

    -- Plan --

    Module 1 : Introduction ux API de HTML5 
    Les différents types d'API
    Exemple d'API

    Module 2 : L'API Canvas : pour créer des graphiques

    Module 3 : L'API Audio et Vidéo : Lecture des fichiers audio et vidéo (exemples avancés)
    A voir : Storage local, la géolocalisation...

Les API de HTML5 sont des interfaces de programmation d'application qui permettent aux développeurs d'accéder aux fonctionnalités du navigateur web à partir de Javascript. Elles sont conçues pour être imples à utiliser et permettent de créer des applications web plus riches et intéractives.

    
-- Module : CANVAS --

    Présentation
    L'API canvas est une API graphique qui permet de créer des graphiques vectoriels en JS. Elle offre une grande flexibilité et permetde créer des graphiques de toute taille et complexité.

    Utilisation
    Pour utiliser l'API Canvas, il faut d'abord créer un élément canvas dans le document HTML. Cet élément est un conteneur pour les graphiques créés.
    Une fois canvas créé, il est possible de commencer à dessiner des graphiques à l'aide des méthodesde l'API Canvas. Ces méthodes permettent de créer des lignes, des formes géométriques, des images, etc.

    La fonction getContext() prend un argument qui correspond au type de contexte graphique souhaité. Dans ce cas, on utilise le type
    2d, qui est le type de contexte graphique le plus courant.

    L'API Canvas propose une variété de methodes pour dessiner des formes géométriques. Par Exemple, la méthode beginPath()
    permet de commencer une nouvelle forme. La méthode moveTo() permet de déplacer le pointeur de dessin à un point donné.
    La méthode lineTo() permet de dessiner une ligne entre deux points et la méthode fill() permet de remplir une forme.
    L'API Canvas permet de controler l'apparence des formes géometriques dessinnées. Par exemple, la propriété fillStyle permet de définir
    la couleur de remplissage d'une forme. La propiete strokeStyle permet de definir la couleur de trait d'une forme et la propriété lineWidth
    permet de definir l'épaisseur du trait d'une forme.

        Exemple:
        ctx.fillStyle = "red";
        ctx.strokeStyle = "blue";
        ctx.lineWidth = 5;

    La méthode fillText() permet de dessiner du texte.
    exemple:
    ctx.fillStyle = "black";
    ctx.fillText("Hello, Les amis!",10, 20);

    L'API Canvas permet d'utiliser des images dans les dessin. Pour cela, On utilise la méthode drawImage().

        Exemple:
        const image = new image();
        image.src = "image.png";

        ctx.drawImage(image, 100, 100);
-->

<canvas id="titi" width="400" height="400"></canvas>
<br><br>
<canvas id="tata"></canvas>
<br><br>
<br><br>
<canvas id="toto" width="500" height="400"></canvas>

 <!-- Script de titi -->
 <script>
    var cado = document.getElementById("titi");
    var ctx2 = cado.getContext("2d");
    const image = new Image();
    image.src = "images.jpg";
    ctx2.drawImage(image, 100, 100);
</script>

 <!-- Script de tata -->
<script>
    var canvass = document.getElementById("tata");
    var ctx = canvass.getContext("2d");
    ctx.fillStyle = "black";
    ctx.fillText("Hello, les amis !", 100, 100);
</script>

 <!-- Script de toto -->
<script>
    var canvas = document.getElementById("toto");
    var ctx = canvas.getContext("2d");

    for(var i=0; i<10; i++) {
        for(var j = 0; j<10; j++){
            if((i + j) % 2 == 0){
                ctx.fillStyle = "lightblue";
            }else{
                ctx.fillStyle = "white";
            }
            ctx.fillRect(i*50, j*50, 50, 50);
        }
    }
</script>


<!-- Essaie 1 :
    
<canvas id="can" width="300" height="200"></canvas>

<script>
    var canvas = document.getElementById("can");
    var ctx = canvas.getContext("2d");
    ctx.fillStyle ="red";
    ctx.fillRect(0,0,100,100);

    function drawCircle(){
        ctx.beginPath();
        ctx.arc(150, 100, 50, 0, 2 * Math.PI);
        ctx.fillStyle = "blue";
        ctx.fill();
    }
    setInterval(drawCircle, 1000);

</script>
-->

<!-- Essaie 2 :
<p>Il faut cliquer dans le vide juste en dessous :</p>
<canvas id="cano" width="300" height="200"></canvas>

<script>
    var canvas = document.getElementById("cano");
    var ctx = canvas.getContext("2d");

    function drawLine(){
        ctx.beginPath();
        ctx.moveTo(0,0);
        ctx.lineTo(canvas.width, canvas.height);
        ctx.stroke();
    }

    canvas.addEventListener("mousedown", function(e) {
        var x = e.clientX - canvas.offsetLeft;
        var y = e.clientY - canvas.offsetTop;

        drawLine(x, y);
    });

</script>
-->

<!-- Essaie 3 :
<canvas id="toto" width="500" height="500"></canvas>

<script>
    var canvas = document.getElementById("toto");
    var ctx = canvas.getContext("2d");

    for(var i=0; i<10; i++) {
        for(var j = 0; j<10; j++){
            if((i + j) % 2 == 0){
                ctx.fillStyle = "lightblue";
            }else{
                ctx.fillStyle = "white";
            }
            ctx.fillRect(i*50, j*50, 50, 50);
        }
    }

</script>
-->
</div>

<?php
    include_once('footer.php');
?>

</body>
</html>