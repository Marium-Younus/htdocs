<?php 



require_once "connection.php";


$unlike="delete from save where Save_ImageID='".$_POST['id']."' and Save_ByUser='".$_POST['uid']."'";
$unlikeres=$con->query($unlike);

    if($unlikeres) {
        echo "You Removed An Image, It Will Not Show In Saved Images Page.";
    }

    



?>