<?php include 'process.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styless.css">  
</head>
<body>   



    <h1 class="text-center py-2"> Contact Us Page</h1>
    <hr>

    <div class="contact"> 
     <h4 class="sent"></h4>      
    <form id="contact" method="POST">    
        <label><b>Your Name     
        </b>    
        </label>    
        <input type="text" id="uname" placeholder="User Name">    
        <br><br>    
        <label><b>Your Email    
        </b>    
        </label>    
        <input type="text" id="email" placeholder="Email">    
        <br><br> 
        <label><b>Subject    
        </b> <br>  
        </label>    
        <input type="text" id="subject" placeholder="Subject">
        <br><br> 
        <label><b>Write Message   
        </b> <br> 
        </label>    
        <!-- <input type="text" name="Message" id="Mesaage" placeholder="Write Message" maxlength="100">  -->
        <textarea id="message" placeholder="Message" rows="25" cols="70"></textarea> 
        <br><br>
        <!-- <input type="submit"  name="send" id="btn" value="Send"/>  -->
        <button class="btn btn-success" type="button" onclick="sendEmail()" value="Send Email">Send</button>      
        <!-- <button><a href="mailto:karankumawat1411@gmail.com">Send</a></button> -->
        <br><br>     
    </form>     
</div>  
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->

<!-- <script type="text/javascript">
    function sendEmail(){
       var uname = $("#uname");
       var email = $("#email");
       var subject = $("#subject");
       var message = $("#message");
       
       if(isNotEmpty(uname) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)){
           $.ajax({
               url: 'process.php',
               method: 'POST',
               dataType: 'json',
               data:{
                   uname: uname.val(),
                   email: email.val(),
                   subject: subject.val(),
                   message: message.val()
               }, success: function(response){
                   $('#contact')[0].reset();
                   $('.sent').text("Message Sent Successfully.");
               }
           });
       }
    }

    function isNotEmpty(caller){
        if(caller.val()==""){
            caller.css('border','1px solid red');
            return false;
        }
        else{
            caller.css('border','');
            return true;
        }
    }
</script> -->

<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </Script>
</body>    
</html>  