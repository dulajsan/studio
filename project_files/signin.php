<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
   
 <head>
     
   <title>login</title>


   <link href="css/signin.css" type="text/css" rel="stylesheet" > 
   
 <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

</head>
    
<body>
   
 <div class="container" >
        
        
<div class="main_box">
       
 <div class="logo" ><img src="img/space.jpg" class="logo_img" width="150px;" ></div>
           
 <div class="inputs" >
             
     <form class="pure-form" method="post" action="query/login.php">
                    
<label>Username</label>
<input type="emailt" class="login_input" placeholder="email" id="myusername" name="email" required><br>
                   
 <label>Password</label>

<input type="password" class="login_input" placeholder="Password" id="password" name="pword" >
                    
                   
 <div class="bottom" >
                        
<button class="button_login pure-button " type="submit" name="submit" value="login">Login</button>
                        
                       
 <a href="signup.php" class="links_signup">Signup</a>
                        
                        
</div>
                    
                   
 </form>
           
 </div>
        </div>
        
        </div>
    
</body>


</html>