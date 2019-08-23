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
<div class = "container">
<h3 style="color:black;">Enter the Employee Id below to generate the salary slip.</h3>
<br><br>
<label for="empid" style="color:black;"><b>Employee Id</b></label>
<input type="text" placeholder="Enter Employee Id" name="empid" required >

  <button type="submit" name = submit>Generate</button>
  </center>
</div>
</form>
</body>
</html>
