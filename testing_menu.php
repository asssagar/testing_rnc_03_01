<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$res_id=$_GET['res_id'];

if(empty($_SESSION['login_user'])){
include('header.php');
}
else{
include('user_home.php');
}
?>
<html>
<head>
  <title>Review's</title>
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="menu_items_info.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<style>
body{
  background-color: #4D2121;
}
.de{
  background-color:black;
}
.cat_menu{
      background-color: black;
    width: 20%;
    height: auto;
    text-transform: capitalize;
}
.res_cate{
  background-color: balck;
  color: white;
  float: right;
  display: inline-block;
}
.inner_right_box
{
  
    width: 65%;
}

.cat_sub_menu
{
  
  color: #000;
  float: left;
  
}


.for_item_heading
{
  background-color: #C9282D;
  color: #fff;
  
  text-align: center;
  font-size: 17px;
  font-weight: 700;
     
    margin: 0 auto;
       border-top-left-radius: 2px;
           border-top-right-radius: 2px;
           min-height: 25px;
           padding-top: 5px;

  
    
}

.left_contentt
{
  width: 20%;
    
    height: auto;
    display: inline-block;
    float: left;
}


.results_menu_details
{
  
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 10px;
    padding-left: 0;
    min-height: 85px !important;
    cursor: default;
        border: 1px solid #ddd;
        font-weight: 700;
        width: 50%;
        margin: 0 auto;

    
}

.results_menu_details:hover
{
  
}


.menu_itm_area
{
      
    width: 75%;
    float: right;
    padding-left: 30px;
  
}
.cat_subb
{
  float: left;
    width: 20%;
   margin-left: 10px;
    display: inline-block;
}



.cart_right
{
      background-color: white;
    color: black;
    display: inline-block;
    float: right;
    width: 20%;
    font-weight: 700;
}


.cat_head
{
 background-color:#EDAF40;
    font-size: 18px;
    padding: 5px;
    border-radius: 5px;
        font-family: Open Sans,sans-serif;
        margin-top:1px;
        color:#fff;
        
    border: 2px solid black;
    
}

.itmname
{
  display: inline-block;
  padding: 10px;
}
.itmprice{
  display: inline-block;
  float: right;
  padding-right: 20px;
  padding-top: 10px;
  font-size: 15px;
 }

.itmcatg
{
  display: inline-block;
  padding: 10px;
}
</style>

  <style type="text/css">
  body{
    background-color: #fff;
  }
.body_wrap_one
{
  width: 100%;
  height: auto;
  margin-top: 20px;
  color: #434343;
  background-color: #fff;
}

.link_
{
  text-align: center;
  width: 95%;

}
.link_ form input[type=submit]
{
  background-color: #fff;
}

.link_ form
{
 
  display: inline-block;
}

.link_ form input[type=submit]
{
  width: 100%;
  padding: 12px 180px 12px 30px;
  color: #434343;
  text-align: center;
  cursor: pointer;
  padding-left: 75px;
}


.link_ form input[type=submit]:focus
{
  background: #32cd32;
    padding: 12px 180px 12px 30px;
    color: #fff;
}

.comment_area
{
  font-size: 18px;
  font-weight: 700;
}
.database_content
{
  margin-top: 20px;
  font-family:Open Sans,sans-serif;
}
.product-item
{
     min-height: 50px;
    padding: 20px;
    color:#5D6266;
    border: 1px solid #aaaaaa;
    border-bottom: none;
}

.product-item:hover
{
background-color:#fffacd;
cursor: pointer;
}

.frmCart
{
  font-size: 20px;
  color: #000;
}
.itm_name
{
  font-size: 16px;
  display: inline-block;
  float: left;
}
.product-price
{
  display: inline-block;
      line-height: 1.5;
      float: right;
  
}


.add_to_button
{
  float: right;
}
.add_to_button input[type=text]
{
  float: left;
  display: inline-block;
  width: 4%;
      margin-top: 10px;
      display: none;

}

