<!-- if error occurs in any radio button please check kahanaman de.php -->
<?php
session_start();
include('include/config.php');
include('login.php');
require_once("dbcontroller.php");
$db_handle = new DBController();
$res_id=$_GET['res_id'];

echo $res_id;

$usr=$_SESSION['login_user']; // Initializing Session
//echo "Hello";
$USR_ID = $_SESSION['usr_id'];

if(empty($_SESSION['login_user'])){
include('header_chk.php');
}
else{
include('user_home.php');
}
?>

<html>
<head>
    <title>Checkout </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="build/jminmaxselect-0.5.0.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Restaurant_form</title>

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-multiselect.css" rel="stylesheet">
    
<link rel="stylesheet" href="css/netdna.css">

  
 


<!--disable textbox for onr radio button-->
<script type="text/javascript"> 
function disablefield(){ 
if (document.getElementById('yes_radio').checked == 1){ 
document.getElementById('textbox_A').disabled='disabled'; 
document.getElementById('textbox_A').value='disabled';
}else{ 
document.getElementById('textbox_A').disabled=''; 
document.getElementById('textbox_A').value='Allowed'; } 
} 
</script>

<style type="text/css">
#Div2 {
  display: none;
}
.tableheader p input[type="text"]{		
	    -webkit-box-shadow: inset 1px 1px 3px 1px #ABABAB;		
	    /*-moz-box-shadow: inset 1px 1px 6px 1px #ABABAB;		
	    -o-box-shadow: inset 1px 1px 6px 1px #ABABAB;*/		
	    margin-bottom: 10px;		
	    border-radius: 2px;		
	  width: 100%;		
	padding: 5px 100px 5px 5px;		
	}

.inner_wrapper
{
	margin: 0 auto;
}
.ckeck_out
{
	font-weight: 700;
	font-size: 20px;
	background-color:#C9282D;
	color: #FFF;
	text-align: center;
  padding-bottom: 10px;
  padding-top: 10px;

}
.left_wrap
{
	
	width: 48%;
	float: left;
	padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
    border-radius: 15px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 10px;
    padding-left: 0;
    min-height: 85px !important;
    cursor: default;
    border: 1px solid #ddd;
    font-weight: 700;
        margin-top: 15px;
        margin-left: 15px;
}
.left_wrap:hover
{
	background-color: #E9EBEE;
}
.right_wrap:hover
{
	background-color: #E9EBEE;
}
.rest_details #head
{
	color: #333;
  font-size: 20px;
  padding-top: 10px;
}
.item_details
{
	font-size: 20px;
  padding-left: 28px;
}
.item_inner_details
{
 
       padding-left: 35px ;
       font-size:12px;
     }

.right_wrap
{
	float: right;
	width: 48%;
  
  padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
    border-radius: 15px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 0px;
    padding-left: 0;
    padding-bottom: 25px;
    min-height: 85px !important;
    cursor: default;
    border: 1px solid #ddd;
    font-weight: 700;
    margin-top: 15px;
    margin-left: 15px;
    margin-right: 10px;
}
.clear
{
	clear: both;
}
.row_data
{
	display: inline-block;
	margin-bottom: 10px;
}
.vender_pic
{
	display: inline-block;
	float: left;
	padding-left: 25px;
}
.vender_details
{
/*    display: block;*/
    padding-left: 25px;
    padding-top: 5px;
    font-size: 20px;
    color: #555;
    float: left;

}
.vender_Delivery
{
	    display: inline-block;
    padding-left: 10px;
    padding-top: 30px;
    float: right;

}
.vender_order
{
      display: block;
    padding-left: 0px;
    padding-top: 30px;

  /*  float: right;*/
      padding-left: 170px;

}

.delivery_heading
{
	padding-left: 30px;
  font-weight: 600;
  font-size: 20px;
  color: #333;
  padding-top: 10px;

}
.delivery_details
{
	margin: 0 auto;
	padding-left:25px;
}

.address_heading
{

	padding-bottom: 20px;
    border-bottom: 1px solid #ddd;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    box-shadow: 0 1px 2px rgba(0,0,0,0.075);
    margin-bottom: 10px;
    padding-left: 0;
    min-height: 85px !important;
    cursor: default;
    border: 1px solid #ddd;
    font-weight: 700;
        margin-right: 15px;
         margin-left: 15px;
         padding: 10px;
        height: auto;
}

