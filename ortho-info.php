<?php
session_start();
include('db_info.php');
//$_SESSION['patient_id']='orth_674817995';
if(isset($_GET['id']) && $_GET['id']!='')
{
  $id=mysqli_real_escape_string($conn,$_GET['id']);
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
<script src="js/jquery.js"></script> 
</head>
<body>
<script type="text/javascript">
  $(document).ready(function()
    {

      $('.b-hist').change(function()
        {

          
          if($(this).val()=='others'){
            $('#b-hist-spec').show();

          }
          else{
             $('#b-hist-spec').hide();
          }

        });

      $('.breath-type').change(function()
        {

          //alert($(this).val());
          if($(this).val()=='others'){
            $('#breath-specify').show();

          }
          else{
             $('#breath-specify').hide();
          }

        });
      $('.added-sound').change(function()
        {

          //alert($(this).val());
          if($(this).val()=='Yes'){
            $('#added-sound-s').show();

          }
          else{
             $('#added-sound-s').hide();
          }

        });
       $('.rs').change(function()
        {

          //alert($(this).val());
          if($(this).val()=='others'){
            $('#rs-s').show();

          }
          else{
             $('#rs-s').hide();
          }

        });
 $('.chest-compression').change(function()
        {

          //alert($(this).val());
          if($(this).val()=='Yes'){
            $('#chest-compression-s').show();

          }
          else{
             $('#chest-compression-s').hide();
          }

        });




    });


</script>
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
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="personal-info.php" class="tip-bottom">Add Patient</a> <a href="#" class="current">Type 1 </a> </div>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Ortho-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="ortho_check.php" method="POST" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
             <div class="control-group">
              <label class="control-label">Brief History</label>
              <div class="controls ">
                <label>
                  <input type="radio" class="b-hist" value="RTA" name="b-history" />
                  RTA</label>
                <label>
                  <input type="radio" class="b-hist" value="TTA" name="b-history" />
                  TTA</label>
                   <label>
                  <input type="radio" class="b-hist" value="ASSAULT" name="b-history" />
                  ASSAULT</label>
                <label>
                  <input type="radio" class="b-hist" value="FALL" name="b-history" />
                  FALL</label>
                   <label>
                  <input type="radio" class="b-hist" value="others" name="b-history" />
                  Others</label>
              </div>
              <div class="controls">
                <input type="text" style="display: none;" class="span11" id="b-hist-spec" name="b-hist-spec" placeholder="Specify the other cause" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Head Injury</label>
              <div class="controls">
                <label>
                  <input type="radio" class="" value="LOC" name="head-injury" />
                  LOC</label>
                <label>
                  <input type="radio" class="" value="ENT Bleed" name="head-injury" />
                  ENT Bleed</label>
                   <label>
                  <input type="radio" class="" value="Vomiting" name="head-injury" />
                  Vomiting</label>
                <label>
                  <input type="radio" class="" value="Seizures" name="head-injury" />
                  Seizures</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Past History</label>
              <div class="controls">
                <label>
                  <input type="radio" class="past-hist" value="DM" name="past-history" />
                  DM</label>
                <label>
                  <input type="radio" class="past-hist" value="SHT" name="past-history" />
                  SHT</label>
                   <label>
                  <input type="radio" class="past-hist" value="TB" name="past-history" />
                  TB</label>
                <label>
                  <input type="radio" class="past-hist" value="Seizure" name="past-history" />
                  Seizure</label>
                   <label>
                  <input type="radio" class="past-hist" value="Bleeding Disorder" name="past-spec" />
                  Bleeding Disorder</label>
              </div>
             
            </div>
            <div class="control-group">
              <label class="control-label"> Drug History :</label>
              <div class="controls">
                <input type="text" class="span11" name="drug-history" placeholder="Drug History" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"> H/o Allergy :</label>
              <div class="controls">
                <input type="text" class="span11" name="ho-allergy" placeholder="H/o Allergy" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Personal History</label>
              <div class="controls">
                <label>
                  <input type="radio" class="personal-hist" value="Alcohol" name="personal-history" />
                  Alcohol</label>
                <label>
                  <input type="radio" class="personal-hist" value="Smoking" name="personal-history" />
                  Smoking</label>
                <label>
                  <input type="radio" class="personal-hist" value="Tobacco" name="personal-history" />
                  Tobacco</label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Airway</label>
              <div class="controls">
                <label>
                  <input type="radio" class="airway" value="Clear" name="airway" />
                  Clear</label>
                <label>
                  <input type="radio" class="airway" value="Blocked" name="airway" />
                  Blocked</label>
                
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Breathing Rate</label>
              <div class="controls">
                <div class="input-append">
                  <input type="text" placeholder="0000" name="b-rate" class="span11">
                  <span class="add-on">/ min</span> </div>
              </div>
              <label class="control-label">Type</label>
              <div class="controls">
                <label>
                  <input type="radio" class="breath-type" value="Abdomino Thoracic" name="breath-type" />
                  Abdomino Thoracic</label>
                <label>
                  <input type="radio" class="breath-type" value="Abdominal" name="breath-type" />
                  Abdominal</label>
                <label>
                  <input type="radio" class="breath-type" value="others" name="breath-type" />
                  Others</label>
              </div>
              <div class="controls">
                <input type="text" class="span11" style="display: none;" id="breath-specify" name="breath-specify" placeholder="Specify the other cause" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Circulation PR</label>
              <div class="controls">
                <div class="input-append">
                  <input type="text" placeholder="0000" name="cpr" class="span11">
                  <span class="add-on">/ min</span> </div>
              </div>
              <label class="control-label">Rhythm</label>
              <div class="controls">
                <label>
                  <input type="radio" class="CPR-rhythm" value="Regular" name="CPR-rhythm" />
                  Regular</label>
                <label>
                  <input type="radio" class="CPR-rhythm" value="Irregular" name="CPR-rhythm" />
                  Irregular</label>
               
              </div>
              <label class="control-label">BP</label>
              <div class="controls controls-row">
                
                  <input type="text" placeholder="0000" name="bp" class="span3">
                  <span class="add-on" style="
                  /*display: inline-block;*/
    width: auto;
    height: 20px;
    min-width: 16px;
    padding: 4px 5px;
    font-size: 20px;
    font-weight: normal;
    line-height: 20px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
   ">/</span>
                  <div class="input-append">
                  <input type="text" placeholder="0000" name="bp" class="span3">
                  <span class="add-on">mm Hg in</span> </div>
                  <b>(R) UL</b>
                  <input type="radio" class="bp-hg" value="(R) UL" name="bp-hg" />
                  <b>(L) UL</b>
                  <input type="radio" class="bp-hg" value=(L) ULr" name="bp-hg" />
                  
              </div>
              <!-- <label class="control-label">Hg in</label>
              <div class="controls">
                <label>
                  <input type="radio" class="bp-hg" value="(R) UL" name="bp-hg" />
                  (R) UL</label>
                <label>
                  <input type="radio" class="bp-hg" value=(L) ULr" name="bp-hg" />
                  (L) UL</label>
               
              </div> -->
            
            </div>
            <div class="control-group">
              <label class="control-label">Higher Functions :</label>
              <div class="controls">
                <label>
                  <input type="radio" class="higher-fn" value="Conscious" name="higher-function" />
                  Conscious</label>
                <label>
                  <input type="radio" class="higher-fn" value="Unconscious" name="higher-function" />
                  Unconscious</label>
                <label>
                  <input type="radio" class="higher-fn" value="Semiconscious" name="higher-function" />
                  Semiconscious</label>
                  <label>
                  <input type="radio" class="higher-fn" value="Drowsy" name="higher-function" />
                  Drowsy</label>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Orientation :</label>
              <div class="controls">
                <label>
                  <input type="radio" class="orientation" value="Yes" name="orientation" />
                  Yes</label>
                <label>
                  <input type="radio" class="orientation" value="No" name="orientation" />
                  No</label>
               
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">External Injuries:</label>
              <div class="controls">
               <textarea class="span11 class="span11" name="ext-injuries" ></textarea>
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">Brain :</label>
              <div class="controls">
                <input type="text" id="mask-brain" class="span11 mask text" placeholder="GCS-E____V____M____(____/15)" name="brain" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">PERL</label>
              <div class="controls">
                <label>
                  <input type="radio" value="Yes" name="perl" />
                  Yes</label>
                <label>
                  <input type="radio" value="No" name="perl" />
                  No</label>
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Cervical Spine</label>
            </div>
            <div class="control-group">
              <label class="control-label">Active Painless Movements</label>
              <div class="controls">
                <label>
                  <input type="radio" value="Yes" name="c-spine" />
                  Yes</label>
                <label>
                  <input type="radio" value="No" name="c-spine" />
                  No</label>
                
              </div>
            </div>
            
          
            <div class="control-group" id="spine">
             
              <div class="controls">
                <label class="">Deformity Level</label>
                <select class="span6" name="deformity_level"  >
                  <option>C1</option>
                  <option>C2</option>
                  <option>C3</option>
                  <option>C4</option>
                  <option>C5</option>
                  <option>C6</option>
                  <option>C7</option>
                  <option>C8</option>
                  <option>T1</option>
                  <option>T2</option>
                  <option>T3</option>
                  <option>T4</option>
                  <option>T5</option>
                  <option>T6</option>
                  <option>T7</option>
                  <option>T8</option>
                  <option>T9</option>
                  <option>T10</option>
                  <option>T11</option>
                  <option>T12</option>
                  <option>L1</option>
                  <option>L2</option>
                  <option>L3</option>
                  <option>L4</option>
                  <option>L5</option>
                </select>
              </div><br>
              <div class="controls">
                <label class="">Tenderness Level Level</label>
                <select class="span6"   name="tenderness_level">
                  <option>C1</option>
                  <option>C2</option>
                  <option>C3</option>
                  <option>C4</option>
                  <option>C5</option>
                  <option>C6</option>
                  <option>C7</option>
                  <option>C8</option>
                  <option>T1</option>
                  <option>T2</option>
                  <option>T3</option>
                  <option>T4</option>
                  <option>T5</option>
                  <option>T6</option>
                  <option>T7</option>
                  <option>T8</option>
                  <option>T9</option>
                  <option>T10</option>
                  <option>T11</option>
                  <option>T12</option>
                  <option>L1</option>
                  <option>L2</option>
                  <option>L3</option>
                  <option>L4</option>
                  <option>L5</option>
                </select>
              </div><br>
              <div class="controls">
                <label class="">Sensory Level</label>
                <select class="span6"  name="sensory_level">
                  <option>C1</option>
                  <option>C2</option>
                  <option>C3</option>
                  <option>C4</option>
                  <option>C5</option>
                  <option>C6</option>
                  <option>C7</option>
                  <option>C8</option>
                  <option>T1</option>
                  <option>T2</option>
                  <option>T3</option>
                  <option>T4</option>
                  <option>T5</option>
                  <option>T6</option>
                  <option>T7</option>
                  <option>T8</option>
                  <option>T9</option>
                  <option>T10</option>
                  <option>T11</option>
                  <option>T12</option>
                  <option>L1</option>
                  <option>L2</option>
                  <option>L3</option>
                  <option>L4</option>
                  <option>L5</option>
                </select>
              </div><br>
              <div class="controls">
                <label class="">Motor Level</label>
                <select class="span6" name="motor_level" >
                  <option>C1</option>
                  <option>C2</option>
                  <option>C3</option>
                  <option>C4</option>
                  <option>C5</option>
                  <option>C6</option>
                  <option>C7</option>
                  <option>C8</option>
                  <option>T1</option>
                  <option>T2</option>
                  <option>T3</option>
                  <option>T4</option>
                  <option>T5</option>
                  <option>T6</option>
                  <option>T7</option>
                  <option>T8</option>
                  <option>T9</option>
                  <option>T10</option>
                  <option>T11</option>
                  <option>T12</option>
                  <option>L1</option>
                  <option>L2</option>
                  <option>L3</option>
                  <option>L4</option>
                  <option>L5</option>
                </select>
              </div>
              <br>
               </div>
              <div class="control-group">
              <label class="control-label"></label>
              <div class="controls controls-row">
                <label class="span2"> 
                  <input type="radio" value="Bladder Control" name="blader" />
                  Bladder Control</label>
                <label class="span2">
                  <input type="radio" value="Bowel Control" name="blader" />
                  Bowel Control</label>
                
              </div>
            </div>
            
           
          <div class="control-group">
              <label class="control-label">CVS</label>
              <div class="controls">
                <label>
                  <input type="checkbox" value="S1" name="cvs1" />
                  S1
                
                  <input type="checkbox" value="NS2" name="cvs2" />
                  S2</label>
                
              </div>

            </div>
            <div class="control-group">
              <label class="control-label">Added Sounds</label>
              <div class="controls">
                <label>
                  <input type="radio" class="added-sound" value="Yes" name="added-sound" />
                  Yes</label>
                <label>
                  <input type="radio" class="added-sound" value="No" name="added-sound" />
                  No</label>
              </div>
              <div class="controls">
                <input type="text" style="display: none;" class="span11" id="added-sound-s" name="added-sound-s" placeholder="Specify the sound" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">RS</label>
              <div class="controls">
                <label>
                  <input type="radio" class="rs" value="AEBE" name="rs" />
                  AEBE</label>
                <label>
                  <input type="radio" class="rs" value="VBS" name="rs" />
                  VBS</label>
                  <label>
                  <input type="radio" class="rs" value="others" name="rs" />
                  Others</label>
              </div>
              <div class="controls">
                <input type="text" style="display: none;" class="span11" id="rs-s" name="rs-s" placeholder="Specify the other" />
              </div>
             
            </div>
             <div class="control-group">
              <label class="control-label">Chest Compression</label>
              <div class="controls">
                <label>
                  <input type="radio" class="chest-compression" value="Yes" name="chest-compression" />
                  Yes</label>
                <label>
                  <input type="radio" class="chest-compression" value="No" name="chest-compression" />
                  No</label>
              </div>
              <div class="controls">
                <input type="text" style="display: none;" class="span11" id="chest-compression-s"  name="chest-compression-s" placeholder="Specify Rib's" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Abdomen</label>
              <div class="controls">
                <label>
                  <input type="radio" class="abdomen" value="Soft" name="abdomen" />
                  Soft</label>
                <label>
                  <input type="radio" class="abdomen" value="Tense" name="abdomen" />
                  Tense</label>
                   <label>
                  <input type="radio" class="abdomen" value="Tenderness" name="abdomen" />
                  Tenderness</label>
              </div>
              <label class="control-label">Bowel Sound</label>
              <div class="controls">
                <label>
                  <input type="radio" class="bowel-sound" value="Yes" name="ab-sound" />
                  Yes</label>
                <label>
                  <input type="radio" class="bowel-sound" value="No" name="ab-sound" />
                  No</label>
                  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pelvis</label>
              <div class="controls">
                <label>
                  <input type="radio" class="pelvis" value="PCT" name="pelvis" />
                  PCT</label>
                <label>
                  <input type="radio" class="pelvis" value="PDT" name="pelvis" />
                  PDT</label>
                  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Peripheral Pulses</label>
              <div class="controls controls-row">
              <div class="controls span6">
                <label class="control-label"><b>Left   </b></label>
                <label>
                  <input type="radio" class="pelvis" value="PCT" name="pelvis" />
                  PCT</label>
                <label>
                  <input type="radio" class="pelvis" value="PDT" name="pelvis" />
                  PDT</label>
                  
              </div>
              <div class="controls span6">
                <label class="control-label"><b>Right    </b></label>
                <label>
                  <input type="radio" class="pelvis" value="PCT" name="pelvis" />
                  PCT</label>
                <label>
                  <input type="radio" class="pelvis" value="PDT" name="pelvis" />
                  PDT</label>
                  
              </div>
            </div>
              <label class="control-label">Peripheral Pulses</label>
              <div class="controls">
                <input type="text" name="peripheral_pulse" class="span11" placeholder="Peripheral Pulses" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Limb Examination</label>
              <div class="controls">
                <textarea name="limb_examination" class="span11" placeholder="Limb Examination" >Limb Examination
              </textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Provisional Diagnosis</label>
              <div class="controls">
                <input type="text" name="provisional-diagnosis" class="span11" placeholder="Provisional Diagnosis" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Final Diagnosis</label>
              <div class="controls">
                <input type="text" name="final_diagnosis" class="span11" placeholder="Final Diagnosis" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Plan</label>
              <div class="controls">
                <input type="text" name="plan" class="span11" placeholder="Plan" />
              </div>
            </div>
           
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
