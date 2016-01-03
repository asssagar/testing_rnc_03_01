<html>
<style>
.item_details
{
font-size: 20px;
padding-left: 0px;
}
.item_inner_details
{
padding-left: 35px ;
font-size:12px;
}
</style>

<?php
session_start();

include('include/config.php');
include('login.php');


$servername = "localhost";
$username = "khanaman";
$password = "456789";
$dbname = "khanaman";

$conn = new mysqli($servername, $username, $password, $dbname);

//echo $ord_id;

$usr_id = $_SESSION['usr_id'];

if(empty($_SESSION['login_user'])){
include('header.php');
}
else{
include('user_home.php');
}

require_once("sendsms.php");
$msg_handle = new SendSms();

$cart=$_SESSION["cart_item"];

$phn_cust = $_SESSION['USR_CNTCT_NBR'];
$usr_name = $_SESSION['USR_NAME'];
$usr_adrs = $_SESSION['USR_CURR_ADDR'];
$res_id = $_SESSION['res_id'];
//echo $res_id;


$phn_vendor = $_SESSION['phn_vendor'];
$ord_num = 1;
$tot = 0;
date_default_timezone_set("Asia/Kolkata");
$tm = date("Y-m-d h:i a");
$msg_vendor="Received%20Order:%20:".$ord_num."%20on%20".$tm."%20Details:%20";
$tme = date("Ymdhis");
//echo $tme;
$ord_id = "$usr_id"."$tme";
//echo $ord_id;

echo '<div class="item_details">Cart Details';
echo '<div class="item_details">Order Id : '.$ord_id.' </div>';
foreach ($_SESSION["cart_item"] as $item){
?>
<tr>
<td><strong><?php echo $item["itm_name"]; ?></strong></td>
<td><strong><?php echo $item["itm_id"]; ?></strong></td>
<td><strong><?php echo $item["quantity"]; ?></strong></td>
<td><strong><?php echo $item["itm_price"]; ?></strong></td>
</tr>
<br/>
</div>
<?php

$itm_id = $item['itm_id'];
$itm_name = $item['itm_name'];
$itm_qty = $item['quantity'];
$tot_itm_amt = $item['itm_price']*$itm_qty;

$sql = "insert into khanaman.order (order_id,res_id, itm_id, usr_id, quant, itm_amt, itm_name) values ($ord_id, '$res_id', '$itm_id', '$usr_id', '$itm_qty',$tot_itm_amt ,'$itm_name')";

$ord_results = $conn->query($sql);

$tot = $tot + ($item["quantity"]*$item["itm_price"]);
$msg_vendor = $msg_vendor."%20".$item['itm_name']."%20X%20".$item['quantity']."%20%20";
}
$msg_vendor = $msg_vendor."%20%20Total%20Price%20:%20".$tot;
$msg_vendor = preg_replace('/\s+/', '%20', $msg_vendor);

$msg_cust = "Order%20:".$ord_num."%20by%20".$usr_name."%20,%20Ph.%20".$phn_cust."%20on%20address:%20".$usr_adrs;
$msg_cust = preg_replace('/\s+/', '%20', $msg_cust);

echo $msg_vendor;
echo "<br/>";
echo $msg_cust;
//echo $phn_vendor;
//$c=$msg_handle->sendmsg($phn_vendor,$msg_vendor);
//$c=$msg_handle->sendmsg($phn_cust,$msg_cust);
?>
</html>