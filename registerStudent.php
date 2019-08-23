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
<form action = "includes/registerStudent.inc.php" method ="POST">

<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Register a new student</h2>
<br> </center>
<div class = "container">

    <!--<label for="Studentid" style="color:black;"><b>Student Id</b></label>
    <input type="text" placeholder="Enter Student Id" name="Studentid" required >
    <br> -->

    <label for="StudentName" style="color:black;"><b>Student Name</b></label>
    <input type="text" placeholder="Enter Student Name" name="StudentName" required>
   <br>

	 <label for="class"><b>Class</b></label>
	 <input type="text" placeholder="Enter Class" name="class" required>
	 <br>
	 <label for="Section"><b>Section</b></label>
	 <input type="text" placeholder="Enter Section" name="Section" required>
	 <br>
	 <label for="Schoolid"><b>School Id</b></label>
	 <input type="text" placeholder="Enter School Id" name="Schoolid" required>
	 <br>
	 <label for="VanFee"><b>Van Fee</b></label>
	 <input type="text" placeholder="Enter Van Fee" name="VanFee" required>
	 <br>
	 <label for="Gender"><b>Gender</b></label>
	 <input type="text" placeholder="Enter Gender" name="Gender" required>
	 <br>
	 <label for="DOB"><b>DOB</b></label>
	 <input type="text" placeholder="YYYY-DD-MM" name="DOB" required>
	 <br>
<!--	 <label for="ParentId"><b>Parent Id</b></label>
	 <input type="text" placeholder="Enter Parent Id" name="ParentId" required>
	 <br> -->
	 <label for="Parent"><b>Parent name</b></label>
	 <input type="text" placeholder="Enter Parent Name" name="Parent" required>
	 <br>
	 <label for="phone"><b>Phone Number</b></label>
	 <input type="text" placeholder="Enter Phone Number" name="phone" required>
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

</div>

<center>
	<button type="submit" name = "submit">Submit</button>
	</center>

	</div>
</form>
</body>
</html>
