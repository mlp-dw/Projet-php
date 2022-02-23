<?php 
if(isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"])
    && isset($_POST["date"]) && !empty($_POST["date"]) && isset($_POST["pays"]) && !empty($_POST["pays"]) 
    && isset($_POST["nationalite"]) && !empty($_POST["nationalite"]) && isset($_POST["adresse"]) && !empty($_POST["adresse"])
    && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["tel"]) && !empty($_POST["tel"])
    && isset($_POST["diplome"]) && !empty($_POST["diplome"]) && isset($_POST["hero"]) && !empty($_POST["hero"])
    && isset($_POST["hack"]) && !empty($_POST["hack"]) && isset($_POST["programmation"]) && !empty($_POST["programmation"])
    ){
        ?>
        <?php include "header.php"; ?>
        <h2  class="m-3">Nous avons bien reçu votre inscription ! </h2> <br>
        <div class="mx-3">
        <?php 
        $date = new DateTime($_POST["date"]);
        $frDate = $date->format("d-m-Y");
        echo "<p>Cher/Chère " . $_POST["nom"] . " " . $_POST["prenom"] .  ",<br>Tu es né le " . $frDate . " au " . $_POST["pays"] . 
        " et ta nationalité est : " . $_POST["nationalite"] . ".<br> Tu habites " . $_POST["adresse"] . ".<br> Ton adresse mail est : "  . $_POST["email"] . 
        ".<br> On peut te joindre au "  . $_POST["tel"] . ".<br> Ton niveau de diplome est : "  . $_POST["diplome"] . ".<br> Tu dis que ton héro c'est "  . $_POST["hero"] . 
        ".<br> Ton hack est : "  . $_POST["hack"] . ".<br> Et niveau expérience en programmation c'est : " . $_POST["programmation"] . "</p>";
        ?>
        </div>
        <?php include "footer.php"; ?><?php
        
    }
else{
    ?>
    <?php include "header.php"; ?>
        <h3 class="mx-3">Veuillez renseigner tous les champs</h3>

            <main class="form-signin m-3 d-flex justify-content-center ">
  <form method="POST">

    <h1 class="h3 mb-3 fw-normal">Inscrits toi !</h1>

    <div class="m-2">
        <label for="message">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="nom">
    </div>

    <div class="m-2">
        <label for="message">Prénom</label>
        <input type="text" name="prenom" class="form-control" placeholder="prenom">
    </div>

    <div class="m-2">
        <label for="message">Date de Naissance</label>
        <input type="date" name="date" class="form-control">
    </div>

    <div class="m-2">
        <label for="message">Pays de Naissance</label>
        <input type="text" name="pays" class="form-control" placeholder="Pays de Naissance">
    </div>

    <div class="m-2">
        <label for="message">Nationalité</label>
        <input type="text" name="nationalite" class="form-control" placeholder="Nationalité">
    </div>

    <div class="m-2">
        <label for="message">Adresse</label>
        <input type="text" name="adresse" class="form-control" placeholder="1 rue de la Paix 42000 SAINT-ETIENNE">
    </div>
    
    <div class="m-2">
        <label for="message">Email</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com">
    </div>

    <div class="m-2">
        <label for="message">Téléphone</label>
        <input type="text" name="tel" class="form-control" placeholder="06 12 12 12 12">
    </div>

    <div class="m-2">
        <label for="diplome">Diplôme</label>
        <select name="diplome" id="diplome" class="form-control">
            <option value="">--Choisi ton diplome--</option>
            <option value="sans BAC">sans BAC</option>
            <option value="BAC">BAC</option>
            <option value="BAC+2">BAC+2</option>
            <option value="BAC+3_ou_supérieur">BAC+3 ou supérieur</option>
        </select>
    </div>

    <div class="m-2">
        <label for="message">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
        <textarea class="form-control" placeholder="Batmaaaaan !" name="hero"></textarea>
    </div>

    <div class="m-2">
        <label for="message">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label>
        <textarea class="form-control" placeholder="Allez on veut savoir..." name="hack"></textarea>
    </div>

    <div class="m-2">
        <label for="message">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
        <textarea class="form-control" placeholder="On ne juge pas... enfin pas tout le temps" name="programmation"></textarea>
    </div>



    <div class="d-flex justify-content-center">
        <button class="w-30 btn btn-lg btn-primary" type="submit">Envoyer</button>
    </div>
    
  </form>
</main>
<?php include "footer.php"; ?>
        <?php
}


    
  



