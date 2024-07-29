<?php
include("Layout.php");
include("Config.php");
?>
<div class="ibanner_w3 pt-sm-5 pt-3">
	</div>
    <div class="row no-gutters pb-5">
    <?php
		include("Config.php");
		$select = "select * from authors";
		$query = mysqli_query($connection,$select);
		$count = mysqli_num_rows($query);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($query))
		{
	?>
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="../Admin/Style/images/<?php echo $row['Image']?>">
                <div class="overlay">
                    <h5><?php echo $row["Authore_Name"]?></h5>
                    <a class="info" href="SingleAuthor.php?aid=<?php echo $row["Authore_Name"]?>">Author History</a>
                </div>
            </div>
        </div>
       <?php 
			 }
			} 
	   ?>
    </div>
    
    <div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<div class="container">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>C</span>oming Soon</h5> 
				<div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
                     <?php
			        include("Config.php");
					$select = "select * from bookview where Status = 'Coming Soon'";
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
									<img src="../Admin/Style/images/<?php echo $row['Image'] ?>" style="width:100%;height:300px" class="card-img-top">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="Singlebook.php?booktitle=<?php echo $row['Book_Title'] ?>" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
								</div>
								<!-- card body -->
								<div class="card-body  py-3 px-2">
									<h5 class="card-title text-capitalize" style="word-wrap:normal"><?php echo $row['Book_Title'] ?></h5>
								</div>
								<!-- card footer -->
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
    </div>
    
    <div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<div class="container">
                <h5 class="head_agileinfo text-center text-capitalize pb-5">
            <span>e</span>Books</h5> 
				<div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
					<!-- card group  -->
					<div class="card-group">
                     <?php
			        include("Config.php");
					$select = "select * from bookview";
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
									<img src="../Admin/Style/images/<?php echo $row['Image'] ?>" style="width:100%;height:300px" class="card-img-top">
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
								<!-- card footer -->
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
    </div>
<?php
include("Footer.php");
?>