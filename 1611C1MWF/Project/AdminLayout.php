<?php 
session_start();
if(!isset($_SESSION["user"]))
{
	header("Location:AdminLogin.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panal</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php 

$date = date("d",time());
$month = date("M",time());
$year = date("Y",time());
$hour = date("h",time());
$min = date("i",time());
$ap = date("a",time());


?>


    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Dashboard.html">Photo Share</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :<?php echo $date."&nbsp".$month."&nbsp".$year."&nbsp".$hour."&nbsp".$min."&nbsp".$ap."&nbsp" ?>  &nbsp; <a href="Logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
				<img src="HomeDesign/images/<?php echo $_SESSION["img"]?>" width="150" height="150" class="user-image img-responsive">					</li>			
                    <li>
                        <a class="active-menu"  href="Dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="AdminSignup.php"><i class="fa fa-user fa-3x"></i> New SignUp</a>
                    </li>
                    <li>
                        <a  href="HomeBackend.php"><i class="fa fa-user fa-3x"></i> Home</a>
                    </li>
                    <li>
                        <a  href="GalleryBackend.php"><i class="fa fa-user fa-3x"></i>Gallery</a>
                    </li>
                     <li>
                        <a  href="Faq.php"><i class="fa fa-desktop fa-3x"></i> FAQ</a>
                    </li>
                    <li>
                        <a  href="Banner.php"><i class="fa fa-forward fa-3x"></i> Banner</a>
                    </li> 
                     <li>
                       <a href="#"><i class="fa fa-forward fa-3x"></i> ShowRecord</a>
                        <ul class="nav nav-second-level">
                            <li><a href="ShowAdminSignup.php">Admin Users</a></li>
                            <li><a href="Homeshow.php">Home Record</a></li>
                            <li><a href="Galleryshow.php">Gallery Record</a></li>
                            <li><a href="Usershow.php">User Record</a></li>
                            <li><a href="Faqshow.php">FAQ Record</a></li>
                        	<li><a href="Contactshow.php">ContactUs Record</a></li>
                            <li><a href="Bannershow.php">Banner Record</a></li>
                        </ul>
                    </li>             
                </ul>               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        
         <!-- /. PAGE WRAPPER  -->
        </div>
    
    
   
</body>
</html>
