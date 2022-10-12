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
$filename2='../data-karan/'.$uploaderrs."-".$filename;
$folder = "../data-karan/".$filename;
$inner='echo "<a href="/data-karan/'.$filename.'">Click To Download<a>';
$myfile1 = fopen("testfile.txt", "w");
$myfile = fopen("../posts/$pagename", "w") or die("Unable to open file!");;
fwrite($myfile, $innerr);
fclose($myfile);


$sql = "INSERT INTO data(uploader,date,filename,page_name,downloads,category,title) values('$uploaderrs','$dateeo','$filename1','$pagename','0','$cate','$title')";
$conn->query($sql);

if (move_uploaded_file($tempname, $folder)) {
			echo "Image uploaded successfully";
		}else{
			echo "Failed to upload image";
	}


header('location:upload.php');
echo "data inserted";
rename('../data-karan/'.$filename, '../data-karan/'.$uploaderrs."-".$filename);
}












?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="nptel-title" style="font-size: 20px;">Enter the title :-</label> <br>
    <textarea name="title" id="title" cols="30" rows="2"></textarea><br><br><br>
    <label style="font-size: 20px;">Select the Category :-</label> <br>
	<select name="optt" id="optt">
				<option value='' selected>Select Option</option>
				<option value='Resume'>Resume</option>
				<option value='Notes'>Notes</option>
				<option value='Papers'>Privious Paper</option>			
			</select><br>
    <input type="file" name="uploadfile" id="uploadfile" value="uploadfile"/> <br><br><br>
    <button type="submit" name="submit" style="margin-left: 40%; margin-bottom: 5px; font-size: 20px;">submit</button>
</form>