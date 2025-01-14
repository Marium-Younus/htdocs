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
    <title>PhotoShare | Home</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="scrollbar1.css" rel="stylesheet" type="text/css">

  <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


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
    outline: none;    font-family: 'Berlin Sans FB';
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}

@media screen and (min-width: 480px) {
  

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
      transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      -webkit-transform: translateY(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

  .slideanimmm {visibility:hidden;}
  .slideeee {
    animation-name: slideee;
    -webkit-animation-name: slideee;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slideee {
    0% {
      opacity: 0;
      transform: translateX(90%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      -webkit-transform: translateX(90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translate(0%);
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
    margin-bottom: 50px;
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

#fiv h4{
    color:white;

}
.col-lg-12:hover > #fiv {
    display: block;
    transition: 1s display;
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

#h4 a {
  text-decoration: none;
  color: white;
  
}


#dww {
  animation-name: dd;
  animation-duration: 1s;
  animation-iteration-count: 1;
  animation-play-state: running;
  animation-timing-function: ease;
}
@keyframes dd {
  from { margin-left: 100%;opacity: 0}
  to { margin-left: 0%;opacity: 1}
}

/* #fiv #rp {
  float:right;color:black;
  margin-top: 10px;
            } */


            #fiv #p {
              color:white;margin-top: 70px;
              background: rgba(0,0,0,0);
              font-family: 'calibri';
            }
           

@media only screen and (max-width: 600px) {
          #kk {
            margin-top: 100px;
            height: 500px

          }

          .col-lg-12 #fiv {
              margin-top: -80px;
              display: block;
              transition: 1s display;
              background-color: rgba(0,0,0,0);
              position: absolute;
             
          }
          
          .col-lg-12 #fiv #h4 a {
              text-decoration: none;
              color: #171717;
              
            }
            /* .col-lg-12 #fiv #rp {
  float:right;color:#171717;  margin-top: 10px
            } */

            .col-lg-12 #fiv #p {
              color:white;margin-top:140px;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 190px;
              text-align: center
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;
              border-radius: 5px;
              text-align: center
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

#btn {
    width:47%;
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
    margin-left: 7px;
    font-family: 'Berlin Sans FB';

}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}

          
        }
















/* Max 2 */

@media only screen and (max-width: 768px) {
          #kk {
            margin-top: 100px;
            height: 500px

          }

          .col-lg-12 #fiv {
              margin-top: -80px;
              display: block;
              transition: 1s display;
              background-color: rgba(0,0,0,0);
              position: absolute;
             
          }
          
          .col-lg-12 #fiv #h4 a {
              text-decoration: none;
              color: #171717;
              
            }
            /* .col-lg-12 #fiv #rp {
  float:right;color:#171717;  margin-top: 10px
            } */

            .col-lg-12 #fiv #p {
              color:white;margin-top:140px;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 190px;text-align: center
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;
              border-radius: 5px;
              text-align: center
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

#btn {
    width:47%;
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
    margin-left: 7px;
    font-family: 'Berlin Sans FB';
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}

          
        }

        img {
    pointer-events: none;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}

#noti {
  margin-left: 0px;font-size: 15px;font-weight: bolder;transform: rotate(0deg);transition: 0.5s all;
}
li a:hover > #noti {
  font-size: 15px;font-weight: bolder;
  animation-name: no;animation-play-state: running;
  animation-duration: 0.1s;
  animation-iteration-count: infinite;
  animation-direction: normal;
  
  
}
@keyframes no {
  from{transform: rotate(20deg)}
  to{transform: rotate(-20deg)}
}
</style>



</head>
<body>
   
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


// if(isset($_POST['report'])) {

//   $report="insert into `report`(`Report_ByUser`, `Report_Image`, `Report_Type`, `Report_Date`) values ('".$_GET['id']."','".$_POST['rptimg']."','".$_POST['rpttype']."','".date("d-m-Y")."')";
//   $repres=$con->query($report);
//   if($repres) {
//     echo "<script>Swal.fire({
//       title: 'Image Successfully Reported!',
//       animation: true,
//       customClass: {
//         popup: 'animated tada'
//       }
//     })</script>";
//   }

