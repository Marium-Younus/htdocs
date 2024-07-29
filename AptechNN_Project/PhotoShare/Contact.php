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
    <title>PhotoShare | Contact Us</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">


  <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">



<style>
     body {
      overflow-x: hidden;
    }

@import url('https://fonts.googleapis.com/css?family=Numans');
.navbar-nav li a{

font-family: 'calibri';
letter-spacing: 1px;
}
.navbar-nav li{

    transform: scale(1,1);
    transition: 0.3s all;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #ededed;
    font-family: sans-serif;
}
.navbar-nav li:hover {
    background-color: #ededed;
    color: white;
    border-bottom-width: 2px;
    border-bottom-style: solid;
    border-bottom-color: #333;
    transition: 0.3s all;

}
.form-group input {
border:2px solid #ededed;
outline: none;
letter-spacing: 1px;
}
.form-group input:focus {
border:2px solid #fc6100;
}






/* html,body{
background-image: url('WebsiteImages/login.jpg');
background-size: cover;
background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
/* box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.4); */

} */

#logindiv {
    margin-top: 100px;
    background:rgba(0,0,0,0.6);
    color:White;
    padding:20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.6);
    font-family: 'arial';
    position: relative;
    margin-bottom: 30px;

}


.form-group h4 {
    font-weight: 100;
    font-family: 'calibri';
    font-size: 20px;
    letter-spacing: 0.5px
}

#btn {
    width:100%;
    height: 50px;
    font-size: 15px;
    letter-spacing: 1px;
    background-color: black;
    color:white;
    border-color:black;
    border-radius: 5px;
    transform: scale(1,1);
    transition: 0.3s all;
    outline: none;
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}

#lg {
    font-weight: bolder;
    animation-name: lgan;
    animation-direction: normal;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    animation-timing-function: ease;
    letter-spacing: 5px
}

@keyframes lgan {
    0%{letter-spacing: 30px}
    25%{letter-spacing: 25px}
    50%{letter-spacing: 20px}
    75%{letter-spacing: 10px}
    100%{letter-spacing: 5px}
}

footer {
    padding: 30px;
    background-color: #333;
    margin-top: 130px;
    color:white;
}

#hr {
    width: 100%;
    animation-name: hrr;
    animation-direction: normal;
    animation-duration: 0.5s;
    animation-iteration-count: 1;
    animation-timing-function: ease;
    
}
@keyframes hrr {
    0%{width: 0%}
    25%{width: 30%}
    50%{width: 60%}
    75%{width: 80%}
    100%{width: 100%}
}






 .slideanim {visibility:hidden;transform: skew(-30deg);}
  .slidee {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateX(90%) skew(28deg);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%) skew(28deg);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-90%) skew(28deg);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%) skew(28deg);
    }
  }
  
  .slideanimm {visibility:hidden;}
  .slideee {
    animation-name: slidee;
    -webkit-animation-name: slidee;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slidee {
    0% {
      opacity: 0;
      /* transform: translateX(-90%); */
      transform: scale(0,0);
    } 
    100% {
      opacity: 1;
      transform: scale(1,1);
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      transform: scale(0,0);
    } 
    100% {
      opacity: 1;
      transform: scale(1,1);
    }
  }



#head {
    width: 100%;
    height: 92.6vh;
    /* background-image: url('WebsiteImages/header.jpg'); */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: -20px;
    position: relative;
    padding-top: 165px;
    padding-bottom: 260px;
    animation-name: m;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    margin-bottom: 100px;
}

