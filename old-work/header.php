<?php
include('include/config.php');
?>
    
 <?php 
require("include/config.php");
?>
<?php
if (isset($_POST['login'])) {
session_start();
$email = $_POST['Email'];
$pass = $_POST['passl'];

//echo $email.$pass;
 
$quer="select * from `logiin` where `email`='$email' and `pass`='$pass'";
$res=mysql_query($quer) or die (mysql_error());


$row=mysql_fetch_array($res);

if($email == $row['email'] && $pass == $row['pass'])
{
	
	session_start();
	//$_SESSION['f_name'] = $name;
	$_SESSION['email'] = $name;
 header("location:home.php?msg=Welcome");
}
else
{
	/*header("location:login.php?msg=please try again.");*/
	echo "<script>alert('please try again somthig wrong')</script>";
	//header("location:11.php?msg=please try again somthig wrong!.");
}
    //register action
} 

else if (isset($_POST['register'])) {

 $f_name = ( isset($_REQUEST['f_name']) ) ? trim($_REQUEST['f_name']):'';
 $l_name = ( isset($_REQUEST['l_name']) ) ? trim($_REQUEST['l_name']) : "";
 $mobile = ( isset($_REQUEST['mobile']) ) ? trim($_REQUEST['mobile']):'';
 $email = ( isset($_REQUEST['EMail']) ) ? $_REQUEST['EMail'] : "";
echo $pass = ( isset($_REQUEST['pass']) ) ?  $_REQUEST['pass']:'';
 //$c_pass = ( isset($_REQUEST['c_pass']) ) ? trim($_REQUEST['c_pass']) : "";
 
 
  if($f_name !== '' && $email !== NULL)
  {
  
 $query="INSERT INTO `singup`(`firstname`, `lastname`, `mobile`, `email`, `pass`) VALUES                                 ('$f_name','$l_name','$mobile','$email','$pass')";
 $res=mysql_query($query) or die (mysql_error());
 
  }
  header('location:home.php?msg=inserted!.');
}

    //delete action
 /*else 
{
	echo "else error";
	
    //no button pressed
}*/

?>
<!DOCTYPE html>
<html>
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/templatemo-style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/typed.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
        
      <!--sing in-->
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
	
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
    
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>khanaman</title>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    
    
    <!--sign up start-->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
	
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
</head>
<body>


 
      
  
<header class="header-fixed">
	<div class="header-limiter">
	<h1><a href="#"><span><img src="images/logo.png"></span></a></h1>
    </div>
	<!--<nav>
<a href="#">Home</a>
			<a href="#" class="selected">Blog</a>
			<a href="#">Pricing</a>
			<a href="#">About</a>
			<a href="#"></a>
			<a href="#">log in</a>
            
             </nav>
	<!-- heaer is login singup start-->
    
    
    
    
    
    



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
	
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
        
        
        
        <script type="text/javascript">

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
		  var pass1 = document.getElementById("pass1").value;
          var pass2 = document.getElementById("pass2").value;
      
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

<!--loging script-->
<script language="javascript">

function login() {
	
	
	/*var email = document.getElementById('txtEmail');
	alert(email);
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }*/
/* if( document.formlogin.passl.value == "" )
         {
            alert( "Please provide your cpass!" );
            document.formlogin.passl.focus() ;
            return false;
         }*/
 
  return( true );
}
</script>
<!--remember me code---------------------------------------------------------------------------------------->
 <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script>
            $(function() {

                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.usrname);
                    $('#pass').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#pass').val('');
                }

                $('#remember_me').click(function() {

                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#username').val();
                        localStorage.pass = $('#pass').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });

        </script>
-->




	</head>
    <style>
	.row
	{
		margin-top:-150px;
		margin-left:1000px;
	}
	</style>
    
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
      
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4">
				<table><tr><td>	
					<button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#login-modal">
				   sing In
					</button></td><td>
                    <button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#singup-modal">
                   Register
					</button></td></tr></table>
                    
				</div>	
			</div>
		</div>
        
	</body>
    
</html>



<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
               
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
      		</div>
            
      		<div class="modal-body singup-modal">
      			
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
	        		<div class='modal-body-left'>
        			<div class="form-group">
                 
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" name="formlogin" method="post" onSubmit="return login();">
		              		<input type="text" id="username" name="Email" id="txtEmail" placeholder="Enter your Email" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>
		
		            	<div class="form-group">
		            	  	<input type="password" id="pass" name="passl" placeholder="Password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
	
    	            	</div>
                        
                        <div class="form-group">
		            	  	<input type="checkbox" id="checkbox" name="remember" id="remember" name="">&nbsp; Remember me
		              		
		            	</div>
	                  	
	<button type="submit" name="login" class="btn btn-success modal-login-btn">Login</button>
		            	</form>
	        		</div>
	        	
	        		<!--<div class='modal-body-right'>-->
	        			<!--<div class="modal-social-icons">-->
	        				<!--<a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
	        				<a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign In with Twitter </a>
	        				<a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
	        				<a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a>-->
	        			<!--</div> 
	        		</div>	-->
	        		<!--<div id='center-line'> OR </div>-->
	        	</div>																												
        		<div class="clearfix"></div>
        		
        		<div class="form-group modal-register-btn">
        			<a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>

<!--sing up------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="singup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header login_modal_header">
      
      
      
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">register</h2>
      </div>
      <?php
/*if(isset($_REQUEST['msg'])){
	$show=$_REQUEST['msg'];
	//print"<p style='color:#f00'><script>alert("'.$error.'");
	echo '<script type="text/javascript">alert("'.$show.'");</script>';
}
*/?>
      
      
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="myForm" method="post" onSubmit="return (validate());">
      <div class="modal-body login-modal">
        
        <br/>
        <div class="clearfix"></div>
       
          <!--<div class='modal-body-left'>-->
            <div class="form-group">
           
              
    <input type="text" id="username" placeholder="First Name" name="f_name" value="" class="form-control login-field">
    <i class="fa fa-user login-field-icon"></i></div>
              
    <div class="form-group">
    <input type="text" id="" placeholder="Last Name" value="" name="l_name" class="form-control login-field">
              <i class="fa fa-lock login-field-icon"></i></div>
            <!--<a href="#" class="btn btn-success modal-login-btn">Login</a><a href="#" class="login-link text-center">Lost your password?</a></div>-->
          <!--<div class='modal-body-right'>
          <div class="modal-social-icons">-->
            <div class="form-group">
              <input type="text" id="username" placeholder="Mobile" name="mobile" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            <!--<a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>-->
            
            <div class="form-group">
              <input type="text" id="username" placeholder="Email" value="" name="EMail" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            
           <div class="form-group">
              <input type="Password" id="" placeholder="Password" value="" name="pass" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
            
     <div class="form-group">
     <input type="Password" id="" placeholder="Confirm Password" name="cpass" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>
     <button type="submit" name="register" class="btn btn-success modal-login-btn" onClick="">Register</button>
            
            
            <!--</div>
          </div>-->
          <div id='center-line'></div>
        </div>
        <div class="clearfix"></div>
        <!--<div class="form-group modal-register-btn">
         <a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>
        </div>-->
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer login_modal_footer"></div>
    </div>
  </div>
</div>


<!--sing up validation-->

    
    


















<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -->


<div class="menu">

	

	
	

	

</div>



<!-- Demo ads. Please ignore and remove. -->




		</nav>

	</div>






</header>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 600){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>
<!--register validation-->
>