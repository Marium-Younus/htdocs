<?php 
include("include/header.php");
include("include/config.php");
?>


<section class="hero-section">
        <div class="hero-items owl-carousel">
         <?php
			 $query = mysqli_query($connection,"select * from  carousel_tbl");
			 $count = mysqli_num_rows($query);
			 if( $count > 0 )
			 {
			  while($row = mysqli_fetch_array($query))
				{
			  ?>
            <div class="single-hero-items set-bg" data-setbg="<?php echo "img/".$row["car_image"]?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span><?php echo $row["car_cat"]?></span>
                            <h1><?php echo $row["car_title"]?></h1>
                            <p><?php echo $row["car_des"]?></p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span><?php echo $row["car_sale"]?></span></h2>
                    </div>
                </div>
            </div>
             <?php
					}
				}?>
        </div>
    </section>
 
    
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
             <?php
			 $query = mysqli_query($connection,"select * from banner_tbl");
			 $count = mysqli_num_rows($query);
			 if( $count > 0 )
			 {
			  while($row = mysqli_fetch_array($query))
				{
			  ?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?php echo "img/".$row["banner_image"]?>" alt="">
                        <div class="inner-text">
                            <h4><a href="shop.php?id=<?php echo $row["banner_id"]?>"><?php echo $row["banner_name"]?></a></h4>
                        </div>
                    </div>
                </div>
                <?php
					}
				}?>
				
                
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                         <?php
						 $query = mysqli_query($connection,"select * from subcatrgory_tbl ");
						 $count = mysqli_num_rows($query);
						 if( $count > 0 )
						 {
						  while($row = mysqli_fetch_array($query))
								{
			  				?>
                            <li><?php echo $row["subcat_name"]?></li>
                           
                             <?php
							}
						}?>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                     <?php
						 $query = mysqli_query($connection,"select * from product_tbl where cat_id_fk = 2 limit 4");
						 $count = mysqli_num_rows($query);
						 if( $count > 0 )
						 {
						  while($row = mysqli_fetch_array($query))
								{
			  				?>
                           
                           
                           
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo "img/product-single/".$row["image1"]?>" alt="">
                                <!--<div class="sale">Sale</div>-->
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.php?id=<?php echo $row["pro_id"]?>">+ Quick View</a></li>
                                    
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?php echo $row["subcat_id_fk"]?></div>
                                <a href="#">
                                    <h5><?php echo $row["pro_name"]?></h5>
                                </a>
                                <div class="product-price">
                                  PKR <?php echo number_format($row["pro_price"], 2)?>
                                    
                                </div>
                            </div>
                        </div>
                          <?php
								}
						}?>
                       <!-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Week</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                        consectetur adipisicing elit </p>
                    <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                         <?php
						 $query = mysqli_query($connection,"select * from subcatrgory_tbl");
						 $count = mysqli_num_rows($query);
						 if( $count > 0 )
						 {
						  while($row = mysqli_fetch_array($query))
								{
			  				?>
                            <li><?php echo $row["subcat_name"]?></li>
                           <?php
								}
						}
						   ?>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                     <?php
						 $query = mysqli_query($connection,"select * from product_tbl where cat_id_fk = 1 limit 4");
						 $count = mysqli_num_rows($query);
						 if( $count > 0 )
						 {
						  while($row = mysqli_fetch_array($query))
								{
			  				?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?php echo "img/product-single/".$row["image1"]?>" alt="">
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.php?id=<?php echo $row["pro_id"]?>">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name"><?php echo $row["subcat_id_fk"]?></div>
                                <a href="#">
                                    <h5><?php echo $row["pro_name"]?></h5>
                                </a>
                                <div class="product-price">
                                   PKR <?php echo number_format($row["pro_price"], 2)?>
                                </div>
                            </div>
                        </div>
                        <?php
						
						
								}
							}
						?>
                        
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

   
   
	<?php include("include/footer.php")?>