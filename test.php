<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","support2_mysql","support2013");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("support2",$con);
$result=mysql_query("select * from about");
echo mysql_result($result,0,"text");
?>

</body>
</html>
