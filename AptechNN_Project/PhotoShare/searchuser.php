<?php 


require_once "connection.php";

$srchuser="select * from users where Username='".$_POST['srch']."' and Role='2' or Username like '%".$_POST['srch']."%' and Role='2'";
   $srchuserres=$con->query($srchuser);
   if(mysqli_num_rows($srchuserres)>0) {
   foreach($srchuserres as $srchuserrow) {
       
    ?>
   
 <?php if($srchuserrow['User_ID']==$_POST['id']) {
     ?>
     <a title="My Profile" href="profile.php?id=<?php echo $_POST['id'] ?>" style="color:#333;text-decoration: none;"><h4 id="srchUserh4">
     <p style="float:right;font-size: 15px;color:#e3e3e3;font-weight: bold">My Profile</p>    
     <img src="<?php echo $srchuserrow['User_Image'] ?>" width="40px" height="40px" style="margin-right: 20px;border-radius: 50%"><?php echo $srchuserrow['First_Name'] ?> <?php echo $srchuserrow['Last_Name'] ?></h4></a>
     <?php

 }else {
     ?>
        <a title="Visit <?php echo $srchuserrow['First_Name'] ?>'s Profile" href="userProfile.php?id=<?php echo $_POST['id'] ?>&userid=<?php echo $srchuserrow['User_ID'] ?>" style="color:#333;text-decoration: none"><h4 id="srchUserh4">
            <p style="float:right;font-size: 15px;color:#e3e3e3;font-weight: bold">@<?php echo $srchuserrow['Username'] ?></p>
        <img src="<?php echo $srchuserrow['User_Image'] ?>" width="40px" height="40px" style="margin-right: 20px;border-radius: 50%"><?php echo $srchuserrow['First_Name'] ?> <?php echo $srchuserrow['Last_Name'] ?>
        <?php if($srchuserrow['Registered']=="True") { ?>
    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
    <?php } ?>
    </h4></a>

     <?php
 } ?>
 
    
    
    <?php

   }
}
else {
    echo "No Record Found";
}

?>