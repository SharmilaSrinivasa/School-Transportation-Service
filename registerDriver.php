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
<form action = "includes/registerDriver.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Register a new driver</h2>
<br> </center>
<div class = "container">

    <label for="driverid" style="color:black;"><b>Driver Id</b></label>
    <input type="text" placeholder="Enter Driver Id" name="driverid" required >
    <br>

    <label for="driverName" style="color:black;"><b>Driver Name</b></label>
    <input type="text" placeholder="Enter Driver Name" name="driverName" required>
    <br>

</div>

<table>
  <tr>

    <th><center>Work Details</center></th>
    <th><center>Personal Details</center></th>

  </tr>
  <tr>
    <td>
    <label for="licno"><b>License Number</b></label>
    <input type="text" placeholder="Enter License Number" name="licno" required>
    <br>
    <label for="expdate"><b>License Expiration Date</b></label>
    <input type="text" placeholder="YYYY-DD-MM" name="expdate" required>
    <br>
    <label for="healthIns"><b>Health Insurance Number</b></label>
    <input type="text" placeholder="Enter Insurance Number" name="healthIns" required>
    <br>
    <label for="wrkplac"><b>Previous Work Place</b></label>
    <input type="text" placeholder="Enter Work Place" name="wrkplac" required>
    <br>
    <label for="exper"><b>Years of Experience</b></label>
    <input type="text" placeholder="Enter Years" name="exper" required>
    <br>
    <label for="reference"><b>Reference</b></label>
    <input type="text" placeholder="Enter Reference" name="reference" required>
    <br>
    <label for="position"><b>Position</b></label>
    <input type="text" placeholder="Enter Position" name="position" required>
    <br>
    <label for="refPhone"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="refPhone" required>
    <br>
    <label for="refEmail"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="refEmail" required>
    <br>

</td>
    <td>
    <label for="Gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="Gender" required>
    <br>
    <label for="DOB"><b>DOB</b></label>
    <input type="text" placeholder="YYYY-DD-MM" name="DOB" required>
    <br>
    <label for="health"><b>Health Details</b></label>
    <input type="text" placeholder="Enter health details" name="health" required>
    <br>
    <label for="phno"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phno" required>
    <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <br>
    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required>
    <br>
    <label for="state"><b>State</b></label>
    <input type="text" placeholder="Enter State" name="state" required>
    <br>
    <label for="zipcode"><b>Zipcode</b></label>
    <input type="text" placeholder="Enter Zipcode" name="zipcode" required>
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
