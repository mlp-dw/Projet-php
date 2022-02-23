<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXO fonction</title>
</head>
<body>
    <h1>Les Fonctions PHP</h1>


<?php

    $onepiece = [
        'title' => 'One Piece',
        'category' => 'manga',
        'author' => 'Eiichiro Oda',
        'available' => true,
    ];
function isAvailable (array $onepiece) : bool {
    if (array_key_exists("available", $onepiece)) {
        return $onepiece["available"];
    }
    else {
        return "false, too bad...";
    }
}

echo isAvailable($onepiece);

// function allowRecipe ($array)
// {
//     if (array_key_exists('is_enabled', $array)) {
//         return $array['is_enabled'];
//     } else {
//         return false;
//     }
     
// }

// $recipe = [
//     'title' => 'Escalope milanaise',
//     'recipe' => '',
//     'author' => 'mathieu.nebra@exemple.com',
//     'is_enabled'=>true
// ];

// echo allowRecipe($recipe);

?>

<br>
<br>

<?php


function luffy($param){
    return $param;
}

echo luffy('Le roi des pirates ça sera moi !!!');

?>

<br>
<br>

<?php

function displayAuthor(string $auteur, string $category) : string {
   return $auteur . $category;
}

echo displayAuthor("Eiichiro Oda ", "(Shonen)" );

?>

<br>
<br>

<?php

function number(int $num1, int $num2) {
    if($num1 > $num2){
        return "Le premier nombre (".$num1.") est plus grand que le deuxieme nombre (".$num2.")";
    }
    elseif($num1 < $num2){
        return "Le premier nombre (".$num1.") est plus petit que le deuxieme nombre (".$num2.")";
    }
   else{
        return "Les deux nombres : " . $num1 . " et " . $num2 . " sont identiques";
    }
}
echo number(12, 24);
?>

<br>
<br>

<?php

function blabla(int $nombre, string $txt) {
    return strval($nombre) . $txt;
}
echo blabla(12, " blobs");

// function blabla(int $nombre, string $txt) : string {
//     return $nombre . $txt;
// }
// echo blabla(12, " blobs");
?>

<br>
<br>

<?php

function personne(string $nom, string $prenom, string $age) : string {
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}
echo personne("SALAÜN", "Etienne", "30");
?>

<br>
<br>

<?php

function genreAge(string $age, string $genre) {
    if ($age < 18 && $genre == "femme") {
        echo "Vous êtes une " . $genre . " et vous êtes mineure.";
    }
    elseif($age < 18 && $genre == "homme") {
        echo "Vous êtes un " . $genre . " et vous êtes mineur.";
    }
    elseif($age >= 18 && $genre == "homme") {
        echo "Vous êtes un " . $genre . " et vous êtes majeur.";
    }
    else {
        echo "Vous êtes une " . $genre . " et vous êtes majeure.";
    }
}
echo genreAge(25, "femme");
?>

<br>
<br>

<?php

function superSomme(int $n1 = 0, int $n2 = 0, int $n3 = 0) {
    return $n1 + $n2 + $n3;
}
echo superSomme(3, 4, 5);
?>


</body>
</html>