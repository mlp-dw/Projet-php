<?php include "header.php"; ?>

<?php 
    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
    function chorizo($portrait){
        return "<p> Voici " . $portrait["name"] . " " . $portrait["firstname"] . " </p> <img src=\"" . $portrait["portrait"] . "\">";
    }
?>


<div class="container">
    <div class="row justify-content-center">
        
        <h1 class="display-5 fw-bold m-3 text-black">Personnes qui ont marquées la littérature</h1>
            <?php
            for ($i = 1; $i <5; $i++) {
            ?>
                <div class="col-10 col-md-6 col-lg-6 mt-5 text-center">
                    <?= chorizo(${'portrait' . $i}) ?>
                </div>
                
            <?php
            }
            ?>
    </div>
</div>

<?php include "footer.php"; ?>