.address_heading:hover
{
	background-color: #E9EBEE;
}
.address_details
{
	
  text-align: center;
  background-color: #C9282D;
  color: white;
      border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    padding-bottom: 10px;
    padding-top: 10px;
font-size: 16px;
}


.left_one_address
{
  /*
  float: left;*/
  margin-left: 20px;
  /*addeed by 12_Dec*/
}

.left_one_address input[type=button]
{
  background-color: #399630;
  color: #fff;
  border: 1px solid #399630;
}


.right_one_add input[type=button]
{
  background-color: #399630;
  color: #fff;
  border: 1px solid #399630;
}
.right_one_add input[type=submit]
{
  background-color: #399630;
  color: #fff;
  border: 1px solid #399630;
}


.right_one_add
{
  display: inline-block;
 /* float: right;*/
  margin-left: 20px;

  /*addeed by 12_Dec*/
}

 .right_one_add input[type=button]
 {
/*  float: left;*/
  margin: 0 auto;
 }
.address_body
{
  
}
.clear
{
  clear: both;
}
.user_info_details
{
  text-align: center;
}
.choose_add
{
  
  text-align: center;
  background-color: #C9282D;
  color: #fff;
  border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-size: 16px;
}
.delivery_details input[type=submit]
{
  
  float: none;
  background-color: #399630;
  color: #fff;
  border: 1px solid #399630;
}
.test_table
{
  
}

/*added by punam*/
#plc		
	{		
	  border-radius: 8px;		
	  padding-right: 70px;
    padding-left: 70px;		
	  padding-top: 10px;		
	  padding-bottom: 10px;		
	  font-size: 18px;		
	  font-weight: 400;		
	  background-color: #27ae60;		
			
	}		
	#plc:focus,#plc:hover		
	{		
	  background-color: #2ecc71;		
	  outline: none;		
	  border:2px solid #27ae60;		
	} 		
	#plc:active {		
	    border:1px solid #27ae60;		
	    box-shadow: 0px 0px 5px rgba(0,0,0,0.75);		
	}		
	/*end*/
#submt
{
  border-radius: 5px;

padding-right: 15px;
padding-left: 15px;
  font-size: 18px;
  font-weight: 400;
  background-color: #27ae60;

}
#submt:focus,#submt:hover
{
  background-color: #2ecc71;
  outline: none;
  border:2px solid #27ae60;
} 
#submt:active {
    border:1px solid #27ae60;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.75);

}
#Button2
{
  border-radius: 5px;

padding-right: 10px;
padding-left: 10px;
  font-size: 18px;
  font-weight: 400;
  background-color: #27ae60;

}
#Button2:focus,#Button2:hover
{
  background-color: #2ecc71;
  outline: none;
  border:2px solid #27ae60;
} 
#Button2:active {
    border:1px solid #27ae60;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.75);

}

#Button1{
  border-radius: 5px;

padding-right: 10px;
padding-left: 10px;
  font-size: 18px;
  font-weight: 400;
  background-color: #27ae60;

}
#Button1:focus,#Button1:hover
{
  background-color: #2ecc71;
  outline: none;
  border:2px solid #27ae60;
} 
#submt:active {
    border:1px solid #27ae60;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.75);

}
#Div1{
  
  height: auto;
  background-color: #eeeeee;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 0px;
-moz-box-shadow: 0 0 2px 2px #888;
-webkit-box-shadow: 0 0 2px 2px#888;
box-shadow: 0 0 2px 2px #888;


margin-right: 20px;
/*added by 12_dec*/
}


/*media query starts*/
@media only screen and (min-width:801px) and (max-width: 999px)  {		
	  .left_wrap		
	{		
	  margin: 0 auto;		
	  width: 90%;		
	  margin-top:10px;		
	margin-left: 15px;		
	float: none;		
	}		
			
	.right_wrap		
	{		
	   width: 90%;		
	margin-top: 10px;		
	float: none;		
	}		
	}
