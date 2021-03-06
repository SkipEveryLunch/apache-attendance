<?php 
  $title = "index";
  require_once "includes/header.php";
  require_once "db/conn.php";
  $specialities = $crud->getSpecialities();
?>
<h1 class="text-center">Registration for Conference</h1>

<form method="post" action="success.php">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input required type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input required type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="dateOfBirth">Date of Birth</label>
    <input type="text" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="click here and pick up a date from callendar">
  </div>
  <div class="form-group">
    <label for="speciality">Speciality</label>
    <select class="form-control" id="speciality"
    name="speciality">
      <?php
          while($r = $specialities->fetch(PDO::FETCH_ASSOC)){
      ?>
        <option value="<?php echo $r["specialty_id"]?>"><?php echo $r["name"]?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="emailAddress">Email Address</label>
    <input required type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp" placeholder="Enter Email Address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="contactNumber">Contact Number</label>
    <input type="phone" class="form-control" id="contactNumber" name="contactNumber" aria-describedby="phoneHelp" placeholder="Enter Contact Number">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php require_once "includes/footer.php"?>