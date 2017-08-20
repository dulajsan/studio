<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db.php';
$result4=  mysqli_query($db_handle, "SELECT AVG(stars) FROM ratings WHERE products_item_id='".$_POST['prodid']."'");
while($row4=  mysqli_fetch_array($result4))
{
    echo $row4['AVG(stars)'];
}

