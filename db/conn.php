<?php
  // $host = "127.0.0.1";
  // $db = "attendance_db";
  // $user = "root";
  // $pass = "";
  // $charset = "utf8mb4";

  $host = "remotemysql.com";
  $db = "q8E1TTrgMc";
  $user = "q8E1TTrgMc";
  $pass = "SP9R45x9Sa";
  $charset = "utf8mb4";

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
    $pdo = new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    throw new PDOException($e->getMessage());
  }

  require_once "db/crud.php";
  $crud = new crud($pdo);
?>