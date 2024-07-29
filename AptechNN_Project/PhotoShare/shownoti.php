<?php
require_once "connection.php";
        // `Like_ID`, `Like_ImageID`, `Image_ByUserID`, ``, `Seen`
        $totalLike="select * from likes where `Image_ByUserID`='".$_POST['id']."' and Seen='False' ";
        $totalLikeres=$con->query($totalLike);
        if(mysqli_num_rows($totalLikeres)>0) {
        foreach($totalLikeres as $totalrow) {
          $getluser="select * from users where User_ID='".$totalrow['Like_ByUser']."'";
          $getluserres=$con->query($getluser);
          foreach($getluserres as $getluserrow) {
            ?>
            <?php
            
            $getlimg="select * from images where Image_Id='".$totalrow['Like_ImageID']."'";
            $getlimgres=$con->query($getlimg);
            foreach($getlimgres as $getlimgrow) {
            ?>
            <div class="col-lg-12 col-md-12" style="margin-top: 10px;background-color: #f5f5f5;padding: 10px;border-radius: 10px;box-shadow: 0 0 5px rgba(0,0,0,0.1)">
            <div class="col-lg-2 col-md-2 col-sm-3">
            
            <img src="<?php echo $getlimgrow['Image_File'] ?>" width="100%">
            
             </div><br>
            <div class="col-lg-10 col-md-10"> 
            <button class="btn btn-default" style="float: right" onclick="document.getElementById('imgshowid').style.overflow='hidden';document.getElementById('modal-title').innerText='Your Image';document.getElementById('popimg').src = '<?php echo $getlimgrow['Image_File'] ?>';document.getElementById('bbb').click();">View Image</button>
            <?php
            
            $getlimgc="select count(*) as count from likes where Image_ByUserID='".$_POST['id']."' and Like_ImageID='".$getlimgrow['Image_ID']."'";
            $getlimgresc=$con->query($getlimgc);
            foreach($getlimgresc as $getlimgrowc) {
              if($getlimgrowc['count']==1) {
                ?>
                <p><strong><?php echo $getluserrow['First_Name'] ?> <?php echo $getluserrow['Last_Name'] ?></strong> liked your image.</p>
                <p><?php
                if($totalrow['Like_Date']==date('d-M-Y')) {
                  echo "<span class='	glyphicon glyphicon-time'></span> Today";
                }
                else {
                echo "<span class='	glyphicon glyphicon-time'></span> ".$totalrow['Like_Date'];
                } ?></p>
                <?php
              }else {
                ?>
                <p><strong><?php echo $getluserrow['First_Name'] ?> <?php echo $getluserrow['Last_Name'] ?></strong> and <?php echo $getlimgrowc['count']-1; ?> others liked your image.</p>
                <p><?php
                if($totalrow['Like_Date']==date('d-M-Y')) {
                  echo "Today";
                }
                else {
                echo $totalrow['Like_Date'];
                } ?></p>
                <?php
              }

              
            }
            ?>
            
            
             </div>
             
            </div>
            <?php
            }
            ?>
            <?php
          }
        }
      }else {
        ?>
        <div class="col-lg-12" style="margin-top: 10px;background-color: #f5f5f5;padding: 10px;border-radius: 10px;box-shadow: 0 0 5px rgba(0,0,0,0.1)">
        <h4 style="text-align: center">No Notifications</h4>
        </div>

        <?php
      }
        
        ?>