// }

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
<!-- Nav Bar -->
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
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="index.php?id=<?php echo $_GET['id'] ?>">Home</a></li>
            <li><a href="About.php?id=<?php echo $_GET['id'] ?>">About Us</a></li>
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
          
        <li title="Notifications" data-toggle="modal" data-target="#notification" id="mynoti"><a href="#">
       
          <p style="float: right;background-color: red;border-radius: 50%;width: 20px;height: 20px;text-align: center;color:White;font-weight: bold;font-family: 'calibri';margin-top: -10px;font-size: 10px" id="cccc"></p>
       
          <script>
          
            setInterval(function(){ 
            var id=document.getElementById('uid').value;
              $.ajax({
                          type: "post",
                                url: "countnoti.php",
                                data: {id:id},
                                success: function (data) {

                                    $('#cccc').html(data);
                                    
                                }
                              });


            }, 100);
          </script>

        <span class="glyphicon glyphicon-bell" id="noti"></span>
      
      </a></li>
            <!-- <li><a href="upload.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-upload" style="margin-left: 0px"></span> Upload Image</a></li> -->
            <li><a href="profile.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> My Profile</a></li>
            <li><a href="index.php?id=<?php echo $_GET['id']; ?>&Action=Logout"><span class="glyphicon glyphicon-log-out" style="margin-left: 0px"></span> Logout</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>


<!-- Modal -->
<div id="notification" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius: 0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="seen">&times;</button>
        <h4 class="modal-title">Notifications</h4>
      </div>
      <div class="col-lg-12 col-md-12" style="height: 100%;background-color: white;margin-bottom: 40px;padding: 20px" id="Snoti">
       
      </div>
      
    </div>

  </div>
</div>
<script>
          
           $("#mynoti").click(function() {

           
            var id=document.getElementById('uid').value;
              $.ajax({
                          type: "post",
                                url: "shownoti.php",
                                data: {id:id},
                                success: function (data) {

                                    $('#Snoti').html(data);
                                    
                                }
                              });


                            });
          </script>

<div class="col-lg-12" id="head">

    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
<div class="">
        <h1 style="color:white;font-size: 12vh;font-family:'Brush Script MT';text-shadow: 0px 0px 3px black;">PhotoShare</h1>
        
        <h4 style="color:white;font-family: 'Tahoma'">The internet’s source of freely useable images.<br>Powered by creators everywhere.</h4>

          <form id="srchform" action="searchImage.php?id=<?php echo $_GET['id'] ?>" method="post">
          <div class="input-group" style="height: 50px;margin-top: 20px">
              <span class="input-group-addon" style="background-color: white"><i class="glyphicon glyphicon-search" style="padding-left:10px;padding-right:10px"></i></span>
              <input type="text" placeholder="Search Free High Resolution Photos." name="srch" id="search" style="height: 50px;box-shadow: none;outline: none;border:none" class="form-control" onkeypress="myKeyPressHandler(event)">
          </div>
          </form>
</div>
        <br>
        <div class="slideanim">
        <?php




        $totalimg="select count(*) as count from images";
        $totalimgres=$con->query($totalimg);
        foreach($totalimgres as $totalimgrow) {
          
      ?>
      <h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($totalimgrow['count']); ?></strong> Images</h4>
      <?php } ?>
        <?php
          $totalusers="select count(*) as count from users where Role=2";
          $totalres=$con->query($totalusers);
          foreach($totalres as $totalrow) {
        ?>

<h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($totalrow['count']); ?></strong> Users</h4>
        <?php } ?>
        <?php
          $todayusers="select count(*) as count from users where Signup_Date='".date("d-m-Y")."'";
          $todayres=$con->query($todayusers);
          foreach($todayres as $todayrow) {
        ?>
        <h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($todayrow['count']); ?></strong> Peoples Registered Today</h4>

        <?php
        
          }
         
        ?>
        </div>
    </div>

