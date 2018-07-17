<?php
session_start();
include('db_info.php');
//$_SESSION['patient_id']='orth_674817995';
if(isset($_GET['id']) && $_GET['id']!='')
{
  $id=mysqli_real_escape_string($conn,$_GET['id']);
}



?>
<?php
if(isset($_POST['submit'])){
    if(count($_FILES['xray']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['xray']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['xray']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['xray']['name'][$i];

                //save the url and the file
                $filePath = "uploaded/" . date('d-m-Y-H-i-s').'-'.$_FILES['xray']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;
                    //insert into db 
                    //use $shortname for the filename
                    //use $filePath for the relative url to the file

                }
              }
        }
    }

    //show success message
    echo "<h1>Uploaded:</h1>";    
    if(is_array($files)){
        echo "<ul>";
        foreach($files as $file){
            echo "<li>$file</li>";
        }
        echo "</ul>";
    }
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
<script type="text/javascript" src="ajax-form.js"></script>
</head>
<body>
  <style type="text/css">
    /*.file-wrapper{font-size:11px;cursor:pointer;display:inline-block;overflow:hidden;position:relative;}
.file-wrapper .file-button{width:auto;display:inline-block;font-size:14px;font-weight:bold;background:#1468b3;color:#fff;cursor:pointer;padding:8px 20px;text-transform:uppercase;border:1px solid #fff;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;}
.file-wrapper input{font-size:100px;cursor:pointer;height:100%;position:absolute;right:0;top:0;filter:alpha(opacity=1);-moz-opacity:0.01;opacity:0.01;}*/
  </style>
  <script type="text/javascript">
    var CUSTOMUPLOAD = CUSTOMUPLOAD || {};

CUSTOMUPLOAD.fileInputs = function() {
  var $this = $(this),
      $val = $this.val(),
      valArray = $val.split('\\'),
      newVal = valArray[valArray.length-1],
      $button = $this.siblings('.file-button'),
      $fakeFile = $this.siblings('.file-holder');
  if(newVal !== '') {
    $button.text('File Chosen');
    if($fakeFile.length === 0) {
      $button.after('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class=file-holder> ' + newVal + '</span>');
    } else {
      $fakeFile.text(newVal);
    }
  }
};

$(document).ready(function() {
  $('#file_container').on('change click', '.file-wrapper input[type=file]', CUSTOMUPLOAD.fileInputs);
  var counter = 2;
  $('#del_file').hide();
    $('#file_container').on('click', 'img#add_file', function(){
      $('#file_tools').before('<p><span class="file-wrapper" id="f'+counter+'"><input type="file" name="xray[]"/><span class="file-button">Choose File</span></span></p>');
      $('#del_file').fadeIn(0);
    counter++;
    });
    
    $('#file_container').on('click', 'img#del_file', function(){
      if(counter==3){
        $('#del_file').hide();
      }     
    counter--;
    
    $('#f'+counter).remove();
  }); 
});
  </script>
<script type="text/javascript">
  $(document).ready(function() {
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $("#append-div"); //Fields wrapper
    var add_button      = $(".add-btn1"); //Add button ID
    
    var x = 1; //initlal text box count

    
 $(wrapper).on("click",".add-btn", function(e){ //user click on remove text
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="controls-row" id="'+x+'" > <div class="controls-row"><label  class="span1"><a  href="#" class=""><span class="icon-plus add-btn"> </span></a> <a  href="#" class=""><span class="icon-remove remove_field" data-id="'+x+'"> </span></a></label><label class="span3 m-wrap"><span class="span4" style="    text-align: right; float:left;">Date : </span><input type="text" name="date1[]" placeholder=".span3" class="span6 m-wrap"></label><label class="span4 m-wrap"><span class="span5" style="    text-align: right; float:left;">Name of X-ray: </span><input type="text" name="name[]" placeholder=".span3" class="span6 m-wrap"></label><label class="span1 m-wrap"><div class="controls"><div class="uploader" id="uniform-xray[]"><input name="xray[]" id="xray[]" data-name="xray[]" type="file" size="19" style=" opacity: 0; "><span class="filename">No file selected</span><span class="action">Choose File</span></div></div></label></div> </div> '
             ); //add input box
        }
    })


    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault();
        var id=$(this).attr('data-id');
        //alert(id);
        $('#'+id).remove();
         //$(this).parent('.controls-row').remove(); 
         x--;
    })
});
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
          <h5>Form Layout</h5>
        </div><form method="post" id="uploadForm" enctype="multipart/form-data" action="">
    <div id="file_container">
      <span class="file-wrapper"><input type="file" name="files[]"><span class="file-button">Choose File</span></span><br>
      <div id="file_tools">
    <img src="http://i59.tinypic.com/5niuxd.png" id="add_file" title="Add Another File">
    <img src="http://i60.tinypic.com/102ktmq.png" id="del_file" title="Remove Last File">
    </div>
    </div>
    <input type="submit" name="submit">
  </form>
        <div class="widget-content" id="append-div">
<form method="post" id="uploadForm" enctype="multipart/form-data" action="">
          <div class="controls-row">
            <label  class="span1"><a  href="#" class=""><span class="icon-plus add-btn"> </span></a> </label>
            <label class="span3 m-wrap"><span class="span4" style="    text-align: right; float:left;">Date : </span>
            <input type="text" name="date1[]" placeholder=".span3" class="span6 m-wrap"></label>
            <label class="span4 m-wrap"><span class="span5" style="    text-align: right; float:left;">Name of X-ray: </span>
            <input type="text" name="name[]" placeholder=".span3" class="span6 m-wrap"></label>
            <label class="span1 m-wrap"> 
              <div class="controls">
                <input name="xray[]" id="xray[]" data-name="xray[]" type="file" />
              </div></label>
          </div>
         <input type="submit" name="submit">
        </form>
        </div>
        <div class="gallery" id="imagesPreview"></div>
       
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
