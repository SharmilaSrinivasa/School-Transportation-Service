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
  width: 50%;
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
  max-width: 700px;
  height: 250px;
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
<div class = "bg">
<body>
<form action = "includes/login.inc.php" method ="POST">
<h2 style="color:white;">RKS Transportation Service</h2>

  <div class="container">
    <center>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br>
    <button type="submit" name = "submit">Login</button>
    </center>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</div>
</html>
