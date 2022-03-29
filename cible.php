<?php 

require('./admin/database.php');
// echo (" Nom:" .$_GET['pseudo']);
// echo (" Age:" .$_GET['age']);
// echo (" Mot de passe:" .$_GET['pwd']);
// echo (" Pays:" .$_GET['pays']);
echo "<pre>";
    print_r($_POST);

echo "</pre>";
echo "<pre>";
    print_r($_FILES);

echo "</pre>";
// gestion de l'up^load de fichier
// 1.verufuer que le fichier est bien envoyé
if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0 )
{
    // 2.verifier la taille du fichier
    if($_FILES['photo']['size'] <= 1000000)
    {
        
        // 3.vérifier l'extension
        $infofile = pathinfo($_FILES['photo']['name']);
        $extension = $infofile['extension'];
        $extension_allowed = array('jpeg', 'jpg','gif', 'png');
        if(in_array($extension, $extension_allowed))
        {
              $filename = $_FILES['photo']['tmp_name'];
              $destination = 'upload/'.basename($_FILES['photo']['name']);
            //   4 upload définitif de notre fichier 
              move_uploaded_file($filename, $destination);
              
        }
        else
        {
            echo ('L`extension de votre fichier n`est pas autorisée. Fichier non ajouté. Veuillez réessayer.');
        } 
    }
    else
    {
        echo("Fichier trop volumineux!");
    }
}
else
{
    echo('Erreur pendant l`upload   , Votre fichier n`a pas été ajouté');
}

// verification pour avatar aussi à faire pour la photot de profil 