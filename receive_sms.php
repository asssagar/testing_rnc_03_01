<?php

$sender = $_REQUEST['sender'];
$content = $_REQUEST['content'];
$inNumber = $_REQUEST['inNumber'];

//Variables for connection
$servername = "localhost";
$username = "khanaman";
$password = "456789";
$dbname = "khanaman";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into response(sender_no, msg) VALUES ('$sender','$content')";
$result = $conn->query($sql);

?>