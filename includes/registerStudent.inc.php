<?php
  if(isset($_POST['submit']))
  {
      include_once 'dbh.inc.php';

      //$Studentid = $_POST['Studentid'];
      $StudentName = $_POST['StudentName'];
      $class = $_POST['class'];
      $Section = $_POST['Section'];
      $Schoolid = $_POST['Schoolid'];
      $VanFee = $_POST['VanFee'];
      $Gender = $_POST['Gender'];
      $DOB = $_POST['DOB'];
      //$ParentId = $_POST['ParentId'];
      $Parent = $_POST['Parent'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipcode = $_POST['zipcode'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];


      $sql = "INSERT INTO student_personal (student_name, gender, DOB,
      school_id, class, section, fee_amount) VALUES ('$StudentName', '$Gender', '$DOB',
      '$Schoolid', '$class', '$Section', '$VanFee');";

      $query = mysqli_query($conn, $sql);

      $id = "SELECT student_id FROM student_personal WHERE student_name = '$StudentName' AND DOB = '$DOB' AND school_id = '$Schoolid'";
      $query1 = mysqli_query($conn, $id);
      $data = mysqli_fetch_assoc($query1);
      $val = $data['student_id'];

     if($query)
      {
          $sql2 = " INSERT INTO student_parent_info ( student_id,parent_name, phone_number, email, address, city, state, zipcode)
          VALUES ( '$val', '$Parent', '$phone', '$email', '$address', '$city', '$state', '$zipcode' )";
          $query2 = mysqli_query($conn, $sql2);
          if($query2)
          {
            echo 'Entered student details are registered successfully!';
          }
      }
      else
      {
        echo 'error!';
      }
  }
?>
