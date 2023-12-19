<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="styleGrid.css">
    <title>Document</title>
</head>
<body>
<?php
    include_once('entete.php');
?>
<div class="content">
    <h1>Les API Vidéos et Audios</h1>

<!--    INTRODUCTION
    HTML5 fournit des éléments pour intégrer du multimédia dans les documents, à savoir les éléments <video> et <audio>.
    Ces éléments sont accompagnés d'une API JavaScript qui permet de contrôler la lecture, la recherche et d'autres aspects du contenu multimédia.

    Les éléments <video> et <audio> sont utiliéss pour intégrer des fichiers multimédias dans une page web. Ils ont des attributs similaires, notamment :
        * src : l'adresse du fichier multimédia
        * controls : affiche ou non les contrôles de lecture par défaut du navigateur
        * autoplay : lance automatiquement la lecture
        * loop : fait boucler la lecture
-->

<!-- <video controls width = "400" height= "400" autoplay muted>
    <source  src="mavideo.mp4">
</video> -->

<!--
    L'API HTML fornit des méthodes et propriétés pour ontrôler la lecture, la recherche et d'autres aspects multimédia. Les éléments <video> et <audio> sont des instances de la classe HTMLMediaElement.
    Voici quelques unes des méthodes et propriétés les plus courantes de HTMLMediaElement :
        - play() : lance la lecture
        - pause() : met en pause la lecture
        - seekTo(temps) : cherche à une position donnée dans le contenu multimédia (temps en seconde)
        - volume() : définit lle volume de la lecture
        - muted() : active ou désactive le son
-->
<div>
    <audio controls width = "700" height= "700" id="audio">
        <source src="Ressources/monaudio.mp3">
</audio>
</div>

<div>
    <button id="play">Play</button>
    <button id="pause">Pause</button>
    <button id="stop">Stop</button>
    <button id="mute">Mute</button>
</div>
    
<?php
    include_once('footer.php');
?>
</div>

<script>
$(function() {
        $("#play").on('click', function(){
        $("#audio").get(0).play();
    });
        $("#pause").on('click', function(){
        $("#audio").trigger('pause');
    });
        $("#stop").on('click', function(){
        $("#audio").trigger('pause').prop('currentTime', 0);
    });
        $("#mute").on('click', function(){
        var audio = document.getElementById("audio");
        audio.muted = !audio.muted;
    });
});
    
</script>

</body>
</html>