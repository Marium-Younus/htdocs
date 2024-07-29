<?php
include("Layout.php")
?>

<div class="ibanner_w3 pt-sm-5 pt-3">
	</div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="Index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Single eBook</li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET["booktitle"] ?></li>

        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- Single -->
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">
             <?php
					$bt = $_GET["booktitle"];
			        include("Config.php");
					$select = "select * from bookview where Book_Title='".$bt."'";
					$query = mysqli_query($connection,$select);
					$count = mysqli_num_rows($query);
					if($count > 0)
					{
						while($row = mysqli_fetch_array($query))
					{
				?>
                <div class="col-lg-4 single-right-left">
                    <div class="grid images_3_of_2">
                        <div class="flexslider1">
                            <ul class="slides">
                                <li data-thumb="images/ms1.jpg">
                                    <div class="thumb-image">
                                        <img src="../Admin/Style/images/<?php echo $row['Image']?>" class="img-fluid"> </div>
                                </li>
                                
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
               
                    <h2><?php echo $row['Book_Title'] ?></h2>
                    <div class="caption">

                        <ul class="rating-single">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                        <h6>Rs. <?php echo $row['Book_Price'] ?></h6>
                    </div>
                    <div class="desc_single">
                        <h5>Description</h5>
                        <p><?php echo $row['Book_Description'] ?></p>
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="occasional">
                            <h5 class="sp_title mb-3">Book Detail</h5>
                            <ul class="single_specific">
                             	<li>
                                    <span>Category :</span> <?php echo $row['Category_Name'] ?></li>
                                <li>
                                    <span>Author: </span> <?php echo $row['Authore_Name'] ?></li>
                                <li>
                                    <span>Publisher :</span> <?php echo $row['Publisher_Name'] ?></li>
                                <li>
                                    <span>Publish Date :</span> <?php echo $row['Date_of_Publish'] ?></li>
                            </ul>

                        </div>
                        <div class="color-quality mt-sm-0 mt-4">
                            <h5 class="sp_title mb-3">services</h5>
                            <ul class="single_serv">
                                <li>
                                    <a href="#">30 Day Return Policy</a>
                                </li>
                                <li class="mt-2">
                                    <a href="#">Cash on Delivery available</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="occasion-cart">
                        <div class="chr single-item single_page_b">
                            <form action="Cart.php" method="get">
                            <?php 
								if($row["Status"] == "Free")
								{
							?>
                                <br><a href="../Admin/Style/images/<?php echo $row['Image']?>" download class="btn btn-success">
                                    <span class="fa fa-download" aria-hidden="true"> Download</span><a>                                <?php 
								}
								?>
                                
                                <?php 
								if($row["Status"] == "Buy")
								{
							?>
                                <ul class="single_specific">
                             	<li>
                                    <span>Quantity :</span><input type="number" class="form-control" min="1" name="qty" value="1"></li>
                                </ul><br>
                                <input type="hidden" name="bid" value="<?php echo $row['Id']?>">
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-cart-plus" aria-hidden="true"> Buy</i>
                                </button>
                                <?php 
								}
								?>
                                
                                <?php 
								if($row["Status"] == "Coming Soon")
								{
									echo "<h5 class='head_agileinfo text-center text-capitalize pb-5'>
            <span>C</span>oming <span>S</span>oon</h5>";
								}
								?>

                            </form>
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
    <!-- /new_arrivals -->
    


<?php
include("Footer.php")
?>