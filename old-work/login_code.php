<?php
session_start();
require("include/config.php");
if(isset($_REQUEST['submit']))
{

$email = $_POST['email'];
$pass = $_POST['pass'];
//echo $email.$pass;

echo $quer="select * from `logiin` where `email`='$email' and `pass`='$pass'";
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
}
?>