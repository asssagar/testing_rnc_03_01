<?php include('include/config.php'); ?>


<html>
<head>
  <title>Review's</title>
  <link rel="stylesheet" type="text/css" href="menu_items_info.css">
<style type="text/css">
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
  width: 60%;
    
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
      
    width: 75%;
    float: right;
    padding-left: 30px;
  
}
.cat_sub
{
  float: left;
    width: 20%;
   margin-left: 10px;
    display: inline-block;
}
.cat_sub a
{
  padding-top: 10px;
   font-size: 15px;
   margin-left: 20px;
   text-decoration: none;
   color: #906767;
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
  margin: 0 auto;
}
.link_area form input[type=submit]
{
  background-color: #fff;
}

.link_area form
{
  margin-left: 10px;
}

.link_area form input[type=submit]
{
  width: 30%;
  padding: 12px 180px 12px 30px;
  color: #434343;
  text-align: center;
  cursor: pointer;
  padding-left: 10px;
}


.link_area form input[type=submit]:focus
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
}

/*cart header....................*/

.cart_content{
position: relative;
font-size: 16px;
padding-top: 8px;
  font-family: calibiri, sans-serif;
}
.cart_content .itm_name{
width: 40%;
display: inline-block;
font-size: 16px;
padding-left: 5px;
}
.cart_content .quantity{
  position: absolute;
  display: inline-block;
  width: 10%;
  padding-left: 25px;

}
.cart_content .itm_price{
  width: 20%;
  display: inline-block;
  padding-left: 70px;
  position: absolute;

}
/*---------------subtotal-----------*/
.subtotal{
/*  position: relative;*/
  font-size: 20px;
  padding-top: 10px;
  color: #555;

}
.subtotal_cont{

  width: 45%;
  float: left;
  display: inline-block;
}
.item_total{
width: 40%;
/*position: absolute;*/
padding-left: 80px;
}
.voc_code{
 border:2px solid #777;
 border-radius: 8px;

}
#voc{
  width: 64%;
  height: 35px;
  font-size: 17px;
  padding-left: 5px;
}
#voucher_code
{
  float: right;
  background-color:#27ae60;
  border-radius: 8px;
  color: white;
  font-size: 18px;
  width: 36%;
  height: 35px;
border-color: #aaa;
  font-weight: 600;
}
#voucher_code:hover{
background-color:#2ecc71;
}


.sublists{
 padding-top: 20px;
 font-weight: 500;
font-family:   helvetica, sans-serif;
}
.sublist{
  color: #c72f29;
padding-left: 40px;
padding-right: 40px;
font-size: 18px;
 
}
.sublist_cont{
display: inline-block;
}
.sub_val{
float: right;
display: inline-block;
}
.sublist1{
color: black;
 color: #333;
padding-left: 40px;
padding-right: 40px;
padding-top: 10px;
 font-size: 16px;
}
.sublist1_cont{
display: inline-block;
}
.sub1_val{
float: right;
display: inline-block;
}
.total{
  font-size: 28px;
  background-color: #d6d6d6;
  padding-left: 40px;
  color: #333;
  height: 45px;
 font-weight: 500;
  padding-right: 20px;
  padding-top: 10px;
font-family:  helvetica, sans-serif;
}
.cont{
  display: inline-block;
}
.val{
  float: right;
  display: inline-block;
}
#chkout
{

  width: 100%;
  color: white;
  background-color: #27ae60;
  border-radius: 10px;
  height: 50px;
  font-size: 22px;
/*  border:2px solid #888;*/
  box-shadow: 0px 4px 2px -2px rgba(0, 0, 0, 0.70);
    padding-bottom: 10px;
    padding-top: 8px;
font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;

}
#chkout:hover{
  background-color: #2ecc71;
}
#chkout:focus{
  background-color: #2ecc71;
}
#chk{
  box-shadow: 0px 4px 2px -2px rgba(0, 0, 0, 0.70);
    padding-bottom: 20px;
    padding-top: 20px;
    margin:0 auto;

}
.order_info
{
  font-size: 28px;
  text-align: center;
  color: #333;
  padding-top: 10px;
  padding-bottom: 20px;
}
.order_cont{
  font-size: 18px;
}
.avg_del_tm{
  display: inline-block;
padding-bottom:10px; 
}
.tm{
  display: inline-block;
  float: right;
  padding-top: 10px;
}


