<?php 
  $title = "attendees";
  require_once "includes/header.php";
  require_once "db/conn.php";
  $attendees = $crud->getAttendees();
?>
<table class="table">
    <tr>
      <th>#</th>
      <th>first name</th>
      <th>last name</th>
      <th>speciality</th>
      <th>action</th>
    </tr>

      <?php
        while($r = $attendees->fetch(PDO::FETCH_ASSOC)){
      ?>
        <tr>
      <td><?php echo $r["attendee_id"]?></td>
      <td><?php echo $r["first_name"]?></td>
      <td><?php echo $r["last_name"]?></td>
      <td><?php echo $r["name"]?></td>
      <td>
        <a class="btn btn-primary" href="<?php
        echo "view.php?id=".$r["attendee_id"] ?>">View</a>
        <a class="btn btn-warning" href="<?php
        echo "edit.php?id=".$r["attendee_id"] ?>">Edit</a>
        <a onclick="return confirm('are you sure you want to delete this record?')"class="btn btn-danger" href="<?php
        echo "delete.php?id=".$r["attendee_id"] ?>">Delete</a>
      </td>
    </tr>
    <?PHP }?>
</table>
<?php 
  require_once "includes/footer.php";
?>