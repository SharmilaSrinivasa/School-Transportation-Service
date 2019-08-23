<?php

  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      $uname = $_POST['uname'];
      $psw = $_POST['psw'];

      $psw = md5($psw);
      $sql = "SELECT * FROM users WHERE userName = '$uname' AND password = '$psw'";
      $query = mysqli_query($conn, $sql);

      if(mysqli_num_rows($query) == 1)
      {
        header("location:Intro.php");
      }
      else
      {
          echo "The Username or password combination incorrect";
      }
    }
    ?>
