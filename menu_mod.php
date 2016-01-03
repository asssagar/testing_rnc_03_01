<?php include('include/config.php'); ?>


<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {


  case "add":

echo "adding";

    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM km_restr_menu WHERE item_id='" . $_POST["code"] . "'");
      echo "$productByCode";

      $itemArray = array($productByCode[0]["itm_id"]=>array('itm_name'=>$productByCode[0]["itm_name"], 'itm_id'=>$productByCode[0]["itm_id"], 'quantity'=>$_POST["quantity"], 'itm_price'=>$productByCode[0]["itm_price"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["itm_id"],$_SESSION["cart_item"])) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["itm_id"] == $k)
                $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  /*starts*/
  case "increase":
    

      //if(empty($_SESSION["cart_item"])) {
       //  $_SESSION["cart_item"] = $itemArray;
      //}

/*ends*/
echo "One";
$itm_id_echo = $_GET["itm_id"];
echo "$itm_id_echo";
echo 'Below itm_id_echo';
    if(!empty($_SESSION["cart_item"])) {
      echo "two";
            foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["itm_id"] == $k)
              $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"] + 1; 
            

          if(empty($_SESSION["cart_item"])){
            echo "Three";
            unset($_SESSION["cart_item"]);}
            echo "four";
      }
      echo "five";
    }
    if(empty($_SESSION["cart_item"]))
      {
        echo "inside empty";
      $productByCode = $db_handle->runQuery("SELECT itm_id, itm_name, 1 AS quantity, itm_price FROM km_restr_menu WHERE itm_id='" . $_GET["itm_id"] . "'");
      $itemArray = array($productByCode[0]["itm_id"]=>array('itm_name'=>$productByCode[0]["itm_name"], 'itm_id'=>$productByCode[0]["itm_id"], 'quantity'=>$productByCode[0]["quantity"], 'itm_price'=>$productByCode[0]["itm_price"]));
      $_SESSION["cart_item"] = $itemArray;
    }
    echo "six";

  break;
  case "decrease":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["itm_id"] == $k)
            if($_SESSION["cart_item"][$k]["quantity"] <= 1)
            {
              unset($_SESSION["cart_item"][$k]);
            }
            else
            {
              $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"] - 1; 
            }
            //
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>khanaman</title>
<!-- <link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/header-login-signup.css"> -->
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="menu_items_info.css">
 <!-- style sheet for menu info and review page  -->

<!-- <link rel="stylesheet" type="text/css" href="style_cart.css"> -->


<!-- This style for database filter in database_content div starts -->

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


.for_item_type
{
  background-color: #906767;
  color: #fff;
  
  text-align: center;
  font-size: 17px;
  font-weight: 700;
  
    
}

.left_contentt
{
  width: 80%;
    
    height: auto;
    display: inline-block;
    float: left;
}


.results_menu_details
{
  border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 10px;
    padding-left: 0;
    min-height: 85px !important;
    cursor: default;
        border: 1px solid #ddd;
        font-weight: 700;

    
}

.results_menu_details:hover
{
  background-color: #E9EBEE;
}


.menu_itm_area
{
      
    width: 80%;
    float: right;
    padding-left: 30px;
  
}
.cat_sub
{
  float: left;
    width: 20%;
   
    display: inline-block;
}
.cat_sub a
{
  padding-top: 10px;
   font-size: 15px;
}


.cart_right
{
      background-color: white;
    color: black;
    display: inline-block;
    float: right;
    width: 20%;
}


