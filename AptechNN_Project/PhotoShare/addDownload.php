<?php 



require_once "connection.php";

$getdownload="select * from images where Image_ID='".$_POST['id']."'";
$getres=$con->query($getdownload);

foreach($getres as $getrow) {
    $downloads=$getrow['Downloads']+1;

    $updatedownload="update images set Downloads='".$downloads."' where Image_ID='".$_POST['id']."'";
    $updateres=$con->query($updatedownload);
    if($updateres) {
        echo "Imaged Downloaded";
    }

}


?>