.add_to_button input[type=button]
{
float: right;
display: inline-block;
      
background-image: url(http://www.khanaman.in/images/rt.png);
background-repeat: no-repeat;
background-position:right;

width: 27px;
height: 26px;
border: none;
background-color: white;
border-radius: 30px;
}

.add_to_button input[type=button]:hover
{
background-color: #E9EBEE;
}
.add_to_button input[type=button]:focus,input[type=button]:active
{
outline: none !important;
outline: 0;
-moz-outline-style: none;
}


#add_
{
  
}
#add_ button
{
background-color: transparent;
border: aqua;
float: right;
margin-top: 10px;
display: inline-block;
color: #C9282D;
}
.left_cat_big
{
margin-left:20px;
padding:0px;
}



.round_up
{
background-color:#F3F3F3;
margin-bottom:20px;
background-color: #F3F3F3;
    margin-bottom: 0px;
    padding-top: 3px;
    font-size: 18px;
    text-align: center;
    border:1px solid #aaaaaa;
    border-bottom: none;
}

.round_up a
{
text-decoration:none;
font-size:18px;
}

.round_up:hover
{ background-color:#E9EBEE;
}

.rest_name_head
{
color:#5D6266;
    text-align: center;
    width: 80%;
        font-size: 20px;
    font-weight: 700;
    font-family: Open Sans,sans-serif;
}
input[type="submit"]:focus,input[type="submit"]:active
{/*added by punam*/
  outline: none !important;
  outline: 0;
  -moz-outline-style: none;
}
.order__cart_dv
{
      width: 20%;
    float: right;
    margin-right: 10px;
    right: 20px;
    border: 1px solid;
    padding: 5px;
    display: inline-block;
}

@media only screen and (min-width:800px) and (max-width: 5000px) {
#showmenu
{
  display:none;
}
.for_none
{
  display: none;
}
.menu
{display: none;}

}
@media only screen and (min-width:100px) and (max-width: 800px) {
.cat_head
{
  display: none;
}
#showmenu
{
  display:inline-block;
  padding: 10px;width: 100%;
  color: #fff;
font-size: 18px;
font-weight: 700;
}
#showmenu span
{
  font-size: 19px;
font-weight: 700;
color: #FFF;
font-family: Open Sans,sans-serif;
}



.order__cart_dv
{
  display: none;
}
.cat_subb {
    float: left;
    width: 94%;
    margin-left: 10px;
    display: inline-block;
}
.left_cat_big
{
  display: none;visibility: hidden;
}
#stickyribbon_mv
{
  background-color: #27AE60;
  width: 100%;
  text-align: center;
  font-size: 18px;
font-weight: 700;
}
#sticky_mv
{
  top:37px;
  width: 100%;
  background-color: #EDAF40;
  color: #fff;
}
.for_none
{
  
  width: 100%;
  background-color: #EDAF40;
  color: #fff;
font-size: 18px;
font-weight: 700;
padding: 5px;
cursor: pointer;
}




.results_menu_details {
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 10px;
    padding-left: 0;
    min-height: 85px !important;
    cursor: default;
    border: 1px solid #ddd;
    font-weight: 700;
    width: 94%;
    margin: 0 auto;

}
.total{
     font-size: 20px;
    
    padding-left: 40px;
    color: #333;
 
    font-weight: 500;
    padding-right: 20px;
    padding-top: 10px;
    font-family: helvetica, sans-serif;
    padding-bottom: 5px;
}
}
@media only screen and (min-width:100px) and (max-width: 320px) {

.order__cart_mob
{
  
 width: 100vw;
overflow-y: scroll;
overflow-x: hidden;


background-color: #fff;
}
  .menu
  {
    color: black;
display: block;
width: 100vw;

background-color: #fff;

  }



}

@media only screen and (min-width:321px) and (max-width: 360px) {


.order__cart_mob
{
  
 width: 100vw;
overflow-y: scroll;
overflow-x: hidden;
/*height: 100vh;*/

background-color: #fff;
}
  .menu
  {
    color: black;
display: block;
width: 100vw;
/*height: 100vh;*/
background-color: #fff;
overflow-y: scroll;
overflow-x: hidden;

  }


}
@media only screen and (min-width:361px) and (max-width: 800px) {

.order__cart_mob
{
  
 width: 100vw;
overflow-y: scroll;
overflow-x: hidden;
/*height: 100vh;*/


background-color: #fff;
}
  .menu
  {
    color: black;
display: block;
width: 100vw;
/*height: 100vh;*/
background-color: #fff;
overflow-y: scroll;
overflow-x: hidden;
  }



  }</style>
<!-- for add to cart script starts here -->
<script>
function showEditBox(editobj,id) {
  $('#frmAdd').hide();
  $(editobj).prop('disabled','true');
  var currentMessage = $("#message_" + id + " .message-content").html();
  var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_'+id+'">'+currentMessage+'</textarea><button name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
  $("#message_" + id + " .message-content").html(editMarkUp);
}
function cancelEdit(message,id) {
  $("#message_" + id + " .message-content").html(message);
  $('#frmAdd').show();
}
function cartAction(action,product_code,sign) {
  var queryString = "";
  if(action != "") {
    switch(action) {
      case "add":
                                //echo $sign;
        queryString = 'action='+action+'&itm_id='+ product_code+'&quantity='+sign+$("#qty_"+product_code).val();
      break;
      case "remove":
        queryString = 'action='+action+'&itm_id='+ product_code;
      break;
      case "empty":
        queryString = 'action='+action;
      break;
    }  
  }
  jQuery.ajax({
  url: "ajax_action.php",
  data:queryString,
  type: "POST",
  success:function(data){
    $(".cart-item").html(data);
    if(action != "") {
      switch(action) {
        case "add":
          $("#add_"+product_code).show();
          $("#added_"+product_code).hide();
        break;
        case "decrease":
          $("#add_"+product_code).show();
          $("#added_"+product_code).hide();
        break;
        case "remove":
          $("#add_"+product_code).show();
          $("#added_"+product_code).hide();
        break;
        case "empty":
          $(".btnAddAction").show();
          $(".btnAdded").hide();
        break;
      }  
    }
  },
  error:function (){}
  });
}
</script>

<!-- this is for mobile cat ends -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#showmenu').click(function() {
                $('.menu').slideToggle("fast");
        });
    });

