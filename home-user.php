<?php 
error_reporting(0);
session_start();
$userData=$_SESSION['enrol'];
$idmain =  $_GET["idd"];
$_SESSION['first_time_user'] = $idmain;
error_reporting(0);
$nameofUser=$_SESSION['name_of_user'];
//echo '---'.$userData.'---'.$_SESSION['name_of_user'].'--';
$nameofuser=$_SESSION['name_of_user'];
if($userData==''){
   header("Location:login.php");
}
else{
    $conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }

      $sql="SELECT * FROM login WHERE Enroll='$userData'";
      $result = $conn->query($sql);
	  
      while($row = mysqli_fetch_array($result)){
		$stat=$row['login_stat'];}
        if($stat==0){
           header("Location:login.php");
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KMS</title>
    <link rel="stylesheet" href="style.css">
	
  <style>
    table, th {
  border:1px solid black;
  width: 100%;
}

td{
    border: 1px solid black;
    padding: 5%;
}
</style>
</head>

<body>

    <div class="navbar">
    <div class="container">
        <div class="logo_div">
            <img src="kar.png" alt="" class="logo">
            
        </div>
    <div class="nav_links"></div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="uploader.php">Create Post</a></li>
            <li><a href="chat.php?disp=none">Chat</a></li>
            <li><a href="home-user.php"><?php echo $_SESSION['name_of_user'];     ?></a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
        </div>
        </div>
    </div>


    <h1>All Posts</h1><br>
<div class="div33">
<div>
	<h1>Hello Chat</h1>
</div>

</div>
	
<?php

//session_start();
$userData=$_SESSION['enrol'];
echo $userData;

$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }

      $sql="SELECT * FROM data WHERE uploader='$userData' ORDER BY id ASC";
      $result = $conn->query($sql);
	  echo '<div id="div3"><table>';
      while($row = mysqli_fetch_array($result)){
		$idd=$row['id'];
		echo '
                <tr>
                <td> '."<h1 style='text-align:center;'>".$row['title']."</h1><br>
                <p><a href='post.php?idd=".$idd."'>View More</a>&nbsp&nbsp&nbsp&nbsp&nbsp Total Number of Views:-".$row['downloads']."  &nbsp&nbsp&nbsp Uploaded on:- ".$row['date'].'</p> </td>
                </tr>';
		
		
	}
	echo '</table></div>';

?>

<script type="text/javascript">
			document.getElementById("chatOpen").addEventListener("click",function(){
				console.log('hii');
				document.querySelector(".div33").style.display="flex";
			})
			
		</script>
