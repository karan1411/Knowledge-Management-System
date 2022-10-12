<?php


if(isset($_POST["submit"])){
	
session_start();
$uploaderrs=$_SESSION['enrol'];

$conn = mysqli_connect("localhost", "root", "", "kms");
$cate=$_POST["optt"];
$title=$_POST["title"];
$dateeo=date('Y-m-d h:i:s');
$pagename1=str_replace(' ', '', $title);
$pagename=str_replace(' ', '', $title).$uploaderrs.".php";

$filename =$_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
$filename2='data-karan/'.$uploaderrs."-".$filename;
$folder = "data-karan/".$filename;
$inner='echo "<a href="/data-karan/'.$filename.'">Click To Download<a>';
#$myfile1 = fopen("testfile.txt", "w");
#$myfile = fopen("posts/$pagename", "w") or die("Unable to open file!");;
#fwrite($myfile, $innerr);
#fclose($myfile);

echo $uploaderrs.','.$dateeo.','.$filename2.','.$pagename.',0,'.$cate.','.$title;
$sql = "INSERT INTO data(uploader,date,filename,status,downloads,category,title) values('$uploaderrs','$dateeo','$filename2','0','0','$cate','$title')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if (move_uploaded_file($tempname, $folder)) {
			echo "Image uploaded successfully";
		}else{
			echo "Failed to upload image";
	}
rename('data-karan/'.$filename, 'data-karan/'.$uploaderrs."-".$filename);

header('location:home-user.php');
echo "data inserted";

}












?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
<?php 
session_start();
echo $_SESSION['enrol'];


?>
    <div class="drag-area">
        <div class="fas fa-cloud-upload-alt"></div>
		<form action="" method="post" enctype="multipart/form-data">
        <header>Upload File</header><br>
		<label for="nptel-title" style="font-size: 20px;">Enter the title :-</label> <br>
    <textarea name="title" id="title" cols="30" rows="2"></textarea><br><br><br>
    <label style="font-size: 20px;">Select the Category :-</label> <br>
		<input type="file" name="uploadfile" id="uploadfile" value="uploadfile"/> <br><br>
        <input type="file" hidden>
		
		<br><br>
		<select name="optt" id="optt">
				<option value='' selected>Select Option</option>
				<option value='Resume'>Resume</option>
				<option value='Notes'>Notes</option>
				<option value='Papers'>Privious Paper</option>			
			</select><br><br><br><button type="submit" name="submit" style=" margin-bottom: 5px; font-size: 20px;">submit</button>
		
		
		</form>
      </div>
    </body>