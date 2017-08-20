<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db.php';
$query=  mysqli_query($db_handle, "SELECT confirm FROM booking WHERE booking_for_date='".$_GET['checkdate1']."' && studio_studio_id='".$_GET['std_id']."'");
while ($row = mysqli_fetch_array($query)) {
    echo $row['confirm'];
    
}