</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12" style="">
    <div class="grid-padding">

        <div class="row">
<?php 
    $getimg="select * from images order by Image_ID DESC";
    $resimg=$con->query($getimg);

    foreach($resimg as $imgrow) {
  
?>

<!-- Image Popup Model -->
<div class="modal" id="myModal" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="width:80%;margin: auto">
    <div class="modal-content" style="background:transparent;box-shadow: none;border:none;color:White;width: 100%;">

    <div class="modal-header" style="">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-title"></h4>
      
      </div>
      <!-- Modal body -->
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" id="imgshowid" style="overflow: hidden;margin-top: 10px;cursor: zoom-in" onclick="zoom()">
          <img src="" title="" id="popimg" class="img-responsive slideanimm" style="margin: auto;transform:scale(1,1);cursor: zoom-in">
          <h1 style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold;font-size: 3vh">PhotoShare Image</h1>
          <p style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold">Download Image</p>
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>
<script>
  function zoom() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    imgdiv.style.overflow="visible";
    img.style.transition="0.5s all";
      img.style.transform="scale(1.3,1.3)";
      img.style.cursor="zoom-out";
      img.setAttribute("onclick","zoomout()");

    
  }
  function zoomout() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    img.style.transition="0.5s all";
      img.style.transform="scale(1,1)";
      img.style.cursor="zoom-in";
      img.setAttribute("onclick","zoom()");
  }
</script>
<!-- Report Image Model -->
<div id="Reportimage" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Report Image</h4>
      </div>
      <div class="modal-body">
        <form action="index.php?id=<?php echo $_GET['id'] ?>" method="POST">
       <input type="hidden" id="rptid" name="rptimg">
      <h4>Reporting Image</h4>
      <img src="" id="imgsrc" width="100%">
      <h4>Report Type</h4>
      <select style="width: 100%;padding:10px;margin-bottom: 10px" id="type" name="rpttype">
        <option value="Nudity">Nudity</option>
        <option value="Violence">Violence</option>
        <option value="Hate Spreading">Hate Spreading</option>
        <option value="My Image">My Image</option>
        <option value="Others">Others</option>
      </select>
     <button id="btn" class="report" type="button" name="report">Report</button>
     </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Images Show -->