.cart_hd{
  font-size: 20px;
  font-family: helvetica, sans-serif;
  color: #555;
  position: relative;
  padding: 10px;
  font-weight: 500;
}
.cart_hd .name{
width: 18%;
display: inline-block;
float: left;
padding-left: 10px;

}
.qlty{
  position: absolute;
  display: inline-block;
  width: 20%;
  padding-left: 20px;

}
 .price{
  width: 15%;
  display: inline-block;
  padding-left: 90px;
 
}

  </style>



<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["action"])) {
switch($_POST["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT res_id,itm_name,itm_id,quantity,itm_price FROM khanaman.km_restr_menu WHERE itm_id='" . $_POST["itm_id"] . "'");

			$itemArray = array($productByCode[0]["itm_id"]=>array('res_id'=>$productByCode[0]["res_id"],'itm_name'=>$productByCode[0]["itm_name"], 'itm_id'=>$productByCode[0]["itm_id"], 'quantity'=>$_POST["quantity"], 'itm_price'=>$productByCode[0]["itm_price"]));
			

			if(!empty($_SESSION["cart_item"])) {

				$res_id=$productByCode[0]["res_id"];
                                $code_value=$productByCode[0]["itm_id"];
                                $code_array = array('itm_id'=>"");

                                foreach($_SESSION["cart_item"] as $k => $v) {
                                          array_push($code_array,$_SESSION["cart_item"][$k]["itm_id"]);
					}


				if(in_array($productByCode[0]["itm_id"],$code_array,$res_id)) {


					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["itm_id"] == $k){
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];}

                                        if($_SESSION["cart_item"][$k]["quantity"]<=0)
                                        {
					if($_POST["itm_id"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
                                        }
					}



				} else {
					//echo $_SESSION["cart_item"][0];
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["itm_id"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;}}
?>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>
























 <div id="cart-item">
  <div id="shopping-cart">
	 <div class="cart_hd">

    <!-- <div class="id" > id</div> -->
      <div class="name" >Name</div>&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="qlty" >Quantity</div>&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="price" >Price</div>&nbsp;&nbsp;&nbsp;&nbsp;
     </div>	


		<?php	
			$cart=$_SESSION["cart_item"];
   	 		foreach ($_SESSION["cart_item"] as $item){
		?>
		

  <div class="cart_content">
      <!-- <div class="itm_name"><?php echo $item["res_id"]; ?> -->
      <div class="itm_name"><?php echo $item["itm_name"]; ?>
      <!-- <center><i class="fa fa-plus-circle" onClick="cartAction('add','<?php echo $item["itm_id"]; ?>','')" class="btnRemoveAction cart-action" style="color:#27ae60;font-size:22px;"></i>&nbsp;&nbsp;<i class="fa fa-minus-circle" onClick="cartAction('add','<?php echo $item["itm_id"]; ?>','-')" class="btnRemoveAction cart-action" style="color:#c72f29;font-size:22px;"></i></center> --></div>

      <div class="quantity" ><?php echo $item["quantity"]; ?></div>&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="itm_price" ><?php echo "₹".$item["itm_price"]; ?></div>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>

		<br>
		<br>
	
			<!-- <td><a onClick="cartAction('remove','<?php echo $item["itm_id"]; ?>','')" class="btnRemoveAction cart-action">Remove Item</a></td> -->
			<?php

        $item_total += ($item["itm_price"]*$item["quantity"]);
		
    }
		?></div>
<div class="subtotal">
  <!-- <center><div class="subtotal_cont">Subtotal&nbsp;&nbsp;:</div></center> -->
 <!-- <center> <div class="item_total"><?php //echo "₹".$item_total; ?></div></center> -->

</div>

<br>

<?php } ?>

</div>





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


$cart_query = ("SELECT serv_fee,container_fee,serv_tax,vat FROM khanaman.restaurant_register where res_id='" . $item["res_id"] . "'");
 $result = $conn->query($cart_query);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()){?>
<?php
          $row['serv_fee']."  ";
          $row['container_fee']."<br>";
          $row['serv_tax'];
          $row['vat'];
         ?>



<?php 
 echo "Subtotal = ". "Rs"." ".$item_total."<br>";
//echo "Vat = ".$row['vat']."%";
$vat_value = $item_total * $row['vat'] * 0.01;
//echo "<br>";
echo "vat =". "Rs"." ".$vat_value."<br>";

//echo "service tax = ".$row['serv_tax']."%";
$service_tax_value = $item_total * $row['serv_tax'] * 0.01;
//echo "<br>";
 echo "service tax = ". "Rs"." ".$service_tax_value ."<br>";

$service_fee = $row['serv_fee'];
echo  "service fee = ". "Rs"." ".$service_fee."<br>";

$container_charge = $item_total/$item["itm_price"];
$container_fee = (ceil($container_charge)*$row['container_fee']);
echo "container charge = ". "Rs"." ".$container_fee."<br>";

//Total amount calculated here
$total_amount = $item_total + $vat_value + $service_tax_value + $service_fee + $container_fee;
echo "Total Amount with taxes = ". "Rs"." ".$total_amount."<br>";     
?>
<br>
 <?php }
       } else{ echo ' ';}
    
