<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>

    <form action="fileUser.php" method="POST" enctype="multipart/form-data">

    <select name="civilite">
        <option value="">Civilité</option>
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
        <option value="Mademoiselle">Mademoiselle</option>
    </select>

    <br>

    <label for="message">Votre nom</label><br>
    <input name="nom" placeholder="nom"><br>

    <label for="message">Votre prénom</label><br>
    <input name="prenom" placeholder="prénom"><br>
    <br>
    <label for="fichier">Joindre un fichier</label>
    <input type="file" name="file">
    
    <br>
    <br>

    <button type="submit" name="btn">Envoyer</button>

    </form>



</body>
</html>