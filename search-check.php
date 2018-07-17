<?php
session_start();
include('db_info.php');
$id	=	$_POST['id'];

$sql="SELECT id,patient_id FROM personal_info WHERE patient_id = '".$id."' OR pin_no = '".$id."';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	header('location:basic-info.php?id='.$row['patient_id']);
	
}
else{

	echo "<script>alert('Patient Id not found');</script>";
	//sleep(25);
	header('location:personal-info.php');
	//echo $sql;
	//echo '<br>'.md5($pwd);
}

?>