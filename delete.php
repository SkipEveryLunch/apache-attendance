<?php 
  require_once "db/conn.php";

  if(!$_GET["id"]){
    include("includes/errorMessage.php");
  }else{
    $id = $_GET["id"];
    $isSuccess = $crud->deleteAttendee($id);
    if(!$isSuccess){
      include("includes/errorMessage.php");
      header("Location: viewrecords.php");
    }else{
      header("Location: viewrecords.php");
    };
  }

  ?>