<!-- slideanim -->
<div class="col-lg-4 col-md-6 col-sm-6" style="margin-top: 2.5px;padding: 5px;margin-bottom: 2.5px" id="kk">
            <?php 
                  $imgbyuser="select * from users where User_ID='".$imgrow['Image_ByUser']."'";
                  $resuser=$con->query($imgbyuser);
                  foreach($resuser as $rowuser) {
            ?>






            <div title="<?php echo $imgrow['Image_Name'] ?>" class="col-lg-12" id="imgs" style="padding: 0px;background-image: url('<?php echo $imgrow['Image_File'] ?>');height: 400px;background-size: cover;background-position: center;background-repeat: no-repeat;margin:0px;cursor: pointer">
               
                <div class="col-lg-12" id="fiv">
                    
                    <br>

                    <div class="dropdown" style="float: right;margin-top: 10px" title="Options">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
  <span style="font-size: 23px" class="	glyphicon glyphicon-option-horizontal"></span></button>
  <ul class="dropdown-menu" style="margin-left: -110px;">
  <li><a title="Report Image" id="rp" onclick="document.getElementById('imgsrc').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('rptid').value='<?php echo $imgrow['Image_ID'] ?>';document.getElementById('rpt').click();">Report</a></li>
  <li><a class="save" id="save<?php echo $imgrow['Image_ID'] ?>">Save</a></li>
  </ul>
</div>
                    <button type="button" id="rpt" class="btn btn-primary" data-toggle="modal" data-target="#Reportimage" style="display: none">Open Report</button>
                    
                    
                    
                    
                    <?php
                    
                      $getlike="select count(*) as count from likes where Like_ImageID='".$imgrow['Image_ID']."' and Like_ByUser='".$_GET['id']."'";
                      $getlikeres=$con->query($getlike);
                      foreach($getlikeres as $getlikerow) {
                        if($getlikerow['count']==0) {

                         
                    ?>

                        <button class="like btn btn-default" title="Like Image" id="<?php echo $imgrow['Image_ID'] ?>" style="margin-top: 10px;float: right;margin-right: 10px;font-size: 20px"><span class="	glyphicon glyphicon-heart"></span></button>
                      
                    <?php 
                      }
                      else {

                        ?>
                        <button class="like btn btn-default" title="Unlike Image" id="<?php echo $imgrow['Image_ID'] ?>" style="margin-top: 10px;float: right;margin-right: 10px;font-size: 20px;color:#e64500"><span class="	glyphicon glyphicon-heart"></span></button>
                        <?php

                        }
                    ?>

                         
                       
                    <?php
                      
                    } ?>



                     <?php
                      
                        if($rowuser['User_ID']!=$_GET['id']) { 
                        
                      ?>

                      <h4 id="h4" title="<?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>"><a href="userProfile.php?id=<?php echo $_GET['id'] ?>&userid=<?php echo $rowuser['User_ID'] ?>"><img src="<?php echo $rowuser['User_Image'] ?>" width="45px" height="45px" style="border-radius: 50%;margin-top: -5px"> <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?></a>
                      <?php if($rowuser['Registered']=="True") { ?>
                    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
                    <?php } ?>
                    <h5 style="font-weight: bold;color:#c8c8c8;font-family: calibri;margin-left: 50px;margin-top: -20px;">@<?php echo $rowuser['Username']; ?></h5> 
                    </h4>
                    
                      <?php 
                      
                        }else {

                      ?>
                        
                        <h4 id="h4" title="<?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>"><a href="profile.php?id=<?php echo $_GET['id'] ?>&userid=<?php echo $rowuser['User_ID'] ?>"><img src="<?php echo $rowuser['User_Image'] ?>" width="45px" height="45px" style="border-radius: 50%;margin-top: -5px"> <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?></a>
                        <?php if($rowuser['Registered']=="True") { ?>
                    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
                    <?php } ?>
                    <h5 style="font-weight: bold;color:#c8c8c8;font-family: calibri;margin-left: 50px;margin-top: -20px;">@<?php echo $rowuser['Username']; ?></h5> 
                      </h4>
                      
                      <?php

                        } 

                      ?> 

                    <br><br>
                            
                            <?php  

                                  $imagedata = getimagesize($imgrow['Image_File']);
                                  $size=$imagedata[0]." x ".$imagedata[1];
                                  echo "<h5 id='p' style='font-weight: bold;'><span class='glyphicon glyphicon-fire' style='color:#fc6100;'></span> Size : ".$imagedata[0]." x ".$imagedata[1]."</h5>" ;

                            ?>
<?php
   
   $totalLike="select count(*) as count from likes where `Like_ImageID`='".$imgrow['Image_ID']."'";
   $totalLikeres=$con->query($totalLike);
   foreach($totalLikeres as $totalrow) {
   
   ?>

    <p style="color:white;font-weight: bold;font-family: 'calibri'" id="like<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> Likes : <?php echo thousandsCurrencyFormat($totalrow['count']); ?></p>
    
   <?php } ?>
                        <p style="color:white;font-weight: bold;font-family: 'calibri'" id="dw<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> Downloads : <?php echo thousandsCurrencyFormat($imgrow['Downloads']); ?></p>
                       
                        <button id="btn" onclick="document.getElementById('imgshowid').style.overflow='hidden';document.getElementById('modal-title').innerText='Picture By <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>';document.getElementById('popimg').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('bbb').click();" style="background-color: rgba(0,0,0,0.6)">View Image <span class="glyphicon glyphicon-fullscreen"></span></button>
                        
                        <a href="<?php echo $imgrow['Image_File'] ?>" class="aa" id="<?php echo $imgrow['Image_ID'] ?>" download><button id="btn" style="margin-top: 10px;background-color: rgba(0,0,0,0.6)">Download</button></a>
    
                </div>
                <button type="button" id="bbb" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="display: none">Open modal</button>
               
            </div>
            <?php } ?>
