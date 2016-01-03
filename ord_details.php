<!DOCTYPE html>
<html>

<style type="text/css">
table {
border: 2px solid #000;
}
th
{
background-color: #F3767A; 
color:#fff;
border: 1px solid #000;
}
td
{
border-right: 1px solid #000;
text-align: center;
}
form input[type="submit"]
{
background-color: #27ae60;
float: left;
display: inline-block;
}
form
{
margin-top: 0px;
}
.table_head
{
background-color: #F3767A;
color: #fff;
border:solid;
font-size: 14px;
font-weight: 600;
border-style: thin;
padding-top: 3px;
padding-bottom: 3px;
padding-left: 2px;
margin-right:100px;
display: table-row;
}
.Cell1
{
display: table-cell;
border: solid;
border-width: 1px;
padding-left: 25px;
padding-right: 25px;
padding-bottom: 5px;
padding-top: 5px;
border-color: #aaaaaa;
}
.Row
{
display: table-row;
}
.Cell
{
display: table-cell;
border: solid;
border-width:1px;
padding-left: 25px;
padding-right: 25px;
padding-bottom: 5px;
padding-top: 5px;
border-color: #aaaaaa;
}
.Cell p
{
color: #333;
text-align: center;
font-size: 14px;
}
.headings
{ 
color: #444;
border-bottom: 2px solid #E9E9E9;
font-size: 22px;
}
</style>

<?php session_start();
include('include/config.php'); 

//include('login.php');

if(empty($_SESSION['login_user'])){
include('header.php');
}
else{
include('user_home.php');
}

$ord_id = $_GET['ord_id'];

$servername = "localhost";
$username = "khanaman";
$password = "456789";
$dbname = "khanaman";

$conn = new mysqli($servername, $username, $password, $dbname);

//echo $ord_id;

$usr_id = $_SESSION['usr_id'];
$sql = "SELECT order_id, res_id, itm_name, quant, itm_amt FROM khanaman.order where usr_id='$usr_id' and order_id = '$ord_id'";
$ord_results = $conn->query($sql);

if ($ord_results->num_rows > 0) {

echo '<div class="headings" style="margin-right:100px;">Order Details</div><br>';

echo '<form method="GET" action="user_account.php">';

// output data of each row

echo '<div class="table">';
echo '<div class="table_head">';
echo '<div class="Cell1">';
echo '<p>Order No.</p>';
echo '</div>';
echo '<div class="Cell1">';
echo '<p>Restaurant</p>';
echo '</div>';
echo '<div class="Cell1">';
echo '<p>Item</p>';
echo '</div>';
echo '<div class="Cell1">';
echo '<p>Quantity</p>';
echo '</div>';
echo '<div class="Cell1">';
echo '<p>Total Amount</p>';
echo '</div>';
echo '</div>';

while($row = $ord_results->fetch_assoc()){
echo '<div class="Row">';
echo '<div class="Cell">';
echo '<p>';
echo $row['order_id'];
echo '</p>';
echo '</div>';
echo '<div class="Cell">';
echo '<p>';
echo $row['res_id'];
echo '</p>';
echo '</div>';
echo '<div class="Cell">';
echo '<p>';
echo $row['itm_name'];
echo '</p>';
echo '</div>';
echo '<div class="Cell">';
echo '<p>';
echo $row['quant'];
echo '</p>';
echo '</div>';
echo '<div class="Cell">';
echo '<p>';
echo $row['itm_amt'];
echo '</p>';
echo '</div>';
echo '</div>';
}}
echo '</div>';
echo '<input name="Back" id="bck" value="Back" type="submit">';
?>
</HTML>