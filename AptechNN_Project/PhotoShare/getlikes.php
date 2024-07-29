<?php 



require_once "connection.php";

$getdownload="select count(*) as count from likes where Like_ImageID='".$_POST['idd']."'";
$getres=$con->query($getdownload);

foreach($getres as $getrow) {
    
    echo $getrow['count'];

}


?>