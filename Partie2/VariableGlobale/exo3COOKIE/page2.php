<?php include "header.php"; ?>
<ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Page 1</a></li>
        <li class="nav-item"><a href="page2.php" class="nav-link active">Page 2</a></li>
        <li class="nav-item"><a href="page3.php" class="nav-link ">Page 3</a></li>
        <?php if(isset($_COOKIE["email"])){?>
            <li class="nav-item"><a href="process_logout.php" class="nav-link bg-danger text-white">Deconnexion</a></li>
        <?php } ?>
      </ul>
    </header>
  </div>
  </header>

<?php
    if(isset($_COOKIE["email"]) && !empty($_COOKIE["email"]) && isset($_COOKIE["message"]) && !empty($_COOKIE["message"])
    && isset($_COOKIE["nom"]) && !empty($_COOKIE["nom"]) && isset($_COOKIE["prenom"]) && !empty($_COOKIE["prenom"]) && isset($_COOKIE["age"]) && !empty($_COOKIE["age"])
    ){
        echo "<h3> Bonjour " . $_COOKIE["prenom"] . " " . $_COOKIE["nom"] .  ", </h3> <br><p> Vous avez " . $_COOKIE["age"] . "ans. <br> Votre message est : " . $_COOKIE["message"] . " </p>";
    }
?>


<?php include "footer.php"; ?>
<!-- <?php include __DIR__."/../../../Debug/debug.php"; ?> -->