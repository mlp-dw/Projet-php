<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO Variable</title>
</head>
<body>
    <h1>Les Variables</h1>
<?php

$name = "Papouille";
echo $name;
?>  

<br>
<br>

<?php

$lastname = "S&P";
$firstname = "Coton";
$age = 6;

echo "Bonjour je m' appelle " . $firstname . " " . $lastname . " et j'ai " . $age . " mois";
?>
<br>
<br>

<?php

$km = 125;
echo "je parcours " . $km . " kilomètres.";

?>

<br>
<br>

<?php

$string = "Peton !";
$int = 25;
$float = 3.5;
$bool = true;

// echo $string, $int, $float, $bool; 

// version propre
echo $string . " " . $int . " ans " . $float . "  km " . $bool . " car = true."; 

?>

<br>
<br>

<?php

// $integer = null;
$integer = 25;
echo $integer;

?>

<br>
<br>

<?php

$names = "Museau et Gratouille";
echo "Bonjour " . $names . " ! Comment allez vous aujourd'hui ?" 

?>

<br>
<br>

<?php

$last = "SALAÜN";
$first = "Etienne";
$viellesse = 30;

echo "Holà ! " . $first . " " . $last . ", tu as " . $viellesse . " ans.";

?>

<br>
<br>

<?php

$add = 3 + 4;
$mult = 5 * 20;
$div = 45 / 5 ;

echo " je suis une addition de 3 et 4 : " . $add . ". Moi une multiplication de 5 fois 20 :  " . $mult . ". Et moi une division de 45 par 5 : " . $div . ".";

?>
  
</body>
</html>