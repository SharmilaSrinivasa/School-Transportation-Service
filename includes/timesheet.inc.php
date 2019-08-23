<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $empid = $_POST['empid'];
      $date = $_POST['date'];
      $day = $_POST['day'];
      $Regular = $_POST['Regular'];
      $Sick = $_POST['Sick'];
      $Vacation = $_POST['Vacation'];
      $Holiday = $_POST['Holiday'];


      $sql = "INSERT INTO timesheet (enter_date, day, employee_id, regular,
      sick, vacation, holiday) VALUES ('$date', '$day', '$empid',
      '$Regular', '$Sick', '$Vacation', '$Holiday');";

      $query = mysqli_query($conn, $sql);

     if($query)
      {
          echo 'Entered driver details are registered successfully!';
      }
      else
      {
        echo 'error!';
      }
  }
?>