?>
 
<div style="clear:both;"></div>


<!-- this area is for voucher code area strats -->
<?php

// Create connection
$conn = mysqli_connect('localhost', 'khanaman', '456789', 'khanaman');
// Check connection
if (!$conn) {
    //echo "connected<br>";
    die("Connection failed: " . mysqli_connect_error());
}
?>


<div id="v_form">
<form method= "POST" action= "#" >
<input type="text" name="code" style="border: 1px solid;"placeholder="Enter Your Voucher Code ">
<input type= "submit" value= "submit" name= "submit" >
</form>

<?php
if (isset($_POST['code'])) {
 $code = $_POST['code'];
}else{$code='';}

 echo "<br>";



$sql = "SELECT disc_per FROM km_vouchr where vou_name = '".$code."' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $discount = $row["disc_per"];
         "discount % = ".$discount;//this is for discount percentage



$payable_amount = ($item_total - ($item_total* $discount * 0.01));
 echo "<br>";

 echo "Payable amount = ".$payable_amount;
    }
} else {

  if ($result = '') {
    echo "Not Matched ";
  }else{
    echo " ";
  }
    
}

mysqli_close($conn);
?>  




</div>



<!-- this area is for voucher code area ends -->


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
// static value is given

$sql = "SELECT name,min_order,min_order,res_cat,image FROM restaurant_register WHERE res_id='".$item["res_id"]."'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()){?>
<?php  $row['res_id']."  ";
                  $row['name']."<br>";
          
          $row['res_des'];
          $row['min_order'];
          $row['res_cat'];
          $row['image'];?>


<!-- below starts for restaurant details for cart -->
<span style="display: inherit;">Restaurant Details </span>
<div class="row_data">

  <div class="vender_pic">
  
<!-- <img src="displayImg.php?url=http://phpsnips.com/images/phpsnippets.jpg" /> -->
<img src="<?php echo $row["image"];?>"/ > 



</div>

<div class="vender_details"><?php echo $row['name']; ?></div>


<div class="vender_Delivery">Delivery Fee<br>Rs 200</div>

<div class="vender_order">Min Order<br>Rs <?php echo $row['min_order']; ?>
</div>

</div>



<?php }
       } else{echo "nothing"; }
    
?>