</div>

            
    <?php } ?>
        </div>

    </div>
</div>
<input type="hidden" value="<?php echo $_GET['id'] ?>" id="uid">
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




$(document).ready(function(){



  $("#seen").click(function() {
  var uid=document.getElementById('uid').value;
  // alert('fafa');
  $.ajax({
            type : 'post',
            url : 'seenlike.php', //Here you will fetch records 
            data :  {uid:uid}, //Pass $id
            success : function(data){
                    }
            
              
        });
});


  $('.save').click(function() {

var txt =  $(this).attr('id');
var numb = txt.match(/\d/g);
numb = numb.join("");

var id = numb;
var uid=document.getElementById('uid').value;
$.ajax({
        type : 'post',
        url : 'addsave.php', //Here you will fetch records 
        data :  {id:id,uid:uid}, //Pass $id
        success : function(data){
          
                    if(data=="You Already Saved This Image.") {
                      Swal.fire('You Already Saved This Image.');
                    }
                    else {
                    Swal.fire(
                                'Saved!',
                                data,
                                'success'
                              )
                    }
                }
          
    
    });
});





  $('.aa').click(function() {
    var id = $(this).attr('id');

    $.ajax({
            type : 'post',
            url : 'addDownload.php', //Here you will fetch records 
            data :  {id:id}, //Pass $id
            success : function(data){
                $.ajax({
                    type: "post",
                    url: "getdownloads.php",
                    data: {idd:id},
                    success: function (data1) {
                        $('#dw'+id).html("");
                        $('#dw'+id).html("<span class='glyphicon glyphicon-download' style='color:#fc6100'></span> Downloads : "+data1);
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        )
                    }
                });
              
            }
        });
});

$('.report').click(function() {
  var uid=document.getElementById('uid').value;
  var type=document.getElementById('type').value;
  var reportimgid=document.getElementById('rptid').value;
    $.ajax({
            type : 'post',
            url : 'sentreport.php', //Here you will fetch records 
            data :  {uid:uid,type:type,reportimgid:reportimgid}, //Pass $id
            success : function(data){
                
                        Swal.fire(
                          'Reported!',
                          data,
                          'success'
                        )
                    }
            
              
        });
});





$('.like').click(function() {
    var id = $(this).attr('id');
    var uid=document.getElementById('uid').value;
    $.ajax({
            type : 'post',
            url : 'addLike.php', //Here you will fetch records 
            data :  {id:id,uid:uid}, //Pass $id
            success : function(data){
              $.ajax({
              type: "post",
                    url: "getlikes.php",
                    data: {idd:id,uidd:uid},
                    success: function (data1) {
                        $('#like'+id).html("");
                        $('#like'+id).html("<span class='glyphicon glyphicon-heart' style='color:#fc6100'></span> Likes : "+data1);
                        
                        if(data=="You Unlike An Image.") {
                          document.getElementById(id).style.color="#121212";
                          
                          // Swal.fire('You Unlike An Image.');
                        }
                        else {
                          document.getElementById(id).style.color="#e64500";
                          document.getElementById(id).style.transform="scale(1.1,1.1)";
                          document.getElementById(id).style.boxShadow="0 0 4px white";
                          setTimeout(() => {
                            document.getElementById(id).style.transform="scale(1,1)";
                            document.getElementById(id).style.boxShadow="none";
                          }, 100);
                            
                          
                        // Swal.fire(
                        //             'Liked!',
                        //             data,
                        //             'success'
                        //           )
                        }
                    }
                  });
            }
        });
});

// $('.relike').click(function() {
//     var id = $(this).attr('id');
//     var uid=document.getElementById('uid').value;
//     $.ajax({
//             type : 'post',
//             url : 'reLike.php', //Here you will fetch records 
//             data :  {id:id,uid:uid}, //Pass $id
//             success : function(data){
             
//                         document.getElementById(id).style.color="#e64500";
//                         document.getElementById(id).setAttribute("class","btn btn-default");

//                         if(data=="You Already Liked This Image.") {
//                           Swal.fire('You Already Liked This Image.');
//                         }
//                         else {
//                           Swal.fire(
//                                     'Image Saved!',
//                                     data,
//                                     'success'
//                                   )
//                         }
                       
                
               
//             }
//         });
// });







$(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
    });



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
  

    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slidee");
        }
    });

});


       

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

