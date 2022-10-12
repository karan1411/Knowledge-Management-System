<?php

session_start();

if(isset($_POST["submit_chat"])){
$conn = mysqli_connect("localhost", "root", "", "kms");
//$userid=$_SESSION['userid'];
$recever=$_GET['rec'];
        $user_en=$_SESSION['enrol'];
$chat_msg=$_POST["chat_msg"];
$recever=$_GET['rec'];
$query = "INSERT INTO messages (senderid,receiverid,msg) VALUES ('$user_en', '$recever', '$chat_msg')";
mysqli_query($conn, $query);
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link = "https";
    else $link = "http";
     
    // Here append the common URL characters.
    $link .= "://";
     
    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];
     
    // Append the requested resource location to the URL
    $link .= $_SERVER['REQUEST_URI'];
     
    // Print the link


}



?>


<?php

session_start();
$userData=$_SESSION['enrol'];
$idmain =  $_GET["idd"];
$_SESSION['first_time_user'] = $idmain;

//echo $idmain.'---'.$userData.'---'.$_SESSION['name_of_user'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS</title>
    <link rel="stylesheet" href="style.css">
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
            <li><a href="home-user.php"><?php echo $nameofuser; ?></a></li>
            <li><a href="logout.php">Log-Out</a></li>
        </ul>
        </div>
        </div>
    </div>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "kms");
 if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
$idmain =  $_GET["idd"];
        $width=$_GET["width"];
$query = "SELECT * FROM data WHERE id = '$idmain' ";
$result=$conn->query($query);
while($row = mysqli_fetch_array($result)){
            $downloads=$row['downloads'];
echo '<div style=text-align:center;<br><br><h2>Title : '.$row['title'].'</h2></div>';
$filename = $row['filename'];
$uploader=$row['uploader'];
echo '<h2>Here is your file : </h2><br><br>';
            if($width==""){
                echo '<iframe src="'.$filename.'" width="100%" height="450px">';
            }
            else{
                echo '<iframe src="'.$filename.'" width="'.$width.'%" height="450px">';
            }

    echo '</iframe>';
}
        echo '<div id=chat-box-container style="display:';
        $stylee=$_GET['style'];
        if($stylee=='block'){
            echo $stylee;
        }
        else{
            echo 'none';
        }
       
       
        echo '; background-color:#00FFFF;border-style:solid;height:460px;">

        <div style="text-align:center;">
        <h2>CHAT WITH '.$uploader.'😊</h2><hr style="border: 2px solid;">
        </div>
<div style="background-color:#075e54;padding:4px 13px 0px 13px; margin-left:0px;margin-right:0px; height:400px; overflow:auto;">';

        session_start();
$conn = mysqli_connect("localhost", "root", "", "kms");
$userid=$_SESSION['userid'];
$recever=$_GET['rec'];
        $user_en=$_SESSION['enrol'];
        if($user_en == $recever){
            echo "This file is uploaded by you";
        }
        else{

$sql333="SELECT * from messages WHERE senderId='$user_en' AND receiverId='$recever' OR senderId='$recever' AND receiverId='$user_en'";
$result = $conn->query($sql333);
while($row = mysqli_fetch_array($result)){
if($row['senderId']==$user_en){
echo '<div style="background-color:#FFF8DC;color:black;margin-left:40%;text-align:right;word-break: break-word;white-spaces: wrap;"><p>'.$row['msg'].'</p></div>';
}
else{
echo '<div style="background-color:#FF7F50;color:black; margin-right:40%;margin-top:3px;word-break: break-word;white-spaces: wrap;">'.$row['msg'].'</div>';
}
}

            }


       




        echo'
        <div style="background-color:#008B8B;position:absolute;margin-left:-13px;margin-right:15px;top:94.3%;width:99.90%;">
       
<form action="" method="post">
<input type="text" name="chat_msg" id="chat_msg" style="margin-left: 5px;margin-top:2px;margin-bottom:4px;width:75%;">
        <button type="submit" name="submit_chat" id="submit_chat" style="margin-left:10px; margin-bottom:4px;background:#00FFFF">Enter</button>
        </form>
</div>
        </div>
        </div>';




        $downloads=$downloads+1;
        $sql09="UPDATE data SET downloads='$downloads' WHERE id='$idmain'";
        if(mysqli_query($conn, $sql09)){
        }

echo '
<br><br>

        <button onclick="myfunction('.$uploader.','.$idmain.')" style="color:black; width:7%; border-radius:5%; background-color:#00FFFF;
        border: none; cursor: pointer;padding: 1%; text-align:center;">Chat</button>';
        //<a href="chat.php?my_id='.$userData.'&to_id='.$uploader.'">Click To Chat</a>
?>

<script>

        function myfunction(rec,posId){
            var x = document.getElementById("chat-box-container");
            if(x.style.display == "block"){
                location.replace("http://localhost/mainProject/post.php?idd="+posId+"&width=100&rec="+rec+"&style=none");
            }
            else{
                location.replace("http://localhost/mainProject/post.php?idd="+posId+"&width=70&rec="+rec+"&style=block");
            }
        }


</script>
    </body>
    </html>