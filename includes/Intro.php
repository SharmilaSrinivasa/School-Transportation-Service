<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html
{
  font-family: "Lato", sans-serif;
  height: 100%;
  margin: 0;
}

.tablink {
  background-color: #a6a6a6;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

span.details {
  float: center;
  padding-top: 16px;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

div#menu ul {
  padding: 0;
}

div#menu ul li {
  display: inline;
  margin: 5px;
}

.bg {
  /* The image used */
  background-image:url("bag.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
a:link, a:visited {
  background-color: skyblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: skyblue;
}

#Student {background-color:#b3e0f2;}
#Driver {background-color:#b3e0f2;}
#Vehicle {background-color:#b3e0f2;}
#School {background-color:#b3e0f2;}
</style>
</head>
<body>

<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>

<p style="color:white;">Click on the buttons inside the tabbed menu:</p>
<br><br>
<div id="menu">
  <ul>
    <li><?php echo '<a href="http://localhost/project6/firstPage.php">Logout</a>'; ?> </li>
  </ul>
</div>

<div id="Student" class="tabcontent">
  <h1>Student</h1>

  <span class="details"> <?php echo '<a href="http://localhost/project6/registerStudent.php">Register a new Student</a>'; ?> </span>
  <br><br>
  <span class="details"> <?php echo '<a href="http://localhost/project6/studentsPersonalDetails.php">View Student Personal Details</a>'; ?> </span>
   <br><br>
  <span class="details"> <?php  echo '<a href="http://localhost/project6/studentSchoolDetails.php">View Student School Details</a>'; ?></span>
  <br><br>
  <span class="details"> <?php echo '<a href="http://localhost/project6/student_fee.php">Enter Fee Payment</a>'; ?> </span>
   <br><br>
  <span class="details"> <?php echo '<a href="http://localhost/project6/feePayment.php">View Fee Payment List</a>'; ?> </span>
   <br><br>
</div>

<div id="Driver" class="tabcontent">
  <h1>Driver</h1>
  <span class="details"><?php echo '<a href="http://localhost/project6/registerDriver.php">Register a new driver</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/DriverPersonalDetails.php">View driver Personal details</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/DriverWorkDetails.php">View driver Work details</a>'; ?></span>
<br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/timeSheet.php">View Time Sheet</a>'; ?></span>
<br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/payroll.php">View Payroll</a>'; ?></span>
</div>

<div id="Vehicle" class="tabcontent">
  <h1>Vehicle</h1>
  <span class="details"><?php echo '<a href="http://localhost/project6/vehicleRegister.php">Register a new vehicle</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/VehicleList.php">View vehicle details</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/InsuranceDetails.php">View Insurance details</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/vehicleMaintenance.php">View vehicle Maintenance details</a>'; ?></span>

</div>

<div id="School" class="tabcontent">
  <h1>School</h1>
  <span class="details"><?php echo '<a href="http://localhost/project6/registerSchool.php">Register a new school</a>'; ?></span>
  <br><br>
  <span class="details"><?php echo '<a href="http://localhost/project6/ServiceDetails.php">View school service details</a>'; ?></span>
</div>

<button class="tablink" onclick="openDetails('Student', this, '#87ceeb')" id="defaultOpen">Student</button>
<button class="tablink" onclick="openDetails('Driver', this, '#b3e0f2')">Driver</button>
<button class="tablink" onclick="openDetails('Vehicle', this, '#87ceeb')">Vehicle</button>
<button class="tablink" onclick="openDetails('School', this, '#b3e0f2')">School</button>

<script>
function openDetails(tabName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(tabName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div>
</body>
</html>
