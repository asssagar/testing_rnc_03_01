<?php
$db_username = 'khanaman'; // Your MYSQL Username.
$db_password = '456789'; // Your MYSQL Password.
$db_name = 'khanaman'; // Your Database name.
$db_host = 'localhost';
$connect = mysqli_connect($db_host, $db_username, $db_password, $db_name)or die('Error: Could not connect to database.');
$db=mysqli_select_db($connect, "khanaman");
?>

