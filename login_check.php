<?php
session_start();
include('db_info.php');
$username	=	$_POST['username'];
$pwd		=	$_POST['pwd'];
$sql="SELECT * FROM user_detail WHERE username='".mysqli_real_escape_string($conn,$username)."' AND password='".md5(mysqli_real_escape_string($conn,$pwd))."';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_assoc($result)) {
	 	$_SESSION['user_id']=$row['id'];
	 	$_SESSION['username']=$username;
	 	$_SESSION['name']=$row['name'];
	 	$_SESSION['email']=$row['email'];
	 	$_SESSION['phone']=$row['phone'];
	 	$_SESSION['user_type']=$row['user_type'];
	 	$_SESSION['department']=$row['department'];
	 	$_SESSION['speciality']=$row['speciality'];
	 	$_SESSION['type']=$row['user_type'];
	 	//$_SESSION['chief']=get_chief();
	 	$_SESSION['chief']='Testing chief';	
	 	if($_SESSION['type']==1)
	 	{
	 		header('location:dashboard.php');
	 	}
	 	else{

	 		header('location:get_user.php');
	 	//header('location:home.php');
	 }
//echo md5($pwd);
//echo '<br>'. $sql;
//echo "<br>".mysqli_real_escape_string($conn,$pwd);
	 }
}
else{

	echo "<script>alert('Invalid Username/Password');</script>";
	header('location:index.php');
	//echo $sql;
	//echo '<br>'.md5($pwd);
}

?>