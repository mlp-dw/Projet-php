<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        // echo htmlspecialchars($_GET['message'],ENT_HTML5);
        // var_dump($_GET);
        // echo '<br>';

        echo "Bonjour " . $_GET["prenom"] . " " . $_GET["nom"] . "<br> Vous êtes né le  " . $_GET["age"] . ". <br> Vous êtes connectés avec " . $_GET["email"] . " <br> Votre message est : \" " . htmlspecialchars($_GET['message']) . "\"."; // ou strip_tags() qui renvoi juste le résultat mais n'execute pas.

        echo "<br>";
        echo "<br>";

        // !isset negation de si ça existe pas 
        // empty si la valeur declarer est vide

        // Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas 
        // l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean

        if(!isset($_GET['age'] )){
            echo "La requête \"age\" n'existe pas.";

            return;
        }

        echo "<br>";
        echo "<br>";

        // Faire une page index.php. Tester sur cette page que tous les paramètres de 
        // cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016

        if (!isset($_GET["prenom"]) || empty($_GET["prenom"])) {
            echo "Veuillez renseigner votre prénom.<br>";
        }
        
        if(!isset($_GET["nom"]) || empty($_GET["nom"])) {
            echo "Veuillez renseigner votre nom.<br>";
        }
        if(!isset($_GET["age"]) || empty($_GET["age"])) {
            echo "Veuillez renseigner votre date de naissance.<br>"; 
        }
        if(!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            echo("Il faut un email valide pour soumettre le formulaire.<br>");  
        }

        if(!isset($_GET["startDate"]) || empty($_GET["startDate"])) {
            echo "Veuillez renseigner une date de départ valide.<br>"; 
        }else{
            $today = new DateTime();
            $myDate = new DateTime($_GET["startDate"]);
            if ($myDate->getTimestamp() >= $today->getTimestamp() ) {
                $dateDiff = $today->diff($myDate);
                echo 'Vous souhaitez partir dans ' . $dateDiff->format('%d jours et %H:%I:%S') ;
            }else{
                echo 'veuillez renseigner une date supérieur a celle d\'aujourd\'hui';
            }
        }

        if(!isset($_GET["endDate"]) || empty($_GET["endDate"])) {
            echo "Veuillez renseigner une date de retour valide.<br>";
        }
        else{
            $today = new DateTime();
            $myDate = new DateTime($_GET["endDate"]);
            if ($myDate->getTimestamp() >= $today->getTimestamp() ) {
                $dateDiff = $today->diff($myDate);
                echo 'Vous souhaitez rentrer ' . $dateDiff->format('%d jours et %H:%I:%S') ;
            }else{
                echo "Veuillez renseigner une date supérieur a celle d'aujourd'hui.";
            } 
        }
     
        if(!isset($_GET["message"]) || empty($_GET["message"])) {
            echo "Veuillez remplir le champs message.<br>"; 
        }
        
        echo "<br>";
        echo "<br>";

        // var_dump(new DateTime());

        // $_FILES['file']

        if(
            (!isset($_GET["language"]) || empty($_GET["language"])) 
            || (!isset($_GET["server"]) || empty($_GET["server"])) 
         ) {
            echo "Veuillez remplir le champs language et/ou serveur.<br>"; 
        }
        else{
            echo "Votre language est " . $_GET["language"] . " et votre serveur est " . $_GET["server"] . ".";
        }

        echo "<br>";
        echo "<br>";

        
        $date=explode('-','2022-01-17');
        echo "Nous sommes la semaine " . date('W',mktime(0,0,0,$date[1],$date[2],$date[0])) . "  de l'année.";
        
        echo "<br>";
        echo "<br>";

    ?>
</body>
</html>
<!-- <script>alert(0)</script> -->