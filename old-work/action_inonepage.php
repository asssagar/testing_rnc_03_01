<?php require("include/config.php");
?>
<?php

if (isset($_POST['login'])) {
	
session_start();
$email = $_POST['email'];
$pass = $_POST['pass'];
//echo $email.$pass;

$quer="select * from `logiin` where `email`='$email' and `pass`='$pass'";
$res=mysql_query($quer) or die (mysql_error());


$row=mysql_fetch_array($res);

if($email == $row['email'] && $pass == $row['pass'])
{
	session_start();
	$_SESSION['email'] = $email;
//	header("location:loginphp.php?msg=Welcome");

}
else
{
	/*header("location:login.php?msg=please try again.");*/
	//header("location:loginphp.php?msg=please try again somthig wrong!.");
}

    //update action
} 
else if (isset($_POST['register'])) {

 $f_name = ( isset($_REQUEST['f_name']) ) ? trim($_REQUEST['f_name']):'';
 $l_name = ( isset($_REQUEST['l_name']) ) ? trim($_REQUEST['l_name']) : "";
 $mobile = ( isset($_REQUEST['mobile']) ) ? trim($_REQUEST['mobile']):'';
 $email = ( isset($_REQUEST['email']) ) ? trim($_REQUEST['email']) : "";
 $pass = ( isset($_REQUEST['pass']) ) ? trim($_REQUEST['pass']):'';
 $c_pass = ( isset($_REQUEST['c_pass']) ) ? trim($_REQUEST['c_pass']) : "";
echo $query="INSERT INTO `singup`
 (`firstname`,`lastname`,`mobile`,`email`,`pass`,`confirm_pass`)
  VALUES 
  ('$f_name','$l_name','$mobile','$email','$pass','$c_pass')";
 $res=mysql_query($query) or die (mysql_error());
  }
 
// header('location:1.php');
	
    //delete action
 else 
{
	
    //no button pressed
}

?>