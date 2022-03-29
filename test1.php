<?php

 
?>
<form action="cible.php" method="POST" enctype="multipart/form-data">
        <label> Entrez votre pseudo</label>
        <input type="text" name="pseudo">
        <br><br>
        <label> Entrez votre age</label>
        <input type="number" name="age">
        <br><br>
        <label> Entrez votre mdp</label>
        <input type="password" name="pwd">
        <br><br>
        <label> Pays</label>
        <select name="pays" id="">
            <option value="fr" >France</option>
            <option value="it">Italie</option>
            <option value="sn" selected>Sénégal</option>

        </select>
        <br><br>
        <input type="checkbox" name="plat"> Steack <br>
        <input type="checkbox" name="boisson"> Coca <br>
        <input type="checkbox" name="dessert"> Tarte au Citron <br>
        <label> Votre message </label>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br><br>
        Upload: <input type="file" name="photo"><br><br>
        Avatar: <input type="file" name="avatar"><br><br>
        <input type="submit" value="Envoyer">

</form>