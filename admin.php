<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="css/bootstrap.min.css" >-->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Home Page</title>
</head>
<body>
<div class="container-fluid" style="margin-bottom:70px">
<div class="row">
<a class="navbar-brand" href=""><img alt="img" src="siesgst.png"></img></a>
<!--<div><h1 align="center">GST LIBRARY</h1></div>-->
</div>
</div>
<nav class=" navbar navbar-inverse">
	<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dd">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="dd">
				<ul class="nav navbar-nav" style="margin-left:70px">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Branch<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">CE</a></li>
							<li><a href="#">IT</a></li>
							<li><a href="#">EXTC</a></li>
							<li><a href="#">MECH</a></li>
							<li><a href="#">PPT</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Login<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Student</a></li>
							<li><a href="#">Faculty</a></li>
							<li><a href="admin_login.html">Admin</a></li>
						</ul>
					</li>
					<li><a href="">Membership</a></li>
					<li><a href="">F.A.Q</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</div>
		</div>
</nav>
<div class="container">
<?php
$login=$_POST['admin'];
//echo $login."<br>";
$pwd=$_POST['pwd'];
//echo $pwd."<br>";
include("chap4_oo_helper.php");
// select records
$res=$obj->select("*","admin","1=1");

if(count($res)>0)
		foreach($res as $row)
		{	
		//echo $row['admin_id']. '  '.$row['password'].'<br>';
		if(($row['admin_id']==$login)&&($row['password']==$pwd))
		{
			//echo "Verified admin";
			header("Location:http://localhost/Project1/LMS/adminpanel.php");
		}
		else{
			echo "Not a verified admin"."<br>";
			echo "<a href='index.php'>"."HOME"."</a>";
		}
		}
else
echo "No records found";
?>
</div>
</body>
</html>