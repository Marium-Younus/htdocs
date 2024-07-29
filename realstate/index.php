<?php include("include/header.php")?>
<!-- Slider Start -->
<div id="slider" class="sl-slider-wrapper"><div class="sl-slider">
<!-- Slider 1 -->
<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2"><div class="sl-slide-inner"><div class="bg-img bg-img-1"></div>
<h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
<blockquote>
<p class="location"><span class="glyphicon glyphicon-map-marker"></span> Khammam, India</p>
<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
<cite>$ 20,000,000</cite>
</blockquote></div></div>
<!-- Slider 2 -->
<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5"><div class="sl-slide-inner"><div class="bg-img bg-img-2"></div>
<h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
<blockquote>
<p class="location"><span class="glyphicon glyphicon-map-marker"></span> Khammam, India</p>
<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
<cite>$ 20,000,000</cite>
</blockquote></div></div>
<!-- Slider 3 -->
<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner"><div class="bg-img bg-img-3"></div>
<h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
<blockquote>
<p class="location"><span class="glyphicon glyphicon-map-marker"></span> Khammam, India</p>
<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
<cite>$ 20,000,000</cite>
</blockquote></div></div>
<!-- Slider 4 -->
<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner"><div class="bg-img bg-img-4"></div>
<h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
<blockquote>
<p class="location"><span class="glyphicon glyphicon-map-marker"></span> Khammam, India</p>
<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
<cite>$ 20,000,000</cite>
</blockquote></div></div>
<!-- Slider 5 -->
<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner"><div class="bg-img bg-img-5"></div>
<h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
<blockquote>
<p class="location"><span class="glyphicon glyphicon-map-marker"></span> Khammam, India</p>
<p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
<cite>$ 20,000,000</cite>
</blockquote></div></div></div>
<!-- Slider End -->
<!-- /slider-wrapper -->
<nav id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span>
<span></span><span></span><span></span><span></span>
</nav></div>

<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
          <input name="search" type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select name="delivery_type" class="form-control">
                <option value="Rent">Rent</option>
                <option value="Sale">Sale</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
             <select name="search_price" class="form-control">
                <option>Price</option>
                <option value="1">$5000 - $50,000</option>
                <option value="2">$50,000 - $100,000</option>
                <option value="3">$100,000 - $200,000</option>
                <option value="4">$200,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
           <select name="property_type" class="form-control">
                <option>Property Type</option>
                <option value="Apartment">Apartment</option>
                <option value="Building">Building</option>
                <option value="Office-Space">Office-Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button name="submit" class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Find Now</button>
              </form>
              </div>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info" data-toggle="modal" data-target="#login">Login</button></div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
