<?php
// connexion a la base de donnée
$connect = new PDO(
    'mysql:host=localhost;dbname=exoPDO;charset=utf8', // serveur;base de donnée; encodage de caractère
    'root', // mon compte à moi pour me connecter au serveur
    '' // mon mot de passe pour me connecter au serveur
);

$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdoStmnt = $connect->prepare("SELECT * FROM showtypes");
$pdoStmnt->execute();
$shows = $pdoStmnt->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PDO 2</title>
</head>
<body class="bg-dark">
<?php include "header.php"; ?>

<div class="bd-example container d-flex justify-content-center">
    <table class="table table-dark table-striped w-50">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Type de Show</th>
             
            </tr>
        </thead>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

            <!-- // On affiche chaque client un à un -->
            <?php
            foreach ($shows as $show) {
                ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $show["id"] ?></th>
                                <td><?php echo $show["type"] ?></td>
                                
                        </tr>
                    </tbody>
                <?php
            }
            ?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    </table>
</div>

<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
