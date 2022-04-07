<?php 
  $title = "success";
  require_once "includes/header.php";
  require_once "db/conn.php";
  if(!isset($_GET["id"])){
    include("includes/errorMessage.php");
  }else{
    $id = $_GET["id"];
    $attendee = $crud->getAttendee($id);
    if(!$attendee){
      include("includes/errorMessage.php");
    }else{
  ?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">
        <?php echo $attendee["firstname"] ." ". $attendee["lastname"] ?>
      </h5>
      <h6 class="card-title">
        <?php echo $attendee["name"] ?>
      </h6>
      <p class="card-text">
        <?php echo "birthdate: ".$attendee["dateofbirth"]?>
      </p>
      <p class="card-text">
        <?php echo $attendee["emailaddress"]?>
      </p>
      <p class="card-text">
        <?php echo $attendee["contactnumber"]?>
      </p>
    </div>
  </div>
    <a class="btn btn-info" href="viewRecords.php">Back</a>
    <a class="btn btn-warning" href="<?php
      echo "edit.php?id=".$attendee["attendee_id"] ?>">Edit</a>
    <a onclick="return confirm('are you sure you want to delete this record?')"class="btn btn-danger" href="<?php
    echo "delete.php?id=".$attendee["attendee_id"] ?>">Delete</a>
<?php 
    }
  }
  require_once "includes/footer.php"?>