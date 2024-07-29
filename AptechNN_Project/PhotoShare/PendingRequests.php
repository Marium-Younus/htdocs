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
    <title>PhotoShare | Pending Requests</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="scrollbar.css" rel="stylesheet" type="text/css">
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
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(!empty($_GET['Action'])) {

    

  if($_GET['Action']=="Accept") {

    $getdata="select * from pendingsignup where Pending_ID='".$_GET['reqid']."'";
    $getresult=$con->query($getdata);
    foreach($getresult as $getrow) {

        $insertuser="insert into users(`First_Name`, `Last_Name`,`Username`, `Email`, `Password`, `Role`, `Signup_Date`, `User_Image`, `Status`) VALUES ('".$getrow['User_FirstName']."','".$getrow['User_LastName']."','".$getrow['User_Username']."','".$getrow['User_Email']."','".$getrow['User_Password']."','".$getrow['User_Role']."','".date("d-m-Y")."','UserImages/default.jpg','Offline')";
        $insertres=$con->query($insertuser);
        if($insertres) {
            $deletepending="delete from pendingsignup where Pending_ID='".$_GET['reqid']."'";
            $deleteres=$con->query($deletepending);
            if($deleteres) {
                
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
                $mail->addAddress($getrow['User_Email'], 'User');
                $mail->isHTML(true);

                $mail->Subject = 'PhotoShare Account';
                $mail->Body = "<div><h1 style='font-family:calibri;color:#ff6200'>Request Accepted!</h1></div><br/>
                <div>Congratulations <strong>".$getrow['User_FirstName']." ".$getrow['User_LastName']."</strong>! Your request has been accepted by admin on <strong>".date("d-m-Y")."</strong>.Now you can login your account.
                <br>
                <h2>Account Inforamtion</h2>
                    <h4 style='margin-left:50px;'><strong>Email :</strong> ".$getrow['User_Email']."</h4>
                    <h4 style='margin-left:50px;'><strong>Password :</strong> ".$getrow['User_Password']."</h4>
                </div><br/><br/>
                <div>Thanks,<br/><br/>
                <strong>The PhotoShare Admin.</strong></div>
                ";
                $mail->AltBody = 'Dear User, Thank you for your interest.';


                if(!$mail->send()) {
                echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
                echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                  echo "<script>
                    Swal.fire({
                      title: 'Accepted!',
                      text: 'Request Accepted Successfully!',
                      type: 'success'
                      }).then(function() {
                        window.location='PendingRequests.php?id=".$_GET['id']."';
                    });
                    </script>";
                }
                
            }
        }
    }
    
  }
  else if($_GET['Action']=="Reject") {
    $getdata1="select * from pendingsignup where Pending_ID='".$_GET['reqid']."'";
    $getresult1=$con->query($getdata1);
    foreach($getresult1 as $getrow1) {
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
    $mail->addAddress($getrow1['User_Email'], 'User');
    $mail->isHTML(true);

    $mail->Subject = 'PhotoShare Account';
    $mail->Body = "<div><h1 style='font-family:calibri;color:#c90000'>Request Rejected!</h1></div><br/>
    <div>Sorry <strong>".$getrow1['User_FirstName']." ".$getrow1['User_LastName']."</strong>! Your request has been rejected by admin on <strong>".date("d-m-Y")."</strong>.You can signup again.
    <br><br>
    <div>Thanks,<br/><br/>
    <strong>The PhotoShare Admin.</strong></div>
    ";
    $mail->AltBody = 'Dear User, Thank you for your interest.';


    if(!$mail->send()) {
    echo "Opps! For some technical reasons we couldn't able to sent you an email. We will shortly get back to you with download details.";	
    echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      $deletepending="delete from pendingsignup where Pending_ID='".$_GET['reqid']."'";
            $deleteres=$con->query($deletepending);
            if($deleteres) {
                
              echo "<script>
                    Swal.fire({
                      title: 'Rejected!',
                      text: 'Request Rejected Successfully!',
                      type: 'error'
                      }).then(function() {
                        window.location='PendingRequests.php?id=".$_GET['id']."';
                    });
                    </script>";
  
            }
    }
  }      
  }

}

?>


<?php 

