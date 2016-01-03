<?php 
session_start();
include('include/config.php'); 
include('login.php');

if(empty($_SESSION['login_user'])){
include('header.php');
}
else{
include('user_home.php');
}
?>

<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
  <title>Khanaman || We Provide You The Best</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!-- used css for this page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="filter_style.css">
<style type="text/css">

body
{

font-family: 'Roboto', sans-serif;
font-size: 16px;
font-weight: 500;
font-style: Medium;
}


</style>


<!--jquery-search-->
 


<script type="text/javascript">
$(document).ready(function(){
    $("button").click(function(){
        $("#dd").toggle();
    });
});
</script>
      </head>
    <body>
       <div class="cover">
<div class="clear" style="clear:both"></div>

<div class="sub_body">
<div class="left_area">
<div class="inner_left_area">
<div class="d_view">
<div class="top_haed"> <strong><b>FILTER RESTAURANT</b></strong></div><br>
<div class="responsive_view">


<form action="" method="post" >

<input type="checkbox" name="res_filter[]" value="1" <?php if(in_array(1,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Deals</b><br/>
<input type="checkbox" name="res_filter[]" value="2" <?php if(in_array(2,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Free Delivery</b><br/>
<input type="checkbox" name="res_filter[]" value="3" <?php if(in_array(3,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Pure Veg Only</b><br/>
</div>

<br/><br/>

<div class="clear" style="clear:both"></div>
<div class="responsive_view">
<div class="top_haed"> <strong><b>CUISINES</b></strong></div><br>
<input type="checkbox"  value="21" name="cui_filter[]" <?php if(in_array(21,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>North Indian</b><br>
<input type="checkbox"  value="22" name="cui_filter[]" <?php if(in_array(22,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>South Indian</b><br>
<input type="checkbox"  value="23" name="cui_filter[]" <?php if(in_array(23,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Chinese</b><br>
<input type="checkbox"  value="24" name="cui_filter[]" <?php if(in_array(24,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Fast-Food</b><br>
<input type="checkbox"  value="25" name="cui_filter[]" <?php if(in_array(25,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Snacks</b><br>
<input type="checkbox"  value="26" name="cui_filter[]" <?php if(in_array(26,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Tandoor</b><br>
<input type="checkbox"  value="27" name="cui_filter[]" <?php if(in_array(27,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Bakery</b><br>
<input type="checkbox"  value="28" name="cui_filter[]" <?php if(in_array(28,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Continental</b><br>
<input type="checkbox"  value="29" name="cui_filter[]" <?php if(in_array(29,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Desserts</b><br>
<input type="checkbox"  value="30" name="cui_filter[]" <?php if(in_array(30,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Biryani</b><br>
<input type="submit" name="formSubmit" value="Submit" />
 
</form>
<br>

</div>
</div>


<!-- for mobile view -->
<button class="filter_mobile_view"><i class="fa fa-filter"></i>&nbsp;&nbsp;Filter</button>
<div id="dd">
<br>

<div class="top_haed"> <strong>RESTAURANT CATAGORIES</strong></div><br>
<div class="responsive_view">

<form action="" method="post" >
<input type="checkbox" name="res_filter[]" value="1" <?php if(in_array(1,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Deals</b><br/>
<input type="checkbox" name="res_filter[]" value="2" <?php if(in_array(2,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Free Delivery</b><br/>
<input type="checkbox" name="res_filter[]" value="3" <?php if(in_array(3,$_POST['res_filter'])) {echo "checked";}else{echo "";}?>/><b>Pure Veg Only</b><br/>
<br>
</div>

<div class="clear" style="clear:both"></div>
<div class="responsive_view">
<div class="top_haed"> <strong>CUISINES</strong></div><br>
<input type="checkbox"  value="21" name="cui_filter[]" <?php if(in_array(21,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>North Indian</b><br>
<input type="checkbox"  value="22" name="cui_filter[]" <?php if(in_array(22,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>South Indian</b><br>
<input type="checkbox"  value="23" name="cui_filter[]" <?php if(in_array(23,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Chinese</b><br>
<input type="checkbox"  value="24" name="cui_filter[]" <?php if(in_array(24,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Fast-Food</b><br>
<input type="checkbox"  value="25" name="cui_filter[]" <?php if(in_array(25,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Snacks</b><br>
<input type="checkbox"  value="26" name="cui_filter[]" <?php if(in_array(26,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Tandoor</b><br>
<input type="checkbox"  value="27" name="cui_filter[]" <?php if(in_array(27,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Bakery</b><br>
<input type="checkbox"  value="28" name="cui_filter[]" <?php if(in_array(28,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Continental</b><br>
<input type="checkbox"  value="29" name="cui_filter[]" <?php if(in_array(29,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Desserts</b><br>
<input type="checkbox"  value="30" name="cui_filter[]" <?php if(in_array(30,$_POST['cui_filter'])) {echo "checked";}else{echo "";}?>><b>Biryani</b><br>
<input type="submit" name="formSubmit" value="Submit" id="sub" />


</div>
</form>
</div>
<!-- mobile view ends here -->
</div>
</div>

<div class="right_area">
  <div class="inner_right_box">  
  <div class="wrapper_rest">

<?php
    $query = $_GET['name']; 
    $min_length = 2;
    if(strlen($query) >= $min_length){ 
        $query = htmlspecialchars($query); 
        $query = mysqli_real_escape_string($connect, $query);
        $conc = "";
        $tot = "";
        $rest_filter = $_POST['res_filter'];
        $cuis_filter = $_POST['cui_filter'];
        }

//print_r(array_values($rest_filter));

  if(empty($rest_filter)) 
  {  } 
  else
  {
    $N = count($rest_filter) - 1;
    for($i=0; $i <= $N; $i++)
    {
         if($i==0)
        {
         $rest_conc = " AND (FILTER LIKE '%,".$rest_filter[$i].",%' "; 
        }
        else
        {
          $rest_conc = $rest_conc." AND FILTER LIKE '%,".$rest_filter[$i].",%'";
        }
     }
          $rest_conc = $rest_conc.")";
   }



  if(empty($cuis_filter)) 
  { } 
  else
  {
    $N = count($cuis_filter) - 1;
  
    for($i=0; $i <= $N; $i++)
    {
         if($i==0)
        {
         $cuis_conc = " AND (FILTER LIKE '%,".$cuis_filter[$i].",%' "; 
        }
        else
        {
          $cuis_conc = $cuis_conc." OR FILTER LIKE '%,".$cuis_filter[$i].",%'";
        }
     }
          $cuis_conc = $cuis_conc.")";
   }


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


$sql = "SELECT res_id,name,res_des,min_order,res_cat,image FROM restaurant_register WHERE UPPER(RES_LOC) LIKE UPPER('%".$query."%')".$rest_conc.$cuis_conc;
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()){?>
<?php     $row['res_id']."  ";
          $row['name']."<br>";
          $row['res_des'];
          $row['min_order'];
          $row['res_cat'];
          $row['image'];

$alt_text = "Serves Veg only";

if($row['res_cat']=="http://khanaman.in/testing/KHANAMAN/images/both.png")
{$alt_text="Serves Veg/Non-veg";}

?>

<!-- for mobile view upto 622px-->
<div class="row_data_mv">

<div class="vender_pic">

<!-- <img src="displayImg.php?url=http://phpsnips.com/images/phpsnippets.jpg" /> -->
<a href="testing_menu.php"><img src="<?php echo $row["image"];?>"/ > </a>

</div>


<div class="vender_details"><?php echo $row['name']; ?></div>

<div class="vender_star"><p><span style="font-size:16px;font-style:normal; padding-bottom:5px;">Pricing</span><br><i class="fa fa-inr"></i>-Budget<br><i class="fa fa-inr"></i><i class="fa fa-inr"></i>-Moderate<i class="fa fa-inr"></i><i class="fa fa-inr"></i><i class="fa fa-inr"></i>-Delux<br></p>
   <i class="fa fa-inr"></i>
  <i class="fa fa-inr"></i>
  </div>

<div class="veg_nonveg_area"><img src="<?php echo $row['res_cat'];?>" title="<?php echo $alt_text; ?>"></div>
<div class="vender_discount"></div>
<br>

<!--<div class="vender_Delivery">Delivery In<br> <?php echo $row['del_time']; ?> </div>-->

<div class="vender_Delivery">Delivery Fee<br>Rs 200</div>

<div class="vender_Delivery">Min Order<br>Rs <?php echo $row['min_order']; ?>
</div>

<div class="vender_cuisines"> <?php echo $row['res_des']; ?></div><br><br><br>

<div class="vender_menu">
<form method="GET" action="menu.php">
<input type=hidden name="res_id" value='<?php echo $row['res_id']; ?>'>
<input name="sbt" id="sbt" value='View Menu' type="submit">

</form>
</div>
</div>


<!-- end for MV upto 622px-->



<div class="row_data">
  <div class="vender_pic">

<!-- <img src="displayImg.php?url=http://phpsnips.com/images/phpsnippets.jpg" /> -->
<a href="testing_menu.php"><img src="<?php echo $row["image"];?>"/ > </a>

</div>

<div class="vender_details"><?php echo $row['name']; ?></div>
<div class="veg_nonveg_area"><img src="<?php echo $row['res_cat'];?>" title="<?php echo $alt_text; ?>"></div>
<div class="vender_discount"></div>
<br>
<div class="vender_cuisines"> <?php echo $row['res_des']; ?></div><br>
<div class="vender_star"><p><span style="font-size:16px;font-style:normal; padding-bottom:5px;">Pricing</span><br><i class="fa fa-inr"></i>-Budget<br><i class="fa fa-inr"></i><i class="fa fa-inr"></i>-Moderate<i class="fa fa-inr"></i><i class="fa fa-inr"></i><i class="fa fa-inr"></i>-Delux<br></p>
   <i class="fa fa-inr"></i>
  <i class="fa fa-inr"></i>


  </div>
<div class="vender_Delivery">Delivery In<br> <?php echo $row['del_time']; ?> </div>

<div class="vender_Delivery">Delivery Fee<br>Rs 200</div>

<div class="vender_Delivery">Min Order<br>Rs <?php echo $row['min_order']; ?>
</div>
<br>
<div class="vender_menu">
<form method="GET" action="menu.php">
<input type=hidden name="res_id" value='<?php echo $row['res_id']; ?>'>
<input name="sbt" id="sbt" value='View Menu' type="submit">

</form>
</div>



</div>
<?php }
       } else{ echo '<div style="text-align:center;"><h3><b>Oops! <br>Sorry No Results Found</b></h3></div> ';}
    
?>

    <div class="name_of_rest">
    <div class="vender_inner">
    <!-- <a href="<?php echo $results['res_id']; ?>"/>View Menu</a> -->  
    </div>
    </div>
</div>
</div>        

<!-- this is for left side bar -->

</div>
</div>

</div> 
</div>
<div style="clear:both;"></div>

<?php include('footer.php');?>
</body>
</html>