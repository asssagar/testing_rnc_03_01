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
	<link rel="stylesheet" type="text/css" href="menu_items_info.css">
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

.link_area
{
	text-align: center;
  width: 85%;
}
.link_area form input[type=submit]
{
	background-color: #fff;
}

.link_area form
{
	
  display: inline-block;
}

.link_area form input[type=submit]
{
	width: 100%;
  padding: 12px 180px 12px 30px;
  color: #434343;
  text-align: center;
  cursor: pointer;
  padding-left: 75px;
}


.link_area form input[type=submit]:active
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
	</style>
</head>
<body>
  
<div class="body_wrap_one">
<div class="link_area">
<form method="GET" action="menu.php">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='View Menu' type="submit">
</form>

<form method="GET" action="">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Review' type="submit" style="background-color:#32cd32;">
</form>


<form method="GET" action="info.php">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Info' type="submit">
</form>



</div>




<div class="review_main">

                <div class="review_sub">



                 <div class="review_detail_one"> Reviews of New Ganesh Family Dhaba</div>
                 <div class="review_date">SEP 13, 2015</div>
                 <div class="rating_star">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>&nbsp;&nbsp;&nbsp;by rajiv</div>


                  <div class="comment_area">Packing was Horrible... this was reported last time as well then too same thing happened again.</div>




                </div>




              </div>



              <div class="review_main">

                <div class="review_sub">



                
                 <div class="review_date">SEP 12, 2015</div>
                 <div class="rating_star">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half-o"></i>
                  <i class="fa fa-star-o"></i>&nbsp;&nbsp;&nbsp;by vinay</div>


                  <div class="comment_area">Excellent food...& quick delivery. Not much masalas used....properly spiced and close to home-made quality!
                  </div>




                </div>




              </div>



               <div class="review_main">

                <div class="review_sub">



                 
                 <div class="review_date">SEP 10, 2015</div>
                 <div class="rating_star">
                  <i class="fa fa-star"></i> 
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>&nbsp;&nbsp;&nbsp;by vibha</div>


                  <div class="comment_area">Fantastic delivery time, got food in 15min, ;) :),

food taste is amazing, we would like to order more& more

Thanks , and cheers</div>




                </div>




              </div>
</div> <!-- closing of main div -->
</body>
</html>