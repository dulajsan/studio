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

<link rel="stylesheet"type="text/css"href="css/hired.css"/>    </head>
   
 <body>
       
 <?php
       include './db.php';
     
 $result= mysqli_query($db_handle, "SELECT DISTINCT(booking_for_date) FROM media m INNER JOIN booking b ON m.booking_booking_id=b.booking_id");
     
 $bk="";
      
 $i=0;
       
while($row= mysqli_fetch_array($result))
       {   
           echo $row['booking_for_date'];
          
 echo '<br/>';
           
         
  $result2=  mysqli_query($db_handle, "SELECT media_name FROM media m WHERE EXISTS(SELECT * FROM booking WHERE m.booking_booking_id=booking.booking_id AND booking.booking_for_date='".$row['booking_for_date']."') LIMIT 3");
           
           while($row2=  mysqli_fetch_array($result2))
       
    {
              // echo $row2['media_name'];
     
          ?>
        
       
<img src="img/<?php echo $row2['media_name']; ?>"id="image"/></div>
        <?php
           }
           
          
      echo '<br/>'; 
           ?>
        
<a href="moreImages.php?date=<?php echo $row['booking_for_date'] ; ?>"><button>Read more</button></a>
        <br/>
        <?php
           
         
       }
        ?>
    </body>
</html>
