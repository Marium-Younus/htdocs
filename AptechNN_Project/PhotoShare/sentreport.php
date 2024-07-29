<?php 

require_once "connection.php";
$report="insert into `report`(`Report_ByUser`, `Report_Image`, `Report_Type`, `Report_Date`) values ('".$_POST['uid']."','".$_POST['reportimgid']."','".$_POST['type']."','".date("d-m-Y")."')";
$repres=$con->query($report);
if($repres) {
  echo "Image Has Been Reported To Admin.";
}



?>