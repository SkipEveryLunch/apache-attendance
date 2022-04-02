<?php 
  $title = "success";
  require_once "includes/header.php"?>

<h1 class="text-center text-success">You have benn Successfully registered.</h1>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $_POST["firstName"] ." ". $_POST["lastName"] ?>
    </h5>
    <h6 class="card-title">
      <?php echo $_POST["speciality"] ?>
    </h6>
    <p class="card-text">
      <?php echo "birthdate: ".$_POST["dateOfBirth"]?>
    </p>
    <p class="card-text">
      <?php echo $_POST["emailAddress"]?>
    </p>
    <p class="card-text">
      <?php echo $_POST["contactNumber"]?>
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<?php require_once "includes/footer.php"?>