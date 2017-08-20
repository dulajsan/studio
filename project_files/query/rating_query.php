<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../db.php';
//echo $_GET['idpro2'];
session_start();
if(isset($_SESSION['mail']))
{
    
    $u_id="";
    $result1=mysqli_query($db_handle, "SELECT user_id FROM users WHERE email='".$_SESSION['mail']."'");
    while($row1=  mysqli_fetch_array($result1))
    {
      $u_id=$row1['user_id'];  
    }
mysqli_query($db_handle, "INSERT INTO ratings(stars,users_user_id,products_item_id) VALUES('".$_GET['rat_val']."','$u_id','".$_GET['idpro2']."')");


$result=mysqli_query($db_handle, "SELECT AVG(stars) FROM ratings WHERE products_item_id='".$_GET['idpro2']."'");
while ($row=  mysqli_fetch_array($result))
{
    
    echo $row['AVG(stars)'];
}

}

