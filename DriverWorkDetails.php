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
<h2 style="color:white;">Driver Work Details</h2>
<br> </center>

<table class = "css-serial">
  <tr>
    <th>S.No.</th>
    <th>Driver Id</th>
    <th>Driver Name</th>
    <th>License Number</th>
    <th>License Expiration Date</th>
    <th>Previous Work Place</th>
    <th>Years of Experience</th>
    <th>Reference</th>
    <th>Position</th>
    <th>Phone No.</th>
    <th>email</th>
  </tr>

  <?php
    $sql = "SELECT * FROM driver_personal_info p INNER JOIN driver_work_experience w ON p.driver_id = w.driver_id";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr><td></td><td>".$row['driver_id']."</td><td>".$row['driver_name']."</td><td>".$row['license_number']."</td><td>"
          .$row['lic_expiration_date']."</td><td>".$row['previous_work_place']."</td><td>".$row['years']."</td><td>".$row['reference'].
            "</td><td>".$row['position']."</td><td>".$row['phonenumber'].
            "</td><td>".$row['email']."</td></tr>";
      }
    }
  ?>

</table>

</body>
</html>
