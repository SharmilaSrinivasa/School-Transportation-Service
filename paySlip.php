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
<form action = "includes/payslip.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Salary Slip</h2>
 </center>
<table>
  <tr>
    <th colspan="3">
    <label for="empid" style="color:black;"><b>Employee Id</b></label>
    <input type="text" placeholder="Enter Employee Id" name="empid" required >
    <br>
    <label for="empName" style="color:black;"><b>Employee Name</b></label>
    <input type="text" name="empName" required>
    <br>

  </th>
  </tr>
  <tr>
    <td><label style="color:black;"><b>Description</b></label></td>
    <td><label style="color:black;"><b>Earnings</b></label></td>
    <td><label style="color:black;"><b>Deduction</b></td>

  </tr>
  <tr>
    <td><label for="BaseSal" style="color:black;"><b>Basic Salary</b></label></td>
    <td><input type="text" name="BaseSal" required></td>
    <td><input type="text" name="BaseSal" required></td>

  </tr>
  <tr>
    <td><label for="Tax" style="color:black;"><b>Tax</b></label></td>
    <td><input type="text" name="Tax" required></td>
    <td><input type="text" name="Tax" required></td>

  </tr>
  <tr>
    <td><label for="philhel" style="color:black;"><b>Phil Health</b></label></td>
    <td><input type="text" name="philhel" required></td>
    <td><input type="text" name="philhel" required></td>

  </tr>
  <tr>
    <td><label for="SSS" style="color:black;"><b>SSS</b></label></td>
    <td><input type="text" name="SSS" required></td>
    <td><input type="text" name="SSS" required></td>

  </tr>
  <tr>
    <td><label for="Total" style="color:black;"><b>Total</b></label></td>
    <td><input type="text" name="Total" required></td>
    <td><input type="text" name="Total" required></td>

  </tr>
<tr>
    <td><label for="PayDate" style="color:black;"><b>Payment Date</b></label>
      <input type="text" name="PayDate" required>
    </td>
    <td colspan ="2"><label for="Netpay" style="color:black;"><b>Net Pay</b></label>
      <input type="text" name="Netpay" required>
    </td>
  </tr>

</table>

<center>
  <button type="submit" name = submit>Print</button>
  </center>
</form>
</body>
</html>
