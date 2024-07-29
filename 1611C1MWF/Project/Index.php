<?php

session_start();


include("config.php");
if(isset($_POST["btn_signup"]))
{
	$un = $_POST["First_name"];
	$pass = $_POST["Password"];
	$email = $_POST["email"];
	$ph = $_POST["tel"];
	$gen = $_POST["Gender"];
	$Filename=$_FILES["xyz"]["name"];
	$temp_name=$_FILES["xyz"]["tmp_name"];
	$Location="HomeDesign/images/";
	$date = date("d/m/y");
	
	if(!empty($_FILES["xyz"]["name"]))
	{
		if(move_uploaded_file($temp_name,$Location.$Filename))
		{
			$insert = "insert into user_table (User_Name,Password,Email,Phone_no,Gender,Picture,Date) values('$un','$pass','$email','$ph','$gen','$Filename','$date')";
			$query = mysqli_query($connection,$insert);
			if($query)
			{
				echo '<script type="text/javascript"> alert("Your Registeration is Successfully") </script>';
			}
			
			else
			{
				echo '<script type="text/javascript"> alert("Your Registeration is Unsuccessfully") </script>';	
			}
		}
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

<?php

if(isset ($_POST["btn_login"]))
{
	$us_name = $_POST["Username"];
	$us_pass = $_POST["Pass"];
	
	$query = mysqli_query($connection,"Select * from user_table where User_Name ='".$us_name."'");
	$row = mysqli_fetch_array($query);
	
	if($row ["User_Name"] == $us_name && $row ["Password"] == $us_pass)
	{
		$_SESSION["id"] = $row["User_Id"];
		$_SESSION["un"] = $row["User_Name"];
		$_SESSION["img"] = $row["Picture"];
		$_SESSION["email"] = $row["Email"];
		$_SESSION["ph"] = $row["Phone_no"];
		$_SESSION["gender"] = $row["Gender"];

		header("Location:Home.php");
	}
	else
	{
		echo '<script type="text/javascript"> alert("Your Registeration is Unsuccessfully") </script>';	
	}
}

?>





<!-- main -->
<div class="main agileits-w3layouts">
	<h1 style="font-family:'Cormorant Unicase', serif;color:#FFF;font-size:45px;">Photo Share<img src=" HomeDesign/Images/Logo/logo.png" width="50px" height="50px"/></h1>
		<!--<h1>Smooth Sliding Forms</h1>-->
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form">
					<div class="form-item log-in"><!-- login form-->
						<div class="w3table agileinfo"> 
							<div class="w3table-cell register"> 
								<div class="w3table-tophead">
									<h2>Sign in</h2>
								</div>
								<form action="Index.php" method="post" enctype="multipart/form-data"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="Username" required> 
											<label>Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="Pass" required>
											<label>Password</label>
											<span></span>
										</div>
										<a href="#">forgot password?</a>										
										<input type="submit" value="Sign in" name="btn_login"> 
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
					<div class="form-item sign-up"><!-- sign-up form-->
						<div class="w3table w3-agileits">
							<div class="w3table-cell register">   
									<h3>Sign up</h3>
								<form action="#" method="post" enctype="multipart/form-data">
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="First_name" required> 
											<label>User Name</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="Password" required>
											<label>Password</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="email" name="email" required>
											<label>Email</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="tel" name="tel" required>
											<label>Phone No</label>
											<span></span>
										</div>
                                        <div class="styled-input">
                                           <span>Gender</span>
                                        
											<input type="radio" name="Gender" value="Male" required> Male
                                            <input type="radio" name="Gender" value="Female" required> Female
										</div>
                                        <div class="styled-input">
                                          <span>Picture</span>
                                        <input type="file" name="xyz" required="required"/>
                                        </div>
										<div class="clear"> </div>
									</div>
									<input type="submit" value="Sign up" name="btn_signup">
								</form>

							</div>
						</div>
					</div>
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Have an account? </p>
								<div class="btn"> Sign in </div>
							</div>
						</div>
					</div>
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Dont have an account?</p>
								<div class="btn">Sign up</div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
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