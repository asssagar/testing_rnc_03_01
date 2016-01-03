<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM khanaman.tblproduct WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["code"] == $k)
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
    if(!empty($_SESSION["cart_item"])) {
      echo "two"
;      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
              $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"] + 1; 
            

          if(empty($_SESSION["cart_item"])){
            echo "Three";
            unset($_SESSION["cart_item"]);}
            echo "four";
      }
      echo "five";
    }
    if(empty($_SESSION["cart_item"])){echo "inside empty";
      $productByCode = $db_handle->runQuery("SELECT code, name, 1 as quantity, price FROM tblproduct WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$productByCode[0]["quantity"], 'price'=>$productByCode[0]["price"]));
      $_SESSION["cart_item"] = $itemArray;
    }
    echo "six";

  break;
  case "decrease":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
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
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css"/>
<script src="ddmenu/ddmenu.js" type="text/javascript"></script>

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
        <td><strong><?php echo $item["name"]; ?></strong></td>
        <!-- <td><?php echo $item["code"]; ?></td> -->
        <td><?php echo $item["quantity"]; ?></td>
        <td align=right><?php echo "Rs".$item["price"]; ?></td>
        <td>
<a href="menu_details.php?action=decrease&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
          <i class="fa fa-minus-circle"></i></a>
<a href="menu_details.php?action=increase&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
            <i class="fa fa-plus-circle"></i>
</a></td>
        </tr>
        <?php
        $item_total += ($item["price"]*$item["quantity"]);
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
            //OPERATING HOVER
               /* if($(window).width() > 767 ){
                    $('.operatingTime').parent().popover({
                        placement: 'bottom',
                        container: 'body',
                        html: true,
                        trigger: "hover",
                        template: '<div class="popover operatingTimePopOver " role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>',
                        content: function () {
                            return $('#operatingModal').find('.modal-body').html();
                        }
                    });
                }*/
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

<!-- CATEGORY FILTER MOBILE SCREEN -->
<div class="col-xs-12 menu-main-content-mobile-screen visible-xs">
    <div class="row">
        <div class="col-xs-3 btn-mobile max-width-70-px-xs">
            <button type="button" class="btn btn-default btn-sm btn-mobile-category justeat-btn no-padding-xs margin-top-5-per height-30-px width-40-px font-size-1-5-rem">
                <span class="glyphicon glyphicon-th-list"></span>
            </button>
            <div class="category-mobile border-radius-6 position-absolute">
                <div class="fixedContainer-category width-100-per-xs">
                    <div class="category-header font-size-2-0-rem font-weight-700 margin-bottom-3-per font-family-takemeaway">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle justeat-btn btn-category-filter font-size-1-4-rem font-weight-700" data-toggle="dropdown">
                           Category &nbsp;<span class="glyphicon glyphicon-filter"></span> <span class="caret"></span>
                          </button>
                          <div class="selectedCategory font-size-1-3-rem">Veg <span class="glyphicon glyphicon-remove-sign"></span></div>
                          <ul class="dropdown-menu category-filter-menu padding-left-0-px-xs" role="menu">
                                                                                        <li data-selected-type="veg-selector" class="veg-selector padding-left-10-px"><span class="veg-ic">Veg</span></li>
                             
                                                            <li data-selected-type="non-veg-selector" class="non-veg-selector padding-left-10-px margin-top-5-px"><span class="non-veg-ic">Non Veg</span></li>
                                                                                        <li data-selected-type="all-selector" class="all-selector padding-left-10-px margin-top-5-px padding-left-60-px">All</li>
                                                      </ul>
                        </div>

                    </div>
                    <div class="btn-group hide-element">
                        <button type="button" class="btn dropdown-toggle justeat-blue-btn offer-btn font-size-1-4-rem font-weight-700 width-auto padding-top-5-px padding-bottom-5-px" data-toggle="dropdown">
                           Offers&nbsp;
                           <span class="glyphicon glyphicon-tags" aria-hidden="true" ></span>
                        </button>
                        <ul class="dropdown-menu offer-menu padding-left-0px margin-top-35-px" id="offer-menu" role="menu">
                        </ul>
                    </div>
                    <ul class="category-menu category-menu-large-screen no-padding margin-top-10-px">
                            
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53496">Soup</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53466">Rolls</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53464">Starters</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#75559">Bread</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53492">Rice</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53494">Rice/Noodles</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53473">Gravies</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#75561">Raitha</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53502">Beverages</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#53498">Extras</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="veg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="true" data-non-veg="false"data-offer="false" href="#75560">Salads</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53497">Soup</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53467">Rolls</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53465">Starters</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53493">Rice</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53495">Rice/Noodles</a></li>
                        
                        <li class="width-100-percent margin-bottom-2-per border-radius-2"><a class="nonveg padding-left-5-per font-size-1-7-rem font-weight-700" data-veg="false" data-non-veg="true"data-offer="false" href="#53474">Gravies</a></li>
                                        </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-9 search-div padding-left-0-px">
            <input type="text" id="restaurant-selct-mobile" class="restaurant-selct form-control" placeholder="Search menu items">
            <span class="icon_clear-rest-selct position-absolute cursor-pointer font-size-1-8-rem">x</span>
        </div>
    </div>
</div>

<!-- LARGE SCREEN AND MOBILE SCREEN MENU ITEMS -->
<div class="container restaurant-menu-container">




    <div class="row">
        <div class="col-xs-12 menu-main-content-large-screen margin-top-3-per margin-bottom-3-per no-padding-xs">
            <div class="col-sm-2 category hidden-xs padding-right-0-px">
    <div class="fixedContainer-category margin-right-50-px width-100-per-xs">
        <div class="category-header margin-bottom-3-per font-size-2-rem font-family-takemeaway font-weight-700">                            
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle btn-category-filter justeat-btn font-size-1-4-rem font-weight-700 width-auto" data-toggle="dropdown">
               Category &nbsp;<span class="glyphicon glyphicon-filter"></span>
              </button>
              <div class="selectedCategory font-size-1-3-rem">Veg <span class="glyphicon glyphicon-remove-sign padding-top-5-px position-relative"></span></div>
              <ul class="dropdown-menu category-filter-menu margin-top-10-px padding-left-0px" role="menu">
                                                    <li data-selected-type="veg-selector" class="veg-selector padding-left-10-px width-100-percent margin-bottom-4-per border-radius-2"><span class="veg-ic">Veg</span></li>
                 
                                    <li data-selected-type="non-veg-selector" class="non-veg-selector padding-left-10-px width-100-percent margin-bottom-4-per border-radius-2"><span class="non-veg-ic">Non Veg</span></li>
                                                    <li data-selected-type="all-selector" class="all-selector padding-left-10-px width-100-percent margin-bottom-4-per border-radius-2 padding-left-60-px">All</li>
                              </ul>
            </div>
        </div>
        <div class="btn-group hide-element">
            <button type="button" class="btn dropdown-toggle justeat-blue-btn offer-btn font-size-1-4-rem font-weight-700 width-auto padding-top-5-px padding-bottom-5-px" data-toggle="dropdown">
               Offers&nbsp;
               <span class="glyphicon glyphicon-tags" aria-hidden="true" ></span>
            </button>
            <ul class="category-menu dropdown-menu offer-menu margin-top-10-px padding-left-0px" id="offer-menu" role="menu">
            </ul>
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

                            <div class="menu-item-small-description padding-top-5-px">
                                                            </div>
                                                            <!-- <button type="button" class="btn btn-default btn-sm pull-right no-padding font-size-1-4-rem width-40-px height-30-px justeat-btn" >
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button> -->
                                                                                            <div class="sub-menu-items-group">
                                                                                                                    </div>
                                                        <div class=" item-description margin-top-3-per width-80-per"></div>
<div class="sign"> 
  <a href="menu_details.php?action=increase&amp;code=3DcAM01" class="btnRemoveAction">
            <i class="fa fa-plus-circle" style="font-size: 29px;"></i>
</a>  </div>



<div id="product-grid">
  <!-- <div class="txt-heading">Products</div> -->
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where id=1");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
      <form method="post" action="menu_details.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
      <!-- <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div> -->
<!--       <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div> -->




      <!-- <div class="product-price"><?php echo "Rs".$product_array[$key]["price"]; ?></div> -->

      <div><input type="text" name="quantity" value="1" size="2" />
        <input type="submit" value="Add to cart" class="btnAddAction" /></div>
      </form>
    </div>
  <?php
      }

  }
  ?>
