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
    <title>PhotoShare | About Us</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">
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
      transform: translateX(90%) skew(12deg);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%) skew(12deg);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-90%) skew(12deg);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%) skew(12deg);
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
      transform: translateY(90%) ;
    } 
    100% {
      opacity: 1;
      transform: translateY(0%) ;
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      transform: translateY(90%) ;
    } 
    100% {
      opacity: 1;
      transform: translateY(0%) ;
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
<body>
<?php

?>    
<?php 


function thousandsCurrencyFormat($num) {

  if($num>1000) {

        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;

  }

  return $num;
}

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

<!-- Go to top button -->
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
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="About.php?id=<?php echo $_GET['id'] ?>">About Us</a></li>
            <li><a href="Contact.php?id=<?php echo $_GET['id'] ?>">Contact Us</a></li>
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
    <h1 style="font-family: 'impact';font-size: 100px">About Us</h1>
    </div>
</div>


<div class="container" style="margin-bottom: 50px;">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Our History</h1>
    <hr>
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center" style="height:auto;background-color:  #0f0f0f;padding-top: 40px;padding-bottom: 20px;margin-bottom: 30px;transform: skewX(30deg);box-shadow: 0 0 10px rgba(0,0,0,0.3)">
    <div style="height: 100%;background-image: url('WebsiteImages/aboutcontact.jpg');padding: 60px;margin-bottom: 30px;transform: skewX(-37deg);box-shadow: 0 0 10px rgba(255,255,255,0.3);position: relative;overflow: hidden;text-align: center;opacity: 0.95">
  
    

        <h1 style="color:white;margin-top: 10px;transform: skew(12deg);font-weight: bold;letter-spacing: 1px;text-align: left;padding: 30px;text-align: center" class="slideanim"><img style="left: 50%" src="WebsiteImages/logo1.png" width="70%"></h1>
        <p style="color:white;margin-top: 10px;transform: skew(12deg);font-size: 15px" class="slideanim">Website created by <strong style="font-style: italic;text-transform: uppercase">mohsin javed</strong> and Group. Student of Aptech Computer Education North Nazimabad.</p>
        <p style="color:white;margin-top: 10px;transform: skew(12deg);font-size: 15px" class="slideanim">Our client has a passion of collecting various kinds of pictures. He is having a
large collection of photographs of nature, sceneries, miscellaneous ones, and the
wild animal s photographs, etc. He now wants to share his collection with every
one. And so he has approached us for building the site for him, where the picture
files can be uploaded, and viewed on the site (i.e., downloaded from the site). He
also wants the users of the website to be able to upload the file, there by
providing the facility of sharing the pictures of sceneries, miscellaneous pictures,
etc. with the help of the site.
So he has approached us for helping him by building a website through which the
pictures can be uploaded over the site.</p>
        <!-- <h4 style="color:white;margin-top: 30px;transform: skew(12deg);font-size: 15px;text-align: right" class="slideanim"><span style="font-weight: bold" class="glyphicon glyphicon-menu-right"></span> <strong>1 billion downloads</strong></h4> -->
       
  

</div>
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12">
<div class="col-lg-8 col-lg-offset-2 slideanimm" style="border-radius: 10px;border:5px solid #000;background-image: url('https://images.unsplash.com/photo-1467810563316-b5476525c0f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80');background-size: cover;background-position: center;padding: 50px;;margin-bottom: 150px;box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.6);background-repeat: no-repeat;">

<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-left: -30px;bottom:0;margin-bottom: -80px"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-left: -20px;margin-top: 135px;bottom:0;margin-bottom: -60px"></span>
<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-right: 20px;margin-top: -140px;right: 0"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-right: 30px;margin-top: -115px;;right: 0"></span>

                                <h1 class="text-center" style="font-weight: bold;font-family:'Brush Script MT';text-shadow: 0px 0px 5px lightgray;color:white;font-size: 10vh;filter:blur(0.4px)">Thank you a million times</h1>
                               <!-- <hr style="width: 50%;border-color:#ff4800;border-width: 5px;"> -->
                               <?php
          $totalimg="select count(*) as count from images";
          $totalimgres=$con->query($totalimg);
          foreach($totalimgres as $totalimgrow) {
        ?>
       
                                <h4 style="color:white;text-align: center;font-family: 'calibri'">You’ve contributed <strong><?php echo thousandsCurrencyFormat($totalimgrow['count']);  ?></strong> images have been contributed to Unsplash - allowing more people to create, more problems to be solved, and more progress to be made. And we owe it all to our passionate, creative community.</h4>
    
        <?php } ?>
      
        
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12" style="margin-bottom: 100px;">
  <div class="col-lg-6 col-md-6 col-sm-11" style="border:5px solid black;padding: 0px;border-radius: 10px;margin-left: 10px;margin-right: 10px">
            <img style="filter:grayscale(20%) blur(1px)" src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%">
  </div>
  <div class="col-lg-5 col-md-5 col-sm-12 slideanimm" style="border-radius: 10px;height: 300px;">
  <?php
          $totalusers="select count(*) as count from users where Role=2";
          $totalres=$con->query($totalusers);
          foreach($totalres as $totalrow) {
        ?>
   
       
  <h1  style="top:50%;left: 50%;;font-weight: bold;font-family:'arial';text-shadow: 0px 0px 5px lightgray;color:black;font-size: 8vh;filter:blur(0.4px);margin-top: 30px;"><?php echo thousandsCurrencyFormat($totalrow['count']); ?>+ Registered Users</h1>
  <?php } ?>
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <hr style="width:80%;border-color:#ff4800;border-width: 5px;margin-bottom: 10px;margin-left: -300px">
  <hr style="width:50%;border-color:#ff4800;border-width: 5px;margin-bottom: 0px;margin-left: -200px;margin-top: -5px">
</div>
</div>

<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12">
<div class="col-lg-10 col-lg-offset-1 slideanimm" style="border-radius: 10px;border:5px solid #000;background-image: url('WebsiteImages/panel.jpg');background-size: cover;background-position: center;padding: 50px;;margin-bottom: 150px;box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.6);background-repeat: no-repeat;">

<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-left: -30px;bottom:0;margin-bottom: -80px"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-left: -20px;margin-top: 135px;bottom:0;margin-bottom: -60px"></span>
<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-right: 20px;margin-top: -140px;right: 0"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-right: 30px;margin-top: -115px;;right: 0"></span>
 <?php 
                                    $sumimg="select sum(Downloads) as sum from images";
                                    $sumimgres=$con->query($sumimg);
                                    foreach($sumimgres as $sumimgrow) {
                                ?>

                               
                                <h1 class="text-center" style="font-family:'arial';text-shadow: 0px 0px 2px lightgray;color:white;font-size:7vh;filter:blur(0.4px)">Cross <?php echo thousandsCurrencyFormat($sumimgrow['sum']); ?>+ Downloads</h1>
                                <h4 style="color:white;text-align: center;font-family: 'calibri'">Which means, our community has inspired and enabled <?php echo $sumimgrow['sum'] ?> creations - including presentations, reports, websites, collages, paintings, wallpapers, and more.</h4>
                                <?php } ?> 
                   
      
        
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

<!-- Go to top button -->
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
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="About.php">About Us</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
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
    <h1 style="font-family: 'impact';font-size: 100px">About Us</h1>
    </div>
</div>


<div class="container" style="margin-bottom: 50px;">
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Our History</h1>
    <hr>
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center" style="height:auto;background-color:  #0f0f0f;padding-top: 40px;padding-bottom: 20px;margin-bottom: 30px;transform: skewX(30deg);box-shadow: 0 0 10px rgba(0,0,0,0.3)">
    <div style="height: 100%;background-image: url('WebsiteImages/aboutcontact.jpg');padding: 60px;margin-bottom: 30px;transform: skewX(-37deg);box-shadow: 0 0 10px rgba(255,255,255,0.3);position: relative;overflow: hidden;text-align: center;opacity: 0.95">
  
    

        <h1 style="color:white;margin-top: 10px;transform: skew(12deg);font-weight: bold;letter-spacing: 1px;text-align: left;padding: 30px;text-align: center" class="slideanim"><img style="left: 50%" src="WebsiteImages/logo1.png" width="70%"></h1>
        <p style="color:white;margin-top: 10px;transform: skew(12deg);font-size: 15px" class="slideanim">Website created by <strong style="font-style: italic;text-transform: uppercase">mohsin javed</strong> and Group. Student of Aptech Computer Education North Nazimabad.</p>
        <p style="color:white;margin-top: 10px;transform: skew(12deg);font-size: 15px" class="slideanim">Our client has a passion of collecting various kinds of pictures. He is having a
large collection of photographs of nature, sceneries, miscellaneous ones, and the
wild animal s photographs, etc. He now wants to share his collection with every
one. And so he has approached us for building the site for him, where the picture
files can be uploaded, and viewed on the site (i.e., downloaded from the site). He
also wants the users of the website to be able to upload the file, there by
providing the facility of sharing the pictures of sceneries, miscellaneous pictures,
etc. with the help of the site.
So he has approached us for helping him by building a website through which the
pictures can be uploaded over the site.</p>
        <!-- <h4 style="color:white;margin-top: 30px;transform: skew(12deg);font-size: 15px;text-align: right" class="slideanim"><span style="font-weight: bold" class="glyphicon glyphicon-menu-right"></span> <strong>1 billion downloads</strong></h4> -->
       
  

</div>
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12">
<div class="col-lg-8 col-lg-offset-2 slideanimm" style="border-radius: 10px;border:5px solid #000;background-image: url('https://images.unsplash.com/photo-1467810563316-b5476525c0f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80');background-size: cover;background-position: center;padding: 50px;;margin-bottom: 150px;box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.6);background-repeat: no-repeat;">

<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-left: -30px;bottom:0;margin-bottom: -80px"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-left: -20px;margin-top: 135px;bottom:0;margin-bottom: -60px"></span>
<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-right: 20px;margin-top: -140px;right: 0"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-right: 30px;margin-top: -115px;;right: 0"></span>

                                <h1 class="text-center" style="font-weight: bold;font-family:'Brush Script MT';text-shadow: 0px 0px 5px lightgray;color:white;font-size: 10vh;filter:blur(0.4px)">Thank you a million times</h1>
                               <!-- <hr style="width: 50%;border-color:#ff4800;border-width: 5px;"> -->
                               <?php
          $totalimg="select count(*) as count from images";
          $totalimgres=$con->query($totalimg);
          foreach($totalimgres as $totalimgrow) {
        ?>
       
                                <h4 style="color:white;text-align: center;font-family: 'calibri'">You’ve contributed <?php echo thousandsCurrencyFormat($totalimgrow['count']);  ?> images have been contributed to Unsplash - allowing more people to create, more problems to be solved, and more progress to be made. And we owe it all to our passionate, creative community.</h4>
    
        <?php } ?>
      
        
</div>
</div>
<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12" style="margin-bottom: 100px;">
  <div class="col-lg-6 col-md-6 col-sm-11" style="border:5px solid black;padding: 0px;border-radius: 10px;margin-left: 10px;margin-right: 10px">
            <img style="filter:grayscale(20%) blur(1px)" src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="100%">
  </div>
  <div class="col-lg-5 col-md-5 col-sm-12 slideanimm" style="border-radius: 10px;height: 300px;">
  <?php
          $totalusers="select count(*) as count from users where Role=2";
          $totalres=$con->query($totalusers);
          foreach($totalres as $totalrow) {
        ?>
   
       
  <h1  style="top:50%;left: 50%;;font-weight: bold;font-family:'arial';text-shadow: 0px 0px 5px lightgray;color:black;font-size: 8vh;filter:blur(0.4px);margin-top: 30px;"><?php echo thousandsCurrencyFormat($totalrow['count']); ?>+ Registered Users</h1>
  <?php } ?>
  <p>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </p>
  <hr style="width:80%;border-color:#ff4800;border-width: 5px;margin-bottom: 10px;margin-left: -300px">
  <hr style="width:50%;border-color:#ff4800;border-width: 5px;margin-bottom: 0px;margin-left: -200px;margin-top: -5px">
</div>
</div>

<hr style="width: 50%;border-color:#000;border-width: 3px;margin-bottom: 160px;">
<div class="col-lg-12">
<div class="col-lg-10 col-lg-offset-1 slideanimm" style="border-radius: 10px;border:5px solid #000;background-image: url('WebsiteImages/panel.jpg');background-size: cover;background-position: center;padding: 50px;;margin-bottom: 150px;box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.6);background-repeat: no-repeat;">

<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-left: -30px;bottom:0;margin-bottom: -80px"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-left: -20px;margin-top: 135px;bottom:0;margin-bottom: -60px"></span>
<span style="position: absolute;width: 5px; height: 170px;background-color: #ff4800;margin-right: 20px;margin-top: -140px;right: 0"></span>
<span style="position: absolute;width: 5px; height: 120px;background-color: #ff4800;margin-right: 30px;margin-top: -115px;;right: 0"></span>
 <?php 
                                    $sumimg="select sum(Downloads) as sum from images";
                                    $sumimgres=$con->query($sumimg);
                                    foreach($sumimgres as $sumimgrow) {
                                ?>

                               
                                <h1 class="text-center" style="font-family:'arial';text-shadow: 0px 0px 2px lightgray;color:white;font-size:7vh;filter:blur(0.4px)">Cross <?php echo thousandsCurrencyFormat($sumimgrow['sum']); ?>+ Downloads</h1>
                                <h4 style="color:white;text-align: center;font-family: 'calibri'">Which means, our community has inspired and enabled <?php echo $sumimgrow['sum'] ?> creations - including presentations, reports, websites, collages, paintings, wallpapers, and more.</h4>
                                <?php } ?> 
                   
      
        
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