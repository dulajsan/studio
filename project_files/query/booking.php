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
    </head>
    <body>
        <?php
        //echo $_POST['u_id'];
        include '../db.php';
        mysqli_query($db_handle, "INSERT INTO booking (total_cost,standard_price,extra_cost,users_user_id,booking_for_date,studio_studio_id,confirm,comment) VALUES('".$_POST['total']."','".$_POST['std_price']."','".$_POST['ext_price']."','".$_POST['u_id']."','".$_POST['date']."','".$_POST['st_id']."','0','".$_POST['cmnt']."')");
        ?>
        
        
        <?php
        
        $result= mysqli_query($db_handle, "SELECT MAX(booking_id) AS bk_id FROM booking");
        $booking_id="";
        while ($row= mysqli_fetch_array($result))
        {
            $booking_id= $row['bk_id'];
            
        }
        
        
        session_start();
        $sesid=  session_id();
        $result2=  mysqli_query($db_handle, "SELECT products_item_id from cart WHERE live='1' && studio_studio_id='".$_POST['st_id']."' && session='$sesid' ");
        while($row2=  mysqli_fetch_array($result2))
        {
            mysqli_query($db_handle, "INSERT INTO extra_ordered_items(item_id,item_cost,quantity,booking_booking_id) VALUES('".$row2['products_item_id']."','0','1','$booking_id')");
            
            
            
            
        }
        
        
        
        
        
         
        mysqli_query($db_handle, "UPDATE  cart SET live='0' WHERE session='$sesid' && studio_studio_id='".$_POST['st_id']."' ");
        
        ?>
        
        Thank You 
        <p>
            
            An email has been sent to your email address.Also we have included  our bank account details. please deposit money to confirm your booking.
        </p>
        
        <a href="../index.html">Back to system</a>
    </body>
</html>
