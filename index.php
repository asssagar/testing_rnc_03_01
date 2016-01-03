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

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<!--jquery-search-->
  <link rel="stylesheet" href="css/home_style.css">
        <div class="container">
        <div class="row">
      <div class="col-md-offset-2 col-md-8" align="center">

<style>
body {
    background:transparent url("images/f.jpg") no-repeat fixed center center / cover; 
    font-family: "Open Sans",sans-serif;
}
input[type="submit"]:focus,input[type="submit"]:active
{
/*added by punam*/
  outline: none !important;
  outline: 0;
  -moz-outline-style: none;
}

/*added by punam*/
#search input#srch {

cursor: pointer;
display: inline-block;
color: #000;
padding-top: 2px;
font-family: roboto;
font-weight: 300;
font-size: 20px;
padding-right: 35px;
color: #000; 
font-size: 19px;
 margin:0px;
 line-height: 10px;
 cursor:pointer; 
  padding-top:none;
  width: 95%;
/*add for fa icon*/
background:url("images/s.png") no-repeat right;
border:none;
}

#search{
  float: right;
}

input[type="submit"]:focus,input[type="submit"]:active
{/*added by punam*/
  outline: none !important;
  outline: 0;
  -moz-outline-style: none;
}
input:required{
  color: transparent;
  text-decoration: none;
  outline: none;
}
/*end change style */

@media only screen and (min-width:100px) and (max-width: 500px)  {
#search input#srch {
cursor: pointer;
display: inline-block;
color: #000;
padding-top: 2px;
color:white;
font-size: 20px;
    padding-right: 35px;
color: #000; 
font-size: 19px;
 margin:0px;
 line-height: 10px;
 cursor:pointer; 
  padding-top:none;
  width: 90%;
background-position-x:60px;
color:transparent;

}
#search input #srch:focus{
outline: none !important;
  outline: 0;
  -moz-outline-style: none;
default-background:none;
}

}
</style>

<section id="wrapper">  
  <div id="main">
    <div class="ui-widget">
          <style>
        </style>
<script type="text/javascript">
function fill(Value)
{
$('#name').val(Value);
$('#display').hide();
}

$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#display").html("");
}
else
{
$.ajax({
type: "POST",
url: "ajax.php",
data: "name="+ name ,
success: function(html){
$("#display").html(html).show();
}
});
}
});
});
</script>
      </head>
    <body>
  </div>
      </div> 
<div align="center">
    <meta name="description" content="">
<br>

    <meta name="author" content="">
   <div id="search">
<br>
<br>
    </div>
    </div></div></div></div>
</div>
            </div>
          </div>
        </div>
      </section>
<div id="content">
<?php $name=$_POST['name'];?>
<div class="search_t_bar">
<form method="get" action="filter.php" autocomplete="off">


<input name="name" id="name" required value="<?php echo $name;?>" type="text" placeholder="Enter Your Locality">



      <div id="search" type="submit" name="submit" ><!-- /*added by punam*/ -->
            <input type="submit" id="srch"  name="submit" value="Search" ></div>


            <!-- end changed code -->
</form>
</div>
<div id="display"></div>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['name']))
{
$query3=mysql_query("SELECT * FROM restaurant_register WHERE name LIKE '%$name%' ");
while($query4=mysql_fetch_array($query3))
{
echo "<div id='box'>";
echo "<b>".$query4['name']."</b>";
echo "<div id='clear'></div>";
echo $query4['descr'];
echo "</div>";
}
}
else
{
}
}
?>
</div>
<div class="clear_r" style="clear:both";></div>
<div class="content_section">
<div class="content_section_inside" >
<div class="rocket">
<i class="fa fa-rocket fa-5x"></i></div>
<br>
<p>
Ensured fast order and timely delivery with option of turbo service mode.
</p>
</div>

<div class="content_section_inside" >
  <div class="rocket">
<i class="fa fa-money fa-5x"></i>
</div>
<br>
<p>Get the best price and the discounts with no extra charges.</p><br>
</div>
<div class="content_section_inside" >
  <div class="rocket">
<i class="fa fa-phone fa-5x"></i></div>
<br>
<p>Order on call and helpline support for your full satisfaction</p>
</div>

<div class="content_section_inside" >
  <div class="rocket">
<i class="fa fa-star fa-5x"></i>
</div><br>
<p>Get food from your favorite and top rated outlet at a click</p>
</div>
</div>
<div class="clear" style="clear:both";></div>
<?php include('footer.php');?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</body>
</html>