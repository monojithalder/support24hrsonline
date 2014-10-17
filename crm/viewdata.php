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
<style type="text/css">

#content form input[type="text"],#content form textarea,
#content form input[type="password"] {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
	/*background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;*/
	border: 1px solid #c8c8c8;
	color: #777;
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0 0 10px;
	padding: 15px 2px 15px 2px;
	width: 90%;
	resize:none;
}
</style>
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
        <li><a  class="active" href="viewdata.php">View/Edit Data</a></li>
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
        	<table align="center" style="border:thin solid">
            	<tr>
                	<td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>System</td>
                    <td>OS</td>
                    <td>Problem</td>
              	</tr>
            	<?php
					require_once("dbconnect.php");
					$result=mysql_query("select * from crm_data");
					$row=mysql_num_rows($result);
					for($i=0;$i<$row;$i++)
					{
						$id=mysql_result($result,$i,"id");
						$name=mysql_result($result,$i,"name");
						$address=mysql_result($result,$i,"address");
						$phone=mysql_result($result,$i,"phone");
						$system=mysql_result($result,$i,"system");
						$os=mysql_result($result,$i,"os");
						$problem=mysql_result($result,$i,"problem");
						?>
							<tr>
                                <td><input type="text" id="cust_name<?php echo $id; ?>" value="<?php echo $name; ?>" /></td>
                                <td><input type="text" id="cust_address<?php echo $id; ?>"  value="<?php echo $address; ?>"/></td>
                                <td><input type="text" id="cust_phone<?php echo $id; ?>" value="<?php echo $phone; ?>" /></td>
                                <td><input type="text" id="cust_system<?php echo $id; ?>" value="<?php echo $system; ?>" /></td>
                                <td><input type="text" id="cust_os<?php echo $id; ?>" value="<?php echo $os; ?>" /></td>
                                <td><input type="text" id="cust_problem<?php echo $id; ?>" value="<?php echo $problem;?>"  /></td>
                             	<td><a href="#" onclick="updatedate(<?php echo $id; ?>);" >Update</a></td>
                                <td>       &nbsp; &nbsp;</td>
                                <td><a href="#" onclick="deletedate(<?php echo $id; ?>);" >Delete</a></td>
               			 	</tr>
						<?php
					}
				?>
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
