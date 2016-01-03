<?php
require("include/config.php");
?>
<?php
 if(isset($_REQUEST['action']))
 {

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
?>