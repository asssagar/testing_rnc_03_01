<?php session_start();

//include('login.php');

include('include/config.php'); ?>



<!DOCTYPE html>

<html>

<head>

   

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="description" content="">

<meta name="author" content="">

<meta charset="utf-8">

<title>khanaman</title>



<link rel="stylesheet" type="text/css" href="css/header_style.css">

<!-- <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> -->

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script type="text/javascript">



function toggleDiv(divId) {

   $("#"+divId).toggle();

}

</script>



<script type="text/javascript">$(function() {

  // constants

  var SHOW_CLASS = 'show',

      HIDE_CLASS = 'hide',

      ACTIVE_CLASS = 'active';

  

  $( '.tabs' ).on( 'click', 'li a', function(e){

    var $tab = $( this ),

         href = $tab.attr( 'href' );

  

     $( '.active' ).removeClass( ACTIVE_CLASS );

     $tab.addClass( ACTIVE_CLASS );

  

     $( '.show' )

        .removeClass( SHOW_CLASS )

        .addClass( HIDE_CLASS )

        .hide();

    

      $(href)

        .removeClass( HIDE_CLASS )

        .addClass( SHOW_CLASS )

        .hide()

        .fadeIn( 550 );

  });

});

</script>





<style type="text/css">



  input:required:invalid, input:focus:invalid {

    background-image: url(images/invalid.png);

    background-position: right ;

    background-repeat: no-repeat;

  }

  input:required:valid {

    background-image: url(images/valid.png);

    background-position: right ;

    background-repeat: no-repeat;

  }

</style>





<style>



.login__remember-me

{

  display: inline-block;

}



.login_one

{

  display: inline-block;

  float: left; 

  margin-left: 24px;

}



.login_two

{

  display: inline-block;

  color: #000;

  margin-top: 5px;

  padding-left: 10px;

  font-size: 16px;

}



#errormsg

{

  background-color: #000;

  background-color: #fff;

  width: 200px;

  height: 200px;

}



.responsive-image

{

   max-width: 100%; 

   display:block; 

   height: auto;

   margin-top:05px;

   margin-left:-15px;

}





</style>

</head>



<body>

<div class="header">

<div class="logopic">



<a href="index.php"><!-- /*added by punam*/ -->

<img src="images/KM_logo_white_250.png"></a>



</div>





<div>

    <div class="dv">

    <label class="btn" for="modal-1">

     Login <span  style="color: #47F103;">/ </span>Register 

    </label>

</div>



<div class="mv">

     <label class="btn" for="modal-1"><i class="fa fa-sign-in fa-2x"></i>

     </label>

</div>

</div>





<input class="modal-state" id="modal-1" type="checkbox" checked/>



<div class="modal" >

<div class="test_For_popup">

  

  <label class="modal__bg" for="modal-1" style="position: static;top: 0px;bottom: 0px;right: 0px;cursor: none;"></label>

 <!--  <label class="modal__close" for="modal-1"></label> -->

      <div style="height: auto;" class="flat-form">

            <ul class="tabs">

                <li>

                   <a href="#login" class="active">Login</a>

                </li>

                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                <li>

                  <a href="#register">Register</a>

                </li>

            </ul>

            <div id="login" class="form-action show">

              <h1>Login to Khanaman</h1>   

                <form  method="post" action="" name="form2">

                    <ul>

                        <li>

                           <input type="text" placeholder="Mobile/Email"   name="username" required/>

                        </li>



                        <li>

                           <input type="password" placeholder="Password" 

                            pattern="((?=.*\d).{6,20})" title="Please enter Min 6 digit & should be alphanumeric" 

                            name="password" required />

                         </li>

   <?php echo $error; ?> 

                         <li>



                            <div class="login__remember-me">

                           

                            <div class="login_one"><input type="checkbox" value="Rem" checked="checked"  style="-webkit-appearance:checkbox;"></div>





                            <div class="login_two">Remember Me</div>   





               </div>

                          </li>             



                          <li>

                            <div class="submit_all">              

                            <div class="login_plus">

                            <input type="submit" value="Login" name="submit" style="

                             border: none;

                             padding: 0px;

                             height: 22px;

                             background-color:#27AE60;

                             color: rgb(255, 255, 255);

                             width:100%;

                            ">

                            </div>