.cat_head
{
 background-color:#EDAF40;
    font-size: 20px;
    padding: 5px;
    border-radius: 5px;
    text-align: center;
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



<!-- This style for database filter in database_content div Ends -->
                                         <link rel="stylesheet" href="css/lib_style.css">
                    <link rel="stylesheet" href="css/app_style.css">

<script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/lib/es5-shim.min.js">
            </script>
         <script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/main.js"></script>

 <link href="CSS_menu/Studios.css" rel="stylesheet" />
<link href="Tab-menu/styles.css" rel="stylesheet" />
<script src="Tab-menu/jquery.min.js"></script>
<script src="Tab-menu/tytabs.jquery.min.js"></script>

<!-- style sheet for menu end here -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">







 <script type="text/javascript">

       $(document).ready(function () {
           $("#tabsholder").tytabs({
               tabinit: "1",
               fadespeed: "fast"
           });
           $("#tabsholder2").tytabs({
               prefixtabs: "tabz",
               prefixcontent: "contentz",
               classcontent: "tabscontent",
               tabinit: "3",
               catchget: "tab2",
               fadespeed: "normal"
           });
       });

</script>




<script src="jjs/bootstrap.min.js"></script>
    <script src="jjs/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="jjs/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript" src="jjs/jssor.slider.mini.js"></script>
  
</head>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PDQDXK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<body>



<header class="header">
    
       
            <div class="col-xs-5 logo-container no-padding-right-left">
                    <a href="http://khanaman.in/">
                        <img class="just-logo img-responsive" src="images/KmLogo250.png" alt="km">
                    </a>
            </div>      
          
            <div class="col-sm-7 header-navigation-container no-padding-right-left">
                
                   
           
        
    </div>
</header><div class="cl" style="claer:both;"></div>

 <div class="container">



<!-- Code for Right Side Shopping Cart  --> 




  <div class="order_cart">

&nbsp;&nbsp;&nbsp;Your Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<i class="fa fa-shopping-cart"></i>
   <div id="shopping-cart">
<!-- <div style="font-size: 14px;" class="txt-heading">Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div> -->
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?> 
<div class="cart_tt">
<table cellpadding="10" cellspacing="1">
  <tbody style="margin: 0px; padding: 0px; font-size: 15px;">
<tr>
<th> Name</th>

<th>&nbsp;&nbsp;Quantity</th>


<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
</tr>
<!-- <tr>
<th>&nbsp;&nbsp;Price</th>
<th><b>Action</b></th>
</tr>  -->
<?php   
    foreach ($_SESSION["cart_item"] as $item){
    ?>
        <tr>
        <td><strong><?php echo $item["itm_name"]; ?></strong></td>
        <!-- <td><?php echo $item["code"]; ?></td> -->
        <td><?php echo $item["quantity"]; ?></td>
        <td align=right><?php echo "Rs".$item["itm_price"]; ?></td>
        <td>
<a href="menu_mod.php?action=decrease&itm_id=<?php echo $item["itm_id"]; ?>"class="btnRemoveAction">
          <i class="fa fa-minus-circle"></i></a>
<a href="menu_mod.php?action=increase&itm_id=<?php echo $item["itm_id"]; ?>"class="btnRemoveAction">

            <i class="fa fa-plus-circle"></i>
</a></td>

        </tr> 

        <?php
        $item_total += ($item["itm_price"]*$item["quantity"]);
    }
    ?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs".$item_total; ?></td>
</tr>
</tbody>
</table>    </div> 
  <?php
}
?>
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


<!-- /add to cart starts -->







<!-- add to cart ends  -->


<!-- 
<div class="cart_element"><i class="fa fa-hourglass-end"></i>&nbsp;&nbsp;

            
            Delivery time:&nbsp;&nbsp;&nbsp;&nbsp;
                                               1h
                
    
        </div>  -->       

</div>

        <div class="inner-container">
      <div class="main-content">
                <div class="cl"></div>
          <div class="left-corner">
            <div class="tab-div">
 <div style="width: 95%;" id="tabsholder">
                <ul class="tabs" style="text-align:center;">
                  <li id="tab1"><i class="fa fa-bars"></i>&nbsp;&nbsp;&nbsp;Menu </li>
                  <li id="tab2"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;Reviews</li>
                  <li id="tab3"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Info </li>
                 <!--  <li id="tab4">CMS</li>
                  <li id="tab5">Database</li> -->
                  
                </ul>
