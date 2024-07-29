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
    <title>PhotoShare | My Profile</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="tags.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" src="tags.js"></script>
		<script>
			$(function() {
				$("#testInput").tags({
					unique: true,
				});
			});
        </script>
        


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
    height: 100%;
    padding: 10px
}

#r {
    height: 200px;
    padding:30px;
    background-color: #f0f0f0;
    margin-left:47px;
    margin-right:47px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.3);
    border:2px solid rgba(0,0,0,0.2)
}
#r p {
    margin-top: 30px;
    text-align: center;
    font-size: 15px;
    color:#a1a1a1
}
#r span {
    width: 100%;
    font-size: 50px;
    text-align: center;
    color: white;
    text-shadow: 0px 0px 5px rgba(0,0,0,0.3);
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
#pr {
    overflow: hidden;
    border-radius: 50%;
}
#pr #hh {
    width: 100%;
    height: 50%;
    background:rgba(0,0,0,0.6);
    position: absolute;
      display: none;
      cursor: pointer;
      margin-top:50%;
      text-align: center;
    }
    #hh h3 {
        margin-top: 20px;
         color:white
    }
    #pr:hover > #hh {
      display: block;
      transition: 1s all;
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



#h4 a {
  text-decoration: none;
  color: white;
}


#dww1 {
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

/* 
#fiv #rp {
  float:right;color:black;
  margin-top: 10px
            } */


            #fiv #p {
              color:white;margin-top:70px
            }

            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center
            }






            @media only screen and (max-width: 414px) {
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
            .col-lg-12 #fiv #rp {
  float:right;color:#171717;  margin-top: 10px
            }
            .col-lg-12 #fiv #p {
              color:white;margin-top:140px;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 180px;
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;
            }
            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center;margin-bottom: 80px
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
    margin-left: 10px
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
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
    margin-left: 7px
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}


::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}

/* max 2 */


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
              width: 180px;
            }
            .col-lg-12 #fiv p {
              color:white;
              background: rgba(0,0,0,0.6);
              padding: 10px;
              width: 100%;
            }
            #mgal {
              font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center;margin-bottom: 80px
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
    margin-left: 10px
}
#btn:hover {
    box-shadow: 0px 0px 5px white;
    transform: scale(1.03,1.03);
    transition: 0.3s all;
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

}

img {
    pointer-events: none;
}
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}

/* 
.alert {
  opacity: 0;
  animation-name: al;
    animation-play-state: running;
    animation-direction: forward;
    animation-duration: 2s;
    animation-iteration-count: 1;
}
@-webkit-keyframes al {
  from {opacity: 1}
  to {opacity: 0;display: none;}
  
} */
</style>
</head>
<body>
<?php 

if(!empty($_SESSION['useremail'])) {


  
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



if(!empty($_GET['unsave'])) {

  $dltsave="delete from save where Save_ID='".$_GET['unsave']."'";
  $dltres=$con->query($dltsave);
  if($dltres) {
    echo "<script>
       
      Swal.fire({
          title: 'Unsaved!',
          text: 'Image Has Been Unsaved!',
          type: 'success'
      }).then(function() {
        window.location='save.php?id=".$_GET['id']."';
    });

</script>";
  }
}

?>

<a href="#top"><button id="myBtn" title="Go to top"><span class="	glyphicon glyphicon-chevron-up"></span></button></a>

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
            <li><a href="index.php?id=<?php echo $_GET['id'] ?>">Home</a></li>
            <li><a href="About.php?id=<?php echo $_GET['id'] ?>">About Us</a></li>
            <li><a href="Contact.php?id=<?php echo $_GET['id'] ?>">Contact Us</a></li>
            <li><a href="FAQ.php?id=<?php echo $_GET['id'] ?>">FAQ</a></li>
            <li><a href="Feedback.php?id=<?php echo $_GET['id'] ?>">Feedback</a></li>
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
           
            <!-- <li><a href="upload.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-upload" style="margin-left: 0px"></span> Upload Image</a></li> -->
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="profile.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> My Profile</a></li>
            <li><a href="index.php?id=<?php echo $_GET['id']; ?>&Action=Logout"><span class="glyphicon glyphicon-log-out" style="margin-left: 0px"></span> Logout</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>


<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12">
<a href="profile.php?id=<?php echo $_GET['id'] ?>" class="btn btn-default" id="dww1"><span class="glyphicon glyphicon-menu-left"></span> Main Profile</a>
<h1 style="text-align: center">Saved Images</h1>
<p id="mgal"><span class="glyphicon glyphicon-info-sign"></span> To Remove Saved Image Click On Remove In Options.</p>
<div class="grid-padding">

        <div class="row">
        <?php 
    $countimg="select * from save where Save_ByUser='".$_GET['id']."' and Saved='True' order by Save_ID DESC";
    $rescount=$con->query($countimg);
    if(mysqli_num_rows($rescount)!=0) {
    foreach($rescount as $countrow) {

  
?>
<?php 

    $getimg="select * from images where Image_ID='".$countrow['Save_ImageID']."' order by Image_ID DESC";
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
  <li><a class="remove" id="save<?php echo $imgrow['Image_ID'] ?>">Remove</a></li>
  </ul>
</div>
                    <button type="button" id="rpt" class="btn btn-primary" data-toggle="modal" data-target="#Reportimage" style="display: none">Open Report</button>
                    
                    
                    
                    
                    <!-- <?php
                    
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
                    ?> -->

                         
                       
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

           
<input type="hidden" value="<?php echo $_GET['id'] ?>" id="uid">
<script>

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

$(document).ready(function(){


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




//   $('.unlike').click(function() {
//     var id = $(this).attr('id');
//     var uid=document.getElementById('uid').value;
//     $.ajax({
//             type : 'post',
//             url : 'unLike.php', //Here you will fetch records 
//             data :  {id:id,uid:uid}, //Pass $id
//             success : function(data){
//               Swal.fire("Unsaved!", data,"success").then( () => {
//                 window.location="LikedImages.php?id="+uid;
//             });
          
              
              
//             }
//         });
        
// });


$('.remove').click(function() {

var txt =  $(this).attr('id');
var numb = txt.match(/\d/g);
numb = numb.join("");

var id = numb;
var uid=document.getElementById('uid').value;
$.ajax({
        type : 'post',
        url : 'remove.php', //Here you will fetch records 
        data :  {id:id,uid:uid}, //Pass $id
        success : function(data){
          
                    Swal.fire(
                                'Removed!',
                                data,
                                'success'
                              ).then( () => {
                window.location="saves.php?id="+uid;
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


});
</script>
            
    <?php } ?>
    <?php }



    
  
  } 
  else {

    ?>
<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4">
<img src="WebsiteImages/noimage.png" width="100%" title="No Images">
</div>

    <?php 
  }?>
        </div>

    </div>
</div>


<?php 
}
else {
    echo "<script> window.location='Login.php';</script>";
}
 ?>
</body>
</html>