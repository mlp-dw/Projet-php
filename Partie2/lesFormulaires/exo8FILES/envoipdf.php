<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envoi pdf</title>
</head>
<body>

<?php

if(!empty($_POST["civilite"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) ) {
    echo "<h2> Bonjour " . $_POST["civilite"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . " !!! </h2>";

    if (isset($_POST["jeSuisPDF"])){
        echo "Votre fichier est : " . $_POST['jeSuisPDF'];
    }

    $PDFinfo  = pathinfo($_FILES["jeSuisPDF"]["name"]);
    $extension = $PDFinfo["extension"];
    $authorised = ["pdf"];

   
        if(in_array($extension, $authorised)){
            //on valide le fichier et ou on le stock
            move_uploaded_file($_FILES["jeSuisPDF"]["tmp_name"], "./JeSuisPDF/" . time() . basename($_FILES["jeSuisPDF"]["name"]));
            echo "<h3>Nous traiterons votre demande dans les plus brefs delais.</h3>";
        } else {
            echo "<h3>L'extension de votre fichier n'est pas bonne.</h3>";
        }

}
else{
    ?>
        <p>Veuillez renseigner tous les champs</p>
            <form method="POST" enctype="multipart/form-data">
            
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
            
            <label for="message">Joindre un fichier</label>
            <input type="file" name="jeSuisPDF">
            <br>

            <button type="submit" name="btn">Envoyer</button>
            
            </form>
    <?php
}

?>



</body>
</html>