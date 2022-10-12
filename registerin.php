<?php
$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }
      $u_username =  $_REQUEST['Uname'];
	  $u_name=$_REQUEST['Unamee'];
      $u_passs = $_REQUEST['Pass'];
	  $u_email=$_REQUEST['Email'];
	  $u_enroll=$_REQUEST['Enrollment'];
      $sql = "INSERT INTO login (name,username,password,email,Enroll) VALUES ('$u_name','$u_username','$u_passs','$u_email','$u_enroll')";
        if(mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

	?>