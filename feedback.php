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
<div class="uk"><img src="images/us.png"></div>
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
            <p style="font-size:16px">FeedBack</p>
            <form action="" method="post" name="fr">
            <table>
            	<tr>
                	<td>
                   		<P style="font-family:'Times New Roman', Times, serif; font-size:18px">Are You Satisfy with Service</P>
                    </td>
                </tr>
                <tr>
                	<td>
                   		Name
                    </td>
                    <td><input type="text" name="custname"  /></td>
                </tr>
                <tr>
                	<td><input type="radio"  name="op" value="Bad"  />Bad</td>
                </tr>
                 <tr>
                	<td><input type="radio" name="op" value="Good"  />Good</td>
                </tr>
				<tr>
                	<td><input type="radio" name="op" value="Very Good"  />Very Good</td>
                </tr>
                <tr>
                	<td><input type="radio" name="op" value="excellent"  />Excellent</td>
                </tr>
                <tr>
                	<td><p style="font-family:Arial, Helvetica, sans-serif; font-size:18px;">Please Give Suggestion For Better Service</p></td>
                </tr>
                <tr><td><textarea style="resize:none" name="test" cols="50" rows="3"></textarea></td></tr>
				<tr><td><input type="submit" name="sub" value="Feed Back"  /></td>
					<td></td>
				</tr>
            </table>
            </form>
               
            
          </div>
          <p style="font-size:10px"><b>Address:-Park Street Titan Building,Kolkata-700038</b></p>
          </div>
</body>
<?php
if(isset($_POST['sub']))
{
	
			$name=$_POST['op'];
			$email=$_POST['text'];
			$address=$_POST['custname'];
			$message=$_POST['txtmessage'];
			$to="info@support24hrs.com";
			$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
			$body="Cust_name-$address,       Service-$name,        Suggestion-$email";
			$sub="Contact Us";
			mail($to,$sub,$body,$headers);
			echo "<script>alert('mail send');</script>";
		
}

?>
</html>
