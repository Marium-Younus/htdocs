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
    <title>PhotoShare | Feedback</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
      transform: translateY(90%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(90%);
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
    color: #fc6203;
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
    box-shadow: 0px 0px 5px rgba(0,0,0,0.6);
    transform: scale(1.03,1.03);
    transition: 0.3s all;
}


#upload {
    background-image: url('WebsiteImages/header3.jpg');
    background-repeat: no-repeat;
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
#name {
border:2px solid black;
outline: none;
letter-spacing: 1px;
padding-top: 10px;
padding-bottom: 10px;
}
#name:focus {
border:2px solid #fc6203;
outline: none;
letter-spacing: 1px;
}


.form-group input {
border:2px solid #ededed;
outline: none;
letter-spacing: 1px;
}
.form-group input:focus {
border:2px solid #fc6100;
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
      transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      transform: translateX(0%);
    }
  }
  @-webkit-keyframes slidee {
    0% {
      opacity: 0;
      -webkit-transform: translateX(-90%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateX(0%);
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
::selection {
    background-color: #ef6600;
    color: #000;
    text-decoration: none;
}
</style>
</head>
<body>
<?php 

if(!empty($_SESSION['useremail'])) {

    if(isset($_POST['feedback'])) {
        $que=mysqli_real_escape_string($con,$_POST['Question']);
            $feedback="insert into `faq`(`FAQ_Question`, `FAQ_ByUser`, `FAQ_QuestionDate`) values ('".$que."','".$_GET['id']."','".date("d-M-Y")."')";
        $feedres=$con->query($feedback);
        if($feedres) {
            echo "<script>
       
            Swal.fire({
                title: 'Send!',
                text: 'Feedback Has Been Send!',
                type: 'success'
            }).then(function() {
              window.location='Feedback.php?id=".$_GET['id']."';
          });

    </script>";
        }
        else {
            echo "<script>window.location='Feedback.php?id=".$_GET['id']."&Send=False'</script>";
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
            <li><a href="FAQ.php?id=<?php echo $_GET['id'] ?>">FAQ</a></li>
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold"  href="Feedback.php?id=<?php echo $_GET['id'] ?>">Feedback</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search" action="searchImage.php?id=<?php echo $_GET['id'] ?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search Images" name="srch">
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

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 50px">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 100px">Feedback</h1>
    </div>
</div>


<div class="container" style="margin-top: 50px;">
<?php
        
        if(!empty($_GET['Send'])) {

            if($_GET['Send']=="True") {

                ?>

                    <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='Feedback.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Feedback Send!</strong> Feedback successfully send to <strong>PhotoShare Admin</strong>.
                    </div>
        <?php
            }  
            else {

        ?>

                        <div class="alert alert-danger">
                        <strong>Error!</strong> Some error occurs while sending feedback,Try again.
                        </div>
                
        <?php

            }

        }

        ?>
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Have Your Say</h1>
<hr>
   
    <div class="col-lg-12" style="margin-top: 0px;padding:20px;margin-bottom: 30px;">

    <form action="Feedback.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data" id="myform">
        <div class="form-group">
            <label for="Question">Feedback</label>
            <textarea id="Question" class="form-control tt" name="Question" placeholder="Write Your Feedback Under 1000 Letters" rows="5" maxlength="1000"></textarea>
        </div>
        <button id="btn" type="submit" name="feedback">Send Feedback <span class="glyphicon glyphicon-send" style="font-size: 20px"></span></button>
        
    </form>
    </div>
</div>
<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2" style="padding: 50px">
<h1 style="text-align: center">Feedback And There Replies</h1>
<hr>
<?php 

    $faq="select * from faq order by FAQ_ID DESC";
    $resfaq=$con->query($faq);
    foreach($resfaq as $faqrow) {

?>

<div class="alert alert-danger slideanimm" style="background-color: #ededed;color:black;border-color: #ededed;border-top-right-radius: 5px;border-top-left-radius: 5px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px">
<?php
                        $gimg="select * from users where User_ID='".$faqrow['FAQ_ByUser']."'";
                        $rimg=$con->query($gimg);
                        foreach($rimg as $rowimgg) {
                    ?>
                       <img src="<?php echo $rowimgg['User_Image'] ?>" width="50px" height="50px" style="border-radius: 50%;margin-right: 20px"> <strong style="font-family: 'arial'"><?php echo $rowimgg['First_Name'] ?>'s Feedback : </strong><p style="float: right"><span class="glyphicon glyphicon-time"></span> <?php echo $faqrow['FAQ_QuestionDate'] ?></p> <h4 style="margin-top: 20px;font-family: 'calibri'"><?php echo $faqrow['FAQ_Question'] ?></h4>
                        <?php } ?>
</div>
<?php if(!empty($faqrow['FAQ_Answer'])) { ?>
<div class="alert alert-success slideanimm" style="background-color: #d1d1d1;color:black;border-color:  #d1d1d1;margin-bottom: 50px;margin-top: -20px;border-top-right-radius: 0px;border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px">
<img src="UserImages/q2t34kjldqrqv0pl7ihh.png" width="50px" height="50px" style="border-radius: 50%;margin-right: 20px"> <strong style="font-family: 'arial'">Admin's Reply : </strong><p style="float: right"><span class="glyphicon glyphicon-time"></span> <?php echo $faqrow['FAQ_AnswerDate'] ?></p>  <h4 style="margin-top: 20px;font-family: 'calibri'"><?php echo $faqrow['FAQ_Answer'] ?></h4>
</div>


<?php }
else {
  ?>
  <div class="alert alert-success slideanimm" style="background-color: #d1d1d1;color:black;border-color:  #d1d1d1;margin-bottom: 50px;margin-top: -20px;border-top-right-radius: 0px;border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px">
<p class="text-center">Thanks For your Feedback, Admin Will Reply As Soon As Possible.</p>
</div>
  <?php
    echo "<br><br>";
}
} ?>

</div>
<script>


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

$(window).scroll(function() {
    $(".slideanimm").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideee");
        }
    });
  });
    $('#btn').click(function() {
        var myform = document.getElementById("myform");

        var fd = new FormData(myform);  
        $.ajax({
            url: 'uploaddata.php', // point to server-side PHP script 
            dataType: 'text',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data:fd,                  
            type: 'post',
            success: function(php_script_response){

                
                if(php_script_response=="Limit Exceeded") {
                   window.location="upload.php?id="+document.getElementById('uid').value+"&Upload=False";
                } else {
                    window.location="upload.php?id="+document.getElementById('uid').value+"&Upload=True";
                }
            }
        });

    });

});
</script>
<?php 
}
else {
    echo "<script> window.location='Login.php?Feedback=True';</script>";
}
 ?>
</body>
</html>