<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:Index.php");
}
include("config.php");

$select1 = "select count(*) as abc from user_table";
$q = mysqli_query($connection,$select1);
/*$count = mysqli_num_rows($query);*/
$data=mysqli_fetch_assoc($q);
	$count1=$data['abc'];
$date= date('d/m/y');
$select = "select * from user_table where Date='$date' ";
$query1 = mysqli_query($connection,$select);
$dcount = mysqli_num_rows($query1);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

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
 <link href="assets/css/font-awesome.css" rel="stylesheet" />    <!-- Font-Awesome-Icons-CSS -->
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
    
    <div style="background-image:url(HomeDesign/images/back0.jpg);background-attachment:fixed;">
    
<div class="row">
	
    <?php
									$querys = mysqli_query($connection,"select * from banner_table");
									$count = mysqli_num_rows($querys);
									if($count > 0)
									{
										while($row = mysqli_fetch_array($querys))
										{
									?>
    
		<div class="col-md-12">
        <img src="HomeDesign\images\<?php  echo $row["Banner_Picture"]?>" class="img-responsive" style="background-size:cover; height:600px; width:100%;"/>
</div>

                                     <?php
									
										}
									}
									?>
</div>



<br /><br />
<!--=====================img banner=====================-->

<!--====================================discription1 1====================================-->

<div class="row" style="background-color:#FFF;margin-top:0px;">
                <div class="col-md-6" style="background-color:#333;;background-size:cover;height:350px;">
                
 <h1 style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold; text-align:center;font-size:92px;word-wrap:break-word;margin-top:70px;"><?php echo $count1?></h1>
 <h4 style="color:#FFF;font-family:Arial, Helvetica, sans-serif;font-weight:bold;text-align:center">
 Total Users Registration
 </h4>               
                
                
                
                
                
                </div>
                
<div class="col-md-6" style="background-color:#FC0;;background-size:cover;height:350px;">
                
            <h1 style="color:#000;font-family:Arial, Helvetica, sans-serif;font-weight:bold; text-align:center;font-size:92px;word-wrap:break-word;margin-top:70px;"><?php echo $dcount ?></h1>
 <h4 style="color:#000;font-family:Arial, Helvetica, sans-serif;font-weight:bold;text-align:center"> 
 Today Users Registration
 </h4>                   
                </div>


        </div>
        
<!--==================================== ending discription1 1====================================-->



<!--====================================discription1====================================-->
 <?php
						   $select = "select * from home_table";
						   $query = mysqli_query($connection,$select);
						   $count = mysqli_num_rows($query);
						   if($count > 0)
						   {
							   while($row = mysqli_fetch_array($query))
							   {
						   ?>


<div class="row" style="background-color:#FFF;margin-top:50px;">
                <div class="col-md-6">
                <img src="HomeDesign\images\<?php  echo $row["Picture"]?>" style="background-repeat:no-repeat;background-size:cover;height:500px; width:100%;" class="img-responsive"/>
                </div>
                
<div class="col-md-6">
<p style="padding:150px 0px 0px 0px; font-family:'Times New Roman', Times, serif; font-size:36px; text-align:center; color:#fd7e14;">Description</p>
        <p style=" font-family:'Times New Roman', Times, serif; font-size:18px;text-align:center;"><?php echo $row["Description"]?></p>
	 </div>
 </div>
 </div>
            <?php 
						   }
						   } 
						   ?>
 
     <!--==================================== ending discription 2====================================-->
     

        <!--<div class="container-fluid gallery-lightbox my-5">
            <div class="row m-0">
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/1.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/1.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/16.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/16.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/2.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/2.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/17.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/17.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/3.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/3.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/4.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/4.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/18.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/18.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/5.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/5.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/9.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/9.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/19.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/19.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/6.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/6.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/7.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/7.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/8.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/8.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="HomeDesign/images/20.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/20.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/10.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/10.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>

                    </div>

                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/12.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/12.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>

                    </div>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/21.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/21.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-md-2 p-0 snap-img">
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/13.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/13.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/14.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/14.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>

                    </div>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/15.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/15.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>

                    </div>
                    <div class="gallery_grid1 hover08">
                        <div class="gallery_effect" data-aos="fade-up">
                            <a href="HomeDesign/images/22.jpg" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="HomeDesign/images/22.jpg" alt=" " class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>-->
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