<div class="contents marginbot">

            <div id="content1" class="tabscontent">

            <div class="tab-content">
           <!-- menu comes here -->
     

     
<section class="section">
        
    <!-- BREADCRUMB COMPONENT -->

    <div itemscope itemtype="http://schema.org/Restaurant">
    <!-- MENU ITEM HEADER -->
    <!-- FOR LARGE SCREEN -->
<!-- MODAL FOR OPERATING TIME -->
<div class="modal fade" id="operatingModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header modal-header-all">
        <button type="button" class="close modal-close-button" data-dismiss="modal" aria-hidden="true" style="font-size:20px">&times;</button>
        <h4 class="modal-title font-family-takemeaway operating-allergy-info-title" id="operatingTimeTitle">Operating Times</h4>
      </div>
      <div class="modal-body">
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Sunday">Sunday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Su 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Monday">Monday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Mo 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Tuesday">Tuesday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Tu 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Wednesday">Wednesday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="We 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Thursday">Thursday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Th 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Friday">Friday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Fr 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                <div class="col-xs-12 operating-time-content margin-top-2-percent">
            <div class="col-xs-5 Saturday">Saturday</div>
            <div class="col-xs-7">
                                <meta itemprop='openingHours' content="Sa 11:00-23:00" >
                    <div>11:00 am<span> – </span>11:00 pm</div>
                        </div>
        </div>
                </div>
      </div>
    </div>
</div><script>
    require(['main'], function (main) {
        require(['jquery', 'common/common', 'common/init', 'moment'], function($, common, init, moment){ 
            //Operating modal
            var operatingModal = $('.operatingTime');
            operatingModal.on('click',function(){
                $('#operatingModal').modal('toggle');
            });
            
            //Date highlight
            var d = new Date();
            var weekday = new Array(7);
            weekday[0]=  "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";
            var n = weekday[d.getDay()]; 
            $('.operating-time-content .'+n).parent().css('font-weight', 'bold');
            var opHours = $('.operating-time-content .'+n).parent().find('meta[itemprop="openingHours"]');
            var ct = moment().format('HH:mm');
            if(opHours.length > 0){
                for(var i=0; i<=opHours.length - 1; i++){
                    var baseHour = moment($(opHours[i]).attr('content').slice(3, 8),"HH:mm").format('HH:mm');
                    var endHour = moment($(opHours[i]).attr('content').slice(9, 16),"HH:mm").format('HH:mm');
                    if(ct > baseHour && ct < endHour){
                        $('.operatingTime').text('Open');
                              break;
                    } else if(ct < baseHour && ct < endHour){
                        $('.operatingTime').text('Opens at '+baseHour);
                              break;
                    } else if(ct > baseHour && ct > endHour){
                        $('.operatingTime').text('Opens tomorrow');
                    }
                }
            }
        });
    });
</script>
    <!-- MENU SUB MENU -->
   <script>
    require(['main'], function (main) {
        require(['jquery', 'common/common'], function($, common){
            $('.mobile-rest-sub-nav').click(function(){
                var hidden = $('.mobile-rest-sub-nav ul');
                if (hidden.hasClass('def')){
                    hidden.animate({"left":"100%"}, 'fast').removeClass('def').css('display','none');
                } else {
                    hidden.animate({"left":"0%"}, 'fast').addClass('def').css('display','block');
                }
            });
        });
    });
</script>   
    <!-- CONTENT PAGE -->
    <!-- OFFER BAR -->
<!-- OFFER BAR -->



<!-- LARGE SCREEN AND MOBILE SCREEN MENU ITEMS -->
<div class="container restaurant-menu-container">




    <div class="row">
        <div class="col-xs-12 menu-main-content-large-screen margin-top-3-per margin-bottom-3-per no-padding-xs">
            <div class="col-sm-2 category hidden-xs padding-right-0-px">
    <div class="fixedContainer-category margin-right-50-px width-100-per-xs">
        <div class="category-header margin-bottom-3-per font-size-2-rem font-family-takemeaway font-weight-700">                            
           
        </div>
       
        
    </div>
