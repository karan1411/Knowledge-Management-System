<?php

$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }

      session_start();

      $namee=$_SESSION['enrol'];

      $sql2 = "UPDATE login SET login_stat='0' WHERE Enroll='$namee'";
      if(mysqli_query($conn, $sql2)){
        }
        session_destroy();

    header("Location:login.php");

?>