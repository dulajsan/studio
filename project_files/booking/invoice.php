<?php
session_start();
if(!isset($_SESSION['mail']))
{
    header('Location:../signin.php');
}

elseif(!isset($_POST['sel_date'])) {
   
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
        <link rel="stylesheet" type="text/css" href="../css/invoice.css"/>
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="header_top">
                    <h3> INVOICE</h3>
                </div>
                
                <div class="header_top">
                    <?php 
                    $total=0;
                    $standard_price=0;
                    $date= getdate();
                    $time=  time();
                   echo $_POST['uid'];
                    ?>
                    DATE:<?php echo $date; ?>
                    TIME:<?php echo $time; ?>
                </div>
                <hr/>
                  
                    <?php
                    include '../db.php';
                    $ses=  session_id();
                    $result=mysqli_query($db_handle, "SELECT * FROM products p WHERE EXISTS(SELECT * FROM cart WHERE p.item_id=cart.products_item_id && studio_studio_id='".$_POST['studi_id']."' && session='$ses' && live='1')");
                    while ($row=  mysqli_fetch_array($result))
                    {
                        
                   $total+=$row['price'];
                    ?>
                <div class="left">
                  
                    
                    <div class="item"><?php echo $row['item_name']; ?></div>
                    
                    
                    
                
                </div>
                <div class="right">
                 
                                       
                    <div class="item"><?php echo 'R.S'.' '.$row['price'].'/='; ?></div>
                    
                    
                   
                </div>
                <?php
                    }
                ?>
                
                <div class="left">
                    <div class="item">package standard price</div>
                </div>
                
                <div class="right">
                    <?php
                    $st_price="";
                                 $result2= mysqli_query($db_handle, "SELECT standard_price FROM studio WHERE studio_id='".$_POST['studi_id']."'");
                                         while($row2=  mysqli_fetch_array($result2))
                                 {
                                     
                                     $st_price=$row2['standard_price'];
                                     $total+=$row2['standard_price'];
                                     $standard_price=$row2['standard_price'];
                                         }
                    ?>
                    <div class="item"><?php echo 'R.S'.' '.$st_price.'/='; ?></div>
                </div>
                
                <div class="left">
                    <div class="item" style="background: #666666; color: #ffffff">Total</div>
                </div>
                
                <div class="right">
                    <div class="item" style="background: #666666; color: #ffffff"><?php echo 'R.S'.' '.$total.'/='; ?></div>
                </div>
                
                <div class="bottom_btn">
                    <form name="invoice" action="../query/booking.php" method="POST">
                        
                        <?php
                        $extracost=$total-$standard_price;
                                ?>
                        <input type="hidden" value="<?php echo $_POST['studi_id'];?>" name="st_id"/>
                        <input type="hidden" value="<?php echo $_POST['comment'];?>" name="cmnt"/>
                        <input type="hidden" value="<?php echo $_POST['date1']; ?>" name="date"/>
                        <input type="hidden" value="<?php echo $_POST['uid'];?>" name="u_id"/>
                        <input type="hidden" value="<?php echo $total; ?>" name="total"/>
                        <input type="hidden" value="<?php echo $standard_price;?>" name="std_price"/>
                        <input type="hidden" value="<?php echo $extracost;?>" name="ext_price"/>
                        
                        
                        <input type="submit" value="confirm" name="book"/>
                    </form>
                </div>
                
            </div>
    
        </div>
       
    </body>
</html>
