<?php include "header.php"; ?>

<ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Page 1</a></li>
        <li class="nav-item"><a href="page2.php" class="nav-link">Page 2</a></li>
        <li class="nav-item"><a href="page3.php" class="nav-link ">Page 3</a></li>
        <?php if(isset($_COOKIE["email"])){?>
            <li class="nav-item"><a href="process_logout.php" class="nav-link bg-danger text-white">Deconnexion</a></li>
        <?php } ?>
      </ul>
    </header>
  </div>
  </header>

  <form action="process_register.php" method="POST">

    <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" placeholder="Nom">
    </div>

    <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom" placeholder="Prénom">
    </div>

    <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Age</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="age" placeholder="Age">
    </div>

    <div class="m-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
    </div>

    <div class="m-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success m-3">Envoyer</button>

</form>




<?php include "footer.php"; ?>