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
  height: auto;
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
  width: 70%;
  margin: auto;
  background-color: #dddddd;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 2px;
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
<h2 style="color:white;">Fee Payment Details</h2>
<br> </center>

<div class = "container">

    <label for="date" style="color:black;"><b>Date</b></label>
    <?php
  echo  date("Y/m/d");
  ?>
    <br>

    <label for="Month" style="color:black;"><b>Month</b></label>
    <?php
  echo  date("F");
  ?>
    <br>

</div>

<br><br>
<table class = "css-serial">
  <tr>
    <th>Serial No.</th>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>School Name</th>
    <th>Fee</th>
  </tr>

  <?php
    $sql = "SELECT * FROM student_personal p INNER JOIN school_info i ON p.school_id = i.school_id INNER JOIN fee_payment f ON f.student_id = p.student_id
    WHERE f.status = 'yes'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0)
    {
      while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr><td></td><td>".$row['student_id']."</td><td>".$row['student_name']."</td><td>".$row['school_name']."</td><td>"
          .$row['fee_amount']."</td></tr>";

      }
    }
  ?>

</table>


</body>
</html>