</script>

<!-- this is for mobile Khana Kart -->
<script type="text/javascript">
$(document).ready(function(){
    $("button").click(function(){
        $("#dd").toggle();
    });
});
</script>
<!-- this is for fixed on top after scroll for cart desktop -->

<script type="text/javascript">
$(function(){
        var stickyRibbonTop = $('#stickyribbon').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRibbonTop ) {
                        $('#stickyribbon').css({position: 'fixed', top: '0px'});
                } else {
                        $('#stickyribbon').css({position: 'static', top: '0px'});
                }
        });
});


</script>

<!-- this is for desktop cat stick to top starts -->

<script type="text/javascript">
$(function(){
        var stickyRibbonTopdv = $('#stickyribbon').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRibbonTopdv ) {
                        $('#stickyribbon_dv').css({position: 'fixed', top: '0px'});
                } else {
                        $('#stickyribbon_dv').css({position: 'static', top: '0px'});
                }
        });
});


</script>

<!-- this is for desktop cat stick to top ends -->





<!-- this is for fixed on top after scroll for cart desktop ends-->

<!-- this is for fixed on top after scroll for cart mobile ends -->

<script type="text/javascript">
$(function(){
        var stickyRibbonTop = $('#stickyribbon_mv').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRibbonTop ) {
                        $('#stickyribbon_mv').css({position: 'fixed', bottom: '0px'});
                } else {
                        $('#stickyribbon_mv').css({position: 'static', bottom: '0px'});
                }
        });
});


</script>

<!-- this is for fixed on top after scroll for cart mobile ends -->
<!-- this is for category for stick to bottom -->
<script type="text/javascript">
$(function(){
        var stickyRibbon = $('#sticky').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRibbon ) {
                        $('#sticky').css({position: 'fixed', top: '2opx',width:'95%'});
                } else {
                        $('#sticky').css({position: 'static', top: '20px',width:'95%'});
                }
        });
});
</script>


<!-- this is for category in mobile drop down starts --> 

<script type="text/javascript">
$(function(){
        var stickyRib = $('#sticky_cat').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRib ) {
                        $('#sticky_cat').css({position: 'fixed', top: '0px'});
                } else {
                        $('#sticky_cat').css({position: 'static', top: '0px'});
                }
        });
});
</script>


<!-- this is for category in mobile drop down Ends --> 
<!-- this is for mobile cat starts -->

<script type="text/javascript">
$(function(){
        var stickyRibbonTop = $('#sticky_mv').offset().top;
          
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyRibbonTop ) {
                        $('#sticky_mv').css({position: 'fixed', top: '37px'});
                } else {
                        $('#sticky_mv').css({position: 'static', top: '0px'});
                }
        });
});
</script>


<!-- ends here -->

</head>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PDQDXK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<body>
<div class="body_wrap_one">

