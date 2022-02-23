<?php
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["message"]) && !empty($_POST["message"])
    && isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["age"]) && !empty($_POST["age"])
    ){
        setcookie("email",  $_POST["email"], time()+3600);  /* expire dans 1 heure */
        setcookie("message",  $_POST["message"], time()+3600);  /* expire dans 1 heure */
        setcookie("nom",  $_POST["nom"], time()+3600);  /* expire dans 1 heure */
        setcookie("prenom",  $_POST["prenom"], time()+3600);  /* expire dans 1 heure */
        setcookie("age",  $_POST["age"], time()+3600);  /* expire dans 1 heure */
    }
header('Location: page2.php');

// https://www.php.net/manual/fr/function.header
// N'oubliez jamais que header() doit être appelée avant que le moindre contenu ne soit envoyé, soit par des lignes HTML habituelles dans le fichier, soit par des affichages