<button type="button" id="sign" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signup" style="display: none">Open Modal</button>

<!-- Modal -->
<div id="signup" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.8)">>
  <div class="modal-dialog" style="top:7%">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fc6100;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center" style="letter-spacing: .7px">Welcome To PhotoShare</h2>
      </div>
      <div class="modal-body" style="text-align: center;overflow: hidden">
      <p><strong>Hi, Guest User</strong> Thank you for visiting on our website.</p><hr>
      <h4 style="">What You Can Do After Login ?</h4>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> You can upload your captured photos and share it with peoples around tha world.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> You can follow peoples.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> You would have access to like an image.</p>
      <p style="text-align: left"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> You can save image in your Save Images section.</p>
      <hr>
        <h4 class="slideanimmm"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> Create Your PhotoShare Account For Free.<br><br><a href="Signup.php"><button id="btn">Sign Up</button></a></h4>
       <hr style="width: 80%;border-color: #e64500">
        <h4 class="slideanimmm"><span class="glyphicon glyphicon-menu-right" style="color:#e64500;font-weight: bold"></span> If You Already Have An Account.<br><br><a href="Login.php"><button id="btn">Login</button></a></h4>
      </div>
     
    </div>

  </div>
</div>
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
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="index.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
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



<div class="col-lg-12" id="head">

    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
<div class="">
        <h1 style="color:white;font-size: 12vh;font-family:'Brush Script MT';text-shadow: 0px 0px 3px black;">PhotoShare</h1>
        
        <h4 style="color:white;font-family: 'Tahoma'">The internet’s source of freely useable images.<br>Powered by creators everywhere.</h4>

          <form id="srchform" action="searchImage.php" method="post">
          <div class="input-group" style="height: 50px;margin-top: 20px">
              <span class="input-group-addon" style="background-color: white"><i class="glyphicon glyphicon-search" style="padding-left:10px;padding-right:10px;"></i></span>
              <input type="text" placeholder="Search Free High Resolution Photos." name="srch" id="search" style="height: 50px;;box-shadow: none;outline: none;border:none;" class="form-control" onkeypress="myKeyPressHandler(event)">
          </div>
          </form>
</div>
        <br>
        <div class="slideanim">
        <?php




        $totalimg="select count(*) as count from images";
        $totalimgres=$con->query($totalimg);
        foreach($totalimgres as $totalimgrow) {
          
      ?>
      <h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($totalimgrow['count']); ?></strong> Images</h4>
      <?php } ?>
        <?php
          $totalusers="select count(*) as count from users where Role=2";
          $totalres=$con->query($totalusers);
          foreach($totalres as $totalrow) {
        ?>

<h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($totalrow['count']); ?></strong> Users</h4>
        <?php } ?>
        <?php
          $todayusers="select count(*) as count from users where Signup_Date='".date("d-m-Y")."'";
          $todayres=$con->query($todayusers);
          foreach($todayres as $todayrow) {
        ?>
        <h4 style="color:white;text-align: right"><strong><span class="glyphicon glyphicon-menu-right" style="margin-left: 0px;color:#e64500;font-weight: bold"></span> <?php echo thousandsCurrencyFormat($todayrow['count']); ?></strong> Peoples Registered Today</h4>

        <?php
        
          }
         
        ?>
        </div>
    </div>

</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12" style="">
    <div class="grid-padding">

        <div class="row">
