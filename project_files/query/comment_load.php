<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../db.php';

$result3=  mysqli_query($db_handle, "SELECT comment_text,entered_date FROM comments WHERE product_id='".$_POST['prodid']."'");
while ($row3=mysqli_fetch_array($result3))
{
    $dfg[]=$row3;
    
}

echo json_encode($dfg);