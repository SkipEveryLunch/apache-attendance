<?php
  class crud{
    private $db;
    function __construct($conn){
      $this->db = $conn;
    }
    public function insertAttendees($fname,$lname,$dob,$email,$contact,$speciality){
      try{
        $sql = "INSERT INTO attendee(firstname,lastname,dateofbirth,emailaddress,contactnumber,speciality_id) VALUES (:fname,:lname,:dob,:email,:contact,:speciality)";
        $statement = $this->db->prepare($sql);
        $statement->bindparam(":fname",$fname);
        $statement->bindparam(":lname",$lname);
        $statement->bindparam(":dob",$dob);
        $statement->bindparam(":email",$email);
        $statement->bindparam(":contact",$contact);
        $statement->bindparam(":speciality",$speciality);
        $statement->execute();
        return true;
      }catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
    public function getAttendees(){
      try{
        $sql = "select * from attendee inner join specialities on attendee.speciality_id = specialities.speciality_id";
        $result = $this->db->query($sql);
        return $result;
      }catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
    public function getAttendee($id){
      try{
        $sql = "select * from attendee inner join specialities on attendee.speciality_id = specialities.speciality_id where attendee_id = :id";
        $statement = $this->db->prepare($sql);
        $statement->bindparam(":id",$id);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
      }catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
    public function editAttendee($id,$fname,$lname,$dob,$email,$contact,$speciality){
      try{
        $sql = "UPDATE `attendee` SET `firstname` = :fname, `lastname` = :lname, `dateofbirth` = :dob, `emailaddress` = :email, `contactnumber` = :contact, `speciality_id` = :speciality WHERE `attendee_id` =  :id";
        $statement = $this->db->prepare($sql);
        $statement->bindparam(":id",$id);
        $statement->bindparam(":fname",$fname);
        $statement->bindparam(":lname",$lname);
        $statement->bindparam(":dob",$dob);
        $statement->bindparam(":email",$email);
        $statement->bindparam(":contact",$contact);
        $statement->bindparam(":speciality",$speciality);
        $statement->execute();
        return true;
      }catch(PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
    public function deleteAttendee($id){
      try{
        $sql = "delete from attendee where attendee_id = :id";
        $statement = $this->db->prepare($sql);
        $statement->bindparam(":id",$id);
        $statement->execute();
        $result = $statement->fetch();
        return true;
      }catch(PDOException $e){
        return false;
      }
    }
    public function getSpecialities(){
      try{
        $sql = "select * from specialities";
        $result = $this->db->query($sql);
        return $result;
      }catch(PDOException $e){
        return false;
      }
    }
  }
?>