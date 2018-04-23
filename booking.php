<?php
session_start();
?>
<html>
<head>
<title>Booking</title>
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
	$id = "".$_GET['id'];
	$user = "".$_GET['user'];
	$sql="SELECT  'Flight id',username FROM booking";
	$sql="INSERT INTO booking(`Flight Id`,`Username`) VALUES ('$_GET[id]','$_GET[user]')";
	$result=mysqli_query($connect,$sql);
	echo "you have reserved your ticket on plane nr.$_GET[id]";
?>
</br>
</br>
</br>
</div>
</body>
</html>
<?php
header('refresh:3; url=index2.php#flights');
die();
?>