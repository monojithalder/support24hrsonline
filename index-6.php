<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/accordian.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/jquery.simplyscroll.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Franchise_700.font.js" type="text/javascript"></script>
<script src="js/superfish.js" type="text/javascript"></script>
<script src="js/slides.min.jquery.js"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.hoverIntent.js" type="text/javascript"></script>
<script src="js/jquery.responsivemenu.js"></script>
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>
<script type="text/javascript" src="js/prefixfree-1.0.7.js"></script>
</head>

<body>
<div class="container_24">
 
<header>
<div class="prefix_2 grid_20 suffix_2">
<div class="row-1">
<h1>
<a href="index.php">Support 24 Hours</a>
</h1>
<strong class="slogon"><b>TOLL FREE:&nbsp;&nbsp;&nbsp;&nbsp; 1-844-643-0019(USA/CA)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support@support24hrs.com</strong>
<div class="uk"><img src="images/us.png" /></div>
</div>
<nav id="main-menu">
<strong></strong>
<ul class="menu responsive-menu">
<li><a href="index.html">Home</a></li>
<li><a href="index-1.php">about</a></li>
<li><a href="#">services</a>
<ul>
<li><a href="computer_support.php">Computer support</a></li>
<li><a href="home_network_support.php">Home Network support</a></li>
<li><a href="operating_support.php">MS Operating support</a></li>
<li><a href="office_support.php">MS Office support</a></li>
<li><a href="pc_optimization.php">PC Optimization</a></li>
<li><a href="printer_support.php">Printer support</a></li>
<li><a href="virus_security.php">Virus & Security</a></li>
</ul>
</li>
<li><a class="active" href="#">Windows support</a>
<ul>
<li><a href="data_backup.php">Data Backup</a></li>
<li><a href="resigtry_error.php">Fix Registry Error</a></li>
<li><a href="blue_screen.php">Fix Blue Screen</a></li>
<li><a href="laptop_support.php">Laptop Support</a></li>
<li><a href="software_support.php">Software Support</a></li>
<li><a href="32_error.php">Windows 32 Error</a></li>
</ul>
</li>
<li><a href="index-4.php">Plans</a></li>
<li><a href="index-5.php">Testimonials</a></li>
<li><a href="index-6.php">contacts</a></li>
</ul>
<div class="clear"></div>
</nav>
</div>
<div class="clear"></div>
</header>
 
<section id="content">
<div class="wrapper p3">
<div class="post_content">
            <p><span class="g">Send us mail:</span></p>
            <form action="#" method="post" name="fr">
            <table style="font-size:20px;">
            <tr>
            <td>Name :
            </td>
            <td><input id="name" name="txtname" class="text" style="width:220px;" />
			</td>
            </tr>
            
            <tr>
            <td>
             <label for="email">Email Address (required)</label>
            </td>
            <td>
              <input id="email" name="txtemail" class="text"  style="width:220px" />

           </td>
            </tr>
            <tr>
            <td>Phone no</td>
            <td><input id="phoneno" name="txtphone" class="text" style="width:220px" />
</td>
            </tr>
            <tr>
            <td>
            Message
            </td>
            <td><textarea id="message" name="txtmessage" rows="8" cols="35"></textarea>
</td></tr>
<tr><td></td>
<td><input type="submit" name="sub" value="Submit"  />
</td>
</tr>
            </table>
            </form>
               
            
          </div><br />
<br />

          <p style="font-size:10px"><b>Address:-Park Street Titan Building,Kolkata-700038</b></p>
          <p style="font-size:10px"><b>Emails:-contact@support24hrs.com</b></p>
          </div>
          <div style="width:100%;height:50px;background-color: #10b1bb;color:white;z-index:2;position:fixed;bottom:0;">
<p>	Disclaimer: Support24hrs is an independent technical support service provider for a large variety of third party products, 
	brands and services. Any use of Trademarks, Brands, Products and Services is referential and Support24hrs , hereby, disclaims 
	any association, affiliation, direct or indirect, or representation in any form, of any such brand, product or service.You may 
	also contact Brand Owner for their services. The service maybe available free.</p>
</div>


</body>
<?php
if(isset($_POST['sub']))
{
	if($_POST['txtname']=="")
	{
		echo "<script>alert('please enter your name');</script>";
	}
	else if($_POST['txtemail']=="")
	{
		echo "<script>alert('please enter your email');</script>";
	}
	else if($_POST['txtmessage']=="")
	{
		echo "<script>alert('please enter your message');</script>";
	}
	else if($_POST['txtphone']=="")
	{
		echo "<script>alert('please enter Phone');</script>";
	}
	else
	{
		if(filter_var($_POST['txtemail'],FILTER_VALIDATE_EMAIL))
		{
			$name=$_POST['txtname'];
			$email=$_POST['txtemail'];
			$address=$_POST['txtaddress'];
			$message=$_POST['txtmessage'];
			$to="info@support24hrs.com";
			$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			$body="name-$name <br />email-$email<br />$address-$address<br />message-$message";
			$sub="email send";
			mail($to,$sub,$body,$headers);
			echo "<script>alert('mail send');</script>";
		}
		else
		{
			echo "<script>alert('Invalid email');</script>";
		}
		
	}
}

?>
</html>
