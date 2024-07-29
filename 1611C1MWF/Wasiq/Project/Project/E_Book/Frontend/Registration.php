<?php
include("Layout.php");
include("Config.php");



if(isset($_POST["btn"]))
{
$un = $_POST["name"];
$em = $_POST["email"];
$pwd = $_POST["pass"];
$cpwd = $_POST["cpass"];

	$insert = "insert into customer_signup (Name,Email,Password,Conform_Password) values('".$un."','".$em."','".$pwd."','".$cpwd."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			echo "<script>window.location.assign('Login.php');</script>";
            header("Location:Login.php");
		}
		else
		{
			$result = "Registration Unsuccessfully";
		}
}


?>
<!-- sign up Modal -->
<div class="container">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register Now</h5>
                </div>
                <div class="modal-body pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 mx-auto align-self-center">
                            <img src="Style/images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="Registration.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name1" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" name="name" id="recipient-name1" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="email" class="form-control"  name="email" id="recipient-email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" name="pass" id="password1" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="cpass" id="password2" required>
                                </div>
                                <div class="sub-w3l">
                                    <div class="sub-agile">
                                        <input type="checkbox" id="brand2" value="">
                                        <label for="brand2" class="mb-3">
                                            <span></span>I Accept to the Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" name="btn" value="Register">
                                </div>
                            </form>
                            <p style="color:#090"><?php if(isset($_POST["btn"])) echo $result?></p>
                            <p class="text-center mt-3">Already a member?
                                <a href="Login.php">
                                    Login Now</a>
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <br>
<?php
include("Footer.php")
?>