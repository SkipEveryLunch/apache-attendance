<?php 
  require_once "db/conn.php";

  if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $dob = $_POST["dateOfBirth"];
    $email = $_POST["emailAddress"];
    $contact = $_POST["contactNumber"];
    $speciality = $_POST["speciality"];
  }
  $isSuccess = $crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$speciality);
  if($isSuccess){
    header("Location: viewrecords.php");
  }else{
    include("includes/errorMessage.php");
    header("Location: viewrecords.php");
  };
  ?>

