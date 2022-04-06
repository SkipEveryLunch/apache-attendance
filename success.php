<?php 
  $title = "success";
  require_once "includes/header.php";
  require_once "db/conn.php";

  if(isset($_POST["submit"])){
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $dob = $_POST["dateOfBirth"];
    $email = $_POST["emailAddress"];
    $contact = $_POST["contactNumber"];
    $speciality = $_POST["speciality"];
  }
  $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$speciality);
  if($isSuccess){
    include("includes/successMessage.php");
  }else{
    include("includes/errorMessage.php");
  };
  ?>



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
  </div>
</div>
<a class="btn btn-info" href="viewRecords.php">Back</a>

<?php require_once "includes/footer.php"?>