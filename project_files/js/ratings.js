/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



            
            //send datas to db--------------------
            
            
            
           
    $(document).ready(
            function ()
    {
    $("#st1").mouseenter(
            function()
    {
        $("#stars").css("top","-125px");
       //alert("hrdufhreuh");
    }
            );
    $("#st2").mouseenter(
            function ()
    {
            $("#stars").css("top","-94px");
        }
            );
    
    $("#st3").mouseenter(
            function ()
    {
        $("#stars").css("top","-64px");
    }
                );
        
        $("#st4").mouseenter(
                function ()
        {
            $("#stars").css("top","-32px");
        }
                );
        
        $("#st5").mouseenter(
                function ()
        {
            $("#stars").css("top","0px");
        }
                );
    }
            
            );


            
            
            function db(e)
            {
             var val= e.id;
            // alert(val);
             
             var val2=val.replace("st","");
              var idproduct=document.getElementById("productval").value;
              //alert(idproduct);
           // alert(val2);
             easy(val2,idproduct);
             
                              
            }
            
            function easy(st_val,product_id)
            {
             //alert(st_val);
              // alert(product_id);
            //  alert("ok");
                
                 $.ajax({
                    url: "./query/rating_query.php",
                    type: "GET",
                    data: "rat_val=" + st_val+"&idpro2="+product_id,
                    success: function(data, textstatus, jqXHR)
                    {
                        //calculation goes here------------
                        //alert(data);
                        var valnew=data;
                        if(valnew!="")
                        {
                      
                      // alert(valnew);
                     
                         var ratingval= Math.round(valnew*100)/100;
                          str_move(ratingval);
                        document.getElementById("ratval").innerHTML=ratingval;
                        //document.getElementById("ratval")
                        
                        //alert(total);
                       // alert(average);
                        }
                        
                        else
                        {
                            window.location="signin.php";
                        }
                        
                        

                    },
                    error: function(jqXHR, textstatus, errorThrown)
                    {
                        alert(errorThrown);
                    }
                });
            }
            
            
            
            
            
             
            $(document).ready(function (){
                var proidval=document.getElementById("productval").value;
                $.ajax({
                    url:"./query/rating_load.php",
                    type:"POST",
                    data:"prodid="+proidval,
                    success: function (data, textStatus, jqXHR) {
                        var valst=data;
                      valst= Math.round(valst*100)/100;
                       //alert($val);
                       str_move(valst);
                       document.getElementById('str_vl').innerHTML=valst;
                       
                      
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        
                    }
                        
                
        });
                    
         });
         
         function str_move(f)
         {
             var val=f;
              if(val>=0 && val<=1.4)
                       {
                          
                           $('.rate_stars').css("top","-120px");
                       }
                       
                       else if(val>=1.5 && val<=2.4)
                       {
                          
                          $('.rate_stars').css("top","-93px");
                       }
                       
                       else if(val>=2.5 && val<=3.4)
                       {
                         
                         $('.rate_stars').css("top","-65px");
                       }
                       
                       else if(val>=3.5 && val<=4.4)
                       {
                           
                          $('.rate_stars').css("top","-34px");
                       }
                       
                       else if(val>=4.5 && val<=5)
                       {
                        
                         $('.rate_stars').css("top","-2px");
                       }
         }
            
      
        
            
           
       