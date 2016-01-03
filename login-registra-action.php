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