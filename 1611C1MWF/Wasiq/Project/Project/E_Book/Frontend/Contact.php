<?php
include("Layout.php");
include("Config.php");



if(isset($_POST["btn"]))
{
$un = $_POST["name"];
$em = $_POST["email"];
$m = $_POST["msg"];

	$insert = "insert into contact_us (Name,Email,Message) values('".$un."','".$em."','".$m."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Your Message sent Successfully";
		}
		else
		{
			$result = "Your Message sent Unsuccessfully";
		}
}


?>

 <div class="ibanner_w3 pt-sm-5 pt-3">
	</div>
	
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="Index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>C</span>ontact us</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-6 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                     <p style="color:#090"><?php if(isset($_POST["btn"])) echo $result?></p>
                        <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                        <form action="Contact.php" method="post" class="f-color">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" id="contactusername" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" id="contactemail" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" id="contactcomment" name="msg" required></textarea>
                            </div>
                            <button type="submit" name="btn" class="btn btn-info btn-block">Submit</button>
                        </form>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                <div class="col-lg-6 contact-bottom pl-5 mt-lg-0 mt-5">
                    <!-- contact details grid1-->
                    <div class="address">
                        <h5 class="pb-3 text-capitalize">Address</h5>
                        <address>
                            <p class="c-txt">90 Street, City, State 34789.</p>
                            <p class="c-txt">76 Street, City, State 34789.</p>
                        </address>
                    </div>
                    <!-- contact details grid2-->
                    <div class="address my-5">
                        <h5 class="pb-3 text-capitalize">phone</h5>
                        <p>
                            +10 234 5678</p>
                        <p>
                            +11 222 333</p>
                        <p>
                            +12 222 333</p>
                    </div>
                    <!-- contact details grid3 -->
                    <div class="address mt-md-0 mt-3">
                        <h5 class="pb-3 text-capitalize">Email</h5>
                        <p>
                            <a href="mailto:info@example.com">mail@communal.com</a>
                        </p>
                        <p>
                            <a href="mailto:info@example.com">mail@communalinfo.com</a>
                        </p>
                    </div>
                    <!-- //contact details row ends here -->
                </div>
            </div>
            <!-- //contact details container -->
        </div>
        <!-- contact map grid -->
        <div class="map contact-right pb-5">
            <div class="pt-lg-5 bg-pricemain text-center">
                <h3 class="stat-title text-capitalize pb-5">get directions</h3>
                <span class="w3-line"></span>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
                allowfullscreen></iframe>
        </div>
        <!--//contact map grid ends here-->
    </section>
<?php
include("Footer.php");
?>