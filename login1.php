<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>

 <link rel="stylesheet" href="styles.css">  
</head>
<body>   
    <h1>Login Page</h1><br>    
    <div class="login">    
    <form id="login" method="POST" action="loginin.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>   
		<label>Login As..</label>
		<select name="loginAs" id="loginAs"><option value="user">User</option><option value="admin">Admin</option></select><br><br>
        <input type="submit" name="log" id="btn" value="Log In"/>       
        <br><br>    
        <div class="link">Not yet registered? <a href="register.php" style=" color:white; width: 33%;
        border-radius: 10%; background-color: red;
        border: none; cursor: pointer;padding: 5%; text-align:center;"> Register now</a></div> 
    </form>     
</div>    
</body>    
</html>     