</div>
            
            <div class="col-sm-6 content padding-left-0-px padding-right-0-px margin-right-left-0-px col-xs-12" itemprop="menu">
    <div class="col-sm-12 search-div hidden-xs">
        <input type="text" id="restaurant-selct" class="restaurant-selct form-control" placeholder="Search menu items">
        <span class="icon_clear-rest-selct font-size-1-8-rem position-absolute cursor-pointer">x</span>
    </div>
    <!-- MENU ITEMS -->
            <div class="col-sm-12 category-details margin-bottom-minus-14-px no-padding-xs ">
            <div class="categoryHeader font-size-2-0-rem-xs font-size-2-6-rem padding-bottom-4-px font-family-takemeaway padding-left-15-px-xs padding-right-15-px-xs padding-bottom-20-px-xs padding-top-2-percent-xs" data-name="Soup" data-mandatory="0" id="53496" data-veg="1" data-non-veg="">
                Soup                <span class="glyphicon glyphicon-chevron-down"></span>
            </div>
            <ul class="list-group">
                                <li class="menu">
           <div class="list-group-item border-radius-4 margin-bottom-2-per padding-bottom-20-px menu-items-group 
                                                 " id="682633" data-has-modifiers="false" data-has-size="false" data-price="75" data-container-charges="10.00">
                            <span class="menu-text  vegicon font-size-1-3-rem font-weight-700 font-size-1-1-rem-xs padding-right-5-per-xs">
                   <span title="Veg Clear Soup" class="menu-text-name padding-left-12-px padding-left-0-px-xs ellipse-text-xs ellipse-text">
                    Veg Clear Soup</span> 
                    <span class="price col-md-offset-0 col-sm-offset-0 padding-right-6-px float-right padding-right-0-px-xs">
                                      <strong>&#8377;150</strong>





                                                                    </span>


                                <!-- <br class="visible-xs"> -->


      

                                                                    <!-- cart over here -->








                               


  



                                <span class="glyphicon glyphicon-shopping-cart right-0-xs-xs col-sm-offset-1 float-right position-relative padding-right-10-px">3</span>
                            </span>

                            
                                            <div class="sub-menu-items-group">
                                                                                                                    </div>
                              <div class=" item-description margin-top-3-per width-80-per"></div>
<div class="sign"> 
  <a href="menu_mod.php?action=increase&amp;=<?php echo $item["itm_id"]; ?>" class="btnRemoveAction">
            <i class="fa fa-plus-circle" style="font-size: 29px;"></i>
</a>  </div>



<div id="product-grid">
  <!-- <div class="txt-heading">Products</div> -->


<!-- cart ends here -->
                                                        











                                                        </div>



                    </li>
                         
                        </ul>
        </div>
           
            </div>
        
    </div>
</div>



<!-- Starts: in this below div data coming from data base  -->



<div class="database_content">

<?php