<div class="fixed">
<!-- this is for cart mobile strat here -->
<div id="stickyribbon_mv"><div id="showmenu"><span>Khana Kart</span><i style="float: right; padding-right: 35px;" class="fa fa-shopping-cart"></i></div>
<div class="menu"  style="display: none;color:black;">
<div class="order__cart_mob">


<center><div style="padding-bottom: 10px;font-size: 28px;"></div></center>


   <div id="shopping-cart">
    <div class="cart-item"></div>

</div>  

    
<div class="cart_element"><i class="fa fa-clock-o"></i></i>&nbsp;&nbsp;

            
           Estimated Delivery time:&nbsp;&nbsp;&nbsp;&nbsp;
                                               1h
                
    
        </div>


 <div class="cart_element"><!-- <i class="fa fa-money"></i>&nbsp;&nbsp; -->

            
           
                
    
        </div>       



<div class="cart_element"><i class="fa fa-hourglass-end"></i>&nbsp;&nbsp;

            
            Delivery Min:&nbsp;&nbsp;&nbsp;&nbsp;
                                               Rs 200.00
                
    
        </div>




</div>



</div></div>
<!-- this is for cart mobile ends here -->
  <div class="order__cart_dv" id="stickyribbon">


<center>
  <div style="padding-bottom: 10px;font-size: 28px;">
  <i class="fa fa-shopping-cart"></i>&nbsp;Khana Kart</div></center>
<a id="btnEmpty" class="cart-action" onClick="cartAction('empty','','');">Empty Cart</a>

   <div id="shopping-cart">
    <div class="cart-item">
<!-- <div style="font-size: 14px;" class="txt-heading">Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div> -->
<!-- here comes the code.php file which is on desktop -->
</div>  

    <div class="cart_header">
      Your Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-briefcase"></i></div>


<div class="cart_element"><i class="fa fa-clock-o"></i></i>&nbsp;&nbsp;

            
           Estimated Delivery time:&nbsp;&nbsp;&nbsp;&nbsp;
                                               1h
                
    
        </div>


 <div class="cart_element"><i class="fa fa-money"></i>&nbsp;&nbsp;

            
            Delivery Fee:&nbsp;&nbsp;&nbsp;&nbsp;
                                               Rs 30.00
                
    
        </div>       



<div class="cart_element"><i class="fa fa-hourglass-end"></i>&nbsp;&nbsp;

            
            Delivery Min:&nbsp;&nbsp;&nbsp;&nbsp;
                                               Rs 200.00
</div>
</div>
</div>
</div>
<div class="container">
  <div class="rest_name_head">
  
<?php

$menu_name_type="SELECT DISTINCT name,serv_fee,vat,serv_tax,container_fee,contact_1  FROM `restaurant_register` where res_id=$res_id" ;
$menu_name_results = mysqli_query($connect, $menu_name_type);//Selects distict item type for the given restaurant id


while($results_cat = mysqli_fetch_array($menu_name_results) )//Outer While Loop Iterates through each record of item_type array
{
echo $results_cat['name'];
$_SESSION['phn_vendor'] = $results_cat['contact_1'];
}
?>
</div>

<!-- Code for Right Side Shopping Cart  --> 


<div class="wrap_two">

<div class="database_content">


<div class="link_">
 
<form method="GET" action="">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='View Menu' type="submit" style="background-color:#32cd32;">
</form>



<form method="GET" action="review.php">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Review' type="submit">
</form>

<form method="GET" action="info.php">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Info' type="submit">
</form>

</div><br><br>
<!-- this is for mobile category -->

<div>
<button  class="for_none" id="sticky_cat"><i style="float: right; padding-right: 16px;" class="fa fa-filter"></i> Category</button>

<div id="sticky">
<div id="dd" style="display:none;">

<div class="left_cat_small">
<?php


//Change below if to normal state 
//if (isset($_POST['value'])) 
{
//Change id to dynamic value
//$id = $_POST['value'];
  
echo '<div>';
echo '<div class="cat_subb">';
echo '<div class="cat_head">';
echo '<span style="float:left;color:black;"><i class="fa fa-caret-down fa-2x"></i></span>';
echo "Category";
echo '</div>';

$menu_itm_type="SELECT DISTINCT  itm_typ FROM `km_restr_menu` where res_id=$res_id order by itm_typ" ;
$menu_itm_results = mysqli_query($connect, $menu_itm_type);//Selects distict item type for the given restaurant id

$cat_id = 0; // Variable for category id
while($results_cat = mysqli_fetch_array($menu_itm_results) )//Outer While Loop Iterates through each record of item_type array
{
$temp_href="#".$results_cat['itm_typ'];   //temperory assign 
echo'<div class="round_up">';
echo "<a href= '$temp_href'>";   
echo $results_cat['itm_typ']."<br>"."<br>";//printing menu side category 

$cat_id++; //incrementing cat_id 
echo '</a>';

echo '</div>';

}
}
      
  echo '</div>'; echo '</div>';

      ?>

