<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:Index.php");
}
include("config.php");
	
	
	
if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$imgtitle = $_POST["title"];
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "HomeDesign/images/";
	$date = date('y/m/d');
	$uid = $_SESSION["id"];
	$count=0;
    
	$result = mysqli_query($connection,"select count(*) as total from user_picture where U_Id='".$uid."'");
	$data=mysqli_fetch_assoc($result);
	$count=$data['total'];
	
	if($count >=35)
	{
		$result= "Picture Upload Limit is maximum 35";
	}
	else
	{
		if(!empty($_FILES["fileupload"]["name"]))
		{
			if(move_uploaded_file($tmp_name,$location.$file))
			{
				$insert = "insert into user_picture (Title,Picture,U_Id,Date) values('".$imgtitle."','".$file."','".$uid."','".$date."')";
				$exe = mysqli_query($connection,$insert);
				if($exe)
				{
					$result = "Registration Successfully";
				}
				else
				{
					$result = "Registration Unsuccessfully";
				}
			}
		}
	}
}
	


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Share Photo</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Photowall Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="HomeDesign/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="HomeDesign/css/lightbox.css">
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="HomeDesign/css/banner-style.css">
    <link rel="stylesheet" href="HomeDesign/css/aos.css">
    <link href='HomeDesign/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="HomeDesign/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="HomeDesign/my_style.css"/>


</head>

<body>

<section class="content-main-w3" id="home">
        <!--/nav-->
        <div class="header_top_w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" style="background-color:#FFF;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="Home.php">Home
									<span class="sr-only">(current)</span>
								</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="FaqFront.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ContactUs.php">Contact</a>
                        </li>
                          <li class="nav-item">
                        </li>
                         <li class="nav-item">
                            <a href="" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <img src="HomeDesign/images/<?php echo $_SESSION["img"]?>" width="33px" height="33px" style="border-radius: 50%;">
							<?php echo $_SESSION["un"]?>
                            <i class="fa fa-angle-down lnr"></i>
                            </a>
                            <ul class="dropdown-menu drp-mnu" style="padding: 0.5em; min-width:163px;position:static;color:#007bff">
                                <li><a href="UserPicUpload.php"><i class="fa fa-photo"></i> Share Photo</a></li>
								<li><a href="UserProfile.php"><i class="fa fa-user"></i> My Profile</a> </li>
								<li><a href="HomeLogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
							</ul>
                        </li>

                    </ul>
                </div>

            </nav>
            
            <div class="logo-wthree text-center">
               <h1 style="font-family:'Cormorant Unicase', serif;color:#FFF;font-size:45px;">Photo Share<img src="HomeDesign/images/Logo/logo.png" width="50px" height="50px" style="margin-bottom:25px;"/></h1>
            </div>

        </div>
        
     <br />   <!--//nav-->
     
<div class="row" style="background-color:#FFF; width:100%; height:500px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <br />
    <br />
    <div style="text-align:center">
    <h1>Drop to Share</h1>
	<p>Real simple file uploading, simple drag files here to share them!</p>
    </div>
        <form action="UserPicUpload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label style="font-size:20px;font-family:'Times New Roman';font-weight:bold">Image Title</label>
                <input type="text" class="form-control" required="required" name="title"/>
            </div>
            
            <div class="form-group">
                <label style="font-size:20px;font-family:'Times New Roman';font-weight:bold">Select Image </label>
                <input type="file" class="form-control btn btn-primary" required="required" name="fileupload"/>
            </div>
            
        	<input type="submit" class="btn btn-success" name="btn" value="Upload"/>
           <!-- <label></label>-->
      	</form>
    </div>
    
    <div class="col-md-3"></div>
</div>





        <!--/footer-->
        <footer class="mt-lg-5 mt-3">
             <div class="social_media_w3layouts text-center">
           <ul class="social-icons justify-content-center mt-md-5 mt-3">
                                <li class="mr-1"><a href="#"><span class="fa fa-google"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
             <p class="copy-right-w3ls my-3">© 2019 PhotoShare. All rights reserved | Design by Asif Jamal & Hanif khan</p>
        </div>
        </footer>
    </section>

<!--//footer-->
    <script src="HomeDesign/js/jquery-2.2.3.min.js"></script>
     <script src='HomeDesign/js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>

    <!--  light box js -->
    <script src="HomeDesign/js/lightbox-plus-jquery.min.js">
    </script>
    <!-- //light box js-->
  <!--/ start-smoth-scrolling -->
    <script src="HomeDesign/js/move-top.js"></script>
    <script src="HomeDesign/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="HomeDesign/js/bootstrap.js"></script>


</body>
</html>