//Change below if to normal state 
//if (isset($_POST['value'])) 
{
//Change id to dynamic value
//$id = $_POST['value'];
  
echo '<div class="left_contentt">';
echo '<div class="cat_sub">';
echo '<div class="cat_head">';
echo "Category";echo '<span class="glyphicon glyphicon-filter"></span>';
echo '</div>';
  $menu_itm_type="SELECT DISTINCT  itm_typ FROM `km_restr_menu` where res_id=1" ;
  $menu_itm_results = mysqli_query($connect, $menu_itm_type);//Selects distict item type for the given restaurant id

$cat_id = 0; // Variable for category id
  while($results_cat = mysqli_fetch_array($menu_itm_results) )//Outer While Loop Iterates through each record of item_type array
  {

    
  $temp_href="#".$cat_id;   //temperory assign 
  //echo "$temp_href";
  //echo "<a href='#'$cat_id'>";
    echo "<a href= '$temp_href'>";   


    //echo '<a href="" onclick="newwin()">';
echo $results_cat['itm_typ']."<br>"."<br>";//printing menu side category 

$cat_id++; //incrementing cat_id 
echo '</a>';
//    <a href="#your-page-element">Jump to ID</a>

// <div id="your-page-element">
//     will jump here
// </div>



}

      mysqli_data_seek($menu_itm_results,0);//Refreshes the array containing the Menu details
echo '</div>';

echo '<div class="menu_itm_area">';
  $res_menu=  "SELECT itm_typ, itm_name,itm_price,itm_catg,itm_id FROM km_restr_menu WHERE res_id=1";
  $raw_results = mysqli_query($connect, $res_menu);//Selects the needed item details from the database

    $menu_id = 0; // declaring variable for id

  while($results = mysqli_fetch_array($menu_itm_results) )//Outer While Loop Iterates through each record of item_type array
  {
// echo $results['itm_typ']."<br>";

      
      $temp_itm_type=$results['itm_typ'];//Temp variable to store value of item type
      echo '<div class="for_item_type">';
     

       echo "<div id='$menu_id'>";
     
      echo '<br>'.''.$temp_itm_type .''.'<br>'.'<br>'; //Printing item type on the screen
                echo '</div>';
      $menu_id++; //incrementing menu id
 echo '</div>';  
      mysqli_data_seek($raw_results,0);//Refreshes the array containing the Menu details
      while($result_menu=mysqli_fetch_array($raw_results))// Inner While Loop Iterates through Menu Array
      {
          if ($result_menu['itm_typ']==$temp_itm_type) //To display only the items of selected item type
          {    echo '<div class="results_menu_details">';
        
           echo '<div class="itmname">';
            echo $result_menu['itm_name'].'   ';
           echo '</div>';
         

             

              echo '<div class="itmprice">';
            echo '₹'.$result_menu['itm_price'].'<br>';
            echo '</div>';

              
               echo '<div class="itmcatg">';
            echo $result_menu['itm_catg'].'   ';
              echo '</div>';
            echo $result_menu['itm_id'].'   ';




       echo '<br>';

echo '<div class="sign">' ;
 echo '<a href="menu_mod.php?action=increase&amp;itm_id=001012 " class="btnRemoveAction">';
// code for adding item in cart



            echo '<i class="fa fa-plus-circle" style="font-size: 29px;"></i>';
echo '</a>';
echo  '</div>';


                    echo '</div>';
          }

                  
      }//End of Inner While Loop
  }//End of Outer While Loop
             

}
  echo '</div>'; echo '</div>';

      ?>



</div>
<!-- Ends: in this div data coming from data base  -->
<!-- CART BUTTON FOR MOBILE -->
<!-- CART BUTTON FOR MOBILE -->
<!-- <div class="cart-btn-mobile visible-xs"  >
  <button class="btn btn-default">
    <span class="glyphicon glyphicon-shopping-cart">&nbsp;&#8377;</span>
  </button>
</div> -->

