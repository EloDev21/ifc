<?php

    if(isset($_POST['nom']) && isset($_POST['age']))
    {
        if(!empty($_POST['nom']) && !empty($_POST['age']))
        {
            // transformation en entités html pour éviter les injections sql et les failles xss
            $prenom = htmlentities($_POST['prenom']);
            $nom = htmlentities($_POST['nom']);
            $age = htmlentities($_POST['age']);
            $allergie = htmlentities($_POST['allergie']);

            $filename = $nom.'-'.date('d-m-Y').'.txt';  
            // w+ il remplace sil existe pas sinon il le crée
            $fichier = fopen($filename, "w+");
            $line1 = "identité : $prenom $nom \n";
            $line2 = "Age : $age \n";
            $line3 = "Allergie : $allergie \n";
            
            fwrite($fichier, $line1);
            fwrite($fichier, $line2);
            fwrite($fichier, $line3);
            fclose($fichier);
            echo("l`tlisateur $prenom $nom a été ajouté");
        }
        else
        {
            echo "Le nom et l'âge ne peuvent etre vides";
        }
    }   
    else
    {
        echo("Erreur dans l'ajout du formalaire");
    }

?>