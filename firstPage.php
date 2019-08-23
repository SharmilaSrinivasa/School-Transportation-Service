<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>RKS</title>
<style>
body, html {
  font-family: Verdana,sans-serif;
  font-size: 0.9em;
  height: 100%;
    margin: 0;
}

div#header, div#footer {
  padding: 10px;
  text-align: center;
  color: black ;

}

div#content {
  margin: 5px;
  padding: 10px;
  color: black;

}

div.article {
  margin: 5px;
  padding: 10px;
  color: black;
  background-color: white;
}

div#column {
  margin: 5px;
  padding: 10px;
  color: white;

}

div.row {
  margin: 5px;
  padding: 10px;
  color: black;
  background-color: white;
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

div#menu ul {
  padding: 0;
}

div#menu ul li {
  display: inline;
  margin: 5px;
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

</style>
</head>
<body>
<div class = bg>

<div id="header">
  <h1 style="font-size:50px; color:white;">RKS Transportation Service</h1>
</div>

<div id="menu">
  <ul>

    <li><?php echo '<a href="http://localhost/project6/loginPage.php">Login</a>'; ?> </li>
    <li><?php echo '<a href="http://localhost/project6/signupPage.php">Sign Up</a>'; ?></li>
  </ul>
</div>

<div id="content">
  <h2 style="color:white;">School pickup and drop off service</h2>
  <div class="article">
    <h2>Rides for all school needs</h2>
    <p>We intend to save your time and money. We provide easy integration with schools and full visibility of their student's transportation. This brings added peace of mind to the schools and the families.</p>
  </div>
 </div>

 <div id="column">
  <div class="row">
    <h2>Rides to-and-from school</h2>
    <p>Our ridesharing technology creates optimized routes that save you money and reduce commute times.</p>
  </div>
 </div>

 <div id="column">
  <div class="row">
    <h2>Rides to athletic events</h2>
    <p>We eliminate the challenges of multiple providers, tackling logistics and freeing your athletic department to focus on coaching.</p>
  </div>

</div>
</div>
</body>
</html>
