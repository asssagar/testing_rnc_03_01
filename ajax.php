<?php
$query=mysql_connect("localhost","khanaman","456789");
mysql_select_db("khanaman",$query);
if(isset($_POST['name']))
{
$name=trim($_POST['name']);
//$query2=mysql_query("SELECT * FROM product WHERE name LIKE '%$name%'");
$query2=mysql_query("SELECT DISTINCT res_loc FROM restaurant_register WHERE upper(res_loc) LIKE upper('%$name%')");
echo "<ul>";
while($query3=mysql_fetch_array($query2))
{
?>
<li onclick='fill("<?php echo $query3["res_loc"];?>")'><i><b><?php echo $query3["res_loc"]; ?></b></i></li><br>
<?php
}
}
?>
</ul>