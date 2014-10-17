<?php
    //echo "This (email_a) email address is considered valid.";
require_once("dbconnect.php");	$result=mysql_query("select * from login where user='admin'");
	$password=mysql_result($result,0,"pass");
	$subject="Forget Password";
	$to = "ripon.sarkar2708@gmail.com";
	$from = "info@suport24hrs.com";
	$headers = "From:" . $from;
	$string="Password:-    ".$password;
	mail($to,$subject,$string,$headers);
	echo "<script>alert('Mail Sent');window.location='index.php';</script>";

?>