</div><!-- cart ends here -->                                        
                   </div>

               </li>
                                <li class="menu">
                                                <div class="list-group-item border-radius-4 margin-bottom-2-per padding-bottom-20-px menu-items-group  " id="682617" data-has-modifiers="false" data-has-size="false" data-price="85" data-container-charges="10.00">
                            <span class="menu-text  vegicon font-size-1-3-rem font-weight-700 font-size-1-1-rem-xs padding-right-5-per-xs">
                                <span title="Veg Hot & Sour Soup" class="menu-text-name padding-left-12-px padding-left-0-px-xs ellipse-text-xs ellipse-text">Veg Hot & Sour Soup</span>
                                <!-- <br class="visible-xs"> -->
                                <span class="price col-md-offset-0 col-sm-offset-0 padding-right-6-px float-right padding-right-0-px-xs">
                                                                            <strong>&#8377; 100</strong>
                                                                    </span>
                                <span class="glyphicon glyphicon-shopping-cart right-0-xs-xs col-sm-offset-1 float-right position-relative padding-right-10-px">3</span>
                            </span>

                            <div class="menu-item-small-description padding-top-5-px">
                                                            </div>
                                                            <!-- <button type="button" class="btn btn-default btn-sm pull-right no-padding font-size-1-4-rem width-40-px height-30-px justeat-btn" >
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                                             -->             <div class="sub-menu-items-group">
                                                                                                                    </div>


                            <div class=" item-description margin-top-3-per width-80-per"><!-- <i class="fa fa-plus-circle"></i> --></div>

