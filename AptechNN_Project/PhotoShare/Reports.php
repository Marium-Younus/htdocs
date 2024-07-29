<?php 

session_start();
require_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhotoShare | Reports</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <style>
       a {
            color:black;
        }
  /* Sidebar */
#sidebar-wrapper{
  z-index:1;
  position: fixed;
  width:0;
  height: 100%;

  overflow-y:hidden;
background-image: url('WebsiteImages/panel.jpg');
box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.2);
background-size: cover;
background-repeat: no-repeat;
	transition:all .5s;
	display:flex;
	align-items:center;
}

/* Main Content */
#page-content-wrapper{
  width: 100%;	
  position: absolute;
  padding:15px;
	transition:all .5s;

}

#menu-toggle{
	transition:all .3s;
	font-size:2em;
}


/* Change the width of the sidebar to display it*/
#wrapper.menuDisplayed #sidebar-wrapper{
  width:250px;

}


#wrapper.menuDisplayed #page-content-wrapper{
  padding-left:250px;
}

/* Sidebar styling */
.sidebar-nav{
  padding:0;
  list-style:none; 
	transition:all .5s;
	width:100%;
	text-align:center;
}

.sidebar-nav li{
  line-height:40px;  
	width:100%;
	transition:all .3s;
	padding:10px;
    text-align: left;
    cursor: pointer;
    
}

.sidebar-nav li a {
  display:block;
  text-decoration:none;
  color:#ddd;
}

.sidebar-nav li:hover{
  background:rgba(0,0,0,0.6);
}

h4 a {
    color:white;text-decoration: none;
}
h4 a:hover {
    color:white;text-decoration: none;
}
h4 a:focus {
    color:white;text-decoration: none;
}
.btn:hover {
box-shadow: 0px 0px 2px 2px gray;
}
#div {
  height:auto;
  background-color: white;

  margin-top: 20px;
  margin-bottom: 20px;
  border-radius: 7px;
padding-top:10px;
padding-bottom:10px;
padding-right:0px;
  box-shadow: 0px 0px 8px 0px #ababab;
  border-right: 8px solid white;
}

#div h1:hover {
  transform: scale(1.5,1.5);
  cursor: pointer;
  font-weight: bold;
  text-shadow: 0px 0px 5px gray;

  transition: .5s all;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #fc6100;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
    </style>
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1520531158340-44015069e78e?ixlib=rb-1.2.1&w=1000&q=80');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">
<a href="#wrapper"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

</script>
<?php 

