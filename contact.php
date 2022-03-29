<?php

// creer un form pour l'utilisateur
// prenom string * 
// nom string *
// age* in

// ALLERGIE BOOLEEN 5PAR DEFAUT NON°
//creer un fichier txt  avec la date du jour au format jour-mm-aa
// avec 
// identité  nom prenom
// allergie
?>

<form action="contactTraitement.php" method="POST">
    <label > Prénom</label>
    <input type="text" name= prenom> <br>
    <label > Nom</label>
    <input type="text" name= nom required> <br>
    <label > Age</label>
    <input type="number" name= age> <br>
    <label > Allergie</label>
    <input type="radio" name= allergie value="oui" > OUI
    <input type="radio" name= allergie value="non" checked > NON <br>
    <input type="submit" value="ENVOYER">




</form>