<?php
$con=mysql_connect("localhost","supportb_mysql","support2013");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("supportb_main",$con);
?>
