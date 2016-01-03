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

.table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #f9f9f9;}

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

.wrap_two
{
  margin-top: 20px;
  margin-left: 15px;
  width: 90%;
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

<form method="GET" action="review.php">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Review' type="submit">
</form>


<form method="GET" action="">
<input type=hidden name="res_id" value='<?php echo "$res_id"; ?>'>
<input name="sbt" id="sbt" value='Info' type="submit" style="background-color:#32cd32;">
</form>

</div>
<div class="wrap_two">
<!-- starts of info area -->
<div class="tab-content">
                
            


              <div class="vendor_info">More Info About New Ganesh Family Dhaba 


              </div>


              <div class="operating_times">Operating Times

<table class="table table-striped" style="
    border: 1px solid #e9e9e9;
    width: 65.1%;
    font-size: 13px;
    font-size: 1.3rem;
    display: block;
    
">
              <tbody>
                          <tr>
                <th>Sunday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Monday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Tuesday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Wednesday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Thursday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Friday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                          <tr>
                <th>Saturday</th>
                <td>
                                      12:00 pm<span> – </span>04:00 pm                                    07:00 pm<span> – </span>10:30 pm                                </td>
              </tr>
                        </tbody>
                      </table>

<div class="Delivery_areas"> Delivery Areas


<table style="border: 1px solid rgb(233, 233, 233); 
font-size: 1.3rem; display: block; width: 100%; margin-top: 10px;" class="table table-striped">
              <tbody>
                          <tr>
                <th><b>Delivery Locations</b></th>
                </tr>
                          <tr>
                <th>Bilekahalli</th>               
              </tr>
                          <tr>
                <th>Bommanahalli</th>
                
                              </tr>
                          <tr>
                <th>BTM Layout 1st Stage</th>         
                                      

                                  </tr>
                          <tr>
                <th>BTM Layout 2nd Stage</th>
                                </tr>
                          <tr>
                <th>Tavarkere</th>
                
                                        </tr>
                      
                
                                                                                             
              
                        </tbody>
                      </table>








</div>




                    </div>




                 







              <!-- <div class="vendor_cuisines_title"><i class="fa fa-cutlery"></i> No. 808, 7th cross, BTM 2nd Stage, Bangalore,Bangalore</div> -->
              <div class="vendor_cuisines">No. 808, 7th cross, BTM 2nd Stage, Bangalore,Bangalore<br>

<div class="home_delevery">Home Delivery Information </div>     
            
             
    <table style="min-width:300px;">
<tbody>
<tr>
  <td style="border-top:0px;"><b>Pure Vegetarian</b></td>
          <td style="border-top:0px;padding-left: 30px;">No</td>
              </tr>

              <tr>
  <td style="border-top:0px;"><b>Online Payment</b></td>
                <td style="border-top:0px;padding-left: 30px;">No</td>
              </tr>
              <tr>
  <td style="border-top:0px;"><b>Min Order</b></td>
                <td style="border-top:0px;padding-left: 30px;"> Rs 250</td>
              </tr>
              <tr>
  <td style="border-top:0px;"><b>Delivery </b></td>
                <td style="border-top:0px;padding-left: 30px;" "="">Free Home Delivery Within 3Kms Radius From The Restaurant.</td>
              </tr>
<tr>
<td style="border-top:0px;">Condition</td>
<td style="border-top:0px;padding-left: 30px;" "="">3Kms min order should be Rs.350</td></tr>

</tbody>
    </table>
                   
<div class="home_delevery">Map </div>
<div style="clear:both;"></div>
<div class="map"></div>

             </div>

<div style="clear:both;"></div>

                                               <div style="clear:both;"></div>
                                               
<div class="vendor_schedules_title">
 <i class="fa fa-map-marker"><b>&nbsp;&nbsp;&nbsp;Address </b></i>                         

</div>
<!-- <div class="address">   </div>  -->

<div class="address_details">
  House No.: 3-10-51,Near Foot Ball Ground,Tirumulgherry 'x' Road, Hyderabad, 500015
</div>                                           


<div style="clear:both;"></div>

<div class="vendor_schedules_title">
 <i class="fa fa-map-marker"><b>&nbsp;&nbsp;&nbsp;Delivery locations</b></i>                         

</div>

<div class="address_details">
  
     Alwal (Secunderabad) ,Karkhana (Secunderabad)
      Karkhana - Secunderabad Lal Bazar Lal Bazar (Secunderabad), Lal Bazar -
       Secunderabad Lothkunta (Alwal), New Bowenpally New Bowenpally (Secunderabad)
        New Bowenpally , Secunderabad Old Alwal (Alwal) Old Bowenpally Old Bowenpally 
        Old Bowenpally (Secunderabad) Old Bowenpally , Secunderabad Subhash Nagar (Secunderabad) 
        Subhash Nagar , Secunderabad Trimulgherry (Secunderabad) Trimulgherry , Secunderabad 



</div>      
</div>



<!-- ends of info area -->
</div>
</div> <!-- closing of main div -->
</body>
</html>