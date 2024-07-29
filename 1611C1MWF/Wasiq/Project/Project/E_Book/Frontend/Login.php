<?php
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$select = "select * from customer_signup where Name='".$un."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	if($row["Name"] == $un && $row["Password"] == $pwd)
	{
		$_SESSION["name"] = $row["Name"];
		$_SESSION["id"] = $row["Id"];
        echo "<script>window.location.assign('Checkout.php');</script>";
        header("Location:Checkout.php");	
	}
	else
	{
		$result = "Invalid UserName and Password";
	}
}
?>
<div class="container">
            
    
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>
                </div>

                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="Style/images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="Login.php" method="post">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder=" " name="name" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="pass" required>
                                </div>
                                <div class="right-w3l">
                                
                                    <input type="submit" class="form-control" name="btn" value="Login">
                                </div>
                            </form>
                            <p style="color:#F00><?php if(isset($_POST["btn"])) echo $result?></p>
                            <p class="text-center mt-3">
                                <a href="Registration.php">
                                    Register Now </a>
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