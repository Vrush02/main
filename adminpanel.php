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
<body>
<table align="center">
<form action="#" method="post" enctype="multipart/form-data">
<tr>
<td>Book id:</td>
<td><input type="text" name="bid" id="bid"></td>
</tr>
<tr>
<td>Book Name:</td>
<td><input type="text" name="bname" id="bname"></td><br>
</tr>
<tr>
<td>Upload image:</td>
<td><input type="file" name="file" id="file"></td>
</tr>
<tr>
<td>Category:</td>
<td><input type="text" name="cat" id="cat"></td><br>
</tr>
<tr>
<td>Publisher:</td>
<td><input type="text" name="publisher" id="publisher"></td><br>
</tr>
<tr>
<td>Author:</td>
<td><input type="text" name="author" id="author"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</form>
</table>
<hr>
</body>
</html>
<?php
if($_POST)
{
$book_id=$_POST['bid'];
$book_name=$_POST['bname'];
$image=$_FILES['file']['name'];
$category=$_POST['cat'];
$publisher=$_POST['publisher'];
$author=$_POST['author'];
include("chap4_oo_helper.php");
$obj->insert("book", "bid, bname, image, category, pub, author",
             "'$book_id','$book_name', '$image', '$category', '$publisher', '$author'");
			 $res=$obj->select("*","book","1=1");
	if(($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/pjpeg"))
    {
		if($_FILES["file"]["error"]>0)
	    {
			echo "Error:".$_FILES["files"]["error"]."<br>";
	    }
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
		}
    }
if(count($res)>0)
		foreach($res as $row)
		{	
		echo $row['bid']. '  '.$row['bname'].
		'<form action="delete.php" method="post">'.'<input type="hidden" name="bid" value="'.$row['bid'].'"/>'.
		'<input type="submit" value="Delete">'.'</form>'.'<br>'.'<hr>';
		}
else
echo "No records found";	
}
?>