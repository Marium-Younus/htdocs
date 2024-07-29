<?php 



require_once "connection.php";


$getfollow="select count(*) as count from follow where Following_User='".$_POST['userid']."' and Follow_ByUser='".$_POST['id']."'";
$getfollowres=$con->query($getfollow);

foreach($getfollowres as $getfollowrow) {
    if($getfollowrow['count']==0) {
        $follow="insert into `follow`(`Following_User`, `Follow_ByUser`, `Follow_Date`) values ('".$_POST['userid']."','".$_POST['id']."','".date("d-m-Y")."')";
            $followres=$con->query($follow);

           if($followres) {
               $getuser="select * from users where User_Id='".$_POST['userid']."'";
               $getuserres=$con->query($getuser);
               foreach($getuserres as $getuserrow) {
                        echo "You Start Following ".$getuserrow['First_Name']." ".$getuserrow['Last_Name'];
               }
           }




    }
    else {



        $unfollow="delete from follow where Following_User='".$_POST['userid']."' and Follow_ByUser='".$_POST['id']."'";
        $unfollowres=$con->query($unfollow);
        if($unfollowres){
            echo "Unfollow";
        }


    }
    // if($getfollowrow['count']=1) {
        

    // $unfollow="delete follow where Following_User='".$_POST['userid']."' and Follow_ByUser='".$_POST['id']."'";
    // $unfollowres=$con->query($unfollow);
    // if($unfollowres){
    //     echo "Unfollow";
    // }
// }
           
    
        // else{
        //     $follow="insert into `follow`(`Following_User`, `Follow_ByUser`, `Follow_Date`) values ('".$_POST['userid']."','".$_POST['id']."','".date("d-m-Y")."')";
        //     $followres=$con->query($follow);

        //    if($followres) {
        //        $getuser="select * from users where User_Id='".$_POST['userid']."'";
        //        $getuserres=$con->query($getuser);
        //        foreach($getuserres as $getuserrow) {
        //                 echo "You Start Following ".$getuserrow['First_Name']." ".$getuserrow['First_Name'];
        //        }
        //    }

        // }
  

    }
?>