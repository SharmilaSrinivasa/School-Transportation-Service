<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

     $Schoolid = $_POST['Schoolid'];
      $schoolName = $_POST['schoolName'];
      $schoolTime = $_POST['schoolTime'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipcode = $_POST['zipcode'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
     $DriverId = $_POST['DriverId'];
      $numberplate = $_POST['numberplate'];

      $sql = "INSERT INTO school_info (school_id, school_name, school_timings, address,
      city, state, zipcode, phonenumber, email) VALUES ('$Schoolid', '$schoolName', '$schoolTime', '$address',
      '$city', '$state', '$zipcode', '$phone', '$email');";

      $query = mysqli_query($conn, $sql);

     if($query)
      {
          $sql2 = " INSERT INTO transport_service (driver_id,school_id, vehicle_number_plate) VALUES ('$DriverId', '$Schoolid', '$numberplate')";
          $query2 = mysqli_query($conn, $sql2);
          if($query2)
          {
            echo 'Entered school details are registered successfully!';
          }
      }
      else
      {
        echo 'error!';
      }
  }
?>