@media only screen and (min-width:100px) and (max-width: 800px)  {

.left_wrap
{
  margin: 0 auto;
  width: 90%;
  margin-top:10px;
margin-left: 15px;
float: none;
}

.vender_details{
    padding-left: 25px;
    padding-top: 5px;
    display: block;


}
.vender_Delivery
{
  display: inline-block;


    padding-top: 10px;

  /*  float: right;*/
      padding-right: 20px;
}
.vender_order{
display: inline-block;

float: left;

    padding-top: 10px;

  /*  float: right;*/
      padding-left: 20px;
}

.item_details
 {
    font-size: 15px;
    padding-left: 5px;
    text-align: center;
    text-decoration: underline;
  }



.item_inner_details {
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;
}

.right_wrap
{
   width: 90%;
margin-top: 10px;
float: none;
}

.address_body input[type=button]
{
  color: black;
  float: none;
  background-color: #399630;
}

.right_one_add
{
  float: none;
}
.delivery_heading
{
  padding-top: 20px;
  font-size: 20px;
}

.delivery_details span
{
  font-size: 15px;
}

#Button2
{
  border-radius: 5px;
color: #fff;
padding-right: 10px;
padding-left: 10px;
  font-size: 18px;
  font-weight: 400;
  background-color: #27ae60;
   margin-bottom: 5px;

}
#Button2:focus,#Button2:hover
{
  background-color: #2ecc71;
  outline: none;
  border:2px solid #27ae60;
} 
#Button2:active {
    border:1px solid #27ae60;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.75);

}

#Button1{
  border-radius: 5px;
color: #fff;
padding-right: 10px;
padding-left: 10px;
  font-size: 18px;
  font-weight: 400;
  background-color: #27ae60;


}
#Button1:focus,#Button1:hover
{
  background-color: #2ecc71;
  outline: none;
  border:2px solid #27ae60;
} 


}
/*media query ends here*/
</style>




</head>
<body>
<div class="wrapper">
<div class="inner_wrapper">


<div class="left_wrap">
<div class="rest_details"><span id="head" style="padding-left:30px;"><!-- Restaurant Details  --></span><br>
 

<!-- above ends for restaurant details for cart -->
</div>



<div class="item_details">Cart Details
<div class="item_inner_details">
<?php include('new_ajax.php'); ?>

<!-- Total:<?php echo "$".$item_total; ?> --></div>
</div>
</div>

<!-- starts delivery section -->
<div class="right_wrap">
<div class="delivery_heading">	Delivery </div>
<br>
<div class="delivery_details">	

<form id="main" action="final.php" method="POST" onsubmit="return validate(this);" enctype="multipart/form-data">
 
<fieldset>  
<div class="option" style="font-size:16px;">
<span><input type="radio" name="day"  required id="1" value="No Holiday" />&nbsp;Delivery Now<br></span>
  <span><input type="radio" name="day" id="2" value="Closing Day" />&nbsp;Delivery Later&nbsp;&nbsp;</span>
<div class="c_days" style="width:100px;display:inline-block;">
<select name="c_day"class="days1">
    <option value="time">10:00 AM</option>
    <option value="time">10:30 AM</option>
    <option value="time">11:00 AM</option>
    <option value="time">11:30 AM</option>
    <option value="time">12:00 AM</option>
    <option value="time">12:30 AM</option>
    <option value="time">1:00 PM</option>
    <option value="time">1:30 PM</option>
    <option value="time">2:00 PM</option>
    <option value="time">2:30 PM</option>
    <option value="time">3:00 PM</option>
    <option value="time">3:30 PM</option>
    <option value="time">4:00 PM</option>
    <option value="time">4:30 PM</option>
    <option value="time">5:00 PM</option>
    <option value="time">5:30 PM</option>
    <option value="time">6:00 PM</option>
    <option value="time">6:30 PM</option>
    <option value="time">7:00 PM</option>
    <option value="time">7:30 PM</option>
    <option value="time">8:00 PM</option>
    <option value="time">8:30 PM</option>
    <option value="time">9:00 PM</option>
    <option value="time">9:30 PM</option>
    <option value="time">10:00 PM</option>
    <option value="time">10:30 PM</option>
    <option value="time">11:00 PM</option>
    
    
    
    
  </select><br>
</div>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
 <span> <input type="radio" name="day"  id="3" value="Takeaway" />&nbsp;Takeaway</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div class="time_rst" style="display:inline-block;">

  <select name="h_day" class="days">
    <option value="time">10:00 AM</option>
    <option value="time">10:30 AM</option>
    <option value="time">11:00 AM</option>
    <option value="time">11:30 AM</option>
    <option value="time">12:00 AM</option>
    <option value="time">12:30 AM</option>
    <option value="time">1:00 PM</option>
    <option value="time">1:30 PM</option>
    <option value="time">2:00 PM</option>
    <option value="time">2:30 PM</option>
    <option value="time">3:00 PM</option>
    <option value="time">3:30 PM</option>
    <option value="time">4:00 PM</option>
    <option value="time">4:30 PM</option>
    <option value="time">5:00 PM</option>
    <option value="time">5:30 PM</option>
    <option value="time">6:00 PM</option>
    <option value="time">6:30 PM</option>
    <option value="time">7:00 PM</option>
    <option value="time">7:30 PM</option>
    <option value="time">8:00 PM</option>
    <option value="time">8:30 PM</option>
    <option value="time">9:00 PM</option>
    <option value="time">9:30 PM</option>
    <option value="time">10:00 PM</option>
    <option value="time">10:30 PM</option>
    <option value="time">11:00 PM</option>
  </select>


    
