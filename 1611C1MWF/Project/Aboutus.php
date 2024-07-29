<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:Index.php");
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

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


</head>

<body>

<section class="content-main-w3 inner-page" id="home">
        <!--/nav-->
        <div class="header_top_w3ls">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php">Home
									<span class="sr-only">(current)</span>
								</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item active">
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

        <!--//nav-->
    </section>
    <!--/about-->
    <section class="banner-bottom-w3layouts py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
                 <h2 class="title-wthree text-center mb-lg-5 mb-3">About</h2>
                <div class="row">
                    <div class="col-lg-6 about-img" data-aos="flip-right">
                        <img class="img-fluid" src="HomeDesign/images/ab.jpg" alt="">
                    </div>
                    <div class="col-lg-6 about-right mt-lg-4" data-aos="flip-left">
                        <h4 class="sub-tittle">Who We Are</h4>
                        <h3 class="tittle text-uppercase">If I knew what the photograph was going to look like,
 I wouldn't bother taking it. It's the voyage of discovery that fascinates me.</h3>
                        <p class="my-4">A photographic portrait is a picture of someone who knows he is being photographed, 
and what he does with this knowledge is as much a part of the photograph as 
what he's wearing or how he looks.
</p>

                        <ul class="author d-flex">
                            <li><img class="img-fluid" src="HomeDesign/images/author.jpg" alt=""></li>
                            <li><span>Website Name</span>Photo Share</li>
                        </ul>
                    </div>
                </div>
                
        <p class="my-4" data-aos="fade-up">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis.Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis.Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis.Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>
    <!--//about-->
    <!--/footer-->
    <footer class="pt-lg-5 inner-page-footer">
        <div class="social_media_w3layouts text-center">
           <ul class="social-icons justify-content-center mt-md-5 mt-3">
                                <li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-google"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
             <p class="copy-right-w3ls my-3">© 2019 PhotoShare. All rights reserved | Design by Asif Jamal & Hanif khan</p>
        </div>
    </footer>
    <!--//footer-->

    <script src="HomeDesign/js/jquery-2.2.3.min.js"></script>
    <script src='HomeDesign/js/aos.js'></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
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