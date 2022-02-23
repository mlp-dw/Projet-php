<?php include "header.php"; ?>
    <h3 class="m-3 text-center">Veuillez renseigner tous les champs</h3>
    
    <main class="form-signin m-3 d-flex justify-content-center ">
        <form method="POST">
            
            <h1 class="h3 mb-3 fw-normal">Vous êtes ?</h1>
            
            <div class="m-2">
                <label for="gender">Civilité</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">--Choisissez votre civilité--</option>
                    <option value="Mademoiselle">Mademoiselle</option>
                    <option value="Madame">Madame</option>
                    <option value="Monsieur">Monsieur</option>
                </select>
            </div>

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
                <label for="message">Société</label>
                <input type="text" name="societe" class="form-control" placeholder="Votre société">
            </div>

            <div class="m-2">
                <label for="message">Votre message</label>
                <textarea class="form-control" placeholder="Batmaaaaan !" name="hero"></textarea>
            </div>

            <div class="d-flex justify-content-center">
                <button class="w-30 btn btn-lg btn-primary" type="submit">Envoyer</button>
            </div>
            
        </form>
</main>