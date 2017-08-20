<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/contactus.css"/>
        <script src="js/jquery-2.0.3.min.js"></script>
         <script>
        
          $(document).ready(function (){
     $('.menu_scroll').click(function (){
             $('.menu_outer').slideToggle("slow");
   
    });             
    });
        
    </script>
    </head>
    <body>
  <div class="menu_outer">
  <div class="menu">
     
    <ul class="ul_cls ">
        <li class="li_cls "><img src="img/small_logo.PNG" style="float: left" class="small_logo"/></li>
        <li class="li_cls "><a href="index.html">Home</a></li>
        <li class="li_cls"><a href="aboutus.php">About us</a></li>
        <li class="li_cls"><a href="recent.php">Recent hired</a></li>
    <li class="pk li_cls" ><a href="#">Booking</a>
        <ul class="dp_down">
            <li><a href="package.php?studio_id=1">Main Studio</a></li>
      <li><a href="package.php?studio_id=2">Mini Studio</a></li>
  </ul> 
    </li>
    <li class="li_cls  cls_home"><a href="contactus.php">Contact us</a></li>
    
    <li class="li_cls"><a href="#">Register</a>
        <ul class="dp_down">
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li></li>
        </ul>
    
    </li>
      
</ul>
</div>
</div>
        <div class="path_blank">
            <img src="img/small_logo.PNG" style="float: left; width:120px" />
    <img src="img/menu_scroll.jpg" class="menu_scroll"/>
        </div>
<div class="path">
    <p><span style="color: #999999">You are here: </span> &nbsp;&nbsp;   Home <img src="img/path_arrow.png" class="path_img"/><b> Contact Us</b>  </p>
    
</div>
        <div class="content2">
            <div class="con_left">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:440px;">
    <div id="gmap_canvas" style="height:400px;width:440px;"></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">bei trivoo.net</a>
</div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(6.814761498789106,79.91378231996009),mapTypeId: google.maps.MapTypeId.ROADMAP};
    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.814761498789106, 79.91378231996009)});infowindow = new google.maps.InfoWindow({content:"<b>Space Turn</b><br/>No/128/10,thumbowila road<br/> bokundara" });
    google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>         
            </div>
            
            <div class="con_right">
                <h1>Contact Form</h1>
                <div class="bx">
                    <input type="text" class="conta_bx" placeholder="Your Name"> 
                </div>
                <div class="bx">
                    <input type="text" class="conta_bx" placeholder="Your Email"> 
                </div>
                <div class="bx">
                    <input type="text" class="conta_bx" placeholder="Subject"> 
                </div>
                <div class="bx_big">
                    <textarea rows="8" class="conta_bx_big" placeholder="Your Message" ></textarea>
                </div>
                <div class="bx">
                    <input type="submit" class="conta_submit" value="Submit"> 
                </div>
                
            </div>
        
        </div>
    <div class="footer">
        <div class="footer_content">
            <div class="fot_top">
                <h2>Subscribe to our news letters</h2><input type="text" placeholder="Enter Your Email Address"/><button>Subscribe</button>
            </div>
            <div class="fot_bottom">
                <div class="fot_box">
                    <h3>Company</h3>
                    <p>defre</p>
                    <p>defre</p>
                    <p>defre</p>
                    
                    
                </div>
                <div class="fot_box">
                    <h3>Support</h3>
                    <p>defre</p>
                    <p>defre</p>
                    <p>defre</p>
                     
                </div>
                <div class="fot_box">
                    <h3>Connect</h3> 
                     <p>defre</p>
                     <p>defre</p>
                     <p>defre</p>
                </div>
                
            </div>
            
            
           
        </div>
        
        
    </div>

<div class="copyright">
    &copy;
            </div>
    </body>
</html>
