<?php
error_reporting(0);
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



   
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KMS</title>
        <link rel="stylesheet" href="style.css">
    </head>
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
            <li><a href="chat.php?disp=none" >Chat</a></li>
            <li><a href="home-user.php"><?php session_start(); echo $_SESSION['name_of_user'];     ?></a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
        </div>
        </div>
    </div>


    <h1>All Posts</h1><br>


    <?php
    $user_en=$_SESSION['enrol'];
  $conn = mysqli_connect("localhost", "root", "", "kms");
  $query = "SELECT DISTINCT senderId FROM messages WHERE receiverId='$user_en'";
  $result=$conn->query($query);
  echo '<div id="div3"><table>
  <tr>
      <td> <h1 style="text-align:center;">Name</h1><br></td>
  </tr>';
while($row = mysqli_fetch_array($result)){
  echo '<tr>
  <td><a href="http://localhost/mainProject/chat.php?rec='.$row['senderId'].'&disp=block">'.$row['senderId'].'</a></td>
</tr>';
}

//SELECT DISTINCT Country FROM Customers;

    ?>

    </table>
    </div>

  <?php
  $rec=$_GET['rec'];
 echo '<div id=chat-box-container style="display:';
 $stylee=$_GET['disp'];
 
 if($stylee=='block'){
     echo $stylee;
 }
 else{
     echo 'none';
 }


 echo '; background-color:#00FFFF;border-style:solid;height:460px;">

 <div style="text-align:center;">
 <h2>CHAT WITH '.$user_en.'😊</h2><hr style="border: 2px solid;">
 </div> ';
 echo '<div style="background-color:#075e54;padding:4px 13px 0px 13px; margin-left:0px;margin-right:0px; height:400px; overflow:auto;">';
error_reporting(0);
 session_start();
 $conn = mysqli_connect("localhost", "root", "", "kms");
 $userid=$_SESSION['userid'];
 $recever=$_GET['rec'];
         $user_en=$_SESSION['enrol'];
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

echo'
        <div style="background-color:#008B8B;position:absolute;margin-left:-13px;margin-right:15px;top:94.3%;width:99.90%;">
       
<form action="" method="post">
<input type="text" name="chat_msg" id="chat_msg" style="margin-left: 5px;margin-top:2px;margin-bottom:4px;width:75%;">
        <button type="submit" name="submit_chat" id="submit_chat" style="margin-left:10px; margin-bottom:4px;background:#00FFFF">Enter</button>
        </form>
</div>
        </div>
        </div>';



?>
    
    </body>

