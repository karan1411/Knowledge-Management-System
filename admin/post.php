<?php
if(isset($_POST["submit"])){
	session_start();
		$idmain=$_SESSION['file_id'];
$conn = mysqli_connect("localhost", "root", "", "kms");
	  if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
		$sql = "UPDATE data SET status = '1' WHERE id = '$idmain'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

//header("Location:../index.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="navbar">
    <div class="container">
        <div class="logo_div">
            <img src="KMS.png" alt="" class="logo">
        </div>
    <div class="nav_links"></div>
        <ul class="menu">
            <li><a href="http://localhost/project1097/">Home</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
        </div>
        </div>
    </div>
<?php
$conn = mysqli_connect("localhost", "root", "", "kms");
	  if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
		$idmain =  $_GET["idd"];
		session_start();
		$_SESSION['file_id'] = $idmain;
		$query = "SELECT * FROM data WHERE id = '$idmain' ";
		$result=$conn->query($query);
		while($row = mysqli_fetch_array($result)){
			echo '<div style="margin-left:33%;"><h2>Title:'.$row['title'].'</h2></div>';
			$filename = $row['filename'];
			echo '<h2>Here is your file :- </h2><br><br>';
			echo '<iframe src="../'.$filename.'" width="100%" height="500px">
    </iframe>';
		}
		echo '<br><br>';
?>

<form action="" method="post">

<button type="submit" name="submit" style=" margin-bottom: 5px; font-size: 20px;">Approve</button>

</form>