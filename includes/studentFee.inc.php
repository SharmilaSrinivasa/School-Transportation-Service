<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $date = $_POST['date'];
      $studId = $_POST['studId'];
      $status = $_POST['status'];

      $sql = "INSERT INTO fee_payment(pay_date, student_id, status)VALUES('$date', '$studId', '$status');";
      $query = mysqli_query($conn, $sql);

     if($query)
      {
          echo 'Entered fee details are added successfully!';
      }
      else
      {
        echo 'error!';
      }
  }
?>
