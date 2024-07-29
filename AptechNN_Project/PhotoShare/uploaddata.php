<?php 
require_once "connection.php";
        if(!empty($_FILES["img"]["name"])){
            $checklimit="select count(*) as count from images where `Image_ByUser`='".$_POST['uid']."'";
            $checkres=$con->query($checklimit);
            foreach($checkres as $checkrow) {
                if($checkrow['count']<35) {
                    $folder="UploadedImages/";
                    $tempPath=$_FILES["img"]["tmp_name"];
                    $path=$folder.$_FILES["img"]["name"];
            
                    move_uploaded_file($tempPath,$path);
                    $tags=mysqli_real_escape_string($con,$_POST['testInput']);
                    $upload="insert into images(`Image_Name`, `Image_Tags`, `Image_File`, `Image_ByUser`, `Image_Date`) values ('".$_POST['imgname']."','".$tags."','".$path."','".$_POST['uid']."','".date("d-m-Y")."')";
                    $res=$con->query($upload);
                    if($res) {
                    echo "Image Uploaded Successfully";
                    }
                }
                else {
                    echo "Limit Exceeded";
                }
            }
        }

?>