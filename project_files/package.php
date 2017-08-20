<?php
session_start();
if(!isset($_GET['studio_id']))
{
    header('Location:index.html');  
}


?>

<?php
if(isset($_POST['logout']))
{
    unset($_SESSION['mail']); 
    header('Location:signin.php');
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/package.css"/> 
<script src="js/jquery-2.0.3.min.js"></script>
<script src="css/calendar/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="css/calendar/jquery-ui.css"/>
<link href="themes/1/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/tooltip.js" type="text/javascript"></script>
    <style type="text/css">
        h4 { font-size: 10px; font-family: "Trebuchet MS", Verdana; line-height:18px;} 
    </style>
    
<script>
    
    //------------------items box hover effect goes here--------------------
    
$(document).ready(function (){
        $('.box').hover(function (){
           
            //alert("test");
            $(this).addClass('flip');
            
        },
        function (){
            $(this).removeClass('flip');
        }
        );
        }    
    );
</script>
    


<script>
    // --------------------------- items checkbox check and uncheck function goes here----------------
    
   function vt(t){
       
      // check whether checkbox is click
      //t means product item id
      if(document.getElementById('bx'+t).checked===true)
      {
          //if it ischecked
       
         $('.myCheckbox'+t).prop('checked', false);
         $('.tickimg'+t).css("display","none");
          $('.tickimgcart'+t).css("display","block");
          
          
      }
      else
      {
          //if it is not checked
         
         $('.myCheckbox'+t).prop('checked', true);
         $('.tickimg'+t).css("display","block");
         $('.tickimgcart'+t).css("display","none");
       
         cart(t);
         
      }
   }
   
    // ------------------------ add items to the cart goes here-------------
   function cart(qt)
   {
       $.ajax({
           url:'query/add_to_cart.php',
           type:'POST',
           data:'pro_id='+qt+'&stud_id='+document.getElementById('std_id').value,
           
           success: function (data, textStatus, jqXHR) {
              var items=data;
              document.getElementById('item_quantity').innerHTML=items;
                        
                    },
                    
                    error: function (jqXHR, textStatus, errorThrown) {
                        
                    }
            
       });
       
       
   }
    
</script>
    
    <script>
        
        //-------------when load the page decide whether item is checked or not
        
        $(document).ready(function (){
            $.ajax({
                url:'query/onload_cart.php',
                type:'POST',
                data:'stud_id='+document.getElementById('std_id').value,
                
                
                success: function (data, textStatus, jqXHR) {
                    
                   var itm_id=jQuery.parseJSON(data);
                   
                   for(var i=0;i<itm_id.length;i++)
                   {
                       var bx_id=itm_id[i];
                       
                        $('.myCheckbox'+bx_id).prop('checked', true);
         $('.tickimg'+bx_id).css("display","block");
         $('.tickimgcart'+bx_id).css("display","none");
                       
                   }
                        
                    },
                    
                    error: function (jqXHR, textStatus, errorThrown) {
                        
                    }
 
        });
                
    });
    
    </script>

<script>
function zoom(e){
      // alert("test");
      tooltip.pop(this,"<h4>click to add item</h4>");
      $('.tickimg'+e).animate({opacity:'1',width:'50px',height:'50px'});
         $('.tickimgcart'+e).animate({opacity:'1',width:'50px',height:'50px'});
           
        }
</script>
   <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
  </script>
    
    <script>
        
        //------------------studio availability checking goes here----------
        
        $(document).ready(function(){
            $('#check').click(function (){
                var bookdate=document.getElementById('datepicker').value;
                if(bookdate=="")
                {
                    alert("please select a date");
                }
               
               else{
                    bookdate=bookdate.replace("/","-");
                     bookdate=bookdate.replace("/","-");
                     var day=bookdate.substring(3,5);
                     var month=bookdate.substring(0,2);
                     var year=bookdate.substring(6,10);
                     bookdate=year+'-'+month+'-'+day;

              
                $.ajax({
                        url:"query/check_availability.php",
                type:"GET",
                data:"checkdate1="+bookdate+'&std_id='+document.getElementById('std_id').value,
                success:function (data, textstatus, jqXHR)
                {
                    var da=data;
                  move(da);  
                },
                
                error:function (jqXHR, textstatus, errorThrown)
                {
                    alert(errorThrown);
                }
                        
                
    });
            }
                    
    });
        });
        
        // ----------------studio availability message display goes here----------
        function move(e)
        {
            var confirm_val=e;
           // alert(confirm_val);
            if(confirm_val=="")
            {
                $('.imgcl').css("top","-13px");
                document.getElementById('noti').innerHTML="No Bookings";
            }

            else
            {
                
                if(confirm_val.indexOf("1")>-1)
                {
                    $('.imgcl').css("top","-92px");
                    document.getElementById('noti').innerHTML="someone has  booked  and confirmed";
                    
                }
                
                else
                {
                    $('.imgcl').css("top","-52px"); 
                    document.getElementById('noti').innerHTML="someone has  booked and not confirmed";
                }
            }
            
        }
    </script>
    
    <script>
        
          $(document).ready(function (){
     $('.menu_scroll').click(function (){
             $('.menu_outer').slideToggle("slow");
   
    });             
    });
        
    </script>
    
</head>

<body>
<!--<div class="header">
 <img src="img/index_03.jpg" class="logo"/>
</div>-->
<div class="menu_outer">
  <div class="menu">
     
    <ul class="ul_cls ">
        <li class="li_cls "><img src="img/small_logo.PNG" style="float: left" class="small_logo"/></li>
        <li class="li_cls "><a href="index.html">Home</a></li>
        <li class="li_cls"><a href="aboutus.php">About us</a></li>
        <li class="li_cls"><a href="recent.php">Recent hired</a></li>
    <li class="pk li_cls  cls_home" ><a href="#">Booking</a>
        <ul class="dp_down">
            <li><a href="package.php?studio_id=1">Main Studio</a></li>
      <li><a href="package.php?studio_id=2">Mini Studio</a></li>
  </ul> 
    </li>
    <li class="li_cls"><a href="contactus.php">Contact us</a></li>
    
    <li class="li_cls"><a href="#">Register</a>
        <ul class="dp_down">
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li></li>
        </ul>
    
    </li>
    <form name="logot" method="post" action="">
        <input type="submit"  name="logout" style="float: right" value="logout"/> 
    </form>
</ul>
</div>
</div>
<div class="path_blank">
    <img src="img/small_logo.PNG" style="float: left; width:120px" />
    <img src="img/menu_scroll.jpg" class="menu_scroll"/>
</div>
<div class="path">
    <p><span style="color: #999999">You are here: </span> &nbsp;&nbsp;   Home <img src="img/path_arrow.png" class="path_img"/> Booking <img src="img/path_arrow.png" class="path_img"/> <b>Main studio</b> </p>
    <div class="cart"><img src="img/cart.png" width="40px" height="40px"/><br/><span id="item_quantity">0</span> item(s) <br/>R.S 0.00/=</div>
</div>
<div class="sort">
    <div class="sort_left">
        Sort By:
        <select name="sort">
            <option value="price">Price</option>
            <option value="date">Date created</option>
            <option value="name">Name</option>
        </select>
        <button>Sort</button>
    </div>
    <div class="sort_middle">
        <span> Booking Date:</span><span><input type="text" id="datepicker"/></span>
        
        <button style="width: 76px" id="check">check Availability</button>
    </div>
    <div class="sort_right">
        <div class="colrs" >
            <span class="imgcl"><img src="img/clrsnew.jpg"/></span>
        </div>
        <div><a href="booking/select_date.php?std_id=<?php echo $_GET['studio_id']; ?>"><button class="book">book</button></a></div>
        <div style=" float: left" class="state"><p id="noti" style="color: #cc0033"></p></div>
    </div>
    
</div>
<div class="pagination">
    <button class="pag">Start</button>
    <button class="pag">prev</button>
    <button class="pag">1</button>
     <button class="pag">2</button>
     <button class="pag">Next</button>
     <button class="pag">End</button>
</div>
    <div class="content">
<!--        <div class="topic">
            <h3>space turn view</h3>
            
        </div>-->
        <div class="box_layout">
      <?php
      include './db.php';
       $result= mysqli_query($db_handle, "SELECT  * FROM products p WHERE EXISTS(SELECT * FROM studio_has_products WHERE p.item_id=studio_has_products.products_item_id && studio_studio_id='".$_GET['studio_id']."' && published='1')");
       $i=0;
        while ($row=  mysqli_fetch_array($result))
      //echo $val;
        {
            $i++;
     
          ?>
        <div class="box">
           <?php 
           
           $details=mysqli_query($db_handle, "SELECT package_included FROM studio_has_products WHERE products_item_id='".$row['item_id']."' && studio_studio_id='".$_GET['studio_id']."' && package_included='1'");
           
           
            if(mysqli_num_rows($details)>0)
            {
            // package included
            }
            else{
            ?>
            <div class="tick" onclick="vt(<?php echo $row['item_id'];?>)" onmouseover="zoom(<?php echo $row['item_id'];?>)">
                <img src="img/tick.png" width="40px" height="40px" class="<?php echo 'tickimg'.$row[item_id];?>"/>
                <img src="img/cart.png" width="40px" height="40px" style="display:block" class="<?php echo 'tickimgcart'.$row[item_id];?>" />
                <input type="checkbox" class="<?php echo 'myCheckbox'.$row[item_id];?>" value=<?php echo $row['item_id']; ?> id="<?php echo 'bx'.$row['item_id'];?>"/>
               <?php echo $row['item_id'];?>
            </div>
            <?php
            }
            ?>
            
            <div class="front">
             
                <div class="pad" ><img src="img/<?php echo $row['img']; ?>" class="pad_img"/></div>
            </div>
       <div class="back">
           <div class="pad"><span class="free">
                   <?php
                   if(mysqli_num_rows($details)>0)
                   {
                       echo ' Free included with this package';  
                   }
                   else {
                       echo 'Include this item to package';
                   }
                   ?>
                   
                   
               </span>
               </div>
            </div>
             <div class="price">
                 <p style="color:#0000cc"> <?php
                  if(mysqli_num_rows($details)>0)
                   {
                       echo 'Free';  
                   }
                   else {
                      echo 'R.S '.$row['price'].'/=';
                   }
                 
                 ?></p>
            </div>
            <div class="box_footer">
                <div class="rat">
                    <span class="rate_stars"></span>
                    
                </div>
                <a href="rating.php?idpronew=<?php echo $row["item_id"]; ?>"><button class="review">Reviews</button></a>
                <a href="rating.php?idpronew=<?php echo $row["item_id"]; ?>">  <button class="view">View</button></a>
            </div>
            
            
        </div>
          
            
          
        <?php  
                  
        }
      ?>
        
    </div>
    </div>

<div class="pagination">
    <button class="pag">Start</button>
    <button class="pag">prev</button>
    <button class="pag">1</button>
     <button class="pag">2</button>
     <button class="pag">Next</button>
     <button class="pag">End</button>
</div>
    
    <div class="footer">
        <div class="footer_content">
            <div class="fot_top">
                <h2>Subscribe to our news letters</h2><input type="text" placeholder="Enter Your Email Address"/><button>Subscribe</button>
            </div>
            <div class="fot_bottom">
                <div class="fot_box">
                    <h3>Company</h3>
                    <p>defre</p>
                    <p>defre</p>
                    <p>defre</p>
                    
                    
                </div>
                <div class="fot_box">
                    <h3>Support</h3>
                    <p>defre</p>
                    <p>defre</p>
                    <p>defre</p>
                     
                </div>
                <div class="fot_box">
                    <h3>Connect</h3> 
                     <p>defre</p>
                     <p>defre</p>
                     <p>defre</p>
                </div>
                
            </div>
            
            
           
        </div>
        
        <input type="hidden" id="std_id"  value="<?php echo $_GET['studio_id'];?>"/>
    </div>

<div class="copyright">
    &copy;
            </div>
<div class="scroll">
    <a href="#"> <img src="img/download (1).jpg" width="60px" height="60px"/></a>
</div>

</body>
</html>