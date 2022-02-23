<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Boucles</title>
</head>
<body>
    <h1>Les Boucles PHP</h1>

<?php

$singe = 0;

while($singe <= 10) {
    echo "Il y a " . $singe . " singe ici. <br>";
    $singe++;
}

?>

<br>
<br>

<?php

$lémurien = 0;
$babouin = 1;

while ($lémurien <= 20) {
    echo $lémurien * $babouin;
    $lémurien++;
}

?>

<br>
<br>

<?php

$nasique = 100;
$chimpanze = 2;

while ($nasique >= 10) {
    echo $nasique * $chimpanze;
    $nasique--;
}

?>

<br>
<br>

<?php

$capucin = 1;

while($capucin < 10) {
    echo $capucin . "<br />";
    $capucin = $capucin + ($capucin / 2);
}

?>

<br>
<br>

<?php

for ($mandrill = 1; $mandrill <= 15; $mandrill++)
{
    echo "On y arrive presque" . '<br />';
}

?>

<br>
<br>

<?php

for ($tamarin = 20; $tamarin >= 0; $tamarin--){
    echo "C'est presque bon" . '<br />';
}

?>

<br>
<br>

<?php

for ($oranOutang = 1; $oranOutang <= 100; $oranOutang = $oranOutang+15) {
    echo "On tient le bon bout." . '<br />';
}

?>

<br>
<br>

<?php

for ($ouakari = 200; $ouakari >= 0; $ouakari = $ouakari-12) {
    echo "Enfin !!!!" . '<br />';
}

?>


</body>
</html>