<?php
session_start();
if(!isset($_SESSION['mail']))
{
    header('Location:../signin.php');
}

elseif(!isset($_GET['std_id'])) {
   
    header('Location:../package.php?studio_id=1');

}



?>




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
        <link rel="stylesheet" type="text/css" href="../css/select_date.css"/>
<!--        <script src="js/jquery-2.0.3.min.js"></script>
<script src="css/calendar/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/calendar/jquery-ui.css"/>-->
        <script src="../js/jquery-2.0.3.min.js"></script>
        <script src="../css/calendar/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/calendar/jquery-ui.css"/>
         <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
  </script>
       
    </head>
    <body>
        
        <div class="container">
             <?php
        include '../db.php';
        
       $result9= mysqli_query($db_handle, "SELECT * FROM users WHERE email='".$_SESSION['mail']."'");
       
       while ($row6=  mysqli_fetch_array($result9))
       {
       
           $uid=$row6['user_id'];
        
        ?>
            <div class="content">
                <div class="header_top">
                    <h2>Make a booking</h2>
                </div>
                <div class="con">
                    <b>  <?php echo $row6['title'].' '.$row6['first_name'].' '.$row6['last_name']; ?></b>
                </div>
                
                <div class="con">
                    please select a booking date
                </div>
                <form name="date" action="invoice.php" method="POST">
                <div class="con">
                    <input type="text" placeholder="date" class="input_date" id="datepicker" name="date1" required/>
                </div>
                
                <div class="con">
                    <textarea cols="80" rows="10" placeholder="comments(optional)" name="comment"></textarea>
                    <input type="hidden" value="<?php echo $_GET['std_id'];?>" name="studi_id"/>
                    <input type="hidden" name="uid" value="<?php echo $uid;?>"/>
                </div>
                
                <div class="con">
                    <button class="frm_handle">Back</button>
                    
                    <input type="submit" value="continue" name="sel_date" class="frm_handle"/>
                </div>
                </form>
                
            </div>
            
            <?php
       }
            ?>
           
        </div>
        
    </body>
</html>
