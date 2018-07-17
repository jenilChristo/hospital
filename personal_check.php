<?php
session_start();
include('db_info.php');

$patient_name		=	$_POST['patient_name'];
$phone				=	$_POST['phone_number'];
$address			=	$_POST['patient_address'];
$age				=	$_POST['age'];
$sex				=	$_POST['sex'];
$patient_id			=	'PT_'.uniqid();
$pin_no				=	$_POST['pin_no'];
$ip_no				=	$_POST['ip_no'];
$doa				=	date('Y-m-d',strtotime($_POST['doa']));
$doi 				=	date('Y-m-d',strtotime($_POST['doi']));


$unit				= 	$_POST['unit'];
$chief				=	$_SESSION['chief'];
$entery_by			=	$_SESSION['user_id'];

$sql="INSERT INTO `personal_info`( `patient_id`,`patient_name`, `pin_no`, `ip_no`, `age`, `sex`, `doa`, `doi`, `phone`, `address`, `chief`, `unit`, `daos`,`entered_by`) VALUES ('".mysqli_real_escape_string($conn,$patient_id)."','".mysqli_real_escape_string($conn,$patient_name)."','".mysqli_real_escape_string($conn,$pin_no)."','".mysqli_real_escape_string($conn,$ip_no)."','".mysqli_real_escape_string($conn,$age)."','".mysqli_real_escape_string($conn,$sex)."','".mysqli_real_escape_string($conn,$doa)."','".mysqli_real_escape_string($conn,$doi)."','".mysqli_real_escape_string($conn,$phone)."','".mysqli_real_escape_string($conn,$address)."','".mysqli_real_escape_string($conn,$chief)."','".mysqli_real_escape_string($conn,$unit)."','".mysqli_real_escape_string($conn,$_SESSION['user_id'])."','".mysqli_real_escape_string($conn,$entery_by)."')";
if (mysqli_query($conn, $sql)) {
	$_SESSION['patient_id']=mysqli_real_escape_string($conn,$patient_id);
	header('location:basic-info.php?id='.$_SESSION['patient_id']);
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>