<?php session_start();
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["message"]) && !empty($_POST["message"])
    && isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["age"]) && !empty($_POST["age"])
    ){
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['message'] = $_POST["message"];
        $_SESSION['nom'] = $_POST["nom"];
        $_SESSION['prenom'] = $_POST["prenom"];
        $_SESSION['age'] = $_POST["age"];
        
    }
header('Location: page2.php');

// https://www.php.net/manual/fr/function.header
// N'oubliez jamais que header() doit être appelée avant que le moindre contenu ne soit envoyé, soit par des lignes HTML habituelles dans le fichier, soit par des affichages