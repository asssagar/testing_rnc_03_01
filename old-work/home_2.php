<?php
session_start();
if(!$_SESSION['id'])
{
	header("location:home.php");
}




?>