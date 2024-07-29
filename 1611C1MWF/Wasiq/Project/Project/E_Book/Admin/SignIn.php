<?php 
session_start();
include("Config.php");

if(isset($_POST["btn"]))
{
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$select = "select * from userview where User_Name = '".$un."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	if($row["User_Name"] == $un && $row["Password"] == $pwd && $row["Role"] == "Admin")
	{
		$_SESSION["user"] = $row["User_Name"];
		$_SESSION["img"] = $row["Image"];
		$_SESSION["pwd"] = $row["Password"];
		$_SESSION["gen"] = $row["Gender"];
		$_SESSION["ro"] = $row["Role"];
		header("Location:Dashboard.php");
	}
	else if($row["User_Name"] == $un && $row["Password"] == $pwd && $row["Role"] == "Employee")
	{
		$_SESSION["user"] = $row["User_Name"];
		$_SESSION["img"] = $row["Image"];
		$_SESSION["pwd"] = $row["Password"];
		$_SESSION["gen"] = $row["Gender"];
		$_SESSION["ro"] = $row["Role"];
		header("Location:Dashboard.php");
	}
	else
	{
		$result = "Invalid UserName and Password";
	}
}

?>





<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Admin Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Music Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="Style/signIn/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="Style/signIn/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		<span>A</span>dmin
		<span>L</span>ogIn
		<span>P</span>anel</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="SignIn.php" method="post">
			<div class="form-style-agile">
				<label>
					Username
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Username" name="name" type="text" required>
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="********" name="pass" type="password" required>
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">
							<input type="checkbox" class="checkbox" required>
							<span>Remember me</span>
						</label>
					</li>
					<li>
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In" name="btn">
			<!-- social icons -->
			<div class="footer-social">
				<h2><?php if(isset($_POST["btn"]))
				{ echo $result;}?></h2>
			</div>
			<!-- //social icons -->
		</form>
	</div>
	<!-- //content -->

	<!-- copyright -->
	<div class="footer">
		<p>&copy; 2018 All rights reserved
		</p>
	</div>
	<!-- //copyright -->

</body>

</html>