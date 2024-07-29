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
    <title>PhotoShare | FAQ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">
<style>
    

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






 .slideanim {visibility:hidden;}
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
      transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
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

#r {
    background-color: #ff5100;
    height: auto;
    margin-top: 15px;
    margin-bottom: 15px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    color:white;
    padding-bottom: 10px;
    cursor: pointer;margin-left: 45px;margin-right: 45px
}

#r #que {
    width: 100%;
    text-align: center;
    padding:2px;
    font-weight: bold;
    font-size: 15px;
    margin-top: 20px
}

#r p {
    background-color: white;

    margin-top: 30px;
    text-align: center;
    font-size: 15px;
    color:black;
    padding:10px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px
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

.alert:hover {
  transform: scale(1.1,1.1);
  transition: 0.5s;
  box-shadow:0 0 20px rgba(0,0,0,0.6);
  cursor: pointer;
}  
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
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

?>

<a href="#top"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>

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
<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none" id="top">
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
            <li><a href="Contact.php?id=<?php echo $_GET['id'] ?>">Contact Us</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="FAQ.php?id=<?php echo $_GET['id'] ?>">FAQ</a></li>
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

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 10px;">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 120px">F A Q</h1>
    </div>
</div>


<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" style="padding: 50px;margin-bottom: 50px">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';font-size: 50px;">Hi, 
  <?php 

$user="select * from users where User_ID='".$_GET['id']."'";
$userres=$con->query($user);
foreach($userres as $userrow) {
  echo $userrow['First_Name']." ".$userrow['Last_Name'];
}
  ?>
  </h1>
  <h2 style="color:#ff5100;font-weight: bold">How Can We Help?</h2>
    <hr>
    <h4><span style="margin-right: 10px;" class="glyphicon glyphicon-menu-right"></span>Everything you need to know so you can use PhotoShare like a pro</h4>
    <button class="btn btn-default" id="qq1" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q1show()">
    How to view the image files? <span style="float: right" id="s1" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q1" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  Just click on <strong>View Image</strong> button on image it will show on your screen.
  </div>
  <script>
function q1show() {
  document.getElementById('q1').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq1').setAttribute("onclick","q1hide()");
}
function q1hide() {
  document.getElementById('q1').style.display='none';
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
}
</script>



  <button class="btn btn-default" id="qq2" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q2show()">
How to register with the site? <span style="float: right" id="s2" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q2" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  First signup your email, After signup your signup request sent to the admin. If Admin accpet / reject your request you would get an email.
  </div>

<script>
function q2show() {
  document.getElementById('q2').style.display='block';
  document.getElementById('q1').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");


  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");
  
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq2').setAttribute("onclick","q2hide()");
}
function q2hide() {
  document.getElementById('q2').style.display='none';
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
}
</script>



<button class="btn btn-default" id="qq3" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q3show()">
 How to download the picture file? <span style="float: right" id="s3" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q3" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  When you hover on an image Download button will popup.Then click on Download button.
  </div>

<script>
function q3show() {
  document.getElementById('q3').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q1show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq3').setAttribute("onclick","q3hide()");
}
function q3hide() {
  document.getElementById('q3').style.display='none';
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
}
</script>


<button class="btn btn-default" id="qq4" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q4show()">
How to upload the picture file? <span style="float: right" id="s4" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q4" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  After you signup request Accepted.Login with your email and password than go to Upload Image page,Follow all rule.and upload image with tag associated with your image.
  </div>

<script>
function q4show() {
  document.getElementById('q4').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq4').setAttribute("onclick","q4hide()");
}
function q4hide() {
  document.getElementById('q4').style.display='none';
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
}
</script>


<button class="btn btn-default" id="qq5" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q5show()">
Is there any limitation in uploading files? <span style="float: right" id="s5" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q5" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
Yes! you can upload 35 pictures from your account.If you want to upload more delete some old picture than upload. 
 </div>

<script>
function q5show() {
  document.getElementById('q5').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq5').setAttribute("onclick","q5hide()");
}
function q5hide() {
  document.getElementById('q5').style.display='none';
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
}
</script>



<button class="btn btn-default" id="qq6" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q6show()">
How to post a Query? <span style="float: right" id="s6" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q6" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  After login go to Feedback page and post your query Admin will answered it as soon as possible.
 </div>

<script>
function q6show() {
  document.getElementById('q6').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");

  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq6').setAttribute("onclick","q6hide()");
}
function q6hide() {
  document.getElementById('q6').style.display='none';
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq6').setAttribute("onclick","q6show()");
}
</script>


<button class="btn btn-default" id="qq7" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q7show()">
How do i save images? <span style="float: right" id="s7" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q7" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  Click on option button on image and than click on "save" button, Image will saved in your <strong>Profile > Saved Images</strong> Page.
 </div>

<script>
function q7show() {
  document.getElementById('q7').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q7').style.display='none';

  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq7').setAttribute("onclick","q7hide()");
}
function q7hide() {
  document.getElementById('q7').style.display='none';
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
}
</script>




</div>







</div>

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
  // Add smooth scrolling to all links in navbar + footer link
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
?>
<a href="#top"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>

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

<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none" id="top">
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
            <li><a href="Contact.php">Contact Us</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="FAQ.php">FAQ</a></li>
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

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 10px;">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 120px">F A Q</h1>
    </div>
</div>