<!--==================== feature property carousel ==========================-->
<div class="row"><div class="col-md-12">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="viewall float-right">View All Listing</a>
    <h2 class="font-weight-bold">Featured Properties</h2>
    <div id="featured_properties" class="owl-carousel">
      <?php
	$featured_properties_query = "select * from properties";
    $featured_properties_result = mysqli_query($connect, $featured_properties_query);
    if(mysqli_num_rows($featured_properties_result) > 0){
		while($property_result = mysqli_fetch_assoc($featured_properties_result)){		  	
	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $property_result['property_img']; ?>" class="img-fluid" alt="properties">
          <?php if($property_result['availablility'] == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $property_result['property_id']; ?>"><?php echo $property_result['property_title'];?></a></h4>
        <p class="price">Price: $<?php echo $property_result['price']; ?></p>
        <p class="price">Delivery Type: <?php echo $property_result['delivery_type'] ?></p>
        <p class="price">Utilities: <?php echo $property_result['utility']; ?></p>
        <div class="listing-detail">
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $property_result['bed_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $property_result['liv_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $property_result['parking']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $property_result['kitchen']; ?></span>
</div>
<a class="btn btn-primary" href="property-detail.php?id=<?php echo $property_result['property_id']; ?>">View Details</a>
      </div>
      <?php }}else{ echo "<h3 class='text-danger'><b>No Property Found</b></h3>";} ?>
    </div>
  </div></div></div>
<!--==================== rent property carousel ==========================-->	
<div class="row"><div class="col-md-12">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="viewall float-right">View All Listing</a>
    <h2 class="font-weight-bold">Properties For Rent</h2>
    <div id="rent-properties" class="owl-carousel">
      <?php
	$rent_properties_query = "select * from properties where delivery_type = 'Rent'";
    $rent_properties_result = mysqli_query($connect, $rent_properties_query);
    if(mysqli_num_rows($rent_properties_result) > 0){
		while($rent_property_row = mysqli_fetch_assoc($rent_properties_result)){		  	
	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $rent_property_row['property_img']; ?>" class="img-fluid" alt="properties">
          <?php if($rent_property_row['availablility'] == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $rent_property_row['property_id']; ?>"><?php echo $rent_property_row['property_title'];?></a></h4>
        <p class="price">Price: $<?php echo $rent_property_row['price']; ?></p>
        <p class="price">Delivery Type: <?php echo $rent_property_row['delivery_type'] ?></p>
        <p class="price">Utilities: <?php echo $rent_property_row['utility']; ?></p>
        <div class="listing-detail">
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $rent_property_row['bed_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $rent_property_row['liv_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $rent_property_row['parking']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $rent_property_row['kitchen']; ?></span>
</div>
<a class="btn btn-primary" href="property-detail.php?id=<?php echo $rent_property_row['property_id']; ?>">View Details</a>
      </div>
      <?php }}else{ echo "<h4 class='text-danger font-weight-bold'>No Properties For Rent Found</h4>";} ?>
    </div>
  </div></div></div>
<!--==================== sell property carousel ==========================-->	
<div class="row"><div class="col-md-12">
  <div class="properties-listing spacer"> <a href="list-properties.php" class="viewall float-right">View All Listing</a>
    <h2 class="font-weight-bold">Properties For Sale</h2>
    <div id="sell-property" class="owl-carousel">
      <?php
	$sell_properties_query = "select * from properties where delivery_type = 'sale'";
    $sell_properties_result = mysqli_query($connect, $sell_properties_query);
    if(mysqli_num_rows($sell_properties_result) > 0){
		while($sell_property_row = mysqli_fetch_assoc($sell_properties_result)){		  	
	  ?>
      <div class="properties">
        <div class="image-holder"><img src="<?php echo $sell_property_row['property_img']; ?>" class="img-fluid" alt="properties">
          <?php if($sell_property_row['availablility'] == 0){ ?><div class="status sold">Available</div> <?php } else { ?>
          <div class="status new">Not Available</div>
          <?php } ?>
        </div>
        <h4><a href="property-detail.php?id=<?php echo $sell_property_row['property_id']; ?>"><?php echo $sell_property_row['property_title'];?></a></h4>
        <p class="price">Price: $<?php echo $sell_property_row['price']; ?></p>
        <p class="price">Delivery Type: <?php echo $sell_property_row['delivery_type'] ?></p>
        <p class="price">Utilities: <?php echo $sell_property_row['utility']; ?></p>
        <div class="listing-detail">
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?php echo $sell_property_row['bed_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?php echo $sell_property_row['liv_room']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?php echo $sell_property_row['parking']; ?></span>
<span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?php echo $sell_property_row['kitchen']; ?></span>
</div>
<a class="btn btn-primary" href="property-detail.php?id=<?php echo $sell_property_row['property_id']; ?>">View Details</a>
      </div>
      <?php }}else{ echo "<h4 class='text-danger font-weight-bold'>No Properties For Sell Found</h4>";} ?>
    </div>
  </div></div></div>
	
  <div class="spacer">
    <div class="row">
      <div class="col-lg-12 col-sm-12 recent-view">
        <h3>About Us</h3>
        <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>
         <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>
          <p>At SLNP Real Estate, you are number one. Whether you are a property owner, tenant, or buyer, we value your business and will provide you with the individual attention and service you deserve. We believe in a strict Code of Ethics. We believe in integrity, commitment to excellence, a professional attitude, and personalized care.<br><a href="about.html">Learn More</a></p>

      </div>

    </div>
  </div>
</div>


<?php include("include/footer.php")?>