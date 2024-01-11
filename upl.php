<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('connect_bdd.php');


    if(!empty($_FILES)){
        $file_name= $_FILES['fichier']['name'];
        $file_extension= strchr($file_name,".");

        $file_tmp_name = $_FILES['fichier']['tmp_name'];
        $file_dest = 'files/' .$file_name;
        $extension_autorisees = array('.pdf','.PDF');

        if(in_array($file_extension, $extension_autorisees)){
            //in_array vérifie si une variable fait partie du tableau
            if(move_uploaded_file($file_tmp_name, $file_dest)){
                $req = $db->prepare('INSERT INTO files(name, file_url) VALUES(?,?)');
                $req->execute(array($file_name, $file_dest));
                echo "Fichier envoyé avec succés";
            }else{
                echo "une erreur est survenue lors de l'envoi du fichier !";
            }
        }else{
            echo "seul les fichiers PDF sont autorisés";
        }
    }
    ?>

<form action=""method="post" enctype="multipart/form-data">
    <input type="file" name = "fichier" /> <br>
    <input type="submit" value = "envoyer" /> 
</form>

<h1>Fichier(s) enregistré(s)</h1>

<?php
    $req = $db->query('SELECT name, file_url FROM files');

    while($data= $req->fetch()) {
        echo $data['name'].' : '.'<a href="'.$data['file_url'].'">Télécharger '.$data['name'].'</a><br>';
    }
?>

</body>
</html>