<?php
$page_name=$_GET['page_name'];
$data=$_GET['data'];
$head=$_GET['head'];
//echo "$page_name     $data     $head";
require_once("dbconnect.php");//$query="update about set $head=$data' wher page_name='$page_name'"
mysql_query("update about set text='$data' where page_name='$page_name' and head='$head'");
echo "Page Updated";
?>