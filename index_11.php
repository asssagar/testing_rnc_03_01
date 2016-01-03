
<section id="home">
<?php include('header.php'); ?>

<!--search conternt-->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!--<link rel="stylesheet" href="css_search/searchbarstyles_searchbar.css"> -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<!--search conternt-->
<!--jquery-search-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
  <link rel="stylesheet" href="/resources/demos/style.css">

    		<div class="container">
   			<div class="row">
			<div class="col-md-offset-2 col-md-8" align="center">
          
<style>

<style>
 .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    prevent horizontal scrollbar
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
  
body {
	background:url(images/home-bg.jpg)no-repeat center center fixed; 
	    
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	
}*/
</style>
     
                   
                       
               <section id="wrapper">
	
	<div id="main">
    <div class="ui-widget">
		<!--<form>
			<input id="tags" type="text" name="search" id="search">
			<input type="submit" name="submit" class="solid" value="Search">
            </label>
          
		</form>-->
     <!--search-barstart-->   
     
       
        
  
    
          <style>
            /*import font awesome css icon library*/
            @import url("http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css");
            input, select, textarea {
                background: none repeat scroll 0 0 #fafafa;
                border: 1px solid #eeeeee;
                color: black;
                display: block;
                font-family: arial, sans-serif;
                font-size: inherit;
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
                font-size: 16px;
                margin: 0;
                height: 40px;
            }
            
            #searchtext {
                overflow: hidden;
				background-color:#936;
				margin-top:200
            }
            
            a.search-submit-button {
                background: none repeat scroll 0 0 #c9282d;
                border-bottom: 1px solid #eeeeee;
                border-right: 1px solid #eeeeee;
                border-top: 1px solid #eeeeee;
                color: #5e5e5e !important;
                display: block;
                float: right;
                font-family: inherit;
                font-size: 20px;
                padding: 8px 10px;
                text-align: center;
                width: 45px;
                box-sizing: border-box;
                height: 40px;
            }
            
            #form-container {
                /* width: 60%; */
            }
        </style>
      <div>
        <div class="content">
        <br>
<br>
<br>
<br>
<br>

        <form name="" method="post">
        <table><tr><td>
<input type="text" class="search" name="searchto" id="searchid" placeholder="Search.." /></td><td>
<input type="submit" value="submit" name="submit" class="btn btn-info"/></form></td></tr></table>
<div id="result">
        <!--<form action="" name="" method="post">
            <div id="form-container">
               <!-- <input type="submit" id="searchsubmit" value="" />-->
                <!--<a class="search-submit-button" name="submit" href="javascript:void(0)">
                    <i class="fa fa-search"></i>
                </a>
                <div id="searchtext">
                    <input type="text" id="searchid" name="searchto" value="" placeholder="Search area...">
                </div>
            </div>
        </div>
        </form>-->
      </div>
      </div> 
      <?php
$search=$_REQUEST['searchto']; 
if(isset($_REQUEST['submit']))
    {
	$query="select * from `names`";
	$res=mysql_query($query) or die (mysql_error());

 $row=mysql_fetch_array($res);
     {
	$name=$row['human'];
	//if($search==$name)
     {
	    echo"<br>". $name."<br>";
		echo $row['fruit'];
	 }
 }

}
?>
      
      
  
</head>
<body>
         
<div align="center">
    <meta name="description" content="">
<br>
<meta name="author" content="">
<div id="search">
<!--<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
-->
</head>



    </div>
    </div></div></div></div>
    

    
	
	







<!--<a class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">RANCHI</a>
<h1 style="color:#FFF;">restorent in ranchi area search</h1>

<a  class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">HOME</a>
<a class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">SEARCH</a>-->
</div>
    				</div>
    			</div>
    		</div>
            
            
    	</section>


</body>
</html>