<!-- MODAL CART FOR MOBILE -->
<div class="show-cart-value hide-element">1</div>
<div class="col-xs-12 cart-container modal vissible-xs width-100-percent no-margin no-padding" id="cart-mobile">
    <div class="modal-dialog no-padding no-margin width-100-percent">
    <div class="modal-content">
      <div class="modal-header modal-header-all">
        <button type="button" class="close modal-close-button float-left margin-top-1-percent-xs float-left font-size-1-6-rem font-weight-normal" data-dismiss="modal" aria-hidden="true"><i class="icon icon-chevron-left"></i>&nbsp;Back</button>
        <h4 class="modal-title" id="allergyInfoTitleMobile">Your Cart</h4>
      </div>
      <div class="modal-body" style="display:inline-block;">
        <div class="fixedContainer-cart margin-right-50-px">
    <div class="col-xs-12 cart left-4-per-xs">
        <div class="cart-header font-size-1-6-rem font-weight-normal text-align-center margin-top-8-per">Your Order</div>
    
        <div class="btn-group delivery-pickup-dropdown width-92-per margin-top-2-percent margin-bottom-2-per margin-left-8-per">
          <button type="button" class="btn btn-default dropdown-toggle width-100-percent" data-toggle="dropdown">
            <span class="icon icon-delivery">&nbsp;Delivery <span class="caret position-relative"></span></span>

          </button>
          <ul class="dropdown-menu delivery-dropdown-menu width-100-percent" role="menu">
            <li data-order-type="delivery" class="delivery margin-bottom-2-per padding-left-5-per font-weight-700 font-size-1-4-rem"><span class="icon icon-delivery "></span><span class="delivery-type-text font-size-1-5-rem">&nbsp;Delivery</span></li>
            <li data-order-type="pickup" class="pickup margin-bottom-2-per padding-left-5-per font-weight-700 font-size-1-4-rem"><span class="icon icon-collection "></span><span class="delivery-type-text font-size-1-5-rem">&nbsp;Pickup</span></li>
          </ul>
        </div>
        <div class="selected-user-location-container no-padding margin-top-7-px">
                    <div class="col-xs-1 no-padding"><span class="glyphicon glyphicon-remove-sign selected-user-location-sign font-size-1-7-rem"></span></div>
                    <div class="col-xs-11 no-padding">
                        <select class="selected-user-location" id="selectedUserLocation">
                          <option value="">Select delivery location</option>
                           <option value=0>Audugodi</option><option value=1>BTM Layout 1st Stage</option><option value=2>BTM Layout 2nd Stage</option><option value=3>Dairy Circle</option><option value=4>Jayanagara 9th Block</option><option value=5>JP Nagar 3rd Phase</option><option value=6>Koramangala 8th Block</option><option value=7>Tavarkere</option>                     </select> 
                    </div>
        </div> 

        <!-- <div class="btn-group delivery-pickup-btn">
          <button type="button" class="btn btn-warning selectedbtn btnDelPick"><span class="glyphicon glyphicon-save"></span>&nbsp;Delivery</button>
          <button type="button" class="btn btn-warning btnDelPick"><span class="glyphicon glyphicon-open"></span>&nbsp;Pickup</button>
        </div> -->
        <div class="tableWraper width-100-percent">
            <table class=" table cart-content-container">
            </table>
        </div>
        
            
        <table class="table">   
            <tr class="subtotal">
                <th class="subtotaltext font-size-1-3-rem font-weight-normal padding-left-20-px">
                    Subtotal
                </th>
                <th class="subtotalvalue font-size-1-3-rem font-weight-normal padding-right-18-px">
                    0
                </th>
            </tr>

            <tr class="tax margin-top-4-per">
                <th class="taxtext font-size-1-3-rem font-weight-normal padding-left-20-px">
                    Tax
                </th>
                <th class="taxvalue font-size-1-3-rem font-weight-normal padding-right-18-px">
                    0
                </th>
            </tr>

            <tr class="deliveryCharges margin-top-4-per" style="display:none;">
                <th class="deliveryChargesText font-size-1-3-rem font-weight-normal padding-left-20-px">
                    Delivery Charges
                </th>
                <th class="deliveryChargesValue font-size-1-3-rem font-weight-normal padding-right-18-px">
                    0
                </th>
            </tr>
            
            <tr class="discount margin-top-4-per">
                <th class="discounttext font-size-1-3-rem font-weight-normal padding-left-20-px">
                    Discount
                </th>
                <th class="discountvalue font-size-1-3-rem font-weight-normal padding-right-18-px">
                    
                </th>
            </tr>

            <tr class="wrapper margin-top-4-per margin-bottom-4-per">
                <th class="wrappertext font-size-1-3-rem font-weight-normal padding-left-20-px">
                    Container*
                </th>
                <th class="wrappervalue font-size-1-3-rem font-weight-normal padding-right-18-px">
                    0
                </th>
            </tr>

            <tr class="total margin-top-4-per">
                <th class="totaltext font-size-1-9-rem font-weight-700 padding-left-20-px">
                    Total
                </th>
                <th class="totalvalue font-size-1-9-rem font-weight-700 padding-right-18-px">
                    &nbsp;0&#8377;
                </th>
            </tr>
        </table>

        <div class="addNote margin-top-3-per margin-bottom-5-per">
            <textarea class="form-control" rows="2" placeholder="Add a note"></textarea>
        </div>
    </div>
    <div class="col-xs-12 min-order-label margin-top-4-per border-radius-5 font-weight-700 font-size-1-1-rem padding-left-2-per padding-top-2-5-per">
        <span><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Minimum order of ₹300 is needed. Please add food worth &#8377; 300 more.</span>
    </div>
    <div class="col-xs-12 location-error-label margin-top-4-per border-radius-5 font-weight-700 font-size-1-1-rem padding-left-2-per padding-top-2-5-per padding-bottom-2-per">
        <span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Please select your delivery location from the drop down above.
    </div>
    <div class="col-xs-12">
        <input class="checkout-button margin-top-4-per justeat-btn width-auto" type="submit" value="Go to checkout">
    </div>
    <div class="col-xs-12 alergy-info cursor-pointer margin-top-4-per margin-bottom-5-per font-size-1-3-rem">
        <div><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;Allergy &amp; dietary information</div>
    </div>
