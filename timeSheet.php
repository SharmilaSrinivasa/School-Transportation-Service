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
  width: auto;
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
  width: auto;
  margin: auto;
  background-color: #dddddd;
}

td, th {
  border: 1px solid black;
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
<form action = "includes/timesheet.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Time Sheet</h2>
</center>

<div class = "container">

    <label for="empid" style="color:black;"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Emp Id" name="empid" required >
    <br>
</div>

<br>
<table>
  <tr>
    <th><label for="date" style="color:black;"><b>Date</b></label></th>
    <th><label for="day" style="color:black;"><b>Day of Week</b></label></th>
    <th><label for="Regular" style="color:black;"><b>Regular</b></label></th>
    <th><label for="Sick" style="color:black;"><b>Sick</b></label></th>
    <th><label for="Vacation" style="color:black;"><b>Vacation</b></label></th>
    <th><label for="Holiday" style="color:black;"><b>Holiday</b></label></th>
  </tr>
  <tr>
    <td><input type="text" placeholder="YYYY-DD-MM" name="date" required></td>
    <td><input type="text" placeholder="Enter day" name= "day" required></td>
    <td><input type="text" placeholder="0.00 hrs" name= "Regular" required></td>
    <td><input type="text" placeholder="0.00 hrs" name= "Sick" required></td>
    <td><input type="text" placeholder="0.00 hrs" name= "Vacation" required></td>
    <td><input type="text" placeholder="0.00 hrs" name= "Holiday" required></td>
  </tr>
</table>
<br><br><br><br><br>
<center>
  <button type="submit" name="submit">Submit</button>
  </center>
</form>
</body>
</html>
