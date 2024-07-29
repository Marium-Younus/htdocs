<?php 
include("header.php");
include("banner.php");
include("config.php");
?>
	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
             <?php
			       $select = "select * from producttable";
				   $query = mysqli_query($connection,$select);
				   $count = mysqli_num_rows($query);
				   if($count > 0)
				   {
					while($row = mysqli_fetch_array($query))
				   {	
			?>
				<div class="product-item">
					<div class="pi-pic">
						<img src="admin/assets/images/category/<?php echo $row["Pro_Image"]?>" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6><?php echo $row["Pro_Price"]?></h6>
						<p><?php echo $row["Pro_Name"]?> </p>
					</div>
				</div>
				   <?php
					}
					}
				?>
				
				
				
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
              <?php
					$select = "select * from categorytable";
					$query = mysqli_query($connection,$select);
					$count = mysqli_num_rows($query);
					if($count > 0)
					{
					while($row = mysqli_fetch_array($query))
					{
			 ?>  
								<li><a href="#"><?php echo $row["Cat_Name"]?></a></li>
              <?php
					}
					}
				?>
				
			</ul>
			<div class="row">
             <?php
			       $select = "select * from producttable";
				   $query = mysqli_query($connection,$select);
				   $count = mysqli_num_rows($query);
				   if($count > 0)
				   {
					while($row = mysqli_fetch_array($query))
				   {	
			?>
            
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="admin/assets/images/category/<?php echo $row["Pro_Image"]?>" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>PKR <?php echo $row["Pro_Price"]?></h6>
							<p><?php echo $row["Pro_Name"]?> </p>
						</div>
					</div>
				</div>
				
				 <?php
					}
					}
				?>
				
				
				
				
				
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


<?php include("footer.php")?>