</div>
<div class="fixedContainer-cart-checkout" style="display:none">
    <div class="col-xs-12 cart">
        <div class="restaurant-name font-size-1-8-rem font-weight-700 margin-top-4-per margin-bottom-minus-4-per"></div>
        <div class="cart-header font-size-1-6-rem margin-top-8-per text-align-center">Your Order&nbsp;<a class="font-size-1-1-rem" href="">(change)</a></div>
    
        <div class="btn-group delivery-pickup-dropdown width-90-percent margin-top-2-percent margin-bottom-2-per margin-left-8-per">
          <button type="button" class="btn btn-default dropdown-toggle width-100-percent" data-toggle="dropdown">
            <span class="icon icon-delivery">&nbsp;Delivery </span>

          </button>
          <ul class="dropdown-menu delivery-dropdown-menu" role="menu" style="display:none">
            <li class="delivery"><span class="icon icon-delivery"></span>&nbsp;Delivery</li>
            <li class="pickup"><span class="icon icon-collection"></span>&nbsp;Pickup</li>
          </ul>
        </div>

        <!-- <div class="btn-group delivery-pickup-btn">
          <button type="button" class="btn btn-warning selectedbtn btnDelPick"><span class="glyphicon glyphicon-save"></span>&nbsp;Delivery</button>
          <button type="button" class="btn btn-warning btnDelPick"><span class="glyphicon glyphicon-open"></span>&nbsp;Pickup</button>
        </div> -->
        <div class="tableWraper">
            <table class=" table cart-content-container">
            </table>
        </div>
        
            
        <table class="table">   
            <tr class="subtotal">
                <th class="subtotaltext font-size-1-3-rem padding-left-20-px font-weight-normal">
                    Subtotal
                </th>
                <th class="subtotalvalue font-size-1-3-rem font-weight-normal padding-right-20-px">
                    0
                </th>
            </tr>

            <tr class="tax">
                <th class="taxtext">
                    Tax
                </th>
                <th class="taxvalue">
                    0
                </th>
            </tr>

            <tr class="deliveryCharges">
                <th class="deliveryChargesText">
                    Delivery Charges
                </th>
                <th class="deliveryChargesValue">
                    0
                </th>
            </tr>
            
            <tr class="discount">
                <th class="discounttext font-size-1-3-rem padding-left-20-px font-weight-normal">
                    Discount
                </th>
                <th class="discountvalue font-size-1-3-rem font-weight-normal padding-right-20-px">
                    
                </th>
            </tr>

            <tr class="wrapper margin-top-4-per margin-bottom-4-per">
                <th class="wrappertext">
                    Container*
                </th>
                <th class="wrappervalue">
                    0
                </th>
            </tr>

            <tr class="total">
                <th class="totaltext font-size-1-9-rem font-weight-700 padding-left-20-px">
                    Total
                </th>
                <th class="totalvalue font-size-1-9-rem font-weight-700 text-align-right padding-right-20-px">
                    &#8377;&nbsp;640
                </th>
            </tr>
        </table>

        <div class="addNote margin-bottom-5-per">
            <textarea class="form-control" rows="2" placeholder="Add a note"></textarea>
        </div>
    </div>
    
    <div class="col-xs-12 alergy-info cursor-pointer margin-top-5-per">
        <div><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;Allergy &amp; dietary information</div>
    </div>
