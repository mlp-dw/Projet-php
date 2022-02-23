
<?php
include("header.php");


echo "<p>Votre user agent est : " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
echo "<br> <br>";
echo "<p>Votre adresse IP est : " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<br> <br>";
echo "<p>Votre serveur s'appelle : " . $_SERVER['SERVER_NAME'] . "</p>";

include("footer.php");

?>

