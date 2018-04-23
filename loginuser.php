<?php
session_start();
?>
<html>
<head>
<title>Register</title>
</head>
<body>
<div id="title">
<h1 align="center"><img align="center">
</h1></div>
</div>

<div id="content" style="float:left">

<?php
//connecting to the database
	$connect=mysqli_connect("localhost","root","","project");
//check
if (mysqli_connect_errno())
{
	echo "Failed to connect to the database ".mysqli_connect_error();
}	
	$user = "".$_GET['user'];
	$pass = "".$_GET['pass'];
	$sql="SELECT username,password FROM registration WHERE registration.username = '$user' AND registration.password = '$pass';";
	$res=mysqli_query($connect,$sql);
	$nr = mysqli_num_rows($res);
	if ($nr == 0)
	{
		echo "Wrong username or password!";
	}
	else
	{ 
	echo "You successfully loged in!<br>";
	$_SESSION["user"]=$user;
	mysqli_close($connect);
	header('refresh:3; url=index2.php');
	die();
	}
	mysqli_close($connect);
?>
</br>
</br>
</br>
</div>
</body>
</html>
<?php
header('refresh:3; url=index2.php');
die();
?>