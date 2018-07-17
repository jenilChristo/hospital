<?php

session_start();


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

if($_SESSION['user_type']=='1')
{
  include('sidebar-admin.php');
}
else
{
  include('sidebar.php');
}

?>
<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Add Patient</a> </div>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="personal_check.php" method="POST" class="form-horizontal">

            <div class="control-group">
              <label class="control-label"> Name :</label>
              <div class="controls">
                <input type="text" class="span11" id="patient_name" name="patient_name" placeholder="Patient Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Phone Number:</label>
              <div class="controls">
                <input type="text" class="span11" id="phone_number" name="phone_number" placeholder="Phone number" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Address</label>
              <div class="controls">
                <textarea class="span11" id="patient_address" name="patient_address"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Age:</label>
              <div class="controls">
                <input type="text" class="span11" id="age" name="age" placeholder="Age" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sex</label>
              <div class="controls">
                <label>
                  <input type="radio" value="male" name="sex" />
                  Male</label>
                <label>
                  <input type="radio" value="female" name="sex" />
                  Female</label>
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">IP Number :</label>
              <div class="controls">
                <input type="text" class="span11" id="ip_no" name="ip_no" placeholder="Enter the IP Number" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">PIN Number :</label>
              <div class="controls">
                <input type="text" class="span11" id="pin_no" name="pin_no"  placeholder="Enter the PIN Number" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date of Admission</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" id="doa" name="doa" placeholder="Select the date"  data-date-format="dd-mm-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date of Injury</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" id="doi" name="doi" placeholder="Select the date"  data-date-format="dd-mm-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
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
              <div class="controls">
                <select class="span6" name="unit" id="unit" >
                  <option>Unit 1</option>
                  <option>Unit 2</option>
                  <option>Unit 3</option>
                  <option>Unit 4</option>
                  
                </select>
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
           
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>

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
