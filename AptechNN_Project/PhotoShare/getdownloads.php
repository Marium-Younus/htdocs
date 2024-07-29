<?php 



require_once "connection.php";

$getdownload="select * from images where Image_ID='".$_POST['idd']."'";
$getres=$con->query($getdownload);

foreach($getres as $getrow) {
    
    echo $getrow['Downloads'];

}


?>