</div>

</div></div>
</div>

<!-- this is for mobile category ends here-->
<!-- for mobile view we use  -->
<div class="left_cat_big">
<?php


//Change below if to normal state 
//if (isset($_POST['value'])) 
{
//Change id to dynamic value
//$id = $_POST['value'];
  
echo '<div>';
echo '<div class="cat_subb" id="stickyribbon_dv">';
echo '<div class="cat_head">';
echo '<span style="float:left;color:black;"><i class="fa fa-caret-down fa-2x"></i></span>';
echo "Category";
echo '</div>';

  $menu_itm_type="SELECT DISTINCT  itm_typ FROM `km_restr_menu` where res_id=$res_id order by itm_typ" ;
  $menu_itm_results = mysqli_query($connect, $menu_itm_type);//Selects distict item type for the given restaurant id

$cat_id = 0; // Variable for category id
while($results_cat = mysqli_fetch_array($menu_itm_results) )//Outer While Loop Iterates through each record of item_type array
{
$temp_href="#".$results_cat['itm_typ'];   //temperory assign 
echo'<div class="round_up">';
echo "<a href= '$temp_href'>";   
echo $results_cat['itm_typ']."<br>"."<br>";//printing menu side category 

$cat_id++; //incrementing cat_id 
echo '</a>';

echo '</div>';

}
}
      
  echo '</div>'; echo '</div>';

      ?>

</div>
     
      <div class="results_menu_details">
<div class="txt-heading"></div>
  <?php
  //if (isset($_POST['res_id'])) 
 {
//Change id to dynamic value
//$res_id = $_POST['res_id'];

   
 $product_array = $db_handle->runQuery("SELECT * FROM khanaman.km_restr_menu where res_id=$res_id order by itm_typ");



$curr_typ = "";
$prev_typ = "";



  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    
        <?php $curr_typ = $product_array[$key]["itm_typ"];
      if($curr_typ != $prev_typ){
      ?>
       <div class="for_item_heading"><a name="<?php echo $product_array[$key]["itm_typ"]; ?>">

   
               
     <?php echo $product_array[$key]["itm_typ"]; ?></a>
      <!-- <div><strong><b><?php echo $inp_id; ?></b></strong></div> -->
    </div>
      <?php }
      ?>
      <div class="product-item">
      <form id="frmCart">
      
      <div class="itm_name"><strong><?php echo $product_array[$key]["itm_name"]; ?></strong></div>

      <div class="product-price"><span style="padding-right: 100px;">
        <?php echo "₹".$product_array[$key]["itm_price"]; ?></span>

      <div class="add_to_button">
        <input type="text" id="qty_<?php echo $product_array[$key]["itm_id"]; ?>" name="quantity" value="1" size="2" />
      <?php
        $in_session = "0";
        if(!empty($_SESSION["cart_item"])) {
          $session_code_array = array_keys($_SESSION["cart_item"]);
            if(in_array($product_array[$key]["itm_id"],$session_code_array)) {
            $in_session = "1";
            }
        }
        $prev_typ = $curr_typ;
      ?>
    
      <input type="button" id="add_<?php echo $product_array[$key]["itm_id"]; ?>" class="btnAddAction cart-action" onClick = "cartAction('add','<?php echo $product_array[$key]["itm_id"]; ?>','')" <?php if($in_session != "0") { ?>style="display:none" <?php } ?> />
     
  
      
    
      </div></div><!-- this is for product price -->
      </form>
    </div>
  <?php
      }
  }
}
  ?>
</div>
<div class="clear-float"></div>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart 
  <a id="btnEmpty" class="cart-action" onClick="cartAction('empty','','');">Empty Cart</a>
</div>

<script>
$(document).ready(function () {
  cartAction('','','');
})</script>   
         
 </div>
          
</div></div>



</div>




</div>
</div> <!-- closing of main div -->

<div class="clear" style="clear:both;"></div>

                 <div  style="clear:both;"></div>                              <div class="clear" style="clear:both;"></div>
<?php include('footer.php'); ?>
</body>
</html>