<?php 
    $getimg="select * from images order by Image_ID DESC";
    $resimg=$con->query($getimg);

    foreach($resimg as $imgrow) {
  
?>
<div class="modal" id="myModal" style="background:rgba(0,0,0,0.8)">
  <div class="modal-dialog" style="width:80%;margin: auto">
    <div class="modal-content" style="background:transparent;box-shadow: none;border:none;color:White;width: 100%;">

    <div class="modal-header" style="">
        <button type="button" style="color:white" class="close" data-dismiss="modal">&times;</button>
        <h4 id="modal-title"></h4>

      </div>
      <!-- Modal body -->
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2" id="imgshowid" style="overflow: hidden;margin-top: 10px;cursor: zoom-in" onclick="zoom()">
      
          <img src="" title="" id="popimg" class="img-responsive slideanimm" style="margin: auto;transform:scale(1,1);cursor: zoom-in">
          <h1 style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold;font-size: 3vh">PhotoShare Image</h1>
          <p style="position: absolute;top:40%;left:35%;color:rgba(255,255,255,0.3);font-weight: bold">Download Image</p>
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>
<script>
  function zoom() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    imgdiv.style.overflow="visible";
      img.style.transform="scale(1.3,1.3)";
      img.style.transition="0.5s all";
      img.style.cursor="zoom-out";
      img.setAttribute("onclick","zoomout()");

    
  }
  function zoomout() {
    var img=document.getElementById('imgshowid');
    var imgdiv=document.getElementById('imgshowid');
    img.style.transition="0.5s all";
      img.style.transform="scale(1,1)";
      img.style.cursor="zoom-in";
      img.setAttribute("onclick","zoom()");
  }
