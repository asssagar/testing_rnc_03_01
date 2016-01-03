
<!DOCTYPE html>
<html>
<head>
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css"/>
<script src="ddmenu/ddmenu.js" type="text/javascript"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>khanaman</title>
<link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/header-login-signup.css">
<link rel="stylesheet" type="text/css" href="listing_page.css">
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript">
   <!--
      function validateEmail()
      {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
	  
      function validate()
      {
		  //var pass1 = document.getElementById("pass1").value;
         // var pass2 = document.getElementById("pass2").value;
      
         if( document.myForm.f_name.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.f_name.focus() ;
            return false;
         }
		 
		 if( document.myForm.l_name.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.l_name.focus() ;
            return false;
         }
		 
		  if( document.myForm.mobile.value == "" ||
         isNaN( document.myForm.mobile.value ) ||
         document.myForm.mobile.value.length != 10 )
         {
            alert( "Please provide 10 digits mobile! like 122636." );
            document.myForm.mobile.focus() ;
            return false;
         }
         
         if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide your valid Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		
		 if( document.myForm.pass.value == "" )
         {
            alert( "Please provide your pass!" );
            document.myForm.pass.focus() ;
            return false;
         }
		
		 if( document.myForm.cpass.value == "" )
         {
            alert( "Please provide your cpass!" );
            document.myForm.cpass.focus() ;
            return false;
         }
        
				
		
		//var pass1 = document.getElementById("pass1").value;
       // var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
           alert("Passwords Do not match");
		   return false;
         
        }
        
    
     return( true );
      }
   //-->
</script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->

<script type="text/javascript">
$('.searchButton').on('click',function(){
  alert('You clicked search button');
});
 </script>
<style>

</style>


<header class="header-login-signup">
<div class="header-limiter">
<div class="col-sm-8">
<a href="index.php">
<img style="margin-top: 0px;" src="images/KmLogo250.png" class="responsive-image"></a>


</div>
<button class="logout_btn"> Logout </button>
<div class="logout_btn_mv">
  <i style="margin-top: -20px;" class="fa fa-sign-out fa-2x"></i>

</div>



<div class="col-sm-">
<div class="container-fluid">
<div class="row">

<!-- style css taken from listing_page.css -->

  






<link rel="stylesheet" href="//d305u1xvzud3tg.cloudfront.net/assets/css/website/stoker/app.build/0-1-24/app.libstyle.css">
          <link rel="stylesheet" href="//d305u1xvzud3tg.cloudfront.net/assets/css/website/stoker/app.build/0-1-24/app.style.css">
              <!--[if lt IE 9]>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.js"></script>
        <![endif]-->
        <!--REQUIRE JS ADDED -->
      <script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/lib/es5-shim.min.js"></script>
    <script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/main.js"></script>



</head>




<body>
<div class="clear"></div>


  <div class="col-xs-12 no-padding-xs" style="margin-top: 13px;">
          <div class="col-xs-12 no-padding-xs">
              <div class="lgscreen">
               
                <div class="MainData" style="margin-top:27px;">

   <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs" 
     data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="2.3" 
     data-minamnt="300" style="border-top:1px solid #E9E9E9;">
     
                           <div class="dicount_offer"><i class="fa fa-camera-retro fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;Flat 20% Discount</i></div> 
                           



                                             
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">
                           <div class="hotal_pic"><img src="images/try.jpg "></div>
                        <!-- <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/aroma%20restaurant.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" /> -->
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                       <!--  <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs"> -->
                          <!--  -->
                        <div class="heading_area"><b>Aroma Restaurant</b>
 <div class="veg_bar"><img src="images/Veg.jpg">&nbsp;&nbsp;<img src="images/NonVeg.jpg"></div>
 <div class="veg_bartt"><img src="images/Veg16.jpg">&nbsp;&nbsp;<img src="images/nonVeg16.jpg"></div>
                     



                        </div>
                        <!-- <span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>Karkarduma</span> -->
                     
                        <!-- </div> -->
                        <div class="food_menu" title="Biryani, Desserts ,North IndianWraps, Chinese">Biryani, Desserts ,North IndianWraps, Chinese</div>
                        <!-- <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Multicuisine                        </div>
 -->
