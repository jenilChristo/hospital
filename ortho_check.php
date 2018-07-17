<?php
include('db_info.php');
session_start();
$sql11="SELECT id,patient_id FROM `ortho-history-info` WHERE patient_id LIKE '%".$_POST['id']."%';";
$result11=mysqli_query($conn,$sql11);
if (mysqli_num_rows($result11) > 0) {
	$row = mysqli_fetch_assoc($result11);
	header('location:patient-details.php?id='.$row['patient_id']);
	die();
}


/*
$brief_history		=	$_POST['brief_history'];
$head_injury		=	$_POST['head_injury'];
$address			=	$_POST['patient_address'];
$age				=	$_POST['age'];
$sex				=	$_POST['sex'];

$pin_no				=	$_POST['pin_no'];
$ip_no				=	$_POST['ip_no'];
$doa				=	$_POST['doa'];
$doi 				=	$_POST['doi'];
$unit				= 	$_POST['unit'];
$chief				=	$_SESSION['chief'];*/
$entery_by			=	$_SESSION['entery_name']?$_SESSION['entery_name']:$_SESSION['name'];
$patient_id			=	$_POST['id'];

if($_POST['b-history']=='others')
{
	$b_history	= mysqli_real_escape_string($conn,$_POST['b-hist-spec']);
}
else{
	$b_history	= mysqli_real_escape_string($conn,$_POST['b-history']);
}

$head_injury			=	mysqli_real_escape_string($conn,$_POST['head-injury']);
$past_history			=	mysqli_real_escape_string($conn,$_POST['past-history']);
$drug_history			=	mysqli_real_escape_string($conn,$_POST['drug-history']);
$ho_allergy				=	mysqli_real_escape_string($conn,$_POST['ho-allergy']);
$personal_history		=	mysqli_real_escape_string($conn,$_POST['personal-history']);
$airways				=	mysqli_real_escape_string($conn,$_POST['airway']);

if($_POST['breath-type']=='others')
{
	$breathing_type	= mysqli_real_escape_string($conn,$_POST['breath-specify']);
}
else{
	$breathing_type	= mysqli_real_escape_string($conn,$_POST['breath-type']);
}

$breathing_rate			=	mysqli_real_escape_string($conn,$_POST['b-rate']);
//$breathing_type			=	mysqli_real_escape_string($conn,$_POST['breath-type']);
$c_pr					=	mysqli_real_escape_string($conn,$_POST['cpr']);
$c_rhythm				=	mysqli_real_escape_string($conn,$_POST['CPR-rhythm']);
$bp						=	mysqli_real_escape_string($conn,$_POST['bp']);
$bp_hg					=	mysqli_real_escape_string($conn,$_POST['bp-hg']);
$higher_functions		=	mysqli_real_escape_string($conn,$_POST['higher-function']);
$orientation			=	mysqli_real_escape_string($conn,$_POST['orientation']);
$external_injury		=	mysqli_real_escape_string($conn,$_POST['ext-injuries']);
$brain 					=	mysqli_real_escape_string($conn,$_POST['brain']);
$perl 					=	mysqli_real_escape_string($conn,$_POST['perl']);
$cervical_spine			=	mysqli_real_escape_string($conn,$_POST['c-spine']);
$deformity_level		=	mysqli_real_escape_string($conn,$_POST['deformity_level']);
$tenderness_level		=	mysqli_real_escape_string($conn,$_POST['tenderness_level']);
$sensory_level			=	mysqli_real_escape_string($conn,$_POST['sensory_level']);
$motor_level			=	mysqli_real_escape_string($conn,$_POST['motor_level']);
$provisional_diagnosis	=	mysqli_real_escape_string($conn,$_POST['provisional-diagnosis']);
$bladder				=	mysqli_real_escape_string($conn,$_POST['blader']);
$bowel					=	mysqli_real_escape_string($conn,$_POST['blader']);
$cvs					=	mysqli_real_escape_string($conn,$_POST['cvs']);
if($_POST['added-sound']=='Yes')
{
	$added_sounds	= mysqli_real_escape_string($conn,$_POST['added-sound-s']);
}
else{
	$added_sounds	= mysqli_real_escape_string($conn,$_POST['added-sound']);
}

