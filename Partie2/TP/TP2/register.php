
<!-- sinon faire une condition ternaire pour faire afficher mes valeurs sans un if immense 
value="<?= isset($_POST['surname']) ? $_POST['surname'] : ''?>" type="text" name="surname" id="surname"> -->

<?php 
if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"])
    && isset($_POST["date"]) && !empty($_POST["date"]) && isset($_POST["gender"]) && !empty($_POST["gender"]) 
    && isset($_POST["societe"]) && !empty($_POST["societe"]) && isset($_POST["hero"]) && !empty($_POST["hero"]) 
    ){
        ?>
            <?php include "form.php"; ?>
    <h3 class="m-3 text-center">La saisie suivante a été envoyée.</h3>
    
    <main class="form-signin m-3 d-flex justify-content-center ">
        <form method="POST">
            
            <div class="m-2">
                <label for="gender">Civilité</label>
                <select name="gender" id="gender" class="form-control">
                    <option><?php echo $_POST["gender"] ?></option>
                </select>
            </div>

            <div class="m-2">
                <label for="message">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="nom" value="<?php echo $_POST["nom"] ?>">
                
            </div>

            <div class="m-2">
                <label for="message">Prénom</label>
                <input type="text" name="prenom" class="form-control" placeholder="prenom" value="<?php echo $_POST["prenom"] ?>">
            </div>

            <div class="m-2">
                <label for="message">Date de Naissance</label>
                <input type="date" name="date" class="form-control" value="<?php echo $_POST["date"] ?>">
            </div>

            
            <div class="m-2">
                <label for="message">Société</label>
                <input type="text" name="societe" class="form-control" placeholder="Votre société" value="<?php echo $_POST["societe"] ?>">
            </div>

            <div class="m-2">
                <label for="message">Votre message</label>
                <textarea class="form-control" placeholder="Batmaaaaan !" name="hero"> <?php echo $_POST["hero"] ?> </textarea>
            </div>
            
        </form>
</main>
<?php include "footer.php"; ?>

        <?php
        
    }
else{
    ?>
<?php include "form.php"; ?>
<?php include "footer.php"; ?>
        <?php
}