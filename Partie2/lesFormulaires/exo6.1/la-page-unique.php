<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>

<?php

if(!empty($_POST["civilite"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) ) {
    echo "<h3> Bonjour " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . " !!! </h3>";
}
else{
    ?>
        <p>Veuillez renseigner tous les champs</p>
            <form method="POST">
            
            <select name="civilite">
                <option value="">Civilité</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
                <option value="Mademoiselle">Mademoiselle</option>
            </select>
            
            <br>
            
            <label for="message">Votre nom</label><br>
            <input type="text" name="nom" placeholder="nom"><br>
            
            <label for="message">Votre prénom</label><br>
            <input type="text" name="prenom" placeholder="prénom"><br>
            <br>
            <button type="submit" name="btn">Envoyer</button>
            
            </form>
    <?php
}

?>



</body>
</html>