<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleGrid.css">
    <title>ma page</title>
</head>
<body>

<?php
    include_once('entete.php');
?>

<!-- CENTRE 1 -->
<div class="content">
    <h1>Gestion upload</h1>

    <?php
    //Acceder au nom du fichier
    if(!empty($_FILES)){
        $file_name = $_FILES['fichier']['name'];

        //$file_extension = strchr($file_name,".");

        echo 'Nom: '.$file_name.'<br/>';
        //echo 'Extension: ' .$file_extension;
        $file_type = $_FILES['fichier']['type'];
        echo 'type: ' .$file_type. '<br/>';


    }
    ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" /><br><br>
    <input type="submit" value ="Envoyer le fichier"/> 
</form>


<!-- CENTRE 2 -->
<div class="content">
    <h1>Gestion upload 2</h1>

    <?php
    //Acceder au nom du fichier
    if(!empty($_FILES)){
        $nom_fichier = $_FILES['fichier']['name'];

        $extension_fichier = strchr($nom_fichier,".");
        $extension_autorisees = array('.pdf','.PDF');
        if(in_array($extension_fichier, $extension_autorisees)){
            // je vérifier si l'extension fait partie des extensions autorisées
            echo "vous avez bien choisi un fichier pdf";
        }else{
            echo "seuls les fichiers pdf sont autorisés ";
        }




    }
    ?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fichier" accept=".pfd,.PDF"/><br><br>
    <!-- <input type="file" name="fichier" multiple accept=".pfd,.PDF"/><br><br> -->
    <input type="submit" value ="soumettre"/> 
</form>

</br>


<?php
    include_once('footer.php');
?>

</body>
</html>