<!-- starting star area -->

                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating five'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">8</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Karkarduma</span>
                          </span>
                        </div>

<div style="clear:both;"></div>

                        
<!-- starting star area -->
                             <div class="deliver_status">
                              <div class="sub_deliver_status">Delivery In
                                <p style="padding-top: 4px; color:#000;">1 Hour</p>



                              </div>

<!-- this area starts for gap in delivery in and mim order -->
 <div class="sub_deliver_status">
                                <p style="padding-top: 4px; color:#000;"></p>


                              </div>

   <div class="sub_deliver_status">
                                <p style="padding-top: 4px; color:#000;"></p>


                              </div>                           

<!-- this area ends for gap in delivery in and mim order -->



                              <div class="sub_deliver_status" style="margin-left: 20px;">Min Order
                                <p style="padding-top: 4px; color:#000;"> Rs - 200.00</p>


                              </div>




                             </div>

                      </div>
                      <!-- <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Multicuisine                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div> -->

                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">


                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                           

                          


  <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                   <a class="btn_menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>



                  <!-- second bar starts here -->



                   <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="2.3" data-minamnt="300" style="border-top:1px solid #E9E9E9;">
                           <div class="dicount_offer"><div class="try"><i class="fa fa-camera-retro fa-2x">&nbsp;&nbsp;&nbsp;&nbsp;Flat 20% Discount</i></div></div> 
                           



                                             
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">
                           <div class="hotal_pic"><img src="images/try.jpg "></div>
                        <!-- <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/aroma%20restaurant.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" /> -->
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                       <!--  <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs"> -->
                          <!--  -->
                        <div class="heading_area"><b>Andaaz - E - Mughal</b>

<div class="veg_bar"><img src="images/Veg.jpg">&nbsp;&nbsp;<img src="images/NonVeg.jpg"></div>

<!-- this is for mobile veiw -->
<div class="veg_bartt"><img src="images/Veg16.jpg">&nbsp;&nbsp;<img src="images/nonVeg16.jpg"></div>
<!-- ends here mobile veiw for veg and non veg -->



                        </div>
                        <!-- <span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>Karkarduma</span> -->
                     
                        <!-- </div> -->
                        <div class="food_menu" title="Biryani, Desserts ,North IndianWraps, Chinese">Biryani,KebabNorth , Desserts ,North IndianWraps, Chinese</div>
                        <!-- <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Multicuisine                        </div>
 -->
<!-- starting star area -->

                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating five'></span><span class='starrating off'></span><span class='starrating off'></span>                       
                                (<span class="menu-reviws-value">8</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Karkarduma</span>
                          </span>
                        </div>

<!-- starting star area -->
                             <div class="deliver_status">
                              <div class="sub_deliver_status">Delivery In
                                <p style="padding-top: 4px; color:#000;">1 Hour</p>



                              </div>

<!-- this area starts for gap in delivery in and mim order -->
 <div class="sub_deliver_status">
                                <p style="padding-top: 4px; color:#000;"></p>


                              </div>

   <div class="sub_deliver_status">
                                <p style="padding-top: 4px; color:#000;"></p>


                              </div>                           

<!-- this area ends for gap in delivery in and mim order -->



                              <div class="sub_deliver_status" style="margin-left: 20px;">Min Order
                                <p style="padding-top: 4px; color:#000;"> Rs - 200.00</p>


                              </div>




                             </div>

                      </div>
                      <!-- <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Multicuisine                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div> -->

                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                      <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                  <!-- second bar ends here -->

                      </div>
                      <!--  -->
                      

                                    
                  <!-- opening later closed -->
                                </div>

          </div>
        </div>
      </div>

      
    </div>
</div>



</div>

</body>
</html>