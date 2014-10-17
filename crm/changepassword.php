<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Support24hrs</title>
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
        
        <li><a  href="insertdata.php">Insert Data</a></li>
        <li><a href="viewdata.php">View/Edit Data</a></li>
        <li><a href="user.php">Create User</a></li>
         <li><a class="active" href="changepassword.php">Change Password</a></li>
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
          <div class="container">
	<section id="content">
		<form action="#" method="post">
			<h1>Change Password</h1>
			<div>
				<input type="password" placeholder="Old Password" required="" id="username" name="oldpass" />
			</div>
			<div>
				<input type="password" placeholder="New Password" required="" id="password" name="newpass" />
			</div>
            <div>
				<input type="password" placeholder="Repeat Password" required="" id="password1" name="repeatpass" />
			</div>
			<div>
				<input type="submit" value="Change" name="sub" />
			</div>
		</form>
        </section>
        </div>
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
        
        <li><a  href="insertdata.php">Insert Data</a></li>
         <li><a href="logout.php">Logout</a></li>
         <li><a class="active" href="changepassword.php">Change Password</a></li>
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
<div class="container">
	<section id="content">
		<form action="#" method="post">
			<h1>Change Password</h1>
			<div>
				<input type="password" placeholder="Old Password" required="" id="username" name="oldpass" />
			</div>
			<div>
				<input type="password" placeholder="New Password" required="" id="password" name="newpass" />
			</div>
            <div>
				<input type="password" placeholder="Repeat Password" required="" id="password1" name="repeatpass" />
			</div>
			<div>
				<input type="submit" value="Log in" name="sub" />
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
			</div>
		</form>
        </section>
        </div>        
        
        </div>
        </div>
        </div>
        
        </section>
        <script type="text/javascript"> Cufon.now(); </script>

        <?php
	}
}
?><!-- form -->
		<?php
			if(isset($_POST['sub']))
			{
				$oldpass=$_POST['oldpass'];
				$newpass=$_POST['newpass'];
				$repeatpass=$_POST['repeatpass'];
				$user=$_SESSION['crmname'];
				//$flag=0;
				require_once("dbconnect.php");
				$result=mysql_query("select * from crm_login where user_id='$user'");
				$pass=mysql_result($result,0,"password");
				if($pass == $oldpass)
				{
					if($newpass == $repeatpass)
					{
						mysql_query("update crm_login set password='$newpass' where user_id='admin'");
						echo "<script>alert('password change');window.location='index.php';</script>";
					}
					else
					{
						echo "<script>alert('Repeat Password Does not match');</script>";
					}
				}
				else
				{
					echo "<script>alert('Incorrect Old Password');</script>";
				}

			}
		?>
</body>
</html>