<?php 



require_once "connection.php";
$user="select * from images where Image_ID='".$_POST['id']."'";
$userres=$con->query($user);
foreach($userres as $userow) {

    $duplicate="select  count(*) as count from save where Save_ByUser='".$_POST['uid']."' and Save_ImageID='".$_POST['id']."'";
    $dupres=$con->query($duplicate);

    foreach($dupres as $duprow) {

        if($duprow['count']==0) {

            $addlike="insert into `save`(`Save_ImageID`, `Image_ByUserID`, `Save_ByUser`, `Saved`) values ('".$_POST['id']."','".$userow['Image_ByUser']."','".$_POST['uid']."','True')";
            $addlikeres=$con->query($addlike);

                if($addlikeres) {
                    echo "You Saved An Image, It Will Automatically Saved In Your Profile.";
                }
            }
            else {
                echo "You Already Saved This Image.";
            }

    }

    
}


?>