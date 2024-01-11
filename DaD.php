<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- <script>
    function dragStart(e) {
        e.dataTransfer.effetAllowed="move"
        e.dataTransfer.setData("Text", e.target.getAttribute("id"));
    }

    function dragOver(e) {
        e.preventDefault();
        e.stopPropagation();

        var data = e.dataTransfer.getData("Text");
        e.target.appendChild(document.getElementById(data));
    }

    function drop(e) {

    }
</script>

<style>
    #dropBox {
        width: 200px;
        height: 200px;
        border: 5px dashed olive;
        background: lime;
    }
</style> -->
</head>
<body>
    
<?php
    include_once('entete.php');
?>

<!-- <div class="content"></div>
    <h1>Drop and drag</h1>
    <div id="dropBox" ondragover="drapOver(event);" ondrop="drop(event);"></div>
    <div>
        <img src="" alt="" width="180" draggable="true" ondragstart="dragStart(event)">
        <img src="" alt="" width="180" draggable="true" ondragstart="dragStart(event)">
    </div>

<script>

</script> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Drop and Drag</h1>
    <div id="depos" ondragover="dragOver(event);" ondrop="drop(event);" ondragleave="dragLeave(event);"></div>
    <div id="origine" ondragover="dragOver(event);" ondrop="dropOrigine(event);">
        <img id="oiseau1" src="Ressources/fleur5.jpg" alt="" width="180" height="180" draggable="true" ondragstart="dragStart(event)">
        <img id="oiseau2" src="Ressources/fruits.jpg" alt="" width="180" height="180" draggable="true" ondragstart="dragStart(event)">
    </div>

    <script>
        function dragStart(e) {
            e.dataTransfer.effectAllowed = "move";
            e.dataTransfer.setData("text", e.target.id);
        }

        function dragOver(e) {
            e.preventDefault();
            e.stopPropagation();
           // e.target.style.border = "2px dashed black";  // Ajout d'une bordure pour indiquer la zone de dépôt
        }

        function dragLeave(e) {
            e.target.style.border = "none";  // Suppression de la bordure lorsque l'élément quitte la zone de dépôt
        }

        function drop(e) {
            e.preventDefault();
            e.stopPropagation();
            var data = e.dataTransfer.getData("text");
            var draggedElement = document.getElementById(data);

            // Vérifier si l'élément déposé est dans la div "depos"
            if (e.target.id === "depos") {
                e.target.style.border = "none";  // Suppression de la bordure lorsque l'élément est déposé
                e.target.appendChild(draggedElement);
            } else if (e.target.id === "origine") {
                // Suppression de l'élément du parent actuel
                draggedElement.parentNode.removeChild(draggedElement);
            }

            // Réinitialisation de la bordure de la div "origine"
            document.getElementById("origine").style.border = "none";
        }

        function dropOrigine(e) {
            e.preventDefault();
            e.stopPropagation();
            var data = e.dataTransfer.getData("text");
            var draggedElement = document.getElementById(data);

            // Ajout de l'élément à la div "origine" à côté de l'autre image
            document.getElementById("origine").appendChild(draggedElement);
        }
    </script>

    <style>
        #depos {
            width: 200px;
            height: 200px;
            border: 5px solid;
            background: lime;
            text-align: center;
            margin: 20px;
        }

        #origine {
            display: flex; /* Utilisation de flexbox pour aligner les images horizontalement */
            width: 400px;
            height: 200px;
            /* border: 2px dashed black; */
            text-align: center;
            margin: 20px;
        }

        img {
            margin-right: 5px;  /* Ajout d'une marge à droite pour espacer les images dans la div "origine" */
        }
    </style>
</body>
</html>

<?php
    include_once('footer.php');
?>

</body>
</html>