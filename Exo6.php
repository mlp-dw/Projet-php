<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5 et 6</title>
</head>
<body>


    <?php

        if (!empty($_GET['lastname']) AND !empty($_GET['firstname']) AND !empty($_GET['gender']) AND isset($_GET['gender']) AND isset($_GET['lastname']) AND isset($_GET['firstname'])) { //si les champs sont vide alors cette condition se déclanche

            echo '<p>Bienvenue ' . $_GET['gender'] . ' ' . $_GET['lastname'] . ' ' .$_GET['firstname'] . '</p>';
        // Arrête l'exécution de PHP

        }else{
            ?>
            <p>Veuillez renseigner tous les champs</p>
                <form method="GET">        
                    <select name="gender" id="">
                        <option value="">civilité</option>
                        <option value="Mr">Mr</option>
                        <option value="Mme">Mme</option>
                    </select>
                    <label for="lastname">nom</label>
                    <input type="text" name="lastname">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname">
                    <button type="submit">Envoyer</button>
                </form>
            <?php
        }
    ?>

</body>
</html>