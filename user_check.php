<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

session_start();

if($_POST['entery_name'])
{
$_SESSION['entery_name']=$_POST['entery_name'];
header('location:home.php');
}
else
{
	echo "<script>alert('Please enter your name');</script>";
	header('location:get_user.php');
}


?>

</body>
</html>


