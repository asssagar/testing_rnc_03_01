<?php
session_start();
require("conn.php");
$user = $_POST['username'];
$pass = $_POST['password'];
echo $user.$pass;

$quer="select * from `khanamen` where `name`='$user' and `marks`='$pass'";
$res=mysql_query($quer) or die (mysql_error());


$row=mysql_fetch_array($res);

if($user == $row['name'] && $pass == $row['marks'])
{
	session_start();
	$_SESSION['login'] = $pass;
	header("location:home.php?msg=Welcome");
	
/*print "<pre>";
print_r($_SESSION);
print "</pre>";*/

}
else
{
	/*header("location:login.php?msg=please try again.");*/
	header("location:22.php?msg=please try again.");
}
?>