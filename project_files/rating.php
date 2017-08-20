<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <style type="text/css">
            
            .sdk{
                position: absolute;
                margin: 0px auto;
               // background-color: #ff0033;
                width: 1100px;
                height: 24px;
                top: 748px;
            }
            .box{
                
                height:125px;
                float: left;
                width: 1050px;
                
                //background-color: #cc0099;
                padding: 10px 25px;
               margin: 0 auto;
            }
            
            img{
               // width: 150px;
                //position: absolute;
            }
            
            .main
            {
                width: 1100px;
                margin:0 auto;
               // background-color: #000;
                //height: 500px;
            }
            .top_desc
            {
                width: 100%;
               // background-color: #cccccc;
                height: 500px;
                float: left;
            }
            .left{
                float: left;
                width: 25%;
                //background-color: #999999;
                height: 500px;
            }
            .right
            {
                float:left;
                width: 75%;
               background: #f9f9f9;
                height: 500px;
            }
            .right_top{
                float: left;
                width: 80%;
                padding: 4px 10%;
                //background-color: #00cc99;
                height: 142px;
            }
            .right_bottom
            {
                float: left;
                width: 80%;
                padding: 0px 10%;
                //background-color: #cccc00;
                height: 350px;
            }
            .main_img
            {
                float: left;
                width: 50%;
                height: 350px;
                //background-color: #cc00cc;
            }
            .desc
            {
                float: left;
                width: 50%;
                height: 350px;
                
            }
            .rate{
                width: 150px;
                height: 30px;
                overflow-y: hidden;
                float: left;
                
            }
            .rate_stars
            {
                background: url(img/download.jpg);
                background-size: contain;
                background-repeat:no-repeat;
                width: 150px;
                height: 150px;
                position: relative;
                float: left;
            }
            .box_img{
                width: 80%;
                height: 30%;
                margin: 10px 10%;
                background-color:#666666;
                
            }
            
            .box_comment
            {
                float: left;
                width: 1050px;
                height: 200px;
                margin: 0 auto;
               // background-color: #ffff66;
                padding: 10px 25px;
                
            }
            textarea
            {
                box-shadow: 1px 1px 3px 1px #999999;
            }
            
            input[type=submit]
            {
                margin-left: 740px;
                background-color:#999999;
                color: #ffffff;
                width: 55px;
                border-radius: 8px;
                box-shadow: 4px 4px 5px 2px #999999;
                padding: 5px;
            }
            
            .allreviews
            {
                float: left;
                width: 1050px;
                margin: 0px auto;
                padding: 10px 25px;
                background-color:#f9f9f9;
               // height: 500px;
                    
            }
            
            h2,h1
            {
                color: #999999;
            }
            
            .style1{
                padding: 5px 5px;
                padding-left: 60px;
                background:#6c6c6e;
                border-radius: 4px;
                color: #fcfcfc;
                box-shadow: 1px 1px 1px 1px #d8d8db;
            }
            
            .stars_box
            {
                position: absolute;
                height: 28px;
                width: 200px;
                overflow-y: hidden;
                background-size: contain;
               // background-color: chocolate;
            }
            
            #st1,#st2,#st3,#st4,#st5
            {
                width: 24px;
position: relative;
//top: 148px;
height: 24px;
float: left;
//margin-left: -31px;
            }
            #st1
            {
                left: 7px;
            }
             #st2
             {
                 left: 10px;
             }
             
             #st3{
                 left: 13px;
             }
             #st4{
                 left: 16px;
                 
             }
             #st5
             {
                 left: 17px;
             }
             #stars
            {
                position: relative;
                height: 155px;
                width: 200px;
                overflow-y: hidden;
                background:url(img/download.jpg) no-repeat;
                background-size: contain;
                float: left;
                top: -125px;

            }
            
            #col1
            {
                width: 10%;
                
            }
            #col2
            {
                width: 86%;
                padding: 2%;
                background-color: #DBE5E5;
                margin-top: 25px;
            }
            
            #com_tr
            {
                margin-top: 15px;
            }
            
            #str_vl
            {
                float: left;
                width: 30px;
                background: #00ffff;
                color: #ffffff;
                
            }
            
            #tr_blank
            {
                height: 50px;
                //background: #ff0033;
                padding-top:0px;
            }
          
            
        </style>
        
    
        
      
           
           
           
           
           
           