if(!empty($_GET['remove'])) {

    
    


    $delrep="delete from report where Report_ID='".$_GET['remove']."'";
    $delrepres=$con->query($delrep);
    if($delrepres) {
        echo "<script> window.location='Reports.php?id=".$_GET['id']."';</script>";
    }
    else {
        echo "<script> window.location='Reports.php?id=".$_GET['id']."';</script>";
    }
    

 

}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(!empty($_GET['imageid'])) {
  $type="";
if($_GET['reporttype']=="My Image") {
  $type+="Using Someone's Image";
}
else {
  $type+=$_GET['reporttype'];
}
  // // echo "<script> alert('user email : ".$_GET['userid'].",Report type ".$_GET['reporttype'].",id ".$_GET['imageid']."')</script>";
  require 'PHPMailer-6.0.7/src/PHPMailer.php';
                require 'PHPMailer-6.0.7/src/SMTP.php';
                require 'PHPMailer-6.0.7/src/Exception.php';
                
                // Instantiate Class
                $mail = new PHPMailer();
                
                // Set up SMTP
                $mail->IsSMTP();                // Sets up a SMTP connection
                $mail->SMTPDebug  = 0;          // This will print debugging info
                $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
                $mail->SMTPSecure = "tls";      // Connect using a TLS connection
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->Encoding = '7bit';       // SMS uses 7-bit encoding
                
                // Authentication
                $mail->Username   = "mohjav031010@gmail.com"; // Login
                $mail->Password   = "mohsin034802";

                $mail->setFrom('mohjav031010@gmail.com', 'PhotoShare Admin');
                $mail->addAddress($_GET['userid'], 'User');
                $mail->isHTML(true);

                $mail->Subject = 'PhotoShare Reports';
                $mail->Body = "<div><h1 style='font-family:calibri;color:#ff6200'>Your Image Has Been Deleted!</h1></div><br/>
                <div>Dear User, One of your image has report. Admin deleted that image because its against our rules.
                <br>
                <h2>Report Inforamtion</h2>
                    
                    <h4 style='margin-left:50px;'><strong>Reported By :</strong> ".$_GET['repby']."</h4>
                    <h4 style='margin-left:50px;'><strong>Report Type :</strong> ".$_GET['reporttype']."</h4>
                    <h4 style='margin-left:50px;'><strong>Reported Image :</strong> Attached.</h4>
                </div><br/><br/>
                <div>Thanks,<br/><br/>
                <strong>The PhotoShare Admin.</strong></div>
                ";
                $mail->AddEmbeddedImage($_GET['img'], 'Reported Image');

                if(!$mail->send()) {
                echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                echo "Mailer Error: " . $mail->ErrorInfo;
                } else {

                  $delrep="delete from report where Report_Image='".$_GET['imageid']."'";
                  $delrepres=$con->query($delrep);
                  if($delrepres) {
                    $dltinglike="delete from `save` where Save_ImageID='".$_GET['imageid']."'";
                    $dltimgres2=$con->query($dltinglike);
                    if($dltimgres2) {
                          $dltingsave="delete from `likes` where Like_ImageID='".$_GET['imageid']."'";
                          $dltimgres3=$con->query($dltingsave);
                          if($dltimgres2) {
                              $delimg="DELETE FROM `images` WHERE `Image_ID`=".$_GET['imageid'];
                              $delimgres=$con->query($delimg);
                              if($delimgres) {
                                  echo "<script> window.location='Reports.php?id=".$_GET['id']."&Action=Deleted';</script>";
                              }
                              else {
                                  echo "<script> window.location='Reports.php?id=".$_GET['id']."&Action=NotDeleted';</script>";
                              }
                  }
                }
  
                  }
                  else {
                      echo "<script> window.location='Reports.php?id=".$_GET['id']."';</script>";
                  }
                  
                     
                }


    
               
                




}

?>


<?php 

