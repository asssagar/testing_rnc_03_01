<?php 
//if($f_name !== '' && $email !== NULL)
 error_reporting(0);
require("include/config.php");
?>
<?php

    if(isset($_POST['login-page']))
    {
		$email = $_POST['Email'];
        $pass = $_POST['passl'];

//echo $email.$pass;
 
$quer="select * from `singup` where `email`='$email' and `pass`='$pass'";
$res=mysql_query($quer) or die (mysql_error());


$row=mysql_fetch_array($res);
echo $name=$row['firstname'];

if($email == $row['email'] && $pass == $row['pass'])
{
	
	session_start();
	$_SESSION['firstname'] = $name;
	//$_SESSION['f_name'] = $name;
	//$_SESSION['email'] = $email;
	
	//$_SESSION['email'] = $email;
 header("location:index-2.php?msg=Welcome");
}

		
		
		
       /*echo $email = mysqli_real_escape_string($conDB,$_POST['email']);
        $password = mysqli_real_escape_string($conDB,$_POST['pass']);
		$query="select * from singup where email='".$email."' and pass='".$password."'";
		$res=mysql_query($query) or die (mysql_error());
		
        //$strSQL = mysqli_query($conDB,"select * from singup where email='".$email."' and pass='".$password."'");
        //$Results = mysqli_fetch_array($strSQL);
        if(count($res)>=1)
        {  
			// "<script>alert('Login Sucessfully!!')";
            //$message = $Results['name']." Login Sucessfully!!";
		   header('location:index-2.php');
        }*/ 
        else
        {
			echo "<script>alert('Invalid email or password!!')</script>";
           // $message = "Invalid email or password!!";
        }       
    }

else if (isset($_POST['register'])) {

	        $f_name       = mysqli_real_escape_string($conDB,$_POST['f_name']);
	    	$l_name       = mysqli_real_escape_string($conDB,$_POST['l_name']);
			$mobile       = mysqli_real_escape_string($conDB,$_POST['mobile']);
            $email      = mysqli_real_escape_string($conDB,$_POST['EMail']);
             $pass   = mysqli_real_escape_string($conDB,$_POST['pass']);
		
				
        $query = "SELECT email FROM singup where EMail='".$email."'";
        $result = mysqli_query($conDB,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
			echo "<script>alert('Invalid email address please type a valid email!!')</script>";
           // $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
           // $message = $email." Email already exist!!";
			echo "<script>alert('Email already exist!!')</script>";
        }
        else
        {
          $query="INSERT INTO `singup`(`firstname`,`lastname`,`mobile`,`email`,`pass`)
			                       VALUES ('$f_name','$l_name','$mobile','$email','$pass')";
           $res=mysql_query($query) or die (mysql_error());
				   
		   
		   // $message = "Signup Sucessfully!!";
        }
    }
?>