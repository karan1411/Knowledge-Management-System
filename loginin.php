<?php
$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }
      $u_username =  $_REQUEST['Uname'];
      $u_pas = $_REQUEST['Pass'];
	  $loginAs = $_REQUEST['loginAs'];
      session_start();
      $coti=$_SESSION['first_time_user'];

	  if($loginAs == 'user'){
		  $sql = "SELECT * FROM login WHERE username='$u_username'";
	  }
	  else{
		  $sql = "SELECT * FROM admin WHERE username='$u_username'";
	  }
      
      $result = $conn->query($sql);
	  
    while($row = mysqli_fetch_array($result)){
        $username=$row['username'];
        $paswordd=$row['password'];
		$namee=$row['Enroll'];
        $name_of=$row['name'];
        if($u_username==$username and $u_pas==$paswordd){
            $sql2 = "UPDATE login SET login_stat='1' WHERE Enroll='$namee'";
			if(mysqli_query($conn, $sql2)){
            
        }
		
			$_SESSION['enrol'] = $namee;
            $_SESSION['name_of_user']= $name_of;
            
            echo '------p-----'.$name_of.'------o---------';
			if($loginAs == 'user'){
				if($coti == ''){
                    header("Location: home-user.php");
                }
                else{
                    
                    echo '--ooopp-- -'.$coti.'- ---pppp---';
                 header("Location: post.php?idd=".$coti);
                }
			}
			else{
		  header("Location: admin/");
	  }
			
            break;
        }
  
}
        if(mysqli_query($conn, $sql)){
              echo "<h3>data found in a database successfully." 
                  . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
              

          echo nl2br("\n$u_username\n $u_pas\n "
              );
      } else{
          echo "ERROR: Hush! Sorry $sql. " 
              . mysqli_error($conn);
      }
      mysqli_close($conn);
      if($u_username==$username and $u_pas==$paswordd){
        $sql2 = "UPDATE login SET login_stat='1' WHERE Enroll='$namee'";
			if(mysqli_query($conn, $sql2)){
            
        }





		  if($loginAs == 'user'){
            
            
			}
			else{
		  header("Location: admin/");
	  }
      }
     else{
        header("Location: loginer.php");
}
	?>