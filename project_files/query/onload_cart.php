<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db.php';
session_start();

$sess_id=session_id();

$result8=mysqli_query($db_handle, "SELECT products_item_id FROM cart WHERE session='$sess_id' && studio_studio_id='".$_POST['stud_id']."' && live='1'");


while($row5=  mysqli_fetch_array($result8))
{
    $dftr[]=$row5['products_item_id'];
    
}

echo json_encode($dftr);

