<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $numberplate = $_POST['numberplate'];
      $Date = $_POST['Date'];
      $Milage = $_POST['Milage'];
      $ReplaceFilter = $_POST['ReplaceFilter'];
      $BrakeService = $_POST['BrakeService'];
      $ReplaceTires = $_POST['ReplaceTires'];
      $RotatenBlanace = $_POST['RotatenBlanace'];
      $BatteryCheck = $_POST['BatteryCheck'];
      $SparkPlugs = $_POST['SparkPlugs'];
      $BeltHoses = $_POST['BeltHoses'];
      $CheckFluid = $_POST['CheckFluid'];
      $OilChange = $_POST['OilChange'];
      $Others = $_POST['Others'];
      $Desc = $_POST['Desc'];
      $company = $_POST['company'];
      $serviceId = $_POST['serviceId'];


      $sql = "INSERT INTO vehicle_maintenance (service_id, service_company, vehilce_number_plate, date,
      milage, replace_filter, brake_service, replace_tires, rotaten_blanace, battery_check, spark_plugs, belt_hoses, check_fluid, oil_change, others, description )
      VALUES ('$serviceId', '$company', '$numberplate',
      '$Date', '$Milage', '$ReplaceFilter', '$BrakeService','$ReplaceTires', '$RotatenBlanace', '$BatteryCheck', '$SparkPlugs', '$BeltHoses', '$CheckFluid',
    '$OilChange', '$Others', '$Desc');";

      $query = mysqli_query($conn, $sql);

     if($query)
      {
          echo 'Entered vehicle details are registered successfully!';
      }
      else
      {
        echo 'error!';
      }
  }
?>