if(!empty($_SESSION['useremail'])) {





?>

        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

        
            <img src="WebsiteImages/logo.png" style="width: 90%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"><hr>
            <h4 style="text-align: center;color:white;font-weight: bold"><a href="#"><span class="	glyphicon glyphicon-th-large" style="font-size: 20px;color:white;margin-right: 10px;margin-left: 10px"></span>Dashboard</h4>
        <br>
                <li><a href="dashboard.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-home" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Home</a></li>
                <?php $getadmin="select * from users where User_ID='".$_GET['id']."'";
                      $getadminress=$con->query($getadmin);
                      foreach($getadminress as $getadminroww) {
                        if($getadminroww['Role']==1) {
                          ?>
                           <li><a href="admins.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-star" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Admins</a></li>
                          <?php
                        }
                      }
                ?>
                <li>
                <?php 
                                    $countpending1="select count(*) as count from pendingsignup";
                                    $resultcountpending1=$con->query($countpending1);
                                    foreach($resultcountpending1 as $rowcountpending1) {
                    ?>

                                <p style="float: right;color:white"><?php echo $rowcountpending1['count'] ?></p>

                    <?php } ?>
                <a href="PendingRequests.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Prending Requests</a></li>
                <li><a href="Users.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Users</a></li>
                <li><a href="Images.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-picture" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Images</a></li>
                <li><a href="FeedbackAdmin.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-comment" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Feedback</a></li>
                <li><a href="registration.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-ok-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Registerations</a></li>
                <li style="background:rgba(255, 17, 0,0.6)">
                   <?php 
                                    $countrep="select count(*) as count from report";
                                    $countrepres=$con->query($countrep);
                                    foreach($countrepres as $countreprow) {
                    ?>

                                <p style="float: right;color:white"><?php echo $countreprow['count'] ?></p>

                    <?php } ?>
                <a href="Reports.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-alert" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Reports</a></li>
            </ul>
            </div>
            
            <!-- Page Content -->
            <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">


                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>

                </div>

                    <div class="col-lg-10 col-lg-offset-1">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-alert"></span> Reports</h2>
                      
                        <div class="col-lg-12 col-md-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
                        <?php
        
                          if(!empty($_GET['Action'])) {

                              if($_GET['Action']=="Deleted") {

                                  ?>

                                      <div class="alert alert-success">
                                      <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Reports.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                      <strong>Image Deleted!</strong> Image successfully deleted.
                                      </div>
                          <?php
                              }  
                              else {

                          ?>

                                          <div class="alert alert-danger">
                                          <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='Reports.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                          <strong>Error!</strong> Some error occurs while deleting image.
                                          </div>
                                  
                          <?php

                              }

                          }

                          ?>

                                <?php 

                                    $red="select * from report";
                                    $repres=$con->query($red);
                                    if(mysqli_num_rows($repres)==0) {
                                      echo "<h4 class='text-center'>No Reports</h4>";
                                    } else {
                                    foreach($repres as $reprow) {
                                    
                                     
                                ?>

                                    <div class="col-lg-12 col-md-12" style="margin-top: 20px;border: 1px solid lightgray;padding: 20px;border-radius: 10px">
                                        <div class="col-lg-3 col-md-3">
                                        <?php 
                                            $getimg="select * from images where Image_ID='".$reprow['Report_Image']."'";
                                            $imgrs=$con->query($getimg);
                                            foreach($imgrs as $imgrow) {
                                        ?>
                                        <img src="<?php echo $imgrow['Image_File'] ?>" width="100%">
                                            <?php } ?>
                                            </div>
                                            <div class="col-lg-9 col-md-9">
                                            <?php 
                                            $getuser="select * from users where User_ID='".$reprow['Report_ByUser']."'";
                                            $getuserres=$con->query($getuser);
                                            foreach($getuserres as $getuserrow) {
                                        ?>
                                        <h4>
                                          <strong>Reported By :</strong> <?php echo $getuserrow['Email'] ?></h4>
                                            
                                        
                                        <h4><strong>Report Type :</strong> <?php echo $reprow['Report_Type'] ?></h4>
                                        <h4><strong>Report Date :</strong> <?php echo $reprow['Report_Date'] ?></h4>
                                        <hr>
                                        <h4>
                                        <?php 
                                            $getimg1="select * from images where Image_ID='".$reprow['Report_Image']."'";
                                            $imgrs1=$con->query($getimg1);
                                            foreach($imgrs1 as $imgrow1) {
                                              $getuser1="select * from users where User_ID='".$imgrow1['Image_ByUser']."'";
                                            $getuserres1=$con->query($getuser1);
                                            foreach($getuserres1 as $getuserrow1) {
                                        ?>
                                            <a style="cursor: pointer;color:black" href="Reports.php?id=<?php echo $_GET['id']; ?>&imageid=<?php echo $reprow['Report_Image'] ?>&userid=<?php echo $getuserrow1['Email'] ?>&reporttype=<?php echo $reprow['Report_Type'] ?>&repid=<?php echo $reprow['Report_ID'] ?>&img=<?php echo $imgrow1['Image_File'] ?>&repby=<?php echo $getuserrow['Email'] ?>"><span class="glyphicon glyphicon-trash"></span> Delete Image</a>
                                            <?php } ?>
                                            <?php } ?>
                                          </h4>
                                        <h4>
                                            <a style="cursor: pointer;color:black" href="Reports.php?id=<?php echo $_GET['id']; ?>&remove=<?php echo $reprow['Report_ID'] ?>"><span class="	glyphicon glyphicon-remove-sign"></span> Remove Report</a>
                                        </h4>
                                        <?php } ?>
                                            </div>
                                            </div>
                                        
                                <?php 
                                      }
                                    }
                                ?>
                     
                           
                        </div>
                    
                    </div>


                </div>
            </div>
            </div>
        </div>
<?php 
}
else {
    echo "<script> window.location='Login.php';</script>";
}
 ?>
<script>
$(document).ready(function(){
  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });


  $("a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });


});
</script>
    
</body>
</html>