<!--          jquery mouse hover enters styles goes here-->
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>



       
        <script type="text/javascript">
                
    //----------------------------------------ajax comment submit goes here------------------    
          function commentsubmit()
            {
               var com=document.getElementById('com_text').value;
               var idproduct2=document.getElementById("productval").value;
               $.ajax({
                   
                   
                   url:"query/comment_query.php",
                   type:"POST",
                   data:"produ_val="+idproduct2+"&comtxt="+com,
                   
                   success: function(data, textstatus, jqXHR)
                   {
                       if(data==1)
                       {
                           window.location="signin.php";
                       }
                       else{
                     //alert("ok"); 
                     cmnt_onload();
                          }
                     
                   },
                   error: function(jqXHR, textstatus, errorThrown)
                   {
                       alert(errorThrown);
                   }
                       
                
        });
            }
        </script>
        
        <script type="text/javascript">
            //---------------comment load function goes here----------------------------
            
            $(document).ready(function cmnt_onload(){
                //alert('v');
                var proidval=document.getElementById("productval").value;
                var rev=document.getElementById('review_content');
                $.ajax({
                    url:"query/comment_load.php",
                    type:"POST",
                    data:"prodid="+proidval,
                    success: function (data, textStatus, jqXHR) {
                        var reviews=jQuery.parseJSON(data);
                        //alert(reviews);
                        for(var i=0;i<reviews.length;i++)
                        {
                            var tr=rev.insertRow(rev.rows.length);
                            tr.setAttribute("id","com_tr")
                            var td1=tr.insertCell(0);
                            td1.setAttribute("id","col1");
                            td1.innerHTML="<img src='img/userpic.gif'/>";
                            
                            var td2=tr.insertCell(1);
                            td2.setAttribute("id","col2");
                            td2.innerHTML=reviews[i].comment_text;
                            
                            var tr2=rev.insertRow(rev.rows.length);
                            tr2.setAttribute("id","tr_blank");
                            var td_1=tr2.insertCell(0);
                            var td_2=tr2.insertCell(1);
                            td_1.innerHTML="";
                            td_2.innerHTML="<img src='img/calendar.png'/>"+"&nbsp;  "+reviews[i].entered_date+"  "+"<img src='img/download.png'/>"+"fedfre"+"&nbsp;&nbsp;"+"<img src='img/like_dislike.png' width='58px'/>";
                            
                            
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert(jqXHR);
                        
                    }
                        
                
        });
                    
         });
            
        </script>
        
         <script src="js/ratings.js"></script> 
         
    </head>
    <body>
        
<!--        <div class="header">
 <img src="img/index_03.jpg" class="logo"/>
</div>-->
  <div class="menu_outer">
  <div class="menu">
     
    <ul class="ul_cls ">
        <li class="li_cls "><img src="img/small_logo.PNG" style="float: left" class="small_logo"/></li>
        <li class="li_cls "><a href="index.html">Home</a></li>
        <li class="li_cls"><a href="aboutus.php">About us</a></li>
        <li class="li_cls"><a href="recent.php">Recent hired</a></li>
    <li class="pk li_cls cls_home" ><a href="#">Booking</a>
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
      
</ul>
</div>
</div>
<div class="path_blank"></div>
<div class="path">
    <p><span style="color: #999999">You are here: </span> &nbsp;&nbsp;   Home <img src="img/path_arrow.png" class="path_img"/>Booking<img src="img/path_arrow.png" class="path_img"/><b>Ratings</b>  </p>
    
</div>

<?php 
include './db.php';
$row2=mysqli_query($db_handle, "SELECT * FROM products WHERE item_id='".$_GET['idpronew']."'");
while ($result2=mysqli_fetch_array($row2))
{

?>
      
        <div class="main">
            <div class="top_desc">
              <div class="left">
                  <div class="box_img"><img src="img/<?php echo $result2['img']; ?>" width="220px" height="150px" /></div>
                  <div class="box_img"></div>
                  <div class="box_img"></div>
              </div>
              <div class="right">
                  <div class="right_top">
                      <h2 class="style1"> <?php echo $result2["item_name"];?></h2>
                      <br/>
                      <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSpaceTurn&amp;width=120px&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
                      <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<!-- Place this tag where you want the share button to render. -->
<div class="g-plus" data-action="share" data-annotation="bubble"></div>
                  </div>
                  <div class="right_bottom">
                      <div class="main_img">
                          <img src="img/<?php echo $result2['img']; ?>" width="300px" height="340px"/>
                          
                      </div>
                      <div class="desc">
                          R.S <?php echo ' '.$result2['price'].'';?>/=
                          <br/>
                          <br/>
                          <div class="rate">
                              <span class="rate_stars" style="float: left"></span>
                          </div>
                          <span id="str_vl"></span>
                          <br/>
                          <p>
                          ferthrehtihret trt rt rtt r tret r reue   er rgeurgeu r er rheew  re herhr   ehewhr  eir hewirh ew  ewhi eh eir  
                          eggrewr  e re   hfh eh  hehefr eheir eir   erihei her  erh </p>
                      </div>
                      
                  </div>
                    
              </div>
            
            </div>
        
        
        <div class="box">
            <h2 class="style1">Rate This Item</h2>
         
<div class="stars_box">
                                    <span id="stars"></span>
                                </div>
            <p> out of 5</p>
            <div class="sdk">
<div id="st1" onclick="db(this)"></div>
<div id="st2" onclick="db(this)"></div>
<div id="st3" onclick="db(this)"></div>
<div id="st4" onclick="db(this)"></div>
<div id="st5" onclick="db(this)"></div>
            </div>

            <br/>
            <label id="ratval"></label>
            <br/>
            <input type="hidden" value="<?php echo $_GET['idpronew'];?>" id="productval"/>
            <input type="hidden" value="1" id="custid"/>
            
            
        </div>
        <br/>
       <?php
}
?>
      
        <div class="box_comment">
            <h2 class="style1">Add Your Reviews</h2>
            
            <textarea cols="95%" rows="5" name="com_val" id="com_text" required>
                
            </textarea>
            <br/>
            <input type="submit" value="Add" onclick="commentsubmit()"/>
        </div>
        <div class="allreviews">
            <h2 class="style1">Most Helpful Customer Reviews</h2>
            <table style="width: 100%; height: auto">
                <thead>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                </thead>
                <tbody id="review_content">
                    
                </tbody>
                
            </table>
            
        </div>
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
        
        
    </div>

<div class="copyright">
    &copy;
            </div>
      
        
    </body>
</html>