@-webkit-keyframes m {
  0%   {background-image: url('WebsiteImages/header.jpg')}
  25%  {background-image: url('WebsiteImages/header1.jpg')}
  50%  {background-image: url('WebsiteImages/header4.jpg')}
  75%  {background-image: url('WebsiteImages/header3.jpg')}
  100% {background-image: url('WebsiteImages/header.jpg')}
}
.fit-image {
    width: 100%;
    height: 400px;
    padding: 10px
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
#upload {
    background-image: url('https://www.desktopbackground.org/p/2014/03/30/739354_aurora-borealis-wallpapers-desktop_1280x842_h.jpg');
    background-repeat: repeat;
    background-size: cover;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    white-space: nowrap;
    background-position: 50% 50%;
    text-align: center;
    text-transform: uppercase;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid gray;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
   background-color: #f5f5f5;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #fc6100;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;
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
<body>
<?php

?>    
<?php 

  if(!empty($_GET['id'])) {
    if(!empty($_SESSION['useremail'])) {
?>
<?php 

if(!empty($_GET['Action'])) {

  if($_GET['Action']=="Logout") {

    $logout="update users set Status='Offline' where User_ID='".$_GET['id']."'";
    $logoutresult=$con->query($logout);
      if($logoutresult) {
        unset($_SESSION['useremail']);
        echo "<script>window.location='Login.php';</script>";
      }

  }

}




if(isset($_POST['contactreg'])) {


  $send="insert into `contactusmsgs`(`By_Email`, `C_Msg`, `C_Date`) VALUES ('".$_POST['email']."','".$_POST['msg']."','".date("d-m-Y")."')";
  $sendres=$con->query($send);
    if($sendres) {
      echo "<script>Swal.fire({
        title: 'Send Successfully!',
        text: 'Your message send successfully. We will respond it as soon as possible.',
        type: 'success'
    }).then(function() {
      window.location='Contact.php?id=".$_GET['id']."';
  });</script>";
    }
  



}


?>
<a href="#top1"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>
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
<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none" id="top1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php if(!empty($_GET['id'])) { ?>
        <a href="index.php?id=<?php echo $_GET['id'] ?>"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
        <?php }
        else {
          ?>
          <a href="index.php"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
          <?php
        } ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php?id=<?php echo $_GET['id'] ?>">Home</a></li>
            <li><a href="About.php?id=<?php echo $_GET['id'] ?>">About Us</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="Contact.php?id=<?php echo $_GET['id'] ?>">Contact Us</a></li>
            <li><a href="FAQ.php?id=<?php echo $_GET['id'] ?>">FAQ</a></li>
            <li><a href="Feedback.php?id=<?php echo $_GET['id'] ?>">Feedback</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" action="searchImage.php?id=<?php echo $_GET['id'] ?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Images" name="srch" title="Press Enter To Search">
            </div>
            <button type="submit" class="btn btn-default" style="display: none"><span class="glyphicon glyphicon-search" style="margin-left: 0px"></span></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
           
            <!-- <li><a href="upload.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-upload" style="margin-left: 0px"></span> Upload Image</a></li> -->
            <li><a href="profile.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> My Profile</a></li>
            <li><a href="index.php?id=<?php echo $_GET['id']; ?>&Action=Logout"><span class="glyphicon glyphicon-log-out" style="margin-left: 0px"></span> Logout</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 50px;">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 90px">Contact Us</h1>
    </div>
</div>

<div class="col-lg-6 col-lg-offset-3" style="margin-bottom: 50px;">
<div class="col-lg-12">
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Quick Contacts</h1>
<form action="Contact.php?id=<?php echo $_GET['id'] ?>" method="post">
<?php 

$user="select * from users where User_ID='".$_GET['id']."'";
$userres=$con->query($user);
foreach($userres as $userrow) {

?>
<label>Email</label>
      <input id="email" class="form-control tt" value="<?php echo $userrow['Email'] ?>" type="email" name="email" placeholder="Your Email" readonly>
      <?php } ?>
      <label>Message</label>
<textarea id="Question" class="form-control tt" name="msg" placeholder="Go ahead, we're listening..." rows="5" maxlength="1000"></textarea>
<button id="btn" type="submit" name="contactreg">Submit <span class="glyphicon glyphicon-send" style="font-size: 20px"></span></button>
</form>
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 50px;">
<div class="container" style="">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Contact Details</h1>
    <hr>
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center" style="height: 560px;background-image: url('WebsiteImages/aboutcontact.jpg');padding: 40px;margin-bottom: 30px;transform: skewX(20deg);box-shadow: 0 0 10px rgba(0,0,0,0.3)">
    <div style="height: 100%;background-color: #0f0f0f;padding: 40px;margin-bottom: 30px;transform: skewX(-40deg);box-shadow: 0 0 20px rgba(0,0,0,0.6);position: relative;overflow: hidden;opacity: 0.98">
  

<?php 

$contact="select * from contactus";
$conres=$con->query($contact);
foreach($conres as $conrow) {

?>
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-envelope" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Email'] ?></h4>
      <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-earphone" style="color:#ff4800;font-size: 30px;"></span> +<?php echo $conrow['Phone'] ?></h4>
        <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-phone-alt" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Tel'] ?></h4>
        <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="glyphicon glyphicon-map-marker" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Address'] ?></h4>
<?php } ?>
</div>
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 50px;">
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Map</h1>
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=shahrah-e-faisal&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>




<!-- 
<div class="col-lg-12" style="">
<p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div> -->
<script>

function myKeyPressHandler(event) {
  if (event.keyCode == 13) {
    document.getElementById("srchform").submit();
  }
}

$(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
    });


