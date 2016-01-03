<?php $query=mysql_connect("localhost","root",""); 
mysql_select_db("khanaman",$query);
 ?>

<?php include('header.php'); ?>


<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
  <title>Khanaman || We Provide You The Best</title>
  <script type="text/javascript" src="js/ajax.googleapis.com_ajax_libs_jquery_1.8.2_jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<!--jquery-search-->
<link rel="stylesheet" href="css/code.jquery.com_ui_1.11.4_themes_smoothness_jquery-ui.css">
  
  <link rel="stylesheet" href="css/home_style.css">
</head>
    <body>       
   
        <div class="container">
       
     
          

     <section id="right-wrapper">
  
  <div id="cont">
      <div class="col-md-6">
          <div class="headings">
            <h1 class="head">KhanaMan:Your Food Hero!</h1>
            <p class="text"><strong>"Bringing Food From Your Favorite Restaurant at Your Door Step"</strong></p>
        
            <!-- REMOVE ONE BTN -->
          </div>
        </div>


</div>                      
      </section>


<style type="text/css">
.container {
    background:transparent url("img/left.png");
    background-repeat: no-repeat;
    background-size: 50%;
    background-position: absolute;
 }
 #cont
 {
  float: right;
 }
 .headings {
    padding:42% 5% 0% 0;
    color:#000;
}
.headings h1 {
    font-size:56px;
    font-weight:600;
    margin-bottom:20px;
    color:#555;
}
.headings p {
    font-size:18px;
    font-weight:600;
    margin-bottom:40px;
    letter-spacing:0.5px;
    line-height:28px;
}
.content_sec
{margin-top: 100px;
  background-color: #e7e7e7;
color: #000;
width: 100%;
display: inline-block;
}
.ha{
text-align: center;
    font-weight: 600;
    font-size: 40px;
    padding-top: 5px;
}
@media (max-width:1200px) and (min-width:800px) {
.container {
background-size: 65%;
}
.headings {
    padding:57% 5% 0% 2%;
    color:#000;
}
}

@media (max-width:2000px) and (min-width:1200px) {
.container {
background-size: 50%;
}
.headings {
    padding:42% 5% 0% 2%;
    color:#000;
}
.headings h1 {
    font-size:56px;
    font-weight:600;
    margin-bottom:20px;
    
}
.headings p {
    font-size:18px;
    font-weight:600;
    margin-bottom:40px;
    letter-spacing:0.5px;
    line-height:28px;
}
  }
  @media (max-width:800px) and (min-width:500px) {
.container {
  background-size: 95%;
}
.content_sec
{margin-top: 40px;
  }
.headings {
    padding:80% 5% 0% 2%;
    color:#000;
}
.headings h1 {
    font-size:36px;
    font-weight:700;
    margin-bottom:20px;
    
}
.headings p {
    font-size:18px;
    font-weight:600;
    margin-bottom:35px;
    letter-spacing:0.5px;
    line-height:28px;
}
  }
  @media (max-width:500px) and (min-width:100px) {
.container {
  background-size: 100%;
}
.headings {
    padding:65% 2% 0% 2%;
    color:#000;
}
.headings h1 {
    font-size:30px;
    font-weight:700;
    margin-bottom:15px;
    
    line-height:35px;
}
.headings p {
    font-size:15px;
    font-weight:600;
    margin-bottom:30px;
    letter-spacing:0.5px;
    line-height:24px;
}
.content_sec
{margin-top: 35px;
  }
  .ha{
  font-size: 25px;
  }

}
</style>





<div class="clear_r" style="clear:both";></div>

<div class="content_sec">
<div class="ha"><p>Why We Are?</p></div>


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
<p>Get food from your favourite and top rated outlet,at a click</p>
</div>
</div>
<div class="clear" style="clear:both";></div>
<?php include('footer.php');?>
<script src="js/code.jquery.com_jquery-1.10.2.js"></script>
  <script src="js/code.jquery.com_ui/1.11.4_jquery-ui.js"></script>

</div>
</body>
</html>
