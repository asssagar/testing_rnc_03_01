<?php
$connection = mysqli_connect("localhost", "khanaman", "456789", "khanaman");
$db = mysqli_select_db($connection,"khanaman");
session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query( $connection, "select ltrim(rtrim(aes_decrypt(USR_NAME,'Asssagar@4321'))) as USR_NAME from km_user where ltrim(rtrim(aes_decrypt(USR_EMAIL_ID,'Asssagar@4321')))='$user_check' OR ltrim(rtrim(aes_decrypt(USR_CNTCT_NBR,'Asssagar@4321')))='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['USR_NAME'];
if(!isset($login_session)){
mysqli_close($connection); 
}
?>