<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width=device-width, initial-scale = 1">
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

.container {
  max-width: 50%;
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

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: black;
}

.cancelbtn
{
     width: 100%;
}

</style>
</head>
<body>
<form action = "includes/registerVehicle.inc.php" method ="POST">

<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Register a new vehicle</h2>
<br> </center>
<div class = "container">

  <label for="numberplate"><b>Number Plate</b></label>
  <input type="text" placeholder="Enter Number Plate" name="numberplate" required>
  <br>
</div>

<table>
  <tr>

    <th><center>Vehicle Details</center></th>
    <th><center>Insurance Details</center></th>

  </tr>
  <tr>
    <td>
    <label for="type"><b>Type</b></label>
    <input type="text" placeholder="Enter Type" name="type" required>
    <br>
    <label for="make"><b>Make</b></label>
    <input type="text" placeholder="Enter Make" name="make" required>
    <br>
    <label for="model"><b>Model</b></label>
    <input type="text" placeholder="Enter Model" name="model" required>
    <br>
    <label for="color"><b>Color</b></label>
    <input type="text" placeholder="Enter Color" name="color" required>
    <br>
    <label for="year"><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="year" required>
    <br>
    <label for="vinNo"><b>Vin No.</b></label>
    <input type="text" placeholder="Enter Vin number" name="vinNo" required>
    <br>
</td>
    <td>
    <label for="InsNo"><b>Insurance Number</b></label>
    <input type="text" placeholder="Enter Insurance Number" name="InsNo" required>
    <br>
    <label for="Insname"><b>Owner Name</b></label>
    <input type="text" placeholder="Enter Owner Name" name="Insname" required>
    <br>
    <label for="Provider"><b>Provider</b></label>
    <input type="text" placeholder="Enter Provider" name="Provider" required>
    <br>
    <label for="Insexp"><b>Expiration Date</b></label>
    <input type="text" placeholder="YYYY-DD-MM" name="Insexp" required>
    <br>
    <label for="Coverage"><b>Coverage</b></label>
    <input type="text" placeholder="Enter Coverage Details" name="Coverage" required>
    <br>
    <label for="Premimum"><b>Premimum amount</b></label>
    <input type="text" placeholder="Enter Premimum amount" name="Premimum" required>
    <br>
</td>

  </tr>

</table>
<center>
  <button type="submit" name = "submit">Submit</button>
  </center>

  </div>
</form>
</body>
</html>
