<head>

<link rel="stylesheet" href="css/style1.css" type="text/css">
</head>


<?php  include('header.php');
		include("config.php");

?>
<!-- Page info -->
	
<div class="page-top-info">
		<div class="container">
			<h4>CAtegory PAge</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->
    <section class="category-section spad">
		<div class="container-fluid">
			<div class="row">      
				<div class="col-lg-3">
                <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne" class="collapsed" aria-expanded="false">Categories</a>
                                       
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll" tabindex="1" style="overflow-y: hidden; outline: none;">
                                                <?php
												    $select = "select * from categorytable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>                                            
                                                    <li><a href="shop.php?cat_id=<?php echo $row["Cat_Id"]?>"><?php echo $row["Cat_Name"]?></a></li>
                                                   <?php
													   }
												   }
												   ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo" class="collapsed" aria-expanded="false">Branding</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                  <?php
												    $select = "select * from brandingtable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>                                            
                                                  
                                                    <li><a href="shop.php?brand_id=<?php echo $row["Brand_Id"]?>"><?php echo $row["Brand_Name"]?></a></li>
                                                    <?php
													   }
												   }
												   ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree" class="collapsed" aria-expanded="false">Filter Price</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">$0.00 - $50.00</a></li>
                                                    <li><a href="#">$50.00 - $100.00</a></li>
                                                    <li><a href="#">$100.00 - $150.00</a></li>
                                                    <li><a href="#">$150.00 - $200.00</a></li>
                                                    <li><a href="#">$200.00 - $250.00</a></li>
                                                    <li><a href="#">250.00+</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour" class="collapsed" aria-expanded="false">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                            <?php
												    $select = "select * from sizetable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>       
                                            <a href="shop.php?size_id=<?php echo $row["Size_Id"]?>">
                                            <label for="xs"><?php echo $row["Size_Name"]?> </label>
                                                 </a>
                                               
                                               <?php
													   }
												   }
												   ?>  
                                                
                                               <!-- <label for="sm">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="xxl">xxl
                                                    <input type="radio" id="xxl">
                                                </label>
                                                <label for="3xl">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl">4xl
                                                    <input type="radio" id="4xl">
                                                </label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFive" class="collapsed" aria-expanded="false">Colors</a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                            
                                            <?php
												    $select = "select * from colortable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>  
                                                <a href="shop.php?color_id=<?php echo $row["Color_Id"]?>"> 
                                                <label class="<?php echo $row["Color_Name"]?>">
                                                   
                                                </label>
                                                </a>
                                                <?php
													   }
												   }
												   ?>  
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix" class="collapsed" aria-expanded="false">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <div class="shop__sidebar__tags">
                                                <a href="#">Product</a>
                                                <a href="#">Bags</a>
                                                <a href="#">Shoes</a>
                                                <a href="#">Fashio</a>
                                                <a href="#">Clothing</a>
                                                <a href="#">Hats</a>
                                                <a href="#">Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Prducts Show-->
                <div class="col-lg-8">
                <section class="product-filter-section">
		<div class="container">
		
			<div class="row">
             <?php
			 
			 	if(isset($_GET["cat_id"]))
				{
						$select = "select * from producttable where Cat_Id_FK = '".$_GET["cat_id"]."' ";
						$query = mysqli_query($connection,$select);
						$count = mysqli_num_rows($query);
				}
				
			 
			else if(isset($_GET["brand_id"])  )		 
			 {
				 
				   $select = "select * from producttable where Brand_Id_FK	 = '".$_GET["brand_id"]."'";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
			}
			else if(isset($_GET["size_id"])  )		 
			 {
				 
				   $select = "select * from producttable where Size_Id_FK= '".$_GET["size_id"]."'";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
			}
			else if(isset($_GET["color_id"])  )		 
			 {
				 
				   $select = "select * from producttable where Color_Id_FK	= '".$_GET["color_id"]."'";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
			}
			else
			{
				$select = "select * from producttable";
												   $query = mysqli_query($connection,$select);
												   $count = mysqli_num_rows($query);
				
			}
			 
		
			 
												  
												   if($count > 0)
												   {
													   while($row = mysqli_fetch_array($query))
													   {
												?>   
            
            
            
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="admin/assets/images/category/<?php echo $row["Pro_Image"]?>" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6> PKR <?php echo $row["Pro_Price"]?></h6>
							<p><?php echo $row["Pro_Name"]?> </p>
						</div>
					</div>
				</div>
                <?php
				
													   }}
				?>
				<!--<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>-->
				
				
				
				
				
				
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
                
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                </div>
                </div>
                
                
                
                
					
	</section>
    <?php  include('footer.php')?>
