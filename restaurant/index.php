<?php 
ob_start(); 
// require('../include/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
<title>Login and Registration Form with HTML5 and CSS3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
<meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
<meta name="author" content="Codrops" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="login_css/demo.css" />
<link rel="stylesheet" type="text/css" href="login_css/style.css" />
<link rel="stylesheet" type="text/css" href="login_css/animate-custom.css" />
</head>
<body bgcolor="#7E7E7E">
<style>
body
{
	background-color:#464646;
}
</style>

<div class="container"> 
  <!-- Codrops top bar -->
  <div class="codrops-top"> <a href=""> <span class="right"> </a>
    <div class="clr"></div>
  </div>
  <!--/ Codrops top bar -->
  
 <?php
 if(isset($_REQUEST['login']))
 {
$user = $_POST['username'];
$pass = $_POST['password'];
//echo $user.$pass;

 
echo "color=white"; $quer="select * from `admin_table` where `username`='$user' and `password`='$pass'";
echo $res=mysqli_query($conDB,$quer) or die (mysql_error());
while($row=mysqli_fetch_array($res))

if($user == $row['username'] && $pass == $row['password'])
   {
  header('location:gallery-insert.php');
    }
else
  {
	  echo "<script> alert('Email or password is wrong')</script>";

  }
}
?>
 <section>

      <div id="wrapper">
        <div id="login" class="animate form">
         
         
          <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="on" name="myForm" method="post">
            <h1>Log in</h1>
            <p>
              <label for="username" class="uname" data-icon="" > Your email or username </label>
              <input id="username" name="username" required type="text" placeholder="Email"/>
            </p>
            <p>
              <label for="password" class="" data-icon=""> Your password </label>
              <input id="password" name="password" required type="password" placeholder="Password" />
            </p>
            <!--<p class="keeplogin">
              <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
              <label for="loginkeeping">Keep me logged in</label>
            </p>-->
            <p class="login button">
              <input type="submit" value="Login" name="login" />
            </p>
            
            <p class="">  <a href="" class=""></a> </p>
          </form>
        </div>
        <div id="register" class="animate form">
       
       
     
        </div>
      </div>
    </div>
</div>
</body>




<script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.username);
                    $('#pass').val(localStorage.password);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#pass').val('');
                }
 
                $('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.username = $('#username').val();
                        localStorage.password = $('#pass').val();
                        localStorage.loginkeeping = $('#remember_me').val();
                    } else {
                        localStorage.username = '';
                        localStorage.password = '';
                        localStorage.loginkeeping = '';
                    }
                });
            });
</script>

</html>