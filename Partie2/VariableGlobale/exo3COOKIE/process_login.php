<?php
if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["password"])
    ){
        setcookie("email",  $_POST["email"], time()+3600);  /* expire dans 1 heure */
        setcookie("password",  $_POST["password"], time()+3600);  /* expire dans 1 heure */
    }

header('Location: page2.1.php');
