<?php
session_start();
?>
<html>
<head>
<title>Flights</title>
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
	$loc = "".$_GET['loc'];
	$dest = "".$_GET['dest'];
	$sql="SELECT  `Source location`, `Destination` FROM flights";
	
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