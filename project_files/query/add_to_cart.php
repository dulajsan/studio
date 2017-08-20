<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db.php';
session_start();
$sessionid=  session_id();


$result6=mysqli_query($db_handle, "SELECT * FROM cart WHERE products_item_id='".$_POST['pro_id']."' && session='$sessionid' && studio_studio_id='".$_POST['stud_id']."' && live='1'");

if(mysqli_num_rows($result6)>0)
{
    //echo 'you have added that item'; 
    
}

else
{

mysqli_query($db_handle, "INSERT INTO cart (products_item_id,session,studio_studio_id,live) VALUES('".$_POST['pro_id']."','$sessionid','".$_POST['stud_id']."','1')");

}

$result7=mysqli_query($db_handle, "SELECT products_item_id FROM cart WHERE session='$sessionid' && studio_studio_id='".$_POST['stud_id']."' && live='1'");

$rw=  mysqli_num_rows($result7);
echo $rw;