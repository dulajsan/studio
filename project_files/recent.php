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

<link rel="stylesheet" type="text/css"href="css/hired.css"/> 
<link rel="stylesheet" type="text/css" href="css/layout.css"/>
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
        <li class="li_cls cls_home"><a href="recent.php">Recent hired</a></li>
    <li class="pk li_cls" ><a href="#">Booking</a>
        <ul class="dp_down">
            <li><a href="package.php?studio_id=1">Main Studio</a></li>
      <li><a href="package.php?studio_id=2">Mini Studio</a></li>
  </ul> 
    </li>
    <li class="li_cls"><a href="contactus.php">Contact us</a></li>
    
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
         <img src="img/menu_scroll.jpg" class="menu_scroll" height="30px"/>
     </div>
<div class="path">
    <p><span style="color: #999999">You are here: </span> &nbsp;&nbsp;   Home <img src="img/path_arrow.png" class="path_img"/><b>Recent Hired</b> </p>
    
</div>

<div class="main">
       
 <?php
       include './db.php';
     
 $result= mysqli_query($db_handle, "SELECT DISTINCT(booking_for_date) FROM media m INNER JOIN booking b ON m.booking_booking_id=b.booking_id");
     
 $bk="";
      
 $i=0;
       
while($row= mysqli_fetch_array($result))
       {  
    echo '<br/>';
           echo $row['booking_for_date'];
          
 echo '<br/>';
 echo '<br/>';
           
         
  $result2=  mysqli_query($db_handle, "SELECT media_name FROM media m WHERE EXISTS(SELECT * FROM booking WHERE m.booking_booking_id=booking.booking_id AND booking.booking_for_date='".$row['booking_for_date']."') LIMIT 3");
           
           while($row2=  mysqli_fetch_array($result2))
       
    {
              // echo $row2['media_name'];
     
          ?>
        
       
    <img src="img/booking/<?php echo $row['booking_for_date']; ?>/<?php echo $row2['media_name']; ?>" id="image"/>
        <?php
           }
           
          
      echo '<br/>'; 
           ?>
        
<a href="moreImages.php?date=<?php echo $row['booking_for_date'] ; ?>"><button>Read more</button></a>
        <br/>
        <br/>
        <?php
           
         
       }
        ?>
        
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
