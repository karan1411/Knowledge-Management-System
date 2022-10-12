<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KMS Admin</title>
    <link rel="stylesheet" href="csss/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body class="calssbody">
<h1>Welcome To KMS</h1>
<?php
session_start();

date_default_timezone_set ( 'Asia/Kolkata' );
echo "<h6 style=".'"font-size:120%">'."Today'".'s Date :- '.date("d-m-Y").'</h6>';


//$userid=$_SESSION['userid'] ;
$countt=0;
$snum=1;
$conn = mysqli_connect("localhost", "root", "", "kms");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
$sql = "SELECT * FROM data WHERE status='0'";
$result = $conn->query($sql);
$result1 = $conn->query($sql);
echo '<div style="margin-left:3px;">
<div style="background-color: cornsilk;">
<hr style="border: 2px solid;"><br><h2>Pending Posts</h2><br>
<p>
<table style="margin-left:5px;" class="table">

<thead class="thead-dark">
<tr>
<th scope="col">S.no</th>
<th scope="col">Name</th>
<th scope="col">Uploader</th>
<th scope="col">Tag</th>
<th scope="col">Status</th>
<th scope="col">View</th>
</tr>
</thead>

';
while($row = mysqli_fetch_array($result)){
$owner_uploader = $row['uploader'];
$owner_name = $row['title'];
$type = $row['category'];
$owner_status = $row['status'];
$idd=$row['id'];
echo "<tr>
<td>".$snum."</td>
<td>".$owner_name."</td>
<td>".$owner_uploader."</td>
<td>".$type.'</td>
<td>'.$owner_status.'</td>
<td>'."<a href='post.php?idd=".$idd."'>".$row['title'].'</a></td>';
$snum=$snum+1;
}
echo '</table></div></p>';



?>