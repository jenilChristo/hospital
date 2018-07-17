
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li class="<?php if(basename($_SERVER['PHP_SELF'])=='dashboard.php'){ echo 'active'; } ?>"><a href="dashboard.php"><i class="icon icon-home "></i> <span>Home</span></a> </li>
    <li <?php if(basename($_SERVER['PHP_SELF'])=='patient-list.php'){ echo 'active'; } ?>><a href="patient-list.php"><i class="icon icon-signal"></i> <span>Patient List</span></a> </li>
    <li <?php if(basename($_SERVER['PHP_SELF'])=='personal-info.php'){ echo 'active'; } ?>><a href="personal-info.php"><i class="icon icon-inbox"></i> <span>Add Patient</span></a> </li>
  
    <li class="submenu "> <a href="#"><i class="icon icon-list"></i> <span>Manage user</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
  
  </ul>
</div>