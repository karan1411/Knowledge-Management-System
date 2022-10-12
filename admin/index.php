<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KMS</title>
    <link rel="stylesheet" href="csss/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body class="calssbody">
<h1>Welcome To KMS Admin Portal</h1>
<?php
session_start();

date_default_timezone_set ( 'Asia/Kolkata' );
echo "<h6 style=".'"font-size:120%">'."Today'".'s Date :- '.date("d-m-Y").'</h6>';
echo '<hr style="border: 2px solid;">';
//echo '<h2>Welcome '.$_SESSION['NNAME'].'</h2><br><hr style="border: 2px solid;"><br>';

echo '<a href="all-post.php">View All Post</a>';

?>





</body>
</html>