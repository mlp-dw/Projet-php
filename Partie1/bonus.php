<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO BONUS</title>
</head>
<body>
    <h1>le bonus</h1>
    <h2>Le Dictionnaire</h2>
<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

// echo '<pre>';
// print_r($dico);
// echo '</pre>';

echo count($dico); // ou echo sizeof($dico); c'est pareil !

echo "<br>";
echo "<br>";

$quinzeLettres = 0;

foreach ($dico as $key => $value) {
    if (strlen($value) == 15){
        $quinzeLettres++;
    }
};
echo "Il y a " . $quinzeLettres . " mots de 15 lettres.";


echo "<br>";
echo "<br>";

//========================================================
// Polyfill for PHP 4 - PHP 7, safe to utilize with PHP 8
//========================================================

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

//========================================================

$findW = "w";
$counterOfW = 0;
foreach ($dico as $key => $value) {
    if (str_contains($value, $findW)){
        $counterOfW++;
    }
    
};
echo "Il y a " . $counterOfW . " mots qui ont : W. <br>";


echo "<br>";
echo "<br>";

$findQ = "q";
$counterOfQ = 0;
foreach ($dico as $key => $value) {
    if ($value[strlen($value)-1] === $findQ){
        $counterOfQ++;
    }
    
};
echo "Il y a " . $counterOfQ . " mots qui finissent par \"Q\". <br>";
?>

<h2>Les Films</h2>
<?php

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films


for ($i=0; $i < 10; $i++) { 
    echo $i +1 . ' '. $brut["feed"]["entry"][$i]['title']['label'];
    echo "<br>";
}

echo "<br>";
echo "<br>";

// echo '<pre>';
// print_r($top);
// echo '</pre>';

echo "<br>";
echo "<br>";

?>


</body>
</html>