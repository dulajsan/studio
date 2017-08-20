<html>
<head>
    <link href="css/siignup.css" type="text/css" rel="stylesheet" > 
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
</head>
    <body>
    <div class="container" >
        
        <div class="main_box">
            <div class="top">
            
                Sign Up here
            </div>
        <div class="logo" ><img src="img/space.jpg" class="logo_img" width="150px;" ></div>
            <div class="inputs" >
                <form class="pure-form" action="query/register.php" method="post">
                    <label>Title</label>
                    <select name="title" class="login_input">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                    </select>
                    <label>First name</label>
                    <input type="text" class="login_input" placeholder="First name" name="fname" required><br>
                    <label>Last name</label>
                    <input type="text" class="login_input" placeholder="Last name" name="lname" required><br>                   
                    <label>Email</label>
                    <input type="email" class="login_input" placeholder="Email" name="email" required><br>
                    <label>Password</label>
                    <input type="password" class="login_input" placeholder="password" name="pword" required><br>
                    <label>Comfirm Password</label>
                    <input type="password" class="login_input" placeholder="Comfirm Password" name="con_pword" required ><br>
                    <label>Tel</label>
                    <input type="text" class="login_input" placeholder="Tel" name="tel" required><br>
                    
                    
                    <div class="bottom" >
                        <button class="button_login pure-button ">Signup</button>
                        
                        
                        
                        </div>
                    
                    </form>
            </div>
        </div>
        
        </div>
   
    </body>
</html>