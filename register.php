<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>

 <link rel="stylesheet" href="styles.css">  
</head>
<body>   
    <h1>Register Page</h1><br>    
    <div class="register">    
    <form id="register" method="POST" action="registerin.php">
        <label><b>Name     
        </b><br>  
        </label>    
        <input type="text" name="Unamee" id="Unamee" placeholder="name">    
        <br><br><label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>
        <label><b>Email Address    
        </b>    
        </label>    
        <input type="Email Address" name="Email" id="Email" placeholder="Email Address">    
        <br><br>
        <label><b>Enrollment No.    
        </b>    
        </label>    
        <input type="Enrollment No." name="Enrollment" id="Enrollment" placeholder="Enrollment No.">    
        <br><br>      
        <input type="submit" name="reg" id="btn" value="Register"/> 
        <div class="link">have you registered? <a href="login.php" style=" color:white; width: 33%;
  border-radius: 10%; background-color: red;
  border: none; cursor: pointer;padding: 5%; text-align:center;"> Login </a></div>       
        <br><br>    
    </form>     
</div>    
</body>    
</html>     