<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" style="padding: 50px;margin-bottom: 50px">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';font-size: 50px;">Hi, Guest User <a style="float: right;font-size: 20px;color:#ff5100" href="Signup.php">Join Us</a></h1>
  <h2 style="color:#ff5100;font-weight: bold">How Can We Help?</h2>
    <hr>
    <h4><span style="margin-right: 10px;" class="glyphicon glyphicon-menu-right"></span>Everything you need to know so you can use PhotoShare like a pro</h4>
    <button class="btn btn-default" id="qq0" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q0show()">
    What You Can Do After Login ? <span style="float: right" id="s0" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q0" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">

      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:white;font-weight: bold"></span> You can upload your captured photos and share it with peoples around tha world.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:white;font-weight: bold"></span> You can follow peoples.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:white;font-weight: bold"></span> You would have access to like an image.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:white;font-weight: bold"></span> You can save image in your Save Images section.</p>
  </div>
  <script>
function q0show() {
  document.getElementById('q0').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q1').style.display='none';

  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq0').setAttribute("onclick","q0hide()");
}
function q0hide() {
  document.getElementById('q0').style.display='none';
  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq0').setAttribute("onclick","q0show()");
}
</script>
    
    <button class="btn btn-default" id="qq1" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q1show()">
    How to view the image files? <span style="float: right" id="s1" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q1" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  Just click on <strong>View Image</strong> button on image it will show on your screen.
  </div>
  <script>
function q1show() {
  document.getElementById('q1').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq1').setAttribute("onclick","q1hide()");
}
function q1hide() {
  document.getElementById('q1').style.display='none';
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
}
</script>



  <button class="btn btn-default" id="qq2" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q2show()">
How to register with the site? <span style="float: right" id="s2" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q2" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  First signup your email, After signup your signup request sent to the admin. If Admin accpet / reject your request you would get an email.
  </div>

<script>
function q2show() {
  document.getElementById('q2').style.display='block';
  document.getElementById('q1').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");
  
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq2').setAttribute("onclick","q2hide()");
}
function q2hide() {
  document.getElementById('q2').style.display='none';
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
}
</script>



<button class="btn btn-default" id="qq3" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q3show()">
 How to download the picture file? <span style="float: right" id="s3" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q3" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  When you hover on an image Download button will popup.Then click on Download button.
  </div>

<script>
function q3show() {
  document.getElementById('q3').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q1show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq3').setAttribute("onclick","q3hide()");
}
function q3hide() {
  document.getElementById('q3').style.display='none';
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
}
</script>


<button class="btn btn-default" id="qq4" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q4show()">
How to upload the picture file? <span style="float: right" id="s4" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q4" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  After you signup request Accepted.Login with your email and password than go to Upload Image page,Follow all rule.and upload image with tag associated with your image.
  </div>

<script>
function q4show() {
  document.getElementById('q4').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq4').setAttribute("onclick","q4hide()");
}
function q4hide() {
  document.getElementById('q4').style.display='none';
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
}
</script>


<button class="btn btn-default" id="qq5" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q5show()">
Is there any limitation in uploading files? <span style="float: right" id="s5" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q5" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
Yes! you can upload 35 pictures from your account.If you want to upload more delete some old picture than upload. 
 </div>

<script>
function q5show() {
  document.getElementById('q5').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q6').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  
  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq5').setAttribute("onclick","q5hide()");
}
function q5hide() {
  document.getElementById('q5').style.display='none';
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
}
</script>



<button class="btn btn-default" id="qq6" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q6show()">
How to post a Query? <span style="float: right" id="s6" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q6" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  After login go to Feedback page and post your query Admin will answered it as soon as possible.
 </div>

<script>
function q6show() {
  document.getElementById('q6').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq7').setAttribute("onclick","q7show()");

  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq6').setAttribute("onclick","q6hide()");
}
function q6hide() {
  document.getElementById('q6').style.display='none';
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq6').setAttribute("onclick","q6show()");
}
</script>


<button class="btn btn-default" id="qq7" style="padding: 20px;margin-bottom: 20px;width: 100%;text-align: left;margin-top: 20px" onclick="q7show()">
How do i save images? <span style="float: right" id="s7" class="glyphicon glyphicon-plus"></span>
  </button>
  <div class="col-lg-12" id="q7" style="background-color: #ff5100;padding: 20px;color: white;font-size: 20px;font-family: calibri;border-radius: 5px;transition: 0.5s all;display: none">
  Click on option button on image and than click on "save" button, Image will saved in your <strong>Profile > Saved Images</strong> Page.
 </div>

<script>
function q7show() {
  document.getElementById('q7').style.display='block';
  document.getElementById('q2').style.display='none';
  document.getElementById('q3').style.display='none';
  document.getElementById('q4').style.display='none';
  document.getElementById('q5').style.display='none';
  document.getElementById('q1').style.display='none';
  document.getElementById('q7').style.display='none';
  document.getElementById('q0').style.display='none';

  document.getElementById('s0').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s2').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s3').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s4').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s5').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s6').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('s1').setAttribute("class","glyphicon glyphicon-plus");

  document.getElementById('qq0').setAttribute("onclick","q0show()");
  document.getElementById('qq1').setAttribute("onclick","q1show()");
  document.getElementById('qq2').setAttribute("onclick","q2show()");
  document.getElementById('qq3').setAttribute("onclick","q3show()");
  document.getElementById('qq4').setAttribute("onclick","q4show()");
  document.getElementById('qq5').setAttribute("onclick","q5show()");
  document.getElementById('qq6').setAttribute("onclick","q6show()");

  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-minus");
  document.getElementById('qq7').setAttribute("onclick","q7hide()");
}
function q7hide() {
  document.getElementById('q7').style.display='none';
  document.getElementById('s7').setAttribute("class","glyphicon glyphicon-plus");
  document.getElementById('qq7').setAttribute("onclick","q7show()");
}
</script>




</div>

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
  // Add smooth scrolling to all links in navbar + footer link
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