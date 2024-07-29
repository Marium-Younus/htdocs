<?php
include("Layout.php");
?>

<div class="ibanner_w3 pt-sm-5 pt-3">
	</div>
<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="Index.php">Home</a>
			</li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET["category"] ?></li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							Categories</h3>
						<ul>
                        <?php
									include("Config.php");
										$select = "select * from category";
										$query = mysqli_query($connection,$select);
										$count = mysqli_num_rows($query);
										if($count > 0)
										{
											while($row = mysqli_fetch_array($query))
											{
									?>
							<li>
								<a href="Books.php?category=<?php echo $row["Category_Name"] ?>"><?php echo $row["Category_Name"] ?></a>
							</li>
                       <?php 
							}
							} 
						?>
						</ul>
					</div>
					
				</div>
				<!-- //grid left -->
				<!-- grid right -->
				<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
                     <?php
					$cat = $_GET["category"];
					$select = "select * from category";
					$query = mysqli_query($connection,$select);
					 
			        include("Config.php");
					$select = "select * from bookview where Category_Name='".$cat."'";
					$query = mysqli_query($connection,$select);
					$count = mysqli_num_rows($query);
					if($count > 0)
					{
						while($row = mysqli_fetch_array($query))
					{
				?>
                    
						<div class="col-lg-3 col-sm-6 p-0">
							<div class="card product-men p-3">
								<div class="men-thumb-item">
									<img src="../Admin/Style/images/<?php echo $row['Image'] ?>" style="width:100%;height:250px" class="img-responsiv">
                                    <div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="Singlebook.php?booktitle=<?php echo $row['Book_Title'] ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize"><?php echo $row['Book_Title'] ?></h5>
                                    <h5 class="card-title text-capitalize text-success"><?php echo $row['Status'] ?></h5>

								</div>
							</div>
						</div>
                        
                         <?php 
			 }
			} 
	   ?>
					</div>
				</div>
			</div>
		</div>
    </div>
<?php
include("Footer.php");
?>