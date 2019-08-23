<?php
  include_once 'includes/dbh.inc.php'
?>
<!DOCTYPE html>
<html>
<head>
<style>

body, html
{
  font-family: "Lato", sans-serif;
  height: 100%;
  margin: 0;
}

.bg
{
  background-image:url("bag.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

div#header, div#footer
{
  padding: 10px;
  text-align: center;
  color: black ;

}

.container
{
  max-width: 500px;
  height: 210px;
  margin: auto;
  background: #dddddd;
  padding: 16px;
}

.css-serial
{
  counter-reset: serial-number;
}

.css-serial td:first-child::before
{
  counter-increment: serial-number;
  content: counter(serial-number);
}

input[type=text]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button
{
  background-color: #87ceeb;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover
{
  opacity: 0.8;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: auto;
  background-color: #dddddd;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 10px;
  color: black;
}

.cancelbtn
{
     width: 100%;
}

</style>
</head>
<body>
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Service Details</h2>
<br> </center>

<table class = "css-serial">
  <tr>
    <th>S.No.</th>
    <th>School Name</th>
    <th>Driver</th>
    <th>Vehicle Number</th>
    <th>Vehicle Type</th>
    <th>Student Count</th>
  </tr>
  <?php
    $sql = "SELECT s.school_name, d.driver_name, t.vehicle_number_plate, v.vehicle_type, COUNT(p.student_id) AS student_count
    FROM transport_service t INNER JOIN driver_personal_info d ON t.driver_id = d.driver_id
    INNER JOIN school_info s ON t.school_id = s.school_id
    INNER JOIN vehicle_info v ON t.vehicle_number_plate = v.vehicle_number_plate
    INNER JOIN student_personal p ON p.school_id = t.school_id GROUP BY p.school_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr><td></td><td>".$row['school_name']."</td><td>".$row['driver_name']."</td><td>".$row['vehicle_number_plate']."</td><td>"
          .$row['vehicle_type']."</td><td>".$row['student_count']."</td></tr>";
      }
    }
  ?>
</table>

</body>
</html>
