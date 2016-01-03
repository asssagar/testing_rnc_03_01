<?php include('include/config.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = new mysqli("localhost", "khanaman", "456789", "khanaman");

// To protect MySQL injection for Security purposes
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
// Selecting Database
$db = mysqli_select_db($connection,"khanaman");

// SQL query to fetch information of registerd users and finds user match.

$query = "select rtrim(ltrim(aes_decrypt(USR_NAME,'Asssagar@4321'))) as USR_NAME, USR_ID as USR_ID from khanaman.km_user where rtrim(ltrim(aes_decrypt(USR_PASSWD,'Asssagar@4321')))='$password' AND rtrim(ltrim(aes_decrypt(USR_EMAIL_ID,'Asssagar@4321')))='$username'";

$result = $connection->query($query);
$row = $result->fetch_assoc();

if (!empty($row)) {
$_SESSION['login_user']=$row['USR_NAME']; // Initializing Session
$_SESSION['usr_id']=$row['USR_ID'];
} else {
$error = "Username or Password is invalid";
include('header_chk.php');
}
mysqli_close($connection); // Closing Connection
}
}
echo ""
?>