</div>
  </div>

</fieldset>
<br>



<input name="submit" type="submit" value="submit"  id="submt"><br>

  



</form>
 </div>
</div>
<!-- ends of delivery section -->

<div class="clear"></div>


<div class="left">
  <?php 
$servername = "localhost";
$username = "khanaman";
$password = "456789";
$dbname = "khanaman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT rtrim(ltrim(aes_decrypt(USR_NAME,'Asssagar@4321'))) as USR_NAME,rtrim(ltrim(aes_decrypt(USR_EMAIL_ID,'Asssagar@4321'))) as USR_EMAIL_ID,rtrim(ltrim(aes_decrypt(USR_CNTCT_NBR,'Asssagar@4321'))) as USR_CNTCT_NBR,USR_CURR_ADDR_LN_1,USR_CURR_ADDR_LN_2,USR_CURR_LOCALITY,USR_CURR_CITY FROM khanaman.km_user WHERE USR_ID=$USR_ID";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()){?>
<?php  
          $row['USR_NAME']."<br>";          
          $row['USR_EMAIL_ID'];
          $row['USR_CNTCT_NBR'];
          $row['USR_CURR_ADDR_LN_1'];
          $row['USR_CURR_ADDR_LN_2'];

          $_SESSION['USR_NAME']=$row['USR_NAME'];          
          $_SESSION['USR_EMAIL_ID']=$row['USR_EMAIL_ID'];
          $_SESSION['USR_CNTCT_NBR']=$row['USR_CNTCT_NBR'];
          $_SESSION['USR_CURR_ADDR']=$row['USR_CURR_ADDR_LN_1'].$row['USR_CURR_ADDR_LN_2'];
?>

<div class="left_wrap">
<div class="address_details">User Details</div>
<div class="user_info_details">
<br>
Name:<?php echo $row['USR_NAME'];?><br>
User Email Id :<?php echo $row['USR_EMAIL_ID'];?><br>
User Contact No :<?php echo $row['USR_CNTCT_NBR'];?><br>
 <a href="logout.php" >(Not you? Login Again)</a>
</div>
<br></div>



<div class="right_wrap">
<div class="choose_add">Choose Address</div><br>
<div class="address_body">


<div class="left_one_address">
<input id="Button2" type="button" value="Existing Address"  onclick="switchVisible();"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br><br>
<div id="Div1">

<br>
<br>


Name :<?php echo $row['USR_NAME'];?><br>

Address Line 1:<?php echo $row['USR_CURR_ADDR_LN_1'];?><br>

<?php 
       // $test=$row["USR_CURR_ADDR_LN_1"];
       // print_r($test);
     ?>

Locality:<?php echo $row['USR_CURR_LOCALITY'];?><br>
city:<?php echo $row['USR_CURR_CITY'];?><br>

<br><br>

<?php }
       } else{}
    
?>
</div>

</div>


<br>

<div class="right_one_add">

<input id="Button1" type="button" value="Add new Area" onclick="switchVisible();"/>

<div id="Div2">

<div class="table_area">
  <div class="test_table">
  <br>
<form name="frmChange" id="myform" method="POST" enctype="multipart/form-data" onSubmit="return validatePassword()" >
  
     <div class="tableheader">
    

    		
	     <p style="color:#444;font-size:16px;"> Name :<br>
       <input type="text" name="user_name"><br>
  

       House / Apartmant No :<br>
       <input type="text" name="house"><br>
   </p>
    		
	     <p style="color:#444;font-size:16px;">  Apartmant Name :<br>

       <input type="text" name="apartmant"><br>
     

       Sub Area:<br>

       <input type="text" name="Sub" >  <br>     
       </p>
     

     		
	     <p style="color:#444;font-size:16px;">  Locality: <br>

       <input type="text" name="local"><br>

        City:<br>

       <input type="text" name="city"><br>
       </p>

           		
	     <p style="color:#444;font-size:16px;"> Landmark: <br>
      <input type="text" name="land"><br>


     Pin:<br>

       <input type="text" name="pin">
       </p>



       		
	     <p style="color:#444;font-size:16px;">  State:<br>

       <input type="text" name="state">
    
