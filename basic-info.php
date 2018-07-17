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
$sql="SELECT * FROM personal_info WHERE patient_id='".$id."';";
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

	 }
}
else{

	echo "<script>alert('Something went wrong. Please try again!');</script>";
	header('location:patient_list.php');
	die();
	//header('location:index.php');
	//echo $sql;
	//echo '<br>'.md5($pwd);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
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
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
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

              <a  href="ortho-info.php?id=<?php echo $id; ?>" class="btn btn-success">Type 1 </a>
              <a class="btn btn-primary">Type 2</a>
              <a class="btn btn-info">Type 3</a>
              <a class="btn btn-danger">Type 4</a>
            
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
           <form action="personal_check.php" method="POST" class="form-horizontal">

            <div class="control-group">
              <label class="control-label"> Name :</label>
				<label class="control-label"> <?php echo $patient_name; ?></label>
            </div>
            <div class="control-group">
              <label class="control-label">Phone Number:</label>
              <label class="control-label"> <?php echo $phone; ?></label>
            </div>
             <div class="control-group">
              <label class="control-label">Address</label>
              <label class="control-label"> <?php echo $address; ?></label>
            </div>
            <div class="control-group">
              <label class="control-label">Age / Sex:</label>
              <label class="control-label"> <?php echo $age.'yrs / '.$sex; ?></label>
            </div>
           
            <div class="control-group">
              <label class="control-label">IP Number :</label>
              <label class="control-label"> <?php echo $ip_no; ?></label>
            </div>
            <div class="control-group">
              <label class="control-label">PIN Number :</label>
              <label class="control-label"> <?php echo $pin_no; ?></label>
            </div>
            <div class="control-group">
              <label class="control-label">Date of Admission</label>
              <label class="control-label"> <?php echo $doa; ?></label>
            </div>
            <div class="control-group">
              <label class="control-label">Date of Injury</label>
              <label class="control-label"> <?php echo $doi; ?></label>
            </div>
            <!--<div class="control-group">
              <label class="control-label">Unit </label>
              <div class="controls">
                <label>
                  <input type="radio" name="unit" />
                  First Unit</label>
                <label>
                  <input type="radio" name="unit" />
                  Second Unit</label>
                <label>
                  <input type="radio" name="unit" />
                  Third Unit</label>
              </div>
            </div>-->
              <div class="control-group">
              <label class="control-label">Unit</label>
              <label class="control-label"> <?php echo $unit; ?></label>
              </div>
            </div>
            <!-- <div class="control-group">
              <label class="control-label">Chief :</label>
              <div class="controls">
                <input type="text" class="span11" name="chief" placeholder="Last name" />
              </div>
            </div>-->
           <!-- <div class="control-group">
              <label class="control-label">DAOS :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" />
              </div>
            </div>-->
          
          
      </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
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
