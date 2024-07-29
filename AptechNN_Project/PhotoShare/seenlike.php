<?php 



require_once "connection.php";

            $addlike="update `likes` set `Seen`='True' where  Image_ByUserID='".$_POST['uid']."'";
            $addlikeres=$con->query($addlike);

           if($addlikeres) {
            //    echo "<script>window.location='profile.php?id=".$_POST['uid']."'</script>";
           }
           

  


?>