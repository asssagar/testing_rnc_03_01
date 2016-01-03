<?php include('include/config.php'); ?>
<?php
error_reporting(0);

if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select id,name,email from autocomplete where name like '%$q%' or email like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['name'];
$email=$row['email'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<!--<img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" />-->
<span class="name"><span style="margin-left:200px"> <?php echo $final_username; ?></span></span>
&nbsp;<br/><?php //echo $final_email; ?><br/>
</div>
<?php
}
}
?>
</div>
<div class="total_ruselt">
<?php
/*if(isset($_REQUEST['submit']))
echo $_REQUEST['submit'];

$query="select * from `autocomplete`";
$res=mysql_query($query) or die (mysql_error());
while($row=mysql_fetch_array($res))
echo $name=$row['name'];
echo $username=$row['email'];*/
 ?>
</div>
