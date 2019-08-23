<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $numberplate = $_POST['numberplate'];
      $type = $_POST['type'];
      $make = $_POST['make'];
      $model = $_POST['model'];
      $color = $_POST['color'];
      $year = $_POST['year'];
      $vinNo = $_POST['vinNo'];
      $InsNo = $_POST['InsNo'];
      $Insname = $_POST['Insname'];
      $Provider = $_POST['Provider'];
      $Insexp = $_POST['Insexp'];
      $Coverage = $_POST['Coverage'];
      $Premimum = $_POST['Premimum'];


      $sql = "INSERT INTO vehicle_info (vehicle_number_plate, vehicle_type, make, model,
      color, year, vin_no) VALUES ('$numberplate', '$type', '$make',
      '$model', '$color', '$year', '$vinNo');";

      $query = mysqli_query($conn, $sql);

     if($query)
      {
          $sql2 = " INSERT INTO vehicle_insurance (insurance_number, owner_name, provider, expiration_date, coverage, premimum_amount, vehicle_number_plate)
          VALUES ('$InsNo', '$Insname', '$Provider', '$Insexp', '$Coverage', '$Premimum', '$numberplate')";
          $query2 = mysqli_query($conn, $sql2);
          if($query2)
          {
            echo 'Entered vehicle details are registered successfully!';
          }
      }
      else
      {
        echo 'error!';
      }
  }
?>
