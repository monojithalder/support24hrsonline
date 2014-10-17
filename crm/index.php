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
?>
<div class="container">
	<section id="content">
		<form action="#" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="user" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="pass" />
			</div>
			<div>
				<input type="submit" name="sub" value="Log in" />
                
			</div>
            <div><a href="forgotpassword.php" >Forgot Password</a></div>
            
		</form><!-- form -->
		<!-- button -->
	</section>
 </div>
<?php
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
        
        <li><a href="insertdata.php">Insert Data</a></li>
         <li><a href="changepassword.php">Change Password</a></li>
      <!--  <li><a href="viewdata.php">View/Edit Data</a></li>
        <li><a href="user.php">Create User</a></li>
         <li><a href="changepassword.php">Change Password</a></li>!-->
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
	if(isset($_POST['sub']))
	{
		require_once("dbconnect.php");
		$result=mysql_query("select * from crm_login");
		$user_id=$_POST['user'];
		$pass=$_POST['pass'];
		$flag=0;
		$row=mysql_num_rows($result);
		for($i=0;$i < $row ;$i++)
		{
			$f1=mysql_result($result,$i,"user_id");
			$f2=mysql_result($result,$i,"password");
			if($user_id==$f1 && $pass==$f2)
			{
				$flag++;
			}
		}
		if($flag > 0)
		{
			$_SESSION['crmname']=$user_id;
			echo "<script>window.location='index.php';</script>";
		}
		else
		{
			echo "<script>alert('wrong user_id/password');</script>";
		}
	}
	
?>
</body>
</html>
