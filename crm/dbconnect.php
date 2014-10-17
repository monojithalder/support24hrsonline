<?php
$con=mysql_connect("localhost","support2_mysql","support2013");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("support2_main",$con);
?>
