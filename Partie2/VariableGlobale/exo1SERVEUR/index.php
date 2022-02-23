

<?php include("header.php");?>

<form action="serveur.php" method="post">

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



<?php include("footer.php");?>





