
<?php include('include/config.php'); ?>


<html>
<head>
  <title>Review's</title>

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
							if($productByCode[0]["itm_id"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];

                                        if($_SESSION["cart_item"][$k]["quantity"]<=0)
                                        {
					if($_POST["itm_id"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
                                        }
					}



				} else {

					echo $_SESSION["cart_item"][0];

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

 <div id="cart-item_cv">
  <div id="shopping-cart_cv">


		<?php	
			$cart=$_SESSION["cart_item"];
   	 		foreach ($_SESSION["cart_item"] as $item){
		?>
		




			<!-- <td><a onClick="cartAction('remove','<?php echo $item["itm_id"]; ?>','')" class="btnRemoveAction cart-action">Remove Item</a></td> -->
			<?php

        $item_total += ($item["itm_price"]*$item["quantity"]);
		
    }
		?>
<div class="subtotal">
  

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


<?php }
       } else{ }
    
?>



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

$sql = "SELECT res_id,name,res_des,min_order,min_order,res_cat,image FROM restaurant_register WHERE res_id='".$item["res_id"]."'";
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

<div class="row_data">
  <div class="vender_pic">

<!-- <img src="displayImg.php?url=http://phpsnips.com/images/phpsnippets.jpg" /> -->
<img src="<?php echo $row["image"];?>"/ > 



</div>

<div class="vender_details"><?php echo $row['name']; ?></div>
<!-- <div class="vender_Delivery">Delivery In<br> <?php echo $row['res_cat']; ?> </div> -->

<div class="vender_Delivery">Delivery Fee<br>Rs 200</div>

<div class="vender_order">Min Order<br>Rs <?php echo $row['min_order']; ?>
</div>

</div>



<?php }
       } else{ }
    
?>