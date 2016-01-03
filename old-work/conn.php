<?php
$conn=mysql_connect("localhost","root",'');
if(!$conn) die ("conection error");

$db=mysql_select_db("khanamen");
if(!$db) die ("db error");

?>