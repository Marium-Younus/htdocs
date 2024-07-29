<?php 
include("include/header.php");
include("include/config.php");
?>

    

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                         <?php
							$query = mysqli_query($connection,"select * from category_tbl");
							$count = mysqli_num_rows($query);
							if( $count > 0 )
							{
								while($row = mysqli_fetch_array($query))
								{
							?>
                            		<li><a href="shop.php?id=<?php echo $row["cat_id"]?>"><?php echo str_replace("'s", '', $row["cat_name"]) ?></a></li>
                         
                              <?php
								}
							}
								?>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                         <?php
							$query = mysqli_query($connection,"select * from brand_tbl");
							$count = mysqli_num_rows($query);
							if( $count > 0 )
							{
								while($row = mysqli_fetch_array($query))
								{
							?>
                            <div class="bc-item">
                                <label>
                                    <?php echo $row["brand_name"]?>
                                    <input type="checkbox" id="bc-calvin">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <?php
								}
							}
								?>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    
                    <div class="product-list">
                        <div class="row">
                         <?php
						 if(isset($_GET["id"]))
							{
								$select = "select * from product_tbl where cat_id_fk = '".$_GET["id"]."' ";
								$query = mysqli_query($connection,$select);
								$count = mysqli_num_rows($query);
							}
						 					else
											{
											$select = "select * from product_tbl";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
											}
						 if( $count > 0 )
						 {
						  while($row = mysqli_fetch_array($query))
								{
			  				?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo "img/product-single/".$row["image1"]?>" alt="">
                                       
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="product.php?id=<?php echo $row["pro_id"]?>">+ Quick View</a></li>
                                       
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                     
                                        <a href="#">
                                            <h5><?php echo $row["pro_name"]?></h5>
                                        </a>
                                        <div class="product-price">
                                            PKR <?php echo number_format($row["pro_price"], 2)?> 
                                        </div>
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
    </section>
    <!-- Product Shop Section End -->
<?php include("include/footer.php")?>