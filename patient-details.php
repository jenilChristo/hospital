<?php
session_start();
include('db_info.php');
//$_SESSION['patient_id']='orth_674817995';
if(isset($_GET['id']) && $_GET['id']!='')
{
	$id=mysqli_real_escape_string($conn,$_GET['id']);
}
else{
	header('location:patient_list.php');
	die();
}
$sql="SELECT * FROM personal_info pi INNER JOIN `ortho-history-info` oh1 ON pi.patient_id=oh1.patient_id INNER JOIN `ortho-history-info-2` oh2 ON pi.patient_id=oh2.patient_id WHERE pi.patient_id='".$id."';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_assoc($result)) {
	 	$patient_name		=	$row['patient_name'];
	 	$age 				=	$row['age'];
	 	$sex 				=	$row['sex'];
	 	$patient_name		=	$row['patient_name'];
		$phone				=	$row['phone'];
		$address			=	$row['address'];
		$patient_id			=	$id;
		$pin_no				=	$row['pin_no'];
		$ip_no				=	$row['ip_no'];
		$doa				=	date('d-m-Y',strtotime($row['doa']));
		$doi 				=	date('d-m-Y',strtotime($row['doi']));
		$unit				= 	$row['unit'];
		$chief				=	$_SESSION['chief'];
		$entery_by			=	$_SESSION['user_id'];
    $brief_history  = $row['brief_history'];
    $head_injury    = $row['head_injury'];
    $past_history   = $row['past_history'];
    $drug_history   = $row['drug_history'];
    $ho_allergy     = $row['ho_allergy'];
    $personal_history   = $row['personal_history'];
    $airway             = $row['airways'];
    $breath_rate        = $row['breathing_rate'];
    $breath_type        = $row['breating_type'];
    $c_pr               = $row['c_pr'];
    $c_rhythm           = $row['c_rhythm'];
    $bp                 = $row['bp'];
    $bp_hg              = '<b>'.$row['bp_hg'].' UL </b>';
    $higher_fn          = $row['higher_functions'];
    $orientation        = $row['orientation'];
    $external_injury    = $row['external_injury'];
    $brain              = $row['brain'];
    $perl               = $row['perl'];
    $spine              = $row['spine'];
    $cervical_spine     = $row['cervical_spine'];
    $deformity_level    = $row['deformity_level'];
    $tenderness_level   = $row['tenderness_level'];
    $sensory_level      = $row['sensory_level'];
    $motor_level        = $row['motor_level'];
    $bladder            = $row['bladder'];
    $bowel              = $row['bowel'];
    $cvs                = $row['cvs'];
    $added_sound        = $row['added_sounds'];
    $rs                 = $row['rs'];
    $chest_compression  = $row['chest_compression'];
    $abdomen            = $row['abdomen'];
    $bowel_sound        = $row['ab_sound'];
    $pelvis             = $row['pelvis'];
    $peripheral_pulse  = $row['peripheral_pulse'];
    $limb_examination   = $row['limb_examination'];



	 }
}
else{

	echo "<script>alert('Something went wrong. Please try again!');</script>";
	header('location:patient_list.php');
	die();
	//header('location:index.php');
	//echo $sql;
  //print_r(mysqli_error($conn));
	//echo '<br>'.md5($pwd);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>HMT</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">HMT</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<?php 
include('top-header.php');

?>



<!--sidebar-menu-->
<?php 
include('sidebar.php');
?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="personal-info.php" class="tip-bottom">Add Patient</a> <a href="#" class="current">Patient History</a> </div>
</div>

<div class="container-fluid">

  <div class="row-fluid">

              
            
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
          <a  class="label label-important">PDF </a>
              <a class="label label-success">EXCEL</a>
              <a class="label label-warning">Print</a>
              <?php if($_SESSION['type']=='0')
                    {
                      echo '<a class="label label-info">Request Edit</a>';
                    }
                    else
                    {
                      echo '<a class="label label-info">Edit</a>';
                    } ?>
        </div>
        <div class="widget-content nopadding">

 <table class="table">
            <tr>
                  <th>Name :</th>
                  <td> <?php echo $patient_name; ?></td>
                   <th>Unit</th>
                  <td> <?php echo $unit; ?></td>
                </tr>
            <tr>
                  <th>Age / Sex:</th>
                  <td> <?php echo $age.'yrs / '.$sex; ?></td>
                  <th>Chief</th>
                  <td> <?php echo $chief; ?></td>
                </tr>

           
           
           <tr>
                  <th>IP Number :</th>
                  <td><?php echo $ip_no; ?></td>
                  <th>PIN Number :</th>
                  <td> <?php echo $pin_no; ?></td>
                  
                </tr>

            <tr>
                  <th>Date of Admission</th>
                  <td><?php echo $doa; ?></td>
                  <th>Phone Number:</th>
                  <td> <?php echo $phone; ?></td>
                </tr>
           <tr>
                  <th>Date of Injury</th>
                  <td><?php echo $doi; ?></td>
                  <th>Address</th>
                  <td><?php echo $address; ?></td>
                </tr>
            

            </table>
    
            </div>
        </div>
      </div>
    </div>
    
    <div class="row-fluid">
      <div class="span12">
<div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Type 1 details</h5>
            <a  class="label label-important">PDF </a>
              <a class="label label-success">EXCEL</a>
              <a class="label label-warning">Print</a>
              <?php if($_SESSION['type']=='0')
                    {
                      echo '<a class="label label-info">Request Edit</a>';
                    }
                    else
                    {
                      echo '<a class="label label-info">Edit</a>';
                    } ?>
          </div>
          <div class="widget-content nopadding collapse" id="collapseG2">
            <table class="table">
            <tr>
                  <th>Brief History :</th>
                  <td colspan="3"> <?php echo $brief_history; ?></td>
                   
                </tr>
                <tr>
                  <th>Drug History :</th>
                  <td colspan="3"> <?php echo $drug_history; ?></td>
                   
                </tr>
                <tr>
                  <th>H/o Allergy :</th>
                  <td colspan="3"> <?php echo $ho_allergy; ?></td>
                   
                </tr>
                <tr>
                  <th>Head Injury :</th>
                  <td> <?php echo $head_injury; ?></td>
                  <th>Past History</th>
                  <td> <?php echo $past_history; ?></td>
                   
                </tr>
                <tr>
                  <th>Personal History :</th>
                  <td> <?php echo $personal_history; ?></td>
                  <th>Airway</th>
                  <td> <?php echo $airway; ?></td>
                   
                </tr>
                <tr>
                  <th>Breath Rate :</th>
                  <td> <?php echo $breath_rate.' / min'; ?></td>
                  <th>Type</th>
                  <td> <?php echo $breath_type; ?></td>
                   
                </tr>
                <tr>
                  <th>Circulation PR :</th>
                  <td> <?php echo $c_pr; ?></td>
                  <th>Rhythm :</th>
                  <td> <?php echo $c_rhythm; ?></td>
                   
                </tr>
                <tr>
                  <th>Circulation BP :</th>
                  <td colspan="3"> <?php echo $bp.'mm Hg in '.$bp_hg; ?></td>
                </tr>
                 <tr>
                  <th>Higher Functions :</th>
                  <td> <?php echo $higher_fn; ?></td>
                  <th>Orientation :</th>
                  <td> <?php echo $orientation; ?></td>
                   
                </tr>
                <tr>
                  <th>External Injuries</th>
                  <td colspan="3"><?php echo $external_injury; ?></td>
                </tr>
                 <tr>
                  <th>Brain  :</th>
                  <td> <?php echo $brain; ?></td>
                  <th>PERL :</th>
                  <td> <?php echo $perl; ?></td>
                   
                </tr>
                <tr>
                  <th>Cervical Spine  :</th>
                  <td> <?php if($cervical_spine=='yes'){echo 'Active Painless Movements(Yes)';}else{echo 'No Active Painless Movements(No)';} ?></td>
                  <th>Spine Injury :</th>
                  <td> <?php echo $spine; ?></td>
                </tr>
                <?php
                if($spine=='Yes')
                {?>
                  <tr>
                  <th>Deformity Level  :</th>
                  <td> <?php echo $deformity_level; ?></td>
                  <th>Tenderness Level :</th>
                  <td> <?php echo $tenderness_level; ?></td>
                   
                </tr>
                <tr>
                  <th>Sensory Level  :</th>
                  <td> <?php echo $sensory_level; ?></td>
                  <th>Motor Level :</th>
                  <td> <?php echo $motor_level; ?></td>
                   
                </tr> <?php }?>
                <tr>
                  <th>Bladder  :</th>
                  <td> <?php echo $bladder; ?></td>
                  <th>Bowel :</th>
                  <td> <?php echo $bowel; ?></td>
                   
                </tr>
                <tr>
                  <th>CVS  :</th>
                  <td > <?php echo $cvs; ?><b> / Added Sounds </b><?php echo $added_sound; ?></td>
                  <th>RS :</th>
                  <td><?php echo $rs; ?></td>
                </tr>
                <tr>
                  <th>Chest Compression  :</th>
                  <td colspan="3"> <?php echo $chest_compression; ?></td>
                </tr>
                <tr>
                  <th>Abdomen  :</th>
                  <td> <?php echo $abdomen; ?></td>
                  <th>Bowel Sounds :</th>
                  <td> <?php echo $bowel_sound; ?></td>
                   
                </tr>
                <tr>
                  <th>Pelvis  :</th>
                  <td> <?php echo $pelvis; ?></td>
                  <th>Peripheral Pulses :</th>
                  <td> <?php echo $peripheral_pulse; ?></td>
                   
                </tr>
                <tr>
                  <th>Limp Examination :</th>
                  <td colspan="3"> <?php echo $limb_examination; ?></td>
                </tr>



            </table>
             <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG22"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Type 1 details</h5>
            <a  class="label label-important">PDF </a>
              <a class="label label-success">EXCEL</a>
              <a class="label label-warning">Print</a>
              <?php if($_SESSION['type']=='0')
                    {
                      echo '<a class="label label-info">Request Edit</a>';
                    }
                    else
                    {
                      echo '<a class="label label-info">Edit</a>';
                    } ?>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG22">
            <table class="table">
              <tr>
                  <th>Brief History :</th>
                  <td colspan="3"> <?php echo $brief_history; ?></td>
                   
                </tr>
                <tr>
                  <th>Drug History :</th>
                  <td colspan="3"> <?php echo $drug_history; ?></td>
                   
                </tr>
                <tr>
                  <th>H/o Allergy :</th>
                  <td colspan="3"> <?php echo $ho_allergy; ?></td>
                   
                </tr>
                <tr>
                  <th>Head Injury :</th>
                  <td> <?php echo $head_injury; ?></td>
                  <th>Past History</th>
                  <td> <?php echo $past_history; ?></td>
                   
                </tr>
            </table>
          </div>
          </div>

        </div>
         
        </div>
        </div>
      </div>

    </div>
  </div>
</div>
 
      </div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
