<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html
{
	font-family: Arial, Helvetica, sans-serif;
	height: 100%;
  	margin: 0;
 }
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}

button {
  background-color: #87ceeb;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #87ceeb;
  color: black;

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

.container {
  max-width: 500px;
  height: 500px;
  margin: auto;
  background: white;
  padding: 16px;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
	<form action = "includes/signup.inc.php" method ="POST">
<div class = "bg">

<h2 style="color:white;">RKS Transportation Service</h2>

  <div class="container">

    	<br>
    	<br>

    <label for="uname"><b>User Name</b></label>
    <br>
    <input type="text" placeholder="Enter User Name" name="uname" required>
    <br>
		<label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Enter E-mail" name="email" required>
    <br>
    <label for="psw"><b>Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <label for="rpsw"><b>Repeat Password</b></label>
    <br>
    <input type="password" placeholder="Enter Password again" name="rpsw" required>
    <br>
    <br>
    <center>
    <br>
    <br>
    <button type="submit" name = "submit">Sign Up</button>
    </center>
    <span class="psw">Have already an account? <a href="#">login here</a></span>
  </div>
</form>
</div>
</body>
</html>
