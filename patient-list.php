<?php 

session_start();
include('db_info.php');


$sql="SELECT * FROM `ortho-history-info` INNER JOIN `ortho-history-info-2` ON `ortho-history-info`.`patient_id`=`ortho-history-info-2`.`patient_id`";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HMT Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
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


<!-- end of side bar -->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Patient List</a> </div>
   
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      <div class="span12">
        
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Patient List</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Age/Sex</th>
                  <th>PIN Number</th>
                  <th>DOA</th>
                  <th>Unit</th>
                  <th>DAOS</th>
                  <th>Entery By</th>
                  <!--<th>Type</th>-->
                  <th>View</th>

                </tr>
              </thead>
              <tbody>
               <?php
               $sql="SELECT  `patient_id`, `patient_name`, `pin_no` ,`age`, `sex`, `doa`,  `unit`, `daos`,  `entered_by` FROM `personal_info` WHERE 1";

               $result=mysqli_query($conn,$sql);
               if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                   $patient_name   = $row['patient_name'];
                   $patient_id     = $row['patient_id'];
                   $age            = $row['age'];
                   $sex            = $row['sex'];
                   $pin            = $row['pin_no'];
                   $doa            = date('d-m-Y', strtotime($row['doa']));
                   $unit           = $row['unit'];
                   $daos           = $row['daos'];
                   $entry_by       = $row['entered_by'];
                   $type='';

               echo '<tr class="gradeU">
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.$patient_name.'</a></td>
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.$age.'/'.$sex.'</td>
                   <td><a href="patient-details.php?id='.$patient_id.'" >'.$pin.'</td>
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.$doa.'</td>
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.$unit.'</td>
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.get_dao($daos).'</td>
                  <td><a href="patient-details.php?id='.$patient_id.'" >'.$entry_by.'</td>
                  <!-- <td><a href="patient_details.php?id='.$patient_id.'" >'.$type.'</td>-->
                  ';
                  if($_SESSION['type']=='0')
                    {
                      echo '<td>Request Edit</td>';
                    }
                    else
                    {
                      echo '<td>Edit</td>';
                    }
                echo '</tr>';

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
                
              </tbody>
            </table>
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
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
<?php

function get_dao($id)
{
  include('db_info.php');  
  $sql="SELECT * FROM user_detail where id=".$id;
   $result=mysqli_query($conn,$sql);
               if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
                    $op=$row['name'];
                  }
                }
                else{
                  $op='null';
                }
                return $op;

}

?>