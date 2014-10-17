<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet"  />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/jquery.simplyscroll.css" type="text/css" media="screen">
<script type="text/javascript" src="java.js"></script>

</head>

<body>
<?php
session_start();
if(!isset($_SESSION['crmname']))
{
	echo "<script>window.location='index.php';</script>";
}
else
{
		if($_SESSION['crmname']=="admin")
		{
		?>
        <div class="container_24"> 
        <header>
        <div class="prefix_2 grid_20 suffix_2">
        <nav id="main-menu">
        <strong></strong>
        <ul class="menu responsive-menu" style="width: 109%">
        
        <li><a href="insertdata.php">Insert Data</a></li>
        <li><a href="viewdata.php">View/Edit Data</a></li>
        <li><a class="active" href="user.php">Create User</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="clear"></div>
        </nav>
        </div>
        <div class="clear"></div>
        <div class="clear"></div>
        </header>
         
        <section id="content">
        <div class="wrapper p3">
          <form method="post" action="#">
        	<table align="center">
            	<tr>
                	<td>Username</td>
                    <td><input type="text" name="txtuser"  /></td>
              	</tr>
                <tr>
                	<td>Password</td>
                    <td><input type="password" name="txtpass"  /></td>
              	</tr>
                <tr>
                	<td>Repeat Password</td>
                    <td><input type="password" name="txtre"  /></td>
              	</tr>
                <tr>
                	<td</td>
                    <td><input type="submit" name="sub"  /></td>
              	</tr>
            	
            </table>
            </form>
        </div>
        
        
        </div>
        </div>
        </div>
        
        </section>
        <script type="text/javascript"> Cufon.now(); </script>

        <?php
	}
	else
	{
		echo "<script>window.location='index.php';</script>";		
	}
}
?>
<?php
require_once("dbconnect.php");
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$re=$_POST['txtre'];
if(isset($_POST['sub']))
{
	if($pass != $re)
	{
		echo "<script>alert('Repeat Password not match');</script>";
	}
	else
	{
		mysql_query("insert into crm_login (user_id,password) values ('$user','$pass')");
		echo "<script>alert('User Created');</script>";
	}
}
?>
</body>
</html>
