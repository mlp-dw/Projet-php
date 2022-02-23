<?php

// echo "Bonjour " . $_POST["rep"] . " " . $_POST["prenom"] . " " . $_POST["nom"] . " !!!";

// echo "<br>";
// echo "<br>";



if(isset($_POST) || !empty($_POST)){
    echo $_POST["rep"] . $_POST["nom"] . $_POST["prenom"] . $_POST["btn"];
}
else {
    echo "vide";
}


?>