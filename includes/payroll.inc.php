<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $empid = $_POST['empid'];
      $hourRate = $_POST['hourRate'];
      $startDate = $_POST['startDate'];
      $endDate = $_POST['endDate'];
      $tax = $_POST['tax'];
      $philhealth = $_POST['philhealth'];
      $SSS = $_POST['SSS'];

      $sql = "INSERT INTO payroll (employee_id, rate_per_hour, start_date, end_date, tax, phil_health, SSS)
      VALUES ('$empid', '$hourRate', '$startDate', '$endDate', '$tax', '$philhealth', '$SSS');";

      $query = mysqli_query($conn, $sql);


     if($query)
      {
          $sql2 = "SELECT SUM(regular) AS 'totalhour' FROM timesheet WHERE enter_date >= '$startDate' AND enter_date <= '$endDate' AND employee_id = '$empid'";
          $query2 = mysqli_query($conn, $sql2);
          $data = mysqli_fetch_assoc($query2);
          $deuct1 = $tax / 100;
          $deuct2 = $philhealth / 100;
          $deuct3 = $SSS / 100;
          $deduction = $tax+$philhealth+$SSS;
          $percent = $deduction / 100;
          $sql3 = "SELECT driver_name FROM driver_personal_info WHERE driver_id = '$empid'";
          $query3 = mysqli_query($conn, $sql3);
          $data2 = mysqli_fetch_assoc($query3);
          $gross = $data['totalhour'] * $hourRate;
          $ded =  $percent * $data['totalhour'] * $hourRate;
      }
      else
      {
        echo 'error!';
      }
  }
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
  height: 150px;
  margin: auto;
  background: #dddddd;
  padding: 16px;

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
  width: 50%;
  margin: auto;
  background-color: #dddddd;
}

td {
  border: 1px solid black;
  text-align: left;
  padding: 6px;
  color: black;
}

th {
  border: 1px solid black;
  text-align: center;
  padding: 4px;
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
<h2 style="color:white;">Salary Slip</h2>
 </center>
<table>
  <tr>
    <th colspan="3">
    <label for="empid" style="color:black;"><b>Employee Id: </b></label>
    <?php
      echo $empid;
      ?>
    <br><br>
    <label for="empName" style="color:black;"><b>Employee Name: </b></label>
    <?php echo $data2['driver_name']; ?>
    <br><br>
    <label for="hours" style="color:black;"><b>Total hours worked: </b></label>
    <?php echo $data['totalhour']." hours"; ?>
    <br><br>
  </th>
  </tr>
  <tr>
    <td><label style="color:black;"><b>Description</b></label></td>
    <td><label style="color:black;"><b>Earnings</b></label></td>
    <td><label style="color:black;"><b>Deduction</b></label></td>

  </tr>
  <tr>
    <td><label for="BaseSal" style="color:black;"><b>Basic Salary</b></label></td>
    <td>
      <?php
      echo  $gross;
      ?>
      </td>
      <td></td>


  </tr>
  <tr>
    <td><label for="Tax" style="color:black;"><b>Tax</b></label></td>
    <td></td>
    <td>
    <?php
      echo $gross * $deuct1;
      ?>
    </td>

  </tr>
  <tr>
    <td><label for="philhel" style="color:black;"><b>Phil Health</b></label></td>
    <td></td>
    <td>
      <?php
        echo $gross * $deuct2;
        ?>
    </td>

  </tr>
  <tr>
    <td><label for="SSS" style="color:black;"><b>SSS</b></label></td>
    <td></td>
    <td>
      <?php
      echo $gross * $deuct3;
      ?>
    </td>

  </tr>
  <tr>
    <td><label for="Total" style="color:black;"><b>Total</b></label></td>
    <td>
      <?php
        echo  $gross;
       ?>
    </td>
    <td>
      <?php
      echo  $ded;
    ?>
  </td>

  </tr>
<tr>
  <td><label for="date" style="color:black;"><b>Date: </b></label>

    <?php
  echo  date("Y/m/d");
  ?>
</td>
    <td colspan ="2"><label for="Netpay" style="color:black;"><b>Net Pay: </b></label>
      <?php
        echo  $gross - $ded;
       ?>
    </td>
  </tr>

</table>

</body>
</html>
