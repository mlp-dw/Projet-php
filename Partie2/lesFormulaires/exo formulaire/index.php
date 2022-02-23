<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL 1</title>
</head>
<body>

    <form action="contact.php" method="GET" enctype="multipart/form-data">
        <!-- données à faire passer à l'aide d'inputs -->
        <label for="message">Votre nom</label> <br>
        <input name="nom" placeholder="nom"> <br>
        <label for="message">Votre prénom</label><br>
        <input name="prenom" placeholder="prenom"> <br>
        <label for="message">Date de naissance</label><br>
        <input name="age" placeholder="jj/mm/aaaa"> <br> <br>

        <label for="message">Votre Email</label><br>
        <input type="email" name="email" placeholder="email"> <br><br>

        <label for="message">Date de départ</label> <br>
        <input type="date" name="startDate" placeholder="startDate"> <br><br>

        <label for="message">Date de retour</label> <br>
        <input type="date" name="endDate" placeholder="endDate"> <br><br>

        <label for="message">Votre message</label> <br>
        <textarea placeholder="Exprimez vous" name="message"></textarea> <br><br>

        <!-- <label for="screenshot" class="form-label">Votre fichier</label>
        <input type="file" class="form-control" id="file" name="file"/> -->

        <label for="message">Entrez votre language</label><br>
        <input name="language" placeholder="language"> <br>

        <label for="message">Entrez votre serveur</label><br>
        <input name="server" placeholder="serveur"> <br>

    <button type="submit">Envoyer</button>
    
    
</body>
</html>