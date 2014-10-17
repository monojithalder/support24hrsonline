<?php
require_once("dbconnect.php");
$id=$_GET['id'];
mysql_query("delete from crm_data where id='$id'");
echo "Data Deleted";
?>