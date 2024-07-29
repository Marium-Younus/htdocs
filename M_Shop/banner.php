	<!-- Hero section -->
	<section class="hero-section">
     

		<div class="hero-slider owl-carousel">    <?php
	 include("config.php");
												    $select = "select * from bannertable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>   
			<div class="hs-item set-bg" data-setbg="admin/assets/images/category/banner/<?php echo $row["Banner_Image"]?>">
				<div class="container">
                
                
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span><?php echo $row["Banner_Collect"]?></span>
							<h2><?php echo $row["Banner_Name"]?></h2>
							<p><?php echo $row["Banner_Desc"]?></p>
							<!--<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>-->
						</div>
					</div>
					<!--<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>-->
				</div>
			</div>
 
			<?php
													   }}
			
			?>
		</div>
	
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div
	><!-- Hero section end -->
  
</section>


	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->