</script>
<!-- slideanim -->
<div class="col-lg-4 col-md-6 col-sm-6" style="margin-top: 2.5px;padding: 5px;margin-bottom: 2.5px" id="kk">
            <?php 
                        $imgbyuser="select * from users where User_ID='".$imgrow['Image_ByUser']."'";
                        $resuser=$con->query($imgbyuser);
                        foreach($resuser as $rowuser) {
                    ?>
            <div title="<?php echo $imgrow['Image_Name'] ?>" class="col-lg-12" id="imgs" style="padding: 0px;background-image: url('<?php echo $imgrow['Image_File'] ?>');height: 400px;background-size: cover;background-position: center;background-repeat: no-repeat;margin:0px;cursor: pointer">
                <div class="col-lg-12" id="fiv">
                    
                    <br>
                    
                    <h4 id="h4" title="<?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>"><a href="userProfile.php?userid=<?php echo $rowuser['User_ID'] ?>"><img src="<?php echo $rowuser['User_Image'] ?>" width="45px" height="45px" style="border-radius: 50%;margin-top: -5px"> <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?></a>
                    <?php if($rowuser['Registered']=="True") { ?>
                    <span class="glyphicon glyphicon-ok-sign" style="color:#fc6100;font-size: 15px"></span>
                    <?php } ?>
                    <h5 style="font-weight: bold;color:#c8c8c8;font-family: calibri;margin-left: 50px;margin-top: -20px;">@<?php echo $rowuser['Username']; ?></h5> 
                  </h4>
                    

                  <br><br>
                          
                          <?php  

                                $imagedata = getimagesize($imgrow['Image_File']);
                                $size=$imagedata[0]." x ".$imagedata[1];
                                echo "<h5 id='p' style='font-weight: bold;'><span class='glyphicon glyphicon-fire' style='color:#fc6100;'></span> Size : ".$imagedata[0]." x ".$imagedata[1]."</h5>" ;

                          ?>
                      <?php
   
   $totalLike="select count(*) as count from likes where `Like_ImageID`='".$imgrow['Image_ID']."'";
   $totalLikeres=$con->query($totalLike);
   foreach($totalLikeres as $totalrow) {
   
   ?>

<p style="color:white;font-weight: bold;font-family: 'calibri'" id="like<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-heart" style="color:#fc6100"></span> Likes : <?php echo thousandsCurrencyFormat($totalrow['count']); ?></p>
    
    <?php } ?>
                         <p style="color:white;font-weight: bold;font-family: 'calibri'" id="dw<?php echo $imgrow['Image_ID'] ?>"><span class="glyphicon glyphicon-download" style="color:#fc6100"></span> Downloads : <?php echo thousandsCurrencyFormat($imgrow['Downloads']); ?></p>
                        <button id="btn" onclick="document.getElementById('imgshowid').style.overflow='hidden';document.getElementById('modal-title').innerText='Picture By <?php echo $rowuser['First_Name'] ?> <?php echo $rowuser['Last_Name'] ?>';document.getElementById('popimg').src = '<?php echo $imgrow['Image_File'] ?>';document.getElementById('bbb').click();" style="background-color: rgba(0,0,0,0.6)">View Image <span class="glyphicon glyphicon-fullscreen"></span></button>
                            <a href="<?php echo $imgrow['Image_File'] ?>" class="aa" id="<?php echo $imgrow['Image_ID'] ?>" download><button id="btn" style="margin-top: 10px;background-color: rgba(0,0,0,0.6)">Download</button></a>
                            
                </div>
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

// function myfun(){
//   localStorage.setItem('Guestuser', 'null');
// }

// function createCookie(name, value) {
//    var date = new Date();
//    date.setTime(date.getTime()+(1000));
//    var expires = "; expires="+date.toGMTString();

//    document.cookie = name+"="+value+expires+"; path=/";
// }

$(document).ready(function(){
  
 

//   createCookie("alert","true");
//   function getCookie(cname) {
//   var name = cname + "=";
//   var decodedCookie = decodeURIComponent(document.cookie);
//   var ca = decodedCookie.split(';');
//   for(var i = 0; i <ca.length; i++) {
//     var c = ca[i];
//     while (c.charAt(0) == ' ') {
//       c = c.substring(1);
//     }
//     if (c.indexOf(name) == 0) {
//       return c.substring(name.length, c.length);
//     }
//   }
//   return "";
// }


// function checkCookie() {
//   var username = getCookie("alert");
//   if (username == "true") {
//     document.getElementById('sign').click();
//   } else {
//     createCookie("alert","false");
//   }
// }
  // var now = new Date();
  // var time = now.getTime();
  // var expireTime = time + 1000*18100;
 
  // now.setTime(expireTime);
  // var tempExp = 'Wed, 31 Oct 2012 08:50:17 GMT';
  // alert(now.toGMTString());
  // document.cookie = 'cookie=ok;expires='+now.toGMTString()+';path=/';


// if(localStorage.getItem("Guestuser")==undefined) {
//   document.getElementById('sign').click();
//   localStorage.setItem("Guestuser", "True");
// }

// function myFunction() {
//   localStorage.removeItem("Guestuser");
// }  
// setTimeout(function(){ if(localStorage.getItem("Guestuser")==undefined) {
//   document.getElementById('sign').click();
 
// };localStorage.clear(); }, 5000);

localStorage.setItem("Guestuser", "True");


setTimeout(function() {
  localStorage.clear();
  if(localStorage.getItem("Guestuser")==undefined) {
  document.getElementById('sign').click();
 
}
 }, 5000);



$(".slideanimmm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideeee");
        }
    });

$(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("slideee");
        }
    });


    $('.aa').click(function() {
    var id = $(this).attr('id');

    $.ajax({
            type : 'post',
            url : 'addDownload.php', //Here you will fetch records 
            data :  {id:id}, //Pass $id
            success : function(data){
                $.ajax({
                    type: "post",
                    url: "getdownloads.php",
                    data: {idd:id},
                    success: function (data1) {
                        $('#dw'+id).html("");
                        $('#dw'+id).html("<span class='glyphicon glyphicon-download' style='color:#fc6100'></span> Downloads : "+data1);
                        Swal.fire(
                          'Success!',
                          data,
                          'success'
                        )
                    }
                });
              
            }
        });
});



  // Add smooth scrolling to all links in navbar + footer link
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
  

    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slidee");
        }
    });

})
</script>




<?php

    } 

?>


</body>
</html>