</div>
      </div>
    </div>
  </div>
</div>
<!-- MODAL FOR ALLERGY INFO -->
<!-- MODAL FOR ALLERGY INFO -->
<div class="modal fade" id="allergyModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header modal-header-all">
        <button type="button" class="close modal-close-button" data-dismiss="modal" aria-hidden="true" style="font-size:20px;">&times;</button>
        <h4 class="modal-title operating-allergy-info-title font-family-takemeaway" id="allergyInfoTitle">Allergy &amp; dietary information</h4>
      </div>
      <div class="modal-body">
        <div class="col-xs-12">
            <div class="col-xs-12">
                <p>JUST EAT tries to accurately copy the item descriptions, allergy information, ingredient information and other information relating to the contents of dishes ("Dietary Information") from the menus that are provided to us by our partner restaurants.</p>
                <p>However, it is the restaurants themselves that prepare the dishes, and are responsible for providing this Dietary Information and ensuring that it is factually accurate. Please use the comments box to specify particular allergies or dietary requirements.</p>
                <p>If you are in any doubt about the presence of allergens, the contents of a particular dish or any other Dietary Information, you should confirm with the restaurant directly before ordering from JUST EAT.</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--MODAL FOR MODIFIERS -->
<!--MODAL FOR MODIFIERS -->
<div class="modal fade sub-menu-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog no-margin-xs height-100-per-xs"> 
    <div class="modal-content">
        <div class="modal-header modal-header-all">
           <button type="button" class="close font-size-1-8-rem modal-close-button" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">Customize</h4>
        </div>
        <div class="modal-body width-100-percent">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <div class="selectedOptionDescription font-size-1-5-rem"></div>
                    <div class="modifer-option-div margin-top-5-per">
                        
                    </div>  
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary justeat-btn margin-right-5-per" data-dismiss="modal">Add to cart</button>
        </div>
    </div>
    </div>
</div>

<!--MODAL FOR DUPLICATE CART -->
<!--MODAL FOR DUPLICATE -->
<div class="modal fade duplicate-cart-modal font-size-2-0-rem" tabindex="-1" role="dialog" >
    <div class="modal-dialog "> 
    <div class="modal-content">
        <div class="modal-header modal-header-all">
           <button type="button" class="close modal-close-button" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title">A cart already exists</h4>
        </div>
        <div class="modal-body">
            <div class="col-xs-12">
                <div class="col-xs-12">
                    <div class="editDuplicateCart">Please click <a href="">here</a> to edit the <span>China Bowl</span> cart.</div>
                    <div>OR</div>
                    <div class="destroyDuplicateCart font-size-1-7-rem">Click <a href="">here</a> to destroy the <span>China Bowl</span> cart and create a new one.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
    
    </div>
</section>


<!-- menu ends here -->

 


            <!-- end content3 -->

                   

    <div class="cl"></div>
    </div> 
    </div>    

</div>


<script src="jjs/scripts.js"></script>
    <script src="jjs/tytabs.jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="jjs/dreams.js">
    </script>
</body>
</html>