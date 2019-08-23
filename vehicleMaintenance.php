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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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

.container {
  max-width: 500px;
  height: auto;
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin: auto;
  background-color: #dddddd;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
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

span.details {
  float: center;
  padding-top: 16px;
}
.cancelbtn
{
     width: 100%;
}

</style>
</head>
<body>
<form action = "includes/vehicleMaintenance.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Vehicle Maintenance Details</h2>
<br> </center>

<div class = "container">
    <label for="numberplate" style="color:black;"><b>Vehilce Number Plate</b></label>
    <input type="text" placeholder="Enter Number Plate" name="numberplate" required>
    <br>
    <label for="serviceId" style="color:black;"><b>Service Id</b></label>
    <input type="text" placeholder="Enter Service Id" name="serviceId" required>
    <br>
    <label for="company" style="color:black;"><b>Service Company</b></label>
    <input type="text" placeholder="Enter Service Company" name="company" required>
    <br>
  </div>

<table>
  <tr>
    <th><label for="Date" style="color:black;"><b>Date</b></label></th>
    <th><label for="Milage" style="color:black;"><b>Milage</b></label></th>
    <th><label for="ReplaceFilter" style="color:black;"><b>Replace Filter</b></label> </th>
    <th><label for="BrakeService" style="color:black;"><b>Brake Service</b></label></th>
    <th><label for="ReplaceTires" style="color:black;"><b>Replace Tires</b></label></th>
    <th><label for="RotatenBlanace" style="color:black;"><b>Rotaten & Blanace</b></label></th>
    <th><label for="BatteryCheck" style="color:black;"><b>Battery Check</b></label></th>
    <th><label for="SparkPlugs" style="color:black;"><b>Spark Plugs</b></label></th>
    <th><label for="BeltHoses" style="color:black;"><b>Belt & Hoses</b></label></th>
    <th><label for="CheckFluid" style="color:black;"><b>Check Fluid</b></label></th>
    <th><label for="OilChange" style="color:black;"><b>Oil Change</b></label></th>
    <th><label for="Others" style="color:black;"><b>Others</b></label></th>
  </tr>
  <tr>
    <td><input type="text" placeholder="YYYY-DD-MM" name="Date" required></td>
    <td><input type="text" placeholder="Milage" name="Milage" required></td>
    <td><input type="text" placeholder="Yes/No" name="ReplaceFilter" required></td>
    <td><input type="text" placeholder="Yes/No" name="BrakeService" required></td>
    <td><input type="text" placeholder="Yes/No" name="ReplaceTires" required></td>
    <td><input type="text" placeholder="Yes/No" name="RotatenBlanace" required></td>
    <td><input type="text" placeholder="Yes/No" name="BatteryCheck" required></td>
    <td><input type="text" placeholder="Yes/No" name="SparkPlugs" required></td>
    <td><input type="text" placeholder="Yes/No" name="BeltHoses" required></td>
    <td><input type="text" placeholder="Yes/No" name="CheckFluid" required></td>
    <td><input type="text" placeholder="Yes/No" name="OilChange" required></td>
    <td><input type="text" placeholder="Specify" name="Others" required></td>
  </tr>

</table>
<br>
  <br>

<div class = "container">
<br>
<label for="Desc" style="color:black;"><b>Description: </b></label>
<br>
<textarea rows="10" cols="65" name="Desc" required>
</textarea>

    <br>
  </div>
<br><br>
<center>
  <button type="submit" name = "submit">Submit</button>
  </center>
  <span class="details" ><a href="http://localhost/project6/VehicleList.php">View Vehicle details</a></span>

</div>
</form>
</body>
</html>