<div class="sign">   <i class="fa fa-plus-circle" style="font-size: 29px;"></i></div>

<!-- cart over here -->
<div id="product-grid">
  <!-- <div class="txt-heading">Products</div> -->
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where id=2");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
  <form method="post" action="menu_details.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
      <!-- <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div> -->
<!--       <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div> -->


<!-- 
      <div class="product-price"><?php echo "Rs".$product_array[$key]["price"]; ?></div> -->

      <div><input type="text" name="quantity" value="1" size="2" />
        <input type="submit" value="Add to cart" class="btnAddAction" /></div>
      </form>
    </div>
  <?php
      }
  }
  ?>
</div>
                                         </div>
                    </li>
        <li class="menu">                <div class="list-group-item border-radius-4 margin-bottom-2-per padding-bottom-20-px menu-items-group  " id="682625" data-has-modifiers="false" data-has-size="false" data-price="80" data-container-charges="10.00">
                            <span class="menu-text  vegicon font-size-1-3-rem font-weight-700 font-size-1-1-rem-xs padding-right-5-per-xs">
                                <span title="Veg Manchow Soup" class="menu-text-name padding-left-12-px padding-left-0-px-xs ellipse-text-xs ellipse-text">Veg Manchow Soup</span>
                                <!-- <br class="visible-xs"> -->
                                <span class="price col-md-offset-0 col-sm-offset-0 padding-right-6-px float-right padding-right-0-px-xs">
                                                                            <strong>&#8377; 300</strong>
                                                                    </span>
                                <span class="glyphicon glyphicon-shopping-cart right-0-xs-xs col-sm-offset-1 float-right position-relative padding-right-10-px">3</span>
                            </span>

                            <div class="menu-item-small-description padding-top-5-px">
                          </div>
                <div class="sub-menu-items-group">
                            </div>
                                                        <div class=" item-description margin-top-3-per width-80-per"></div>
<div class="sign">   <i class="fa fa-plus-circle" style="font-size: 29px;"></i></div>

<!-- cart over here -->
<div id="product-grid">
  <!-- <div class="txt-heading">Products</div> -->
  <?php
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct where id=3");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
      <form method="post" action="menu_details.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
      <!-- <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div> -->
<!--       <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div> -->




     <!--  <div class="product-price"><?php echo "Rs".$product_array[$key]["price"]; ?></div> -->

      <div><input type="text" name="quantity" value="1" size="2" />
        <input type="submit" value="Add to cart" class="btnAddAction" /></div>
      </form>
    </div>
  <?php
      }
  }
  ?>
</div>


<!-- cart ends here -->
          </div>
                    </li>
                                <li class="menu">
                                               
                    </li>
                                <li class="menu">
                                                
                    </li>
                        </ul>
        </div>
          <!--  -->
            
            </div>
        
    </div>
</div>

<div class="show-cart-value hide-element">1</div>


        </div>
    
</div>
      </div>
    </div>
  </div>
</div>
 -->    </div>
</section>
<!-- menu ends here -->
            </div>
  
  
            </div>
            <div id="content2" class="tabscontent">
           <div class="tab-content">
              <!-- reviews area ends here -->



                <ul class="tab-list fl">

 </ul>
                
               <div class="icon-img">
                   <img src="images/program-icon.png" />
               </div>
            </div>
            </div>
            <div id="content3" class="tabscontent">
           <div class="tab-content">
                
               <ul class="tab-list fl">
                   
               </ul>
  

              <div class="operating_times">Operating Times

<table class="table table-striped" style="
    border: 1px solid #e9e9e9;
    width: 65.1%;
    font-size: 13px;
    font-size: 1.3rem;
    display: block;
    
">
<div class="Delivery_areas"> Delivery Areas</div>
                    </div>


<div style="clear:both;"></div>
                 <div style="clear:both;"></div>
                                               


<div style="clear:both;"></div>
</div>
 </div>
            </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
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
