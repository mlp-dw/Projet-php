<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO tableaux</title>
</head>
<body>
    <h1>Les Tableaux</h1>

<?php

$year = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

echo $year[2]; 

echo "<br>";
echo "<br>";

echo $year[5];

echo "<br>";
echo "<br>";

echo str_replace("aout", "août" , $year[7]);

echo "<br>";
echo "<br>";

$hautDeFrance = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas-de-Calais",
    "80" => "Somme"
];

// echo $hautDeFrance["59"];

// array_push($hautDeFrance, "51" => "Reims");
$hautDeFrance['51'] = 'Reims';

// echo '<pre>';
// print_r($hautDeFrance);
// echo '</pre>';

echo $hautDeFrance[51];


echo "<br>";
echo "<br>";

foreach ($year as $month) {
    echo $month . '<br />';
}


echo "<br>";
echo "<br>";

foreach ($hautDeFrance as $department) {
    echo $department . "<br>";
}

echo "<br>";
echo "<br>";

foreach ($hautDeFrance as $key => $department) {
    echo "Le département " . $department . " a le numéro " . $key .".";
    echo '<br>';
}

?>

</body>
</html>