<?php 



require_once "connection.php";
$user="select * from images where Image_ID='".$_POST['id']."'";
$userres=$con->query($user);
foreach($userres as $userow) {

    $duplicate="select  count(*) as count from likes where Like_ByUser='".$_POST['uid']."' and Like_ImageID='".$_POST['id']."'";
    $dupres=$con->query($duplicate);

    foreach($dupres as $duprow) {

        if($duprow['count']==0) {

            $addlike="insert into `likes`(`Like_ImageID`, `Image_ByUserID`, `Like_ByUser`, `Like_Date`, `Seen`) values ('".$_POST['id']."','".$userow['Image_ByUser']."','".$_POST['uid']."','".date('d-M-Y')."','False')";
            $addlikeres=$con->query($addlike);

                if($addlikeres) {
                    echo "You Like An Image.";
                }
            }
            else {
               
                $unlike="delete from likes where Like_ByUser='".$_POST['uid']."' and Like_ImageID='".$_POST['id']."'";
                $unlikeres=$con->query($unlike);
                if($unlikeres) {
                    echo "You Unlike An Image.";
                }

            }

    }

    
}


?>