if(!empty($_SESSION['useremail'])) {


  
if(isset($_POST['save'])) {

  $savedata="update users set First_Name='".$_POST['fname']."',Last_Name='".$_POST['lname']."',Password='".$_POST['pass']."' where User_ID='".$_GET['id']."'";
  $savedataresult=$con->query($savedata);
    if($savedataresult) {

      echo "<script> window.location='dashboard.php?id=".$_GET['id']."';</script>";

    }
}



?>

<?php 
    $userdataforsettings="select * from users where User_ID='".$_GET['id']."'";
    $userfetchforsettings=$con->query($userdataforsettings);
    foreach($userfetchforsettings as $userrowforsettings) {
?>
  <div id="settings" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="font-weight: bold"><span class="glyphicon glyphicon-cog" style="margin-right: 0px"></span> Settings</h4>
      </div>
      <div class="modal-body">
        <form action="dashboard.php?id=<?php echo $_GET['id'] ?>" method="post">
          <div class="form-group">
            <label for="my-input">First Name</label>
            <input id="my-input" class="form-control" type="text" name="fname" value="<?php echo $userrowforsettings['First_Name'] ?>">
          </div>
          <div class="form-group">
            <label for="my-input">Last Name</label>
            <input id="my-input" class="form-control" type="text" name="lname" value="<?php echo $userrowforsettings['Last_Name'] ?>">
          </div>
          <div class="form-group">
            <label for="my-input">Email</label>
            <input id="my-input" class="form-control" type="text" name="email" value="<?php echo $userrowforsettings['Email'] ?>" disabled>
            <input type="hidden" value="<?php echo $userrowforsettings['User_Email'] ?>" name="email">
          </div>
          <div class="form-group">
            <label for="my-input">Password</label>
            <input id="my-input" class="form-control" type="text" name="pass" value="<?php echo $userrowforsettings['Password'] ?>">
          </div>
          <button type="submit" class="btn btn-success" name="save" style="width: 50%;height: 50px;font-size: 20px">Save <span class="	glyphicon glyphicon-save"></span></button>
        </form>
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

    </div>
  </div>
<?php } ?>

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
                <li style="background:rgba(255, 17, 0,0.6)">
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
                <div class="col-lg-12">


                    <a href="#" title="Show/Hide Menu" class="btn" id="menu-toggle" style="background-color: white;border:2px solid black;padding-top: 10px;"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                




                    <h1 class="text-center" style="letter-spacing: 0.5px;">PHOTOSHARE ADMIN PANEL</h1>

                </div>

                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <h2 class="text-center" style="background-color: #c70d00;color:white;padding:20px;width: 100%;border-top-right-radius: 30px;border-top-left-radius: 30px"><span class="glyphicon glyphicon-exclamation-sign"></span> Pending Requests <?php 
                                    $countpending1="select count(*) as count from pendingsignup";
                                    $resultcountpending1=$con->query($countpending1);
                                    foreach($resultcountpending1 as $rowcountpending1) {
                    ?>

                                ( <?php echo $rowcountpending1['count'] ?> )

                    <?php } ?></h2>
                      
                        <div class="col-lg-12" style="height:100%;background-color: white;box-shadow: 0px 0px 10px lightgray;margin-top: -10px;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;padding-top: 20px;padding-bottom: 20px">
                        <!-- <?php
        
                            // if(!empty($_GET['Status'])) {

                            //     if($_GET['Status']=="Accepted") {

                                    ?>

                                        <div class="alert alert-success">
                                        <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='PendingRequests.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                        <strong>Accepted!</strong> Request Accepted Successfully.
                                        </div>

                                    <?php

                                // }
                                // else {

                                    ?>

                                    <div class="alert alert-danger">
                                    <button style="float: right;margin-top: -6px" class="btn btn-danger" onclick="window.location='PendingRequests.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                                    <strong>Rejected!</strong> Request Rejected Successfully.
                                    </div>
                                                    
                                    <?php

                            //     }

                            // }
                        
                        ?> -->
                            <table class="table table-hover table-striped">
                                <tr style="background-color: #333;color:white">
                                    <th style="text-align: center">First Name</th>
                                    <th style="text-align: center">Last Name</th>
                                    <th style="text-align: center">Username</th>
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Request Date</th>
                                    <th style="text-align: center" colspan="2">Options</th>
                                </tr>
                            
                                <?php 

                                    $pending="select * from pendingsignup";
                                    $pendingres=$con->query($pending);
                                    if(mysqli_num_rows($pendingres)!=0) {
                                    foreach($pendingres as $pendingrow) {
                                ?>

                                    <tr>
                                        <td style="text-align: center;padding: 20px 20px"><?php echo $pendingrow['User_FirstName'] ?></td>
                                        <td style="text-align: center;padding: 20px 20px"><?php echo $pendingrow['User_LastName'] ?></td>
                                        <td style="text-align: center;padding: 20px 20px"><?php echo $pendingrow['User_Username'] ?></td>
                                        <td style="text-align: center;padding: 20px 20px"><?php echo $pendingrow['User_Email'] ?></td>
                                        <td style="text-align: center;padding: 20px 20px"><?php echo $pendingrow['Request_Date'] ?></td>
                                        <td style="text-align: center;padding: 20px 20px">
                                            <a style="cursor: pointer;color:black" href="PendingRequests.php?id=<?php echo $_GET['id']; ?>&reqid=<?php echo $pendingrow['Pending_ID'] ?>&Action=Accept"><span class="glyphicon glyphicon-ok-sign" style="color:green"></span><br>Accept</a>
                                        </td>
                                        <td style="text-align: center;padding: 20px 20px">
                                            <a style="cursor: pointer;color:black" href="PendingRequests.php?id=<?php echo $_GET['id']; ?>&reqid=<?php echo $pendingrow['Pending_ID'] ?>&Action=Reject"><span class="	glyphicon glyphicon-remove-sign" style="color:red"></span><br>Recject</a>
                                        </td>
                                    </tr>
                                        
                                <?php 
                                    }}
                                    else {
                                      ?>
                                      <tr>
                                        <td colspan="6" class="text-center">No Pending Requests</td>
                                      </tr>
                                      <?php
                                    }
                                ?>
                            </table>
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