<?php
	include_once 'includes/dbh.inc.php';

?>

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
  height: 210px;
  margin: auto;
  background: #dddddd;
  padding: 16px;

}

.css-serial {
  counter-reset: serial-number;
}

.css-serial td:first-child:before {
  counter-increment: serial-number;
  content: counter(serial-number);
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
  width: 100%;
  margin: auto;
  background-color: #dddddd;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 10px;
  color: black;
}

.cancelbtn
{
     width: 100%;
}

</style>
</head>
<body>
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>
<center>
<h2 style="color:white;">Student Personal Details</h2>
<br> </center>
<table class="css-serial">
  <tr>
    <th>S.No.</th>
    <th>Student Id</th>
    <th>Student Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Parents Name</th>
    <th>Phone No. 1</th>
    <th>email</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zipcode</th>
  </tr>
	<?php
			$sql = "SELECT * FROM student_personal p INNER JOIN student_parent_info i ON p.student_id = i.student_id";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if($resultCheck > 0)
			{
				while ($row = mysqli_fetch_assoc($result))
				{
					echo "<tr><td></td><td>".$row['student_id']."</td><td>".$row['student_name'].
					"</td><td>".$row['gender']."</td><td>".$row['DOB']."</td><td>".$row['parent_name']."</td><td>".$row['phone_number'].
				"</td><td>".$row['email'].
					"</td><td>". $row['address']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".$row['zipcode']."</td></tr>";

				}
			}
	?>
</table>

</body>
</html>