$(document).ready(function(){
  $("a").on('click', function(event) {
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
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slidee");
        }
    });
  });
})
</script>
<?php 
  }
  else {
    echo "<script>window.location='Login.php';</script>";
  }   
    }

    else {


      if(isset($_POST['contactunreg'])) {

          $send="insert into `contactusmsgs`(`By_Email`, `C_Msg`, `C_Date`) VALUES ('".$_POST['emailunreg']."','".$_POST['msgunreg']."','".date("d-m-Y")."')";
          $sendres=$con->query($send);
            if($sendres) {
              echo "<script>Swal.fire({
                title: 'Send Successfully!',
                text: 'Your message send successfully. We will respond it as soon as possible.',
                type: 'success'
            }).then(function() {
              window.location='Contact.php';
          });</script>";
            }
          
        
        
        
        }
        


?>

<a href="#top1"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>
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
<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none" id="top1">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php if(!empty($_GET['id'])) { ?>
        <a href="index.php?id=<?php echo $_GET['id'] ?>"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
        <?php }
        else {
          ?>
          <a href="index.php"><img src="WebsiteImages/logo.png" style="width: 50%;margin-top: 10px;padding-bottom: 10px;margin-left: 10px"></a>
          <?php
        } ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="Contact.php">Contact Us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="Feedback.php">Feedback</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" action="searchImage.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Images" name="srch" title="Press Enter To Search">
            </div>
            <button type="submit" class="btn btn-default" style="display: none"><span class="glyphicon glyphicon-search" style="margin-left: 0px"></span></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li class="text-center"><a href="Login.php"><span class="glyphicon glyphicon-log-in" style="margin-left: 0px"></span> Login</a></li>
        <li class="text-center"><a href="Signup.php"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> Signup</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 50px;">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 90px">Contact Us</h1>
    </div>
</div>
<div class="col-lg-6 col-lg-offset-3" style="margin-bottom: 50px;">
<div class="col-lg-12">
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Quick Contacts</h1>

<form action="Contact.php" method="post">
<label>Email</label>
<input id="emailunreg" class="form-control tt" type="email" name="emailunreg" placeholder="Your Email">
<label>Message</label>
<textarea id="msgunreg" class="form-control tt" name="msgunreg" placeholder="Go ahead, we're listening..." rows="5" maxlength="1000"></textarea>

<button id="btn" type="submit" name="contactunreg">Submit <span class="glyphicon glyphicon-send" style="font-size: 20px"></span></button>

</form>
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 50px;">
<div class="container" style="">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Contact Details</h1>
    <hr>
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center" style="height: 560px;background-image: url('WebsiteImages/aboutcontact.jpg');padding: 40px;margin-bottom: 30px;transform: skewX(20deg);box-shadow: 0 0 10px rgba(0,0,0,0.3)">
    <div style="height: 100%;background-color: #0f0f0f;padding: 40px;margin-bottom: 30px;transform: skewX(-40deg);box-shadow: 0 0 20px rgba(0,0,0,0.6);position: relative;overflow: hidden;opacity: 0.98">
  

<?php 

$contact="select * from contactus";
$conres=$con->query($contact);
foreach($conres as $conrow) {

?>
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-envelope" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Email'] ?></h4>
      <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-earphone" style="color:#ff4800;font-size: 30px;"></span> +<?php echo $conrow['Phone'] ?></h4>
        <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-phone-alt" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Tel'] ?></h4>
        <hr style="width: 50%;border-color:#ff4800;border-width: 5px;">
        <h4 style="color:white;margin-top: 40px;transform: skew(28deg);"><span class="	glyphicon glyphicon-map-marker" style="color:#ff4800;font-size: 30px;"></span> <?php echo $conrow['Address'] ?></h4>
<?php } ?>
</div>
</div>
</div>





<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 50px;">
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Map</h1>
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=shahrah-e-faisal&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>

<!-- 
<div class="col-lg-12" style="">
<p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div> -->
<script>

function myKeyPressHandler(event) {
  if (event.keyCode == 13) {
    document.getElementById("srchform").submit();
  }
}
$(window).scroll(function() {
$(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
    });
  });
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $("a").on('click', function(event) {
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
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slidee");
        }
    });
  });
})
</script>




<?php

    } 

?>


</body>
</html>