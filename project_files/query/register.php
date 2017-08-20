

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 <?php
        session_start();
        
        
        if($_POST['pword']!=$_POST['con_pword'])
        {
            //echo 'error';
            header('Location:signup.php?error=password mismatch');
            
        }
 else {
            include '../db.php';
            mysqli_query($db_handle,"INSERT INTO users (first_name,last_name,password,email,role,last_login,is_valid,verified,verification_id,reg_ip,last_login_ip,title) VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['pword']."','".$_POST['email']."','0','','1','1','1','1','1','".$_POST['title']."')");
           $_SESSION['mail']=$_POST['mail'];
            header('Location:../package.php?studio_id=1');
 }
        
      