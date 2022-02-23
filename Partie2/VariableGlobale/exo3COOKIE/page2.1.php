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
    if(isset($_COOKIE["email"]) && !empty($_COOKIE["email"]) && isset($_COOKIE["password"]) && !empty($_COOKIE["password"])) {
        echo "<h3> Bonjour " . $_COOKIE["email"] . ", votre mdp est " . $_COOKIE["password"] .  ", </h3>";
    }
?>


<?php include "footer.php"; ?>