//$added_sounds			=	mysqli_real_escape_string($conn,$_POST['added-sound']);
if($_POST['rs']=='others')
{
	$rs	= mysqli_real_escape_string($conn,$_POST['rs-s']);
}
else{
	$rs	= mysqli_real_escape_string($conn,$_POST['rs']);
}

//$rs						=	mysqli_real_escape_string($conn,$_POST['rs']);
//$chest_compression		=	mysqli_real_escape_string($conn,$_POST['chest-compression']);
if($_POST['chest-compression']=='Yes')
{
	$chest_compression	= mysqli_real_escape_string($conn,$_POST['chest-compression-s']);
}
else{
	$chest_compression	= mysqli_real_escape_string($conn,$_POST['chest-compression']);
}
$abdomen				=	mysqli_real_escape_string($conn,$_POST['abdomen']);
$ab_sound				=	mysqli_real_escape_string($conn,$_POST['ab-sound']);
$pelvis					=	mysqli_real_escape_string($conn,$_POST['pelvis']);
$peripheral_pulse		=	mysqli_real_escape_string($conn,$_POST['peripheral_pulse']);
$limb_examination		=	mysqli_real_escape_string($conn,$_POST['limb_examination']);
$entery_by				=	mysqli_real_escape_string($conn,$entery_by);
$final_diagnosis		=	mysqli_real_escape_string($conn,$_POST['final_diagnosis']);
$plan					=	mysqli_real_escape_string($conn,$_POST['plan']);


$sql="INSERT INTO `ortho-history-info`( `patient_id`, `brief_history`, `head_injury`, `past_history`, `drug_history`, `ho_allergy`, `personal_history`, `airways`, `breathing_rate`, `breating_type`, `c_pr`, `c_rhythm`, `bp`, `bp_hg`, `higher_functions`, `orientation`, `external_injury`,`daoc`) VALUES ('".mysqli_real_escape_string($conn,$patient_id)."','".$b_history."','".$head_injury."','".$past_history."','".$drug_history."','".$ho_allergy."','".$personal_history."','".$airways."','".$breathing_rate."','".$breathing_type."','".$c_pr."','".$c_rhythm."','".$bp."','".$bp_hg."','".$higher_functions."','".$orientation."','".$external_injury."','".$_SESSION['user_id']."')";
$sql2="INSERT INTO `ortho-history-info-2`(`patient_id`,
 `brain`, `perl`, `cervical_spine`, `deformity_level`, `tenderness_level`, `sensory_level`, `motor_level`, `provisional_diagnosis`, `bladder`, `bowel`, `cvs`, `added_sounds`, `rs`, `chest_compression`, `abdomen`, `ab_sound`, `pelvis`, `peripheral_pulse`, `limb_examination`, `entered_by`, `final_diagnosis`, `plan`) VALUES ('".mysqli_real_escape_string($conn,$patient_id)."','".$brain."','".$perl."','".$cervical_spine."','".$deformity_level."','".$tenderness_level."','".$sensory_level."','".$motor_level."','".$provisional_diagnosis."','".$bladder."','".$bowel."','".$cvs."','".$added_sounds."','".$rs."','".$chest_compression."','".$abdomen."','".$ab_sound."','".$pelvis."','".$peripheral_pulse."','".$limb_examination."','".$entery_by."','".$final_diagnosis."','".$plan."')";

if(mysqli_query($conn,$sql))
{

if(mysqli_query($conn,$sql2))
{
	header('location:patient-details.php?id='.$patient_id);
}
else{

	mysqli_query($conn,"DELETE FROM `ortho-history-info` WHERE patient_id = '$patient_id'") or die(mysql_error());      
	echo '<script>alert("Something went wrong 1 please try again! \n Error: '.mysqli_error($conn).'"); window.history.back();</script>';
	//print_r(mysqli_error($conn));
	//echo '<br>';
	//echo $sql2;
	//echo '<br>';

}


}
else
{
	echo '<script>alert("Something went wrong please try again! \n Error: '.mysqli_error($conn).'"); window.history.back();</script>';
	/*print_r(mysqli_error($conn));
	echo '<br>';
	echo $sql;
	echo '<br>';
	echo "please try again later";*/
}



?>