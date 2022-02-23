<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO Conditions</title>
</head>
<body>
    <h1>Les Conditions</h1>

<?php

$age = 25;


if ($age >= 18) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}

?>

<br>
<br>

<?php

$isEasy = true;

// if ($isEasy == true) {
//     echo "C'est facile !!";
// }
// else{
//     echo "C'est dificile !!!!";
// }

echo $isEasy == true ?  "C'est facile !!" : "C'est dificile !!!!";

?>

<br>
<br>

<?php

$gender = "femme";
$vieillesse = 25;


if ($vieillesse < 18 && $gender == "femme") {
    echo "Vous êtes une " . $gender . " et vous êtes mineure.";
}
elseif($vieillesse < 18 && $gender == "homme") {
    echo "Vous êtes un " . $gender . " et vous êtes mineur.";
}
elseif($vieillesse >= 18 && $gender == "homme") {
    echo "Vous êtes un " . $gender . " et vous êtes majeur.";
}
else {
    echo "Vous êtes une " . $gender . " et vous êtes majeure.";
}

?>

<br>
<br>

<?php

$magnitude = 1;

switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
    break;

    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;

    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;

    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;

    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;

    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;

    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;

    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;

    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
    break;
}


?>

<br>
<br>

<?php

$gender2 = "femme";
if ($gender2 == "homme") {
    echo "C'est un développeur !!!";
}
else {
    echo "C'est une développeuse !!!";
}

?>

<br>
<br>

<?php

$ages = 25;
if($ages >= 18) {
    echo "Tu es majeur.";
}
else {
    echo "Tu n'es pas majeur !!!";
}

?>

<br>
<br>

<?php

$isOk = true;
if($isOk == false){
    echo "C'est pas bon !!!";
}
else {
    echo "C'est ok :)";
}

?>

<br>
<br>

<?php

$okey = true;
if($okey == true){
    echo "C'est ok :)";
}
else {
    echo "C'est pas bon !!!";
}

?>


</body>
</html>