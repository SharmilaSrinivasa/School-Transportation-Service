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
  max-width: 600px;
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
  border: 1px solid #dddddd;
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
<form action = "includes/payroll.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Payroll</h2>
 </center>

<div class = "container">

    <label for="empid" style="color:black;"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Employee Id" name="empid" required >

<table>
  <tr>
    <th>
      <h3>Gross Salary Requirements</h3>
      <label for="hourRate" style="color:black;"><b>Rate/Hour</b></label>
    <input type="text" placeholder="Enter rate per hour" name="hourRate" required >
    <br>
    <label for="startDate" style="color:black;"><b>Start Date</b></label>
    <input type="text"  placeholder="YYYY-DD-MM" name="startDate" required >
    <br>
    <label for="endDate" style="color:black;"><b>End Date</b></label>
    <input type="text"  placeholder="YYYY-DD-MM" name="endDate" required >
    <br>
  </th>
    <th>
      <h3>Deduction Requirements</h3>
    <label for="tax" style="color:black;"><b>Tax%</b></label>
    <input type="text" placeholder="Enter percentage" name="tax" required >
    <br>
    <label for="philhealth" style="color:black;"><b>Phil health%</b></label>
    <input type="text" placeholder="Enter percentage" name="philhealth" required >
    <br>
    <label for="SSS" style="color:black;"><b>SSS%</b></label>
    <input type="text" placeholder="Enter percentage" name="SSS" required >
    <br>
    </th>
  </tr>
</table>

<center>
  <button type="submit" name = "submit">Calculate</button>
  </center>

</form>
</body>
</html>
