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
  height: 810px;
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

.cancelbtn
{
     width: 100%;
}

</style>
</head>
<body>
<form action = "includes/registerSchool.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Register a new school</h2>
</center>
<div class = "container">

    <label for="Schoolid" style="color:black;"><b>School Id</b></label>
    <input type="text" placeholder="Enter School Id" name="Schoolid" required >
    <br>
    <label for="schoolName" style="color:black;"><b>School Name</b></label>
    <input type="text" placeholder="Enter School Name" name="schoolName" required>
    <br>
    <label for="schoolTime" style="color:black;"><b>School Timings</b></label>
    <input type="text" placeholder="Enter School Time" name="schoolTime" required>
    <br>
    <label for="address" style="color:black;"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <br>
    <label for="city" style="color:black;"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="city" required>
    <br>
    <label for="state" style="color:black;"><b>State</b></label>
    <input type="text" placeholder="Enter State" name="state" required>
    <br>
    <label for="zipcode" style="color:black;"><b>Zipcode</b></label>
    <input type="text" placeholder="Enter Zipcode" name="zipcode" required>
    <br>
    <label for="phone" style="color:black;"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phone" required>
    <br>
    <label for="email" style="color:black;"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br>
  <label for="DriverId" style="color:black;"><b>Driver Id</b></label>
    <input type="text" placeholder="Enter Driver Id" name="DriverId" required>
    <br>
    <label for="numberplate" style="color:black;"><b>Vehicle Number</b></label>
    <input type="text" placeholder="Enter Vehicle Number" name="numberplate" required>
    <br><br>
    <center>
  <button type="submit" name = "submit">Submit</button>
  </center>

</div>
  </div>
</form>
</body>
</html>
