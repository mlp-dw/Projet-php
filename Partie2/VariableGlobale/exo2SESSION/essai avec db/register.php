<!-- vous etes pas encore connecté -->

<?php include "header.php";?>

<?php
if(!empty($_POST)){
    $error = array();
    require_once "db.php";

    if(empty($_POST["username"]) || preg_match("/^[a-z0-9_]+$/", $_POST["username"]) ){
        $error["username"] = "Votre pseudo n'est pas valide.";
    }
    else{
        $req = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $req->execute([$_POST["username"]]);
        $user = $req->fetch();
        debugg($user);
        die();
    }

    if(empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $error["email"] = "Votre email n'est pas valide.";
    }

    if(empty($_POST["password"]) || $_POST["password"] != $_POST["password-confirm"]){
        $error["password"] = "Mot de passe invalide.";
    }
    if(empty($error)){
        
        require_once "/db.php";
        $request = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
        // $request->execute([$_POST["username"], $_POST["password"], $_POST["email"]]);
        // Ne pas faire apparaitre password car peut etre voler donc on doit encrypter le mdp

        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $request->execute([$_POST["username"], $password, $_POST["email"]]);
        die("Votre compte a bien été créé !");
    }
}
?>







<h1 class="m-2">S'inscrire</h1>

<form action="" method="post">

    <div class="form-group m-2">
        <label for="">Pseudo</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group m-2">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group m-2">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group m-2">
        <label for="">Confirmer mot de passe</label>
        <input type="password" name="password-confirm" class="form-control">
    </div>

    <button type="submit" class="btn btn-success m-2">M'inscrire</button>

</form>

<?php include "footer.php";?>
