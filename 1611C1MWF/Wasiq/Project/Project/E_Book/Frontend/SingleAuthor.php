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
            <li class="breadcrumb-item active" aria-current="page">Author</li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET["aid"] ?></li>

        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- Single -->
    <div class="innerf-pages section py-5">
        <div class="container">
            <div class="row my-sm-5">
             <?php
					$id = $_GET["aid"];
			        include("Config.php");
					$select = "select * from authors where Authore_Name='".$id."'";
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
               
                    <h2><?php echo $row['Authore_Name'] ?></h2>
                    <div class="desc_single">
                        <h5>History</h5>
                        <p><?php echo $row['Authore_History'] ?></p>
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="occasional">
                            <ul class="single_specific">
                             	<li>
                                    <span>Date of Birh :</span> <?php echo $row['Date_Of_Birth'] ?></li>
                                <li>
                                    <span>Gender: </span> <?php echo $row['Gender'] ?></li>
                            </ul>

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