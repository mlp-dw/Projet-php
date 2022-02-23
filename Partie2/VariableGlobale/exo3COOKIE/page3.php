
<?php include "header.php"; ?>
<ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Page 1</a></li>
        <li class="nav-item"><a href="page2.php" class="nav-link ">Page 2</a></li>
        <li class="nav-item"><a href="page3.php" class="nav-link active">Page 3</a></li>
        <?php if(isset($_SESSION["email"])){?>
            <li class="nav-item"><a href="process_logout.php" class="nav-link bg-danger text-white">Deconnexion</a></li>
        <?php } ?>
      </ul>
    </header>
  </div>
  </header>


<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Go to your account</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">

        <form action="process_login.php" method="POST">

          <div class="form mb-3">
            <input type="email" class="form-control rounded-4"  placeholder="name@example.com" name="email">
          </div>

          <div class="form mb-3">
            <input type="password" class="form-control rounded-4"  placeholder="Password" name="password">
          </div>

          <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Log In</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          
        </form>
      </div>
    </div>
  </div>
</div>



<?php include "footer.php"; ?>