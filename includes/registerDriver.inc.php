<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $driverid = $_POST['driverid'];
      $driverName = $_POST['driverName'];
      $licno = $_POST['licno'];
      $expdate = $_POST['expdate'];
      $healthIns = $_POST['healthIns'];
      $wrkplac = $_POST['wrkplac'];
      $exper = $_POST['exper'];
      $reference = $_POST['reference'];
      $position = $_POST['position'];
      $refPhone = $_POST['refPhone'];
      $refEmail = $_POST['refEmail'];
      $Gender = $_POST['Gender'];
      $DOB = $_POST['DOB'];
      $health = $_POST['health'];
      $phno = $_POST['phno'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipcode = $_POST['zipcode'];


      $sql = "INSERT INTO driver_personal_info (driver_id, driver_name, gender, DOB,
      address, city, state, zipcode, phonenumber, email) VALUES ('$driverid', '$driverName', '$Gender',
      '$DOB', '$address', '$city', '$state', '$zipcode', '$phno', '$email');";

      $query = mysqli_query($conn, $sql);

     if($query)
      {
          $sql2 = "INSERT INTO driver_health_history (health_insurance_no, driver_id, health_issues) VALUES ('$healthIns', '$driverid', '$health');";
          $query2 = mysqli_query($conn, $sql2);

          if($query2)
          {
            $sql3 = "INSERT INTO driver_work_experience (driver_id, license_number, lic_expiration_date, previous_work_place, years, reference, position,
            phonenumber, email) VALUES ('$driverid', '$licno', '$expdate', '$wrkplac', '$exper', '$reference', '$position', '$refPhone', '$refEmail');";

            $query3 = mysqli_query($conn, $sql3);
            if($query3)
            {
                echo 'Entered driver details are registered successfully!';
            }

          }
          else {
              echo 'error!';
          }
      }
      else
      {
        echo 'error!';
      }
  }
?>
