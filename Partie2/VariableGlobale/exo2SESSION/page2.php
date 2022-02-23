<?php session_start(); ?>

<?php include "header.php"; ?>
<ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Page 1</a></li>
        <li class="nav-item"><a href="page2.php" class="nav-link active">Page 2</a></li>
        <li class="nav-item"><a href="page3.php" class="nav-link ">Page 3</a></li>
        <?php if(isset($_SESSION["email"])){?>
            <li class="nav-item"><a href="process_logout.php" class="nav-link bg-danger text-white">Deconnexion</a></li>
        <?php } ?>
      </ul>
    </header>
  </div>
  </header>

<?php
    if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["message"]) && !empty($_SESSION["message"])
    && isset($_SESSION["nom"]) && !empty($_SESSION["nom"]) && isset($_SESSION["prenom"]) && !empty($_SESSION["prenom"]) && isset($_SESSION["age"]) && !empty($_SESSION["age"])
    ){
        echo "<h3> Bonjour " . $_SESSION["prenom"] . " " . $_SESSION["nom"] .  ", </h3> <br><p> Vous avez " . $_SESSION["age"] . "ans. <br> Votre message est : " . $_SESSION["message"] . " </p>";
    }
?>


<?php include "footer.php"; ?>
<?php include __DIR__."/../../../Debug/debug.php"; ?>