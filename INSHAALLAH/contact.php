<?php 
include("include/header.php");
include("include/config.php");
?>


    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->
     <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, maki years old.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>60-49 Road 11378 Karachi</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Phone:</span>
                                <p>+92 123-45678912</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>mariumyounus10@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
					if(isset($_POST["btnmsg"]))
					{
						$name = $_POST["name"];
						$email =$_POST["email"];
						$message =$_POST["msg"];
						$query = mysqli_query($connection,"insert into contact_tbl (con_name,con_email,con_message) values ('".$name."','".$email."','".$message."')");	
						if($query)
						{
							echo "<script>alert('Our staff will call back later and answer your questions.')</script>";
						}
						else
						{
						
							echo "<script>alert('".mysqli_error($connection)."')</script>";
						}
					}
				?>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <p>Our staff will call back later and answer your questions.</p>
                            <form  class="comment-form" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your email" name="email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Your message" name="msg"></textarea>
                                        <input type="submit" class="site-btn" name="btnmsg" value="Send message"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
<?php include("include/footer.php")?>