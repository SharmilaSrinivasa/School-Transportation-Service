<?php

  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $uname = $_POST['uname'];
      $email = $_POST['email'];
      $psw = $_POST['psw'];
      $rpsw = $_POST['rpsw'];

      if($psw == $rpsw)
      {
        $psw = md5($psw);
        $sql = "INSERT INTO users(userName, email, password) VALUES ('$uname', '$email', '$psw')";
        $query = mysqli_query($conn, $sql);
        header("location:Intro.php");

      }
      else
      {
          echo "The two password do not match";
      }
    }
    ?>
