<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


       
        session_start();
		
		
        include '../db.php';  
       $result=mysqli_query($db_handle, "SELECT * FROM users WHERE email='".$_POST['email']."' && password='".$_POST['pword']."'");
        
       
      
       
       if(mysqli_num_rows($result)>0)
       {
           //echo 'success';
           $_SESSION['mail']=$_POST['email'];
           header('Location:../package.php?studio_id=1');
           
           
       }
       
 else {
           echo 'error';
           header('Location:../signin.php');
       }
       
       
        
    