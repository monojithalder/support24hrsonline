<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet"  />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/jquery.simplyscroll.css" type="text/css" media="screen">
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
        
        <li><a class="active" href="insertdata.php">Insert Data</a></li>
        <li><a href="viewdata.php">View/Edit Data</a></li>
        <li><a href="user.php">Create User</a></li>
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
                	<td>Customer_name</td>
                    <td><input type="text" name="cust_name" /></td>
                </tr>
                <tr>
                	<td>Address</td>
                    <td><input type="text" name="cust_add" /></td>
                </tr>
                <tr>
                	<td>Phone_no</td>
                    <td><input type="text" name="cust_phone" /></td>
                </tr>
                <tr>
                	<td>System</td>
                    <td><input type="text" name="cust_system" /></td>
                </tr>
                <tr>
                	<td>Os_type</td>
                    <td><input type="text" name="cust_os" /></td>
                </tr>
                <tr>
                	<td>Problem</td>
                    <td><textarea name="cust_prob" rows="4" cols="80"></textarea></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Insert" name="sub" /></td>
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
		?>
        	<div class="container_24"> 
        <header>
        <div class="prefix_2 grid_20 suffix_2">
        <nav id="main-menu">
        <strong></strong>
        <ul class="menu responsive-menu" style="width: 109%">
        
        <li><a class="active" href="insertdata.php">Insert Data</a></li>
         <li><a href="logout.php">Logout</a></li>
        <!--<li><a href="viewdata.php">View/Edit Data</a></li>
        <li><a href="user.php">Create User</a></li>
         <li><a href="changepassword.php">Change Password</a></li>!-->
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
                	<td>Customer_name</td>
                    <td><input type="text" name="cust_name" /></td>
                </tr>
                <tr>
                	<td>Address</td>
                    <td><input type="text" name="cust_add" /></td>
                </tr>
                <tr>
                	<td>Phone_no</td>
                    <td><input type="text" name="cust_phone" /></td>
                </tr>
                <tr>
                	<td>System</td>
                    <td><input type="text" name="cust_system" /></td>
                </tr>
                <tr>
                	<td>Os_type</td>
                    <td><input type="text" name="cust_os" /></td>
                </tr>
                <tr>
                	<td>Problem</td>
                    <td><textarea name="cust_prob" rows="4" cols="80"></textarea></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Insert" name="sub" /></td>
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
}
?>
<?php
require_once("dbconnect.php");
$cust_name=$_POST['cust_name'];
$address=$_POST['cust_add'];
$phone=$_POST['cust_phone'];
$system=$_POST['cust_system'];
$os=$_POST['cust_os'];
$problem=$_POST['cust_prob'];
if(isset($_POST['sub']))
{
	mysql_query("insert into crm_data (name,address,phone,system,os,problem) values ('$cust_name','$address','$phone','$system','$os','$problem')");
	echo "<script>alert('Data Inserted');</script>";
}
?>
</body>
</html>
