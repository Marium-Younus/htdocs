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
    <title>PhotoShare | Images</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar1.css" rel="stylesheet" type="text/css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <style>
        ::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
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


#fiv {
    background-color: rgba(0,0,0,0.6);
    height: 100%;
    width: 100%;
    display: none;
}
.col-lg-12:hover > #fiv {
    display: block;
    transition: 1s display;
}



.slideanimm {visibility:hidden;}
  .slideee {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
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


.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid gray;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #c70d00;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;transition: .4s all;
}
    </style>
</head>
<body onload="l();" style="background-image: url('https://images.unsplash.com/photo-1520531158340-44015069e78e?ixlib=rb-1.2.1&w=1000&q=80');background-size: cover;;background-repeat: no-repeat;background-attachment: fixed;background-position: center">

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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(!empty($_SESSION['useremail'])) {

  // if(!empty($_GET['imgid'])) {
  //   $dltimg="delete from images where Image_ID='".$_GET['imgid']."'";
  //   $dltimgres=$con->query($dltimg);
  //   if($dltimgres) {
  //       echo "<script>window.location='Images.php?id=".$_GET['id']."'</script>";
  //   }
  // }

if(isset($_POST['dlt'])) {


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
  $mail->addAddress($_POST['uemail'], 'User');
  $mail->isHTML(true);

  $mail->Subject = 'PhotoShare Reports';
  $mail->Body = "<div><h1 style='font-family:calibri;color:#ff6200'>Your Image Has Been Deleted!</h1></div><br/>
  <div>Dear User, One of your images has been deleted by admin because its against our rules.
  <br>
  <h2>Deletion Inforamtion</h2>
      
      <h4 style='margin-left:50px;'><strong>Reason :</strong> ".$_POST['reason']."</h4>
      <h4 style='margin-left:50px;'><strong>Deleted Image :</strong> Attached.</h4>
  </div><br/><br/>
  <div>Thanks,<br/><br/>
  <strong>The PhotoShare Admin.</strong></div>
  ";
  $mail->AddEmbeddedImage($_POST['imagefile'], 'Deleted Image');

  if(!$mail->send()) {
  echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
  echo "Mailer Error: " . $mail->ErrorInfo;
  } else {

    $dltinglike="delete from `save` where Save_ImageID='".$_POST['imageid']."'";
       $dltimgres2=$con->query($dltinglike);
       if($dltimgres2) {
            $dltingsave="delete from `likes` where Like_ImageID='".$_POST['imageid']."'";
            $dltimgres3=$con->query($dltingsave);
            if($dltimgres2) {

    $dltimg="delete from images where Image_ID='".$_POST['imageid']."'";
      $dltimgres=$con->query($dltimg);
      if($dltimgres) {
          echo "<script>
          
            Swal.fire({
                title: 'Deleted!',
                text: 'Image Has Been Deleted!',
                type: 'success'
            }).then(function() {
              window.location='Images.php?id=".$_GET['id']."';
          });
          </script>";
      }
    }
  }
    
       
  }



}



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
                    <a href="PendingRequests.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-exclamation-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Prending Requests</a>      
                </li>
                <li><a href="Users.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Users</a></li>
                <li style="background:rgba(255, 17, 0,0.6)"><a href="Images.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-picture" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Images</a></li>
                <li><a href="FeedbackAdmin.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-comment" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Feedback</a></li>
                <li><a href="registration.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-ok-sign" style="font-size: 20px;color:white;margin-right: 10px;;margin-left: 10px"></span> Registerations</a></li>
                <li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>
                   <hr>
                </div>

                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            
                    <div class="col-lg-12 col-md-12 col-sm-12" style="height:100%;background-color: white;border-radius: 10px;box-shadow: 0px 0px 10px lightgray;padding:30px">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-radius: 10px"><span class="glyphicon glyphicon-picture"></span> Images
                    <?php 
                                    $countimg="select count(*) as count from images";
                                    $resultcountimg=$con->query($countimg);
                                    foreach($resultcountimg as $rowcountimg) {
                                ?>

                                (<?php echo $rowcountimg['count'] ?>)

                                <?php } ?>
                  </h2>
<?php 
    $getimg="select * from images order by Image_ID DESC";
    $resimg=$con->query($getimg);

    foreach($resimg as $imgrow) {
  
?>
<div class="modal" id="myModal" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="width:80%;margin: auto">
    <div class="modal-content" style="background:transparent;box-shadow: none;border:none;color:White;width: 100%">

    <div class="modal-header" style="">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-title"></h4>

      </div>
      <!-- Modal body -->
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" style="overflow: hidden;margin-top: 10px;">
          <img src="" title="" id="popimg" class="img-responsive slideanimm" style="margin: auto">
       
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12" id="<?php echo $imgrow['Image_ID'] ?>" style="margin-top: 25px;padding: 5px;margin-bottom: 25px;background-color: #f5f5f5;padding:20px;box-shadow: 0px 0px 10px rgba(0,0,0,0.2)" id="kk">
            <?php 
                        $imgbyuser="select * from users where User_ID='".$imgrow['Image_ByUser']."'";
                        $resuser=$con->query($imgbyuser);
                        foreach($resuser as $rowuser) {
                    ?>
           <div class="col-lg-4">
             <img src="<?php echo $imgrow['Image_File'] ?>" width="100%">
           </div>
                  <div class="col-lg-8" style="color:black;word-wrap: break-word;text-align: justify">
                  <p style="float: right">Date : <?php echo $imgrow['Image_Date'] ?></p>
                  <h4><?php echo $imgrow['Image_Name'] ?></h4>
                  <h4 style="padding: 10px;border:1px solid gray;border-radius: 10px;"><?php echo $imgrow['Image_Tags'] ?></h4>
                            <?php  $imagedata = getimagesize($imgrow['Image_File']);
                      $size=$imagedata[0]." x ".$imagedata[1];
                      echo "<p style='color:black;margin-top: 0px'>Image Size : ".$imagedata[0]." x ".$imagedata[1]."</p>" ;

                            ?>
                            <?php
   
   $totalLike="select count(*) as count from likes where `Like_ImageID`='".$imgrow['Image_ID']."'";
   $totalLikeres=$con->query($totalLike);
   foreach($totalLikeres as $totalrow) {
   
   ?>

    <p style="color:black;font-weight: bold;font-family: 'verdana'" id="like<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> Likes : <?php echo $totalrow['count'] ?></p>

   <?php } ?>
                             <p style="color:black;font-weight: bold;font-family: 'verdana'" id="dw<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> Downloads : <?php echo $imgrow['Downloads'] ?></p>
                            <!-- <a href="<?php echo $imgrow['Image_File'] ?>" download><button id="btn" style="">Download</button></a> -->
                            
                 <button class="btn btn-default"  onclick="document.getElementById('modal-title').innerText='Picture By <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>';document.getElementById('popimg').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('bbb').click();">View Image</button>   
                 <hr style="border-color: #c7c7c7;width: 70%">
                 <form action="Images.php?id=<?php echo $_GET['id'] ?>" method="post">
                 <input type="hidden" value="<?php echo $rowuser['Email'] ?>" name="uemail">
                 <input type="hidden" value="<?php echo $imgrow['Image_File'] ?>" name="imagefile">
                 <input type="hidden" value="<?php echo $imgrow['Image_ID'] ?>" name="imageid">
                    <div class="form-group">
                      <label for="reason">Reason</label>
                      <input id="reason" class="form-control tt" type="text" name="reason" required style="outline: none" placeholder="Enter Reason For Deleting Image">
                    </div>
                    <!-- <a href="Images.php?id=<?php echo $_GET['id'] ?>&imgid=<?php echo $imgrow['Image_ID'] ?>" title="Delete Image"></a>   -->
                  <button class="btn btn-danger" type="submit" name="dlt">Delete</button>   
                 </form>
                 
                <button type="button" id="bbb" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="display: none">
                Open modal
                </button>
                  </div>
        
            <?php } ?>
     
</div>


<?php } ?>
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
 <input type="hidden" value="<?php echo $_GET['gotoid'] ?>" id="gotoo">
<script>
  function l()
    {

      if (document.getElementById('gotoo').value !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = "#"+document.getElementById('gotoo').value;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } 


    }
$(document).ready(function(){
  $("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
  });

  

  $(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
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