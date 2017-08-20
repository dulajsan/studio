<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db.php';

session_start();

if(isset($_SESSION['mail']))
{
    
    $u_id="";
    $result=mysqli_query($db_handle, "SELECT user_id FROM users WHERE email='".$_SESSION['mail']."'");
    while($row=  mysqli_fetch_array($result))
    {
      $u_id=$row['user_id'];  
    }

mysqli_query($db_handle, "INSERT INTO comments (comment_text,entered_by,product_id) VALUES('".$_POST['comtxt']."','$u_id','".$_POST['produ_val']."')");
}

 else {
    echo '1';
}
