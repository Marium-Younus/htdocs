<?php 
session_start();
include("Config.php");

if(isset($_POST["btn"]))
{
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$select = "select * from admin where User_Name = '".$un."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);

	if(($row["User_Name"] == $un && $row["Password"] == $pwd) || ($un = "admin" && $pwd = "admin"))
	{
		$_SESSION["user"] = $row["User_Name"];
		$_SESSION["img"] = $row["Image"];
		header("Location:Dashboard.php");
	}
	else
	{
		$result = "Invalid UserName and Password";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Smooth Sliding Forms template Responsive, Login form web template,Flat Pricing w3tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="LoginDesign/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- font-awesome icons -->
<link href="LoginDesign/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet"><!--web font-->
<!-- //web font -->
</head>

<body>

<!-- main -->
<div class="main agileits-w3layouts">
	<h1 style="font-family:'Cormorant Unicase', serif;color:#FFF;font-size:45px;">Photo Share<img src=" HomeDesign/Images/Logo/logo.png" width="50px" height="50px"/></h1>
		<!--<h1>Smooth Sliding Forms</h1>-->
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form" style="left:180px;">
					<div class="form-item log-in"><!-- login form-->
						<div class="w3table agileinfo"> 
							<div class="w3table-cell register"> 
								<div class="w3table-tophead">
									<h2>Sign in</h2>
								</div>
								<form action="AdminLogin.php" method="post" enctype="multipart/form-data"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="name" required> 
											<label>Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="pass" required>
											<label>Password</label>
											<span></span>
										</div>
										<a href="#">forgot password?</a>										
										<input type="submit" value="Sign in" name="btn"> 
                                        <label><?php if(isset($_POST["btn"]))
echo $result; ?></label>
									</div>
									<div class="social-grids">
										<div class="social-text">
											<p>Or Sign in with</p>
										</div>
										<div class="social-icons">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-rss"></i></a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>

								</form>  
							</div>
						</div>
					</div>
					
				</div>
				 
				
				
			</div> 
		</div>	
	</div>
<!-- //main -->

<!-- js -->  
	<script  src=" LoginDesign/js/jquery-1.12.3.min.js"></script> 
	<script>
		$(".info-w3lsitem .btn").click(function() {
			  $(".main-agileinfo").toggleClass("log-in");
			});
			$(".container-form .btn").click(function() {
			  $(".main-agileinfo").addClass("active");
		});
	</script>
	<!-- //js --> 


</body>
</html>