<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<?php

?>
    <form action="user.php" method="POST">

    
        <select name="rep">
            <option valeur="civilité">Civilité</option>
            <option valeur="mr">Monsieur</option>
            <option valeur="mrs">Madame</option>
            <option valeur="miss">Mademoiselle</option>
        </select>
    
        <br>

        <label for="message">Votre nom</label> <br>
        <input name="nom" placeholder="nom"> <br>

        <label for="message">Votre prénom</label><br>
        <input name="prenom" placeholder="prenom"> <br>

        <button type="submit" name="btn">Envoyer</button>

    </form>
</body>
</html>