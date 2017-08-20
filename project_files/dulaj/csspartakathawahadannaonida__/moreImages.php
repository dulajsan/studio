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
        
        if(isset($_GET['date']))
        {
            echo $_GET['date'];
            echo '<br/>';
            include './db.php';
            
            $result=mysqli_query($db_handle,"SELECT media_name FROM media m WHERE EXISTS(SELECT * FROM booking WHERE m.booking_booking_id=booking.booking_id AND booking.booking_for_date='".$_GET['date']."')");
            while($row=  mysqli_fetch_array($result))
            {
                ?>
        
<img src="img/<?php echo $row['media_name']; ?>"id="image"/>
        <?php
                
            }
        }
        ?>
    </body>
</html>