<br><br>
       
        <input type="submit" id="submt" value="submit" name="submit"  style="float:left;">
           </p>
       </div>
       </form>
     </div>
     <div class="claer"></div>


    
<?php
 $user_name = '';
if(isset($_POST['user_name'])){
    $user_name .= $_POST['user_name'];
}

   
 
$name = '';
if(isset($_POST['house'])){
    $name .= $_POST['house'];
}
if(isset($_POST['apartmant'])){
    //add a space before
    $name .= ' ' .$_POST['apartmant'];
}
if(isset($_POST['Sub'])){
    //add a space before
    $name .= ' ' . $_POST['Sub'];
}

$local = '';
if(isset($_POST['local'])){
    $local .= $_POST['local'];
}

$city = '';
if(isset($_POST['city'])){
    $city .= $_POST['city'];
}


$addres = '';
if(isset($_POST['land'])){
    $addres .= $_POST['land'];
}
if(isset($_POST['pin'])){
    //add a space before
    $addres .= ' ' .$_POST['pin'];
}
if(isset($_POST['state'])){
    //add a space before
    $addres .= ' ' . $_POST['state'];
}


$connection = mysql_connect("localhost","root","");
mysql_select_db("khanaman",$connection);
$quer = mysql_query("SELECT * from user WHERE USR_ID='$USR_ID'");
$row_data=mysql_fetch_array($quer);

$sql3="UPDATE user set USR_CURR_ADDR_LN_1='$name',USR_NAME='$user_name',USR_CURR_LOCALITY='$local',USR_CURR_CITY='$city', USR_CURR_ADDR_LN_2='$addres' WHERE USR_ID=$USR_ID";//'" . $_SESSION['login_user'] . "'
mysql_query($sql3,$connection);

if ($sql3==TRUE) {

 //echo "<script>alert( 'Details changed')</script>";
}
   else {
   echo "<script>alert(' Current details not correct ')</script>";
    }

?>

</div>
</div>
</div>



</div>
</div>

<div class="clear"></div>




</div>
<br>
<br>

 <!-- added 12 dec -->
     <div class="place_order">
      <center> <input type="button" id="plc" value="Place Order" style="color:white;"></center>
     </div>
<br>
</div>


<script type="text/javascript">
function switchVisible() {
            if (document.getElementById('Div1')) {

                if (document.getElementById('Div1').style.display == 'none') {
                    document.getElementById('Div1').style.display = 'block';
                    document.getElementById('Div2').style.display = 'none';
                }
                else {
                    document.getElementById('Div1').style.display = 'none';
                    document.getElementById('Div2').style.display = 'block';
                }
            }
}

</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="ajax.google.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="jquery-1.8.0.min.js"></script>
    <script src="js/bootstrap-multiselect.js"></script>
    <script src="js/bootstrap-multiselect-collapsible-groups.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
     <script src="js/netdna.js"></script>



   <script type="text/javascript">
  $(document).ready(function() {
    $('.multiselect').multiselect({
      enableFiltering: true
    });
  });
</script>


<!--for required one checkbox-->

<script type="text/javascript">
$(document).ready(function () {
    $('#f_checkbox').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

</script>
<!--for weekdays-->
<script type="text/javascript">

$('#from_day').jMinMaxSelect({
     maxSelect: '#upto',
     createMax: true
    
 });

</script>


<script type="text/javascript">
  
$('input[name="day"]').on('change', function() {
  // this, in the anonymous function, refers to the changed-<input>:
  // select the element(s) you want to show/hide:
  $('.time_rst')
      // pass a Boolean to the method, if the numeric-value of the changed-<input>
      // is exactly equal to 2 and that <input> is checked, the .business-fields
      // will be shown:
      .toggle(+this.id === 3 && this.checked);
// trigger the change event, to show/hide the .business-fields element(s) on
// page-load:
}).change();
</script>





  <script type="text/javascript">
  
$('input[name="day"]').on('change', function() {
  // this, in the anonymous function, refers to the changed-<input>:
  // select the element(s) you want to show/hide:
  $('.c_days')
      // pass a Boolean to the method, if the numeric-value of the changed-<input>
      // is exactly equal to 2 and that <input> is checked, the .business-fields
      // will be shown:
      .toggle(+this.id === 2 && this.checked);
// trigger the change event, to show/hide the .business-fields element(s) on
// page-load:
}).change();
</script>

</body>
</html>