<span style="border-radius: 13px;padding:3px;/* background-color: blue; */color: #6D6565;font-family: sans-serif;font-size: 12px;/* margin-left: 80px; */">

  ---------------------OR-------------------</span>

<div class="g_plus">

  <i class="fa fa-google-plus"> Login With Google </i>

</div>



<div class="fb_log">

  <i class="fa fa-facebook">&nbsp;&nbsp;&nbsp;Login With Facebook</i>

</div>

        </div>                    

         <!-- <div class="login_with">

        <span style="font-size: 41px; color: rgb(64, 93, 155);"><a href="1353/fbconfig.php"><i class="fa fa-facebook-official"></i></a></span>&nbsp;&nbsp;&nbsp;

        <span style="font-size: 34px; color: #689F38"><i class="fa fa-google-plus"></i></span></div> -->



</li>

</ul>



<div class="spacebar"></div>

</form>



</div>

<!--/#login.form-action-->

<div id="register" class="form-action hide">

<h1>Register</h1>

<form action="index.php"  name="form1" method="POST">



<?php

if (isset($_POST['USR_EMAIL_ID'])){         

$email_reg = $_POST['USR_EMAIL_ID'];

$emailCheck = mysql_query("SELECT * FROM km_user WHERE USR_EMAIL_ID = '".$email_reg."'");

  if (mysql_num_rows($emailCheck) > 0) {

    echo "<script>alert('Email Address Already Exists')</script>";

    exit('<script type="text/javascript">alert("Email Address Already Exists - Please Try A Different One");</script>');

  }

}

?>



<?php

if (isset($_POST['USR_NAME']) && isset($_POST['USR_PASSWD']))//Outer if block

    {

      $username = $_POST['USR_NAME'];

      $contact = $_POST['USR_CNTCT_NBR'];



      $email = $_POST['USR_EMAIL_ID'];

      $password = $_POST['USR_PASSWD'];



      $query = "INSERT INTO `km_user` (USR_NAME, USR_EMAIL_ID,USR_CNTCT_NBR,USR_PASSWD) VALUES(

      AES_ENCRYPT('$username','Asssagar@4321'), AES_ENCRYPT('$email','Asssagar@4321'),AES_ENCRYPT('$contact','Asssagar@4321'),

      AES_ENCRYPT('$password','Asssagar@4321')) ";

      $result = mysqli_query($connect,$query);   



      if($result)//Inner if block

      {

        echo"<script>

        alert('You have successfully registered');

       </script>";

      }//Inner if close

      else//Inner else

      {

        echo "<script>

        alert('Something went wrong');

        </script>";

      }//Inner else close

    }//Closing of outer if block

?> 

  <ul>



    <li> <span style="display:inline-block;color: #FF0000;float:right; font-size:30px;position: absolute;">*</span>

         <input type="text" placeholder="Enter Your full Name" pattern="[a-zA-Z ]+" required=""  name="USR_NAME"/>

    </li>



    <li><span style="display:inline-block;color: #FF0000;float:right; font-size:30px;position: absolute;">*</span>

          <input type="text" placeholder="Enter Mobile No."  pattern="[789][0-9]{9}" title="Not A Valid Number" name="USR_CNTCT_NBR" required/>

    </li>



    <li>

          <input type="email" placeholder="xyz@gmail.com" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" name="USR_EMAIL_ID" title="Not A valid Email" id="email" />

    </li>



    <li><span style="display:inline-block;color: #FF0000;float:right; font-size:30px;position: absolute;">*</span>

          <input type="Password" placeholder="Password" name="USR_PASSWD"  pattern="((?=.*\d).{6,20})" title="Please enter Min 6 digit"required/>

    </li>                        



    <li style="padding-left:23px;">

          <input type="submit" value="Sign Up"  id="submit" class="button" style="font-size: 16px;" />

    </li>

  </ul>

   

      <div class="spacebar">.</div>

      </form>

</div>

</div>





</div>

</div>

</div>

</div>



<!-- <span><?php echo $error; ?></span> -->

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 

</body>

</html>