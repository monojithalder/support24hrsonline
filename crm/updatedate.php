<?php
$id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$phone=$_GET['phone'];
$system=$_GET['system'];
$os=$_GET['os'];
$problem=$_GET['problem'];
require_once("dbconnect.php");
mysql_query("update crm_data set name='$name',address='$address',phone='$phone',system='$system',os='$os',problem='$problem' where id='$id'");
echo "updated";
?>