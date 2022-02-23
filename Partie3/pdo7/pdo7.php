<?php
// connexion a la base de donnée
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=exoPDO;charset=utf8', // serveur;base de donnée; encodage de caractère
    'root', // mon compte à moi pour me connecter au serveur
    '' // mon mot de passe pour me connecter au serveur
);

$mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdoStmnt = $mysqlConnection->prepare("SELECT * FROM clients");
$pdoStmnt->execute();
$clients = $pdoStmnt->fetchAll(PDO::FETCH_ASSOC); //permet de trouver uniquement les tableaux associatifs

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PDO 7</title>
</head>
<body class="bg-dark">
<?php include "header.php"; ?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="d-flex flex-wrap justify-content-center">

    <!-- // On affiche chaque client un à un -->
    <?php
            foreach ($clients as $client) {
                ?>
                    <div class="text-white border border-light p-3 m-3 ">
                        <p><span class="fw-bold">Nom : </span><?= $client["lastName"] ?> </p>
                        <p><span class="fw-bold">Prénom : </span><?= $client["firstName"] ?> </p>
                        <p><span class="fw-bold">Date de naissance : </span><?= $client["birthDate"] ?> </p>
                        <p><span class="fw-bold">Carte de fidélité : </span><?= $client["card"] == 1 ?  "Oui" : "Non" ?> </p>
                        <p><span class="fw-bold">Numéro de carte : </span><?=  $client["card"] == 1 ?  $client["cardNumber"] : "Non" ?> </p>
                        
                    </div>
                <?php
            }
            ?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</div>

<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
