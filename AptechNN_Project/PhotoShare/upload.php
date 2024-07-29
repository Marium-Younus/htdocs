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
    <title>PhotoShare | Upload Images</title>
    <link rel="icon" href="WebsiteImages/icon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="scrollbar1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="tagss.css">
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
/* #name {
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
} */

#rr {
    height: 200px;
    padding:30px;
    background-color: #f71111;
    margin-left:47px;
    margin-right:47px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.3);
    border:2px solid rgba(0,0,0,0.2);
    /* animation-name: rrr;
    animation-timing-function: ease;
    animation-duration:1s;
    animation-direction: normal;
    animation-iteration-count: infinite; 
    animation-delay: 1s; */

}


/* @keyframes rrr {
    from{transform: scale(1.1,1.1);visibility: visible;}
    to{transform: scale(1,1);visibility: visible;}
} */
#rr p {
    margin-top: 30px;
    text-align: center;
    font-size: 15px;
    color:white;
}
#rr span {
    width: 100%;
    font-size: 50px;
    text-align: center;
    color: white;
    text-shadow: 0px 0px 5px rgba(0,0,0,0.3);
}

.tt {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid gray;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px; background-color: #f5f5f5;transition: .4s all;
}
.tt:focus {
  border: none;outline: none;box-shadow: none;border-bottom: 2px solid #fc6100;
   border-radius: 0px;padding: 20px;
   margin-bottom: 20px;letter-spacing: 1px;transition: .4s all;
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

    // if(isset($_POST['upload'])) {

    //     if(!empty($_FILES["img"]["name"])){
    //         $folder="UploadedImages/";
    //         $tempPath=$_FILES["img"]["tmp_name"];
    //         $path=$folder.$_FILES["img"]["name"];
      
    //         move_uploaded_file($tempPath,$path);
            
    //         $upload="insert into images(`Image_Name`, `Image_Tags`, `Image_File`, `Image_ByUser`, `Image_Date`) values ('".$_POST['imgname']."','".$_POST['testInput']."','".$path."','".$_GET['id']."','".date("d-m-Y")."')";
    //     }

    // }


?>

<nav class="navbar navbar-default" role="navigation" style="padding:0px;border-radius: 0px;border:none">
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
           
            <li style="background-color: #fc6100;color:white;border-bottom-color: black"><a style="color:white;font-weight: bold" href="upload.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-upload" style="margin-left: 0px"></span> Upload Image</a></li>
            <li><a href="profile.php?id=<?php echo $_GET['id']; ?>"><span class="glyphicon glyphicon-user" style="margin-left: 0px"></span> My Profile</a></li>
            <li><a href="index.php?id=<?php echo $_GET['id']; ?>&Action=Logout"><span class="glyphicon glyphicon-log-out" style="margin-left: 0px"></span> Logout</a></li>
            
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="col-lg-12" style="height: 500px;background-color: #0f0f0f;color:white;margin-top: -20px;margin-bottom: 50px">
    <div class="col-lg-12" id="upload">
    <h1 style="font-family: 'impact';font-size: 72px">Upload Image</h1>
    <h1 style="font-family: 'impact';font-size: 70px">To PhotoShare</h1>
    <h1 style="font-family: 'impact';font-size: 120px">For Free</h1>
    </div>
</div>


<div class="container" style="margin-top: 50px;">
<?php
        
        if(!empty($_GET['Upload'])) {

            if($_GET['Upload']=="True") {

                ?>

<input type="hidden" value="<?php echo $_GET['id'] ?>" id="uidd" name="uidd">
                <script>

        var idd=document.getElementById('uidd').value;
        Swal.fire({
                title: 'Image Uploaded!',
                text: 'Image successfully uploaded to PhotoShare, Thank you for sharing your image.',
                type: 'success'
            }).then(function() {
              window.location="upload.php?id="+idd;
          });
                </script>
                    <!-- <div class="alert alert-success">
                    <button style="float: right;margin-top: -6px" class="btn btn-success" onclick="window.location='upload.php?id=<?php echo $_GET['id'] ?>'">Ok</button>
                    <strong>Image Uploaded!</strong> Image successfully uploaded to <strong>PhotoShare</strong>.
                    </div> -->
        <?php
            }  
            else {

        ?>
  <input type="hidden" value="<?php echo $_GET['id'] ?>" id="uidd" name="uidd">
                <script>

        var idd=document.getElementById('uidd').value;
        Swal.fire({
                title: 'Upload Limit Exceeded!',
                text: 'You should delete one of the old image to upload a new one',
                type: 'error'
            }).then(function() {
              window.location="upload.php?id="+idd;
          });
                </script>
                        <!-- <div class="alert alert-danger">
                        <strong>Upload Limit Exceeded!</strong> You should delete one of the files to upload a new one.
                        </div> -->
                
        <?php

            }

        }

        ?>
<h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Rules</h1>
<hr>
    <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r">
        <span class="glyphicon glyphicon-picture"></span>
        <p>High quality photos (at least 5MP)</p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r" style="background-color: #f5f5f5">
    <span class="glyphicon glyphicon-adjust"></span>
        <p>Photos are clear & original</p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r">
    <span class="glyphicon glyphicon-copyright-mark"></span>
        <p>Only upload photos you own the rights to.</p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r" style="background-color: #f5f5f5">
    <span class="glyphicon glyphicon-alert"></span>
        <p>Zero tolerance for nudity, violence or hate.</p>
    </div>
    <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r">
    <span class="glyphicon glyphicon-heart"></span>
        <p>Respect the intellectual property of others.</p>
    </div>
    <?php
   
   $totalc="select count(*) as count from images where `Image_ByUser`='".$_GET['id']."'";
   $totalcs=$con->query($totalc);
   foreach($totalcs as $totalr) {
        if($totalr['count']==35) {
?>
<div class="col-lg-3 col-md-12 col-sm-12 slideanim ractive" id="rr" title="Image Upload Limit Has Been Exceeded">
    <span class="glyphicon glyphicon-signal"></span>
        <p>You can upload 35 picture.If limit exceeded than delete an image to upload new.</p>
    </div>  
<?php
        } else {

            ?>
            <div class="col-lg-3 col-md-12 col-sm-12 slideanim" id="r" style="background-color: #f5f5f5">
    <span class="glyphicon glyphicon-signal"></span>
        <p>You can upload 35 picture.If limit exceeded than delete an image to upload new.</p>
    </div> 
            
            <?php 
        }
    } ?>
     
    <div class="col-lg-12 slideanim" style="margin-top: 0px;padding:20px">
    <hr>
    <h1 style="font-weight: bold;letter-spacing: 1px;font-family: 'calibri';text-align: center">Image Inforamtion</h1>
    <?php
   
   $totalc="select count(*) as count from images where `Image_ByUser`='".$_GET['id']."'";
   $totalcs=$con->query($totalc);
   foreach($totalcs as $totalr) {
   
   ?>
    <h4 class="text-center"><span class="glyphicon glyphicon-info-sign" style="color:#fc6100"></span> <?php echo $totalr['count'] ?> out of 35 Images Upload.</h4>

   <?php } ?>
    <br>
    <form action="upload.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data" id="myform">
       
        <h4 style="letter-spacing: .5px">Image File</h4>
        <button onclick="abc();" type="button" style="outline: none;margin-bottom: 20px;background-color: #ef6600;color:White;border-color:#ef6600;width:200px;height:40px;border-radius: 10px;letter-spacing: 1px;font-size: 15px;">Upload</button>
        <h2 style="letter-spacing: 1px;font-family: 'calibri';text-align: center;margin-top: -10px">Selected Image</h2>
        <div class="col-lg-12" id="imgggg" style="margin-bottom: 10px;border: 2px solid black;border-radius: 10px;padding-bottom: 10px;padding-top: 10px">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4" style=""><h4 class="text-center" style="margin-top: 30px" id="noimg">No Image Selected</h4><img src="" id="blah" width="100%" style=""></div>
        </div>
        <script>
            function abc() {
                document.getElementById("img").click();
            }
            // function readURL(input) {
            //     if (input.files && input.files[0]) {
            //         var reader = new FileReader();
                    
            //         reader.onload = function (e) {
            //             $('#blah').attr('src', e.target.result);
            //         }
            //         reader.readAsDataURL(input.files[0]);
            //     }
            // }
            $(document).ready(function(){
            $("#img").on('change',function(){
                document.getElementById('imgggg').style.border="2px solid #fc6100";
                var tmppath = URL.createObjectURL(event.target.files[0]);
            $("#img").fadeIn("fast").attr('src',tmppath);  
                document.getElementById('blah').src=tmppath;
                document.getElementById('img').style.display="none";
                document.getElementById('noimg').style.display="none";
            });
        });
        </script>
        <input accept="image/jpeg, image/png, image/jpg" type="file" name="img" id="img" class="form-control" style="padding-top:20px;padding-bottom:40px;box-shadow: 0px 0px 10px rgba(0,0,0,0.1);border:2px solid rgba(0,0,0,0.3);display: none" required><br>
      
        <input type="hidden" value="<?php echo $_GET['id'] ?>" id="uid" name="uid">
        <h4 style="letter-spacing: .5px">Image Name</h4>
        <input id="name" type="text" class="form-control tt" name="imgname" id="imgname" required><br>
        <h4 style="letter-spacing: .5px">Image Tags</h4>
        <input type="text" id="testInput" name="testInput" class="tt" value="" style="width:100%;font-size:30px;" required><br>
        <button id="btn" type="button" name="upload">Upload To PhotoShare <span class="glyphicon glyphicon-upload" style="font-size: 20px"></span></button>
        
    </form>
    </div>
</div>
<script>


$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
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
    echo "<script> window.location='Login.php';</script>";
}
 ?>
</body>
</html>