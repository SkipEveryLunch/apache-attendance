<?php 
  $title = "edit";
  require_once "includes/header.php";
  require_once "db/conn.php";
  $attendee = $crud->getAttendee($_GET["id"]);
  if(!$attendee){
    include("includes/errorMessage.php");
    header("Location: viewrecords.php");
  }
  $specialities = $crud->getSpecialities();
?>
<h1 class="text-center">Edit Record</h1>

<form method="post" action="editpost.php">
  <input type="hidden" name="id" 
  value="<?php echo $attendee["attendee_id"]?>" >
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name"
    value="<?php echo $attendee["firstname"]?>"
    >
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name"
    value="<?php echo $attendee["lastname"]?>"
    >
  </div>
  <div class="form-group">
    <label for="dateOfBirth">Date of Birth</label>
    <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="click here and pick up a date from callendar"
    value="<?php echo $attendee["dateofbirth"]?>"
    >
  </div>
  <div class="form-group">
    <label for="speciality">Speciality</label>
    <select class="form-control" id="speciality"
    name="speciality">
      <?php
          while($r = $specialities->fetch(PDO::FETCH_ASSOC)){
      ?>
        <option value="<?php echo $r["specialty_id"]?>"
        <?php if($r["specialty_id"]==$attendee["specialty_id"])echo "selected"?>
        ><?php echo $r["name"]?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="emailAddress">Email Address</label>
    <input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp" placeholder="Enter Email Address"
    value="<?php echo $attendee["emailaddress"]?>"
    >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="contactNumber">Contact Number</label>
    <input type="phone" class="form-control" id="contactNumber" name="contactNumber" aria-describedby="phoneHelp" placeholder="Enter Contact Number"
    value="<?php echo $attendee["contactnumber"]?>"
    >
    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
</form>

<?php require_once "includes/footer.php"?>