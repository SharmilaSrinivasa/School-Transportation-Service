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

</style>
</head>
<body>
<form action = "includes/studentFee.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Fee Payment Details</h2>
<br> </center>

<div class = "container">

    <label for="date" style="color:black;"><b>Date</b></label>
    <input type="text" placeholder="Enter Date" name="date" required>
    <br>
    <label for="studId" style="color:black;"><b>Student Id</b></label>
    <input type="text" placeholder="Enter Student Id" name="studId" required>
    <br>
    <label for="status" style="color:black;"><b>Payment Status</b></label>
    <input type="text" placeholder="Yes/No" name="status" required>
    <br>

</div>


<center>
  <button type="submit" name = "submit">Submit</button>
  </center>
</form>
</body>
</html>
