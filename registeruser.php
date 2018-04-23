<?php
session_start();
?>
<html>
<head>
<title>Registration</title>
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
	$act=mysqli_query($connect,"SELECT accountID,First Name, Last Name,Username,Password,Date of birth,Email,Country FROM registration");
	$var=0;
	while($row=mysqli_fetch_array($act))
	{
		$var1=$row['accountID'];
	}
	$var=$var1+1;
	
	
	$sql="INSERT INTO registration (First Name, Last Name,Username,Password,Date of birth,Email,Country, at, accountID) 
	VALUES ('$_GET[first]','$_GET[last]','$_GET[user]','$_GET[pass]','$_GET[date_birth]','$_GET[email]', '$_GET[country]','$_GET[select]','$var')";
	$result=mysqli_query($connect,$sql);
	$sql="INSERT INTO reqistration (accountID) VALUES ('$var')";
	$result=mysqli_query($connect,$sql);
	echo "You successfully registered!<br>";
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