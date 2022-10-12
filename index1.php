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
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>
            <?php session_start(); error_reporting(0);  if($_SESSION['name_of_user']==''){
                echo '<li><a href="login1.php">Login</a></li>';
            }
            else{
                echo '<li><a href="home-user.php">'.$_SESSION['name_of_user'].'</a></li>';
            }  ?>
            <li><a href="register.php">Register</a></li>
        </ul>
        </div>
        </div>
    </div>
	
    
        <div id="div1"><h1 style='text-align:center; color: darkblue;'><br> Recent Posts</h1><br><br>
		
		<?php
		
		$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }
		
		$sql = "SELECT * FROM data ORDER BY id DESC";
      $result = $conn->query($sql);
	  echo '<div class="rec-post"><ul>';
	  
    while($row = mysqli_fetch_array($result)){
		$idd=$row['id'];
		echo "<li><a href='post.php?idd=".$idd."'>".$row['title']."</a></li>";
		
		
	}
		echo '</ul></div>';
		
		?>

		</div>
		</div>

        <div id="div2"><h1 style='text-align:center; color: darkblue;'> <br>Upload Post</h1><br><br>
		<div class='textt'>
        <form method="get" action="index1.php">
		<label><strong>Category:-</strong></label>
			<select name="optt">
				<option value='' selected>Select Option</option>
				<option value='Resume'>Resume</option>
				<option value='Notes'>Notes</option>
				<option value='Papers'>Previous Paper</option>			
			</select><br><br>
			<label><strong>Sort by  :-  </strong></label>
			<select name="ofthe">
				<option value='' selected>Select Option</option>
				<option value='date'>Date</option>
				<option value='downloads'>Number of Downloads</option>		
			</select><br><br>
			</div>
			<button type='submit' class='textt-btn'><strong>Submit</strong></button>
            </form>
		</div>

        <div id="div3"><h1 style='text-align:center; color: darkblue;'> <br> Uploaded Posts </h1><br><br>
        <?php
		$optttt=$_GET["optt"];
		$oftheeee=$_GET["ofthe"];
		$conn = mysqli_connect("localhost", "root", "", "kms");
      if($conn === false){
          die("ERROR: Could not connect. " 
              . mysqli_connect_error());
      }
		if($oftheeee=='date'){
			$sql = "SELECT * FROM data WHERE category='$optttt' ORDER BY id DESC";
		}
		else{
			$sql = "SELECT * FROM data WHERE category='$optttt' ORDER BY downloads DESC";
		}
		
      $result = $conn->query($sql);
      echo '<table>';
	  
    while($row = mysqli_fetch_array($result)){
		$idd=$row['id'];
		
        echo '
                <tr>
                <td> '."<h1 style='text-align:center;'>".$row['title']."</h1><br>
                <p><a href='post.php?idd=".$idd."'>View More</a>&nbsp&nbsp&nbsp&nbsp&nbsp Total Number of Views:-".$row['downloads']."  &nbsp&nbsp&nbsp Uploaded on:- ".$row['date'].'</p> </td>
                </tr>      
       ';
		
		
	}
    echo ' </table>';
		
		?>

        </div>

        <hr style="border-top: 2px solid red;">
    </body>

    