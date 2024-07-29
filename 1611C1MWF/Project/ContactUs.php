<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:Index.php");
}



include("config.php");
if(isset($_POST["btn"]))
{
	$un_name = $_POST["Name"];
	$email = $_POST["Email"];
	$msg = $_POST["Msg"];
	
	$insert = "insert into contact_table (Name,Email,Message) values ('".$un_name."','".$email."','".$msg."')";
	$query = mysqli_query($connection,$insert);
	if($query)
	{
		$result = "Successfully Submited";
	}
	
	
}





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
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
    <link rel="stylesheet" href="HomeDesign/css/aos.css">
    <link href='HomeDesign/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
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
                        <li class="nav-item ">
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
                        <li class="nav-item active">
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
    
    <section class="banner-bottom-w3layouts pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
            <h4 class="sub-tittle text-uppercase text-center">Find us</h4>
              <h2 class="title-wthree text-center mb-lg-5 mb-3">Contact</h2>
            <div class="container">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> California, USA

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>Email :
                                    <a href="mailto:example@email.com"> mail@example.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3ls">
                        <div class="row address-info" data-aos="fade-up">
                            <div class="col-md-3 address-left text-center">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+1 234 567 8901</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>

                    </div>
                    <div class="col-lg-6 main_grid_contact">
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="textarea" placeholder="Message Write Here" name="Msg"></textarea>
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="Submit" name="btn">
                                </div>
                            </form>
                            <div></div>
                            <div>
                            <h6><?php
							if(isset($_POST["btn"])) echo $result
							?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
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