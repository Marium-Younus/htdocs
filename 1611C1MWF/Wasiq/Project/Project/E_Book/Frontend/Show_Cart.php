<?php
include("Layout.php");
?>
<div class="ibanner_w3 pt-sm-5 pt-3">
	</div>
 <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

     <!--checkout-->
    <section class="checkout_wthree py-sm-5 py-3">
        <div class="container">
            <div class="check_w3ls">
                <div class="d-sm-flex justify-content-between mb-4">
                    <h4>review your order
                    </h4>
                    <h4 class="mt-sm-0 mt-3">Your shopping cart contains:</h4>
                </div>
                <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SNo.</th>
                                <th>Image</th>
                                <th>Book_Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						if(isset($_SESSION['cart']))
						{
						$cart = $_SESSION['cart'];
						$sr = 1;
						foreach($cart as $c)
						{
						?>
                            <tr class="rem1">
                                <td class="invert"><?php echo $sr?></td>
                                
                                <?php
								$sr++; 
								include("Config.php");
								//$obj->getsinglepro{$c["id"]}
								$select ="select * from bookview where id = '".$c["id"]."'" ;
								$query = mysqli_query($connection,$select);
								
								foreach($query as $p)
								{
								?>
                                <td class="invert-image">
                                        <img src="../Admin/Style/images/<?php echo $p["Image"]?>" width="150" height="150" class="img-responsive">
                                </td>
                                <td class="invert"><?php echo $p["Book_Title"]?></td>
                                <td class="invert">Rs.<?php echo $p["Book_Price"]?></td>

                                <td class="invert"><?php echo $c["qty"]?></td>

                               <td class="invert">Rs.<?php echo $p["Book_Price"] * $c["qty"]?></td>              
                               <td class="invert">
                                    <div class="rem">
                                        <a href="RemoveCart.php?rc=<?php echo $c["id"]?>"><div class="close1"></div></a>
                                    </div>

                                </td>
                                <?php 
								}
								?>
                            </tr>

<?php 
}
}
?>                            
                        </tbody>
                    </table>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-4 checkout-left-basket">
                        <a href="Index.php"><h4>Continue to basket</h4></a>
                       <ul>
                        <?php 
						if(isset($_SESSION['cart']))
						{
						$cart = $_SESSION['cart'];
						$sr = 1;
						$ta = 0;
						foreach($cart as $c)
						{
						$select ="select * from bookview where id = '".$c["id"]."'" ;
						$query = mysqli_query($connection,$select);
						 foreach($query as $p)
						{
							$tp =  $p["Book_Price"] * $c["qty"];
							$ta +=$tp;
							$_SESSION["amount"] = $ta;
						?>
                            <li><?php echo $p["Book_Title"]?>
                                <i>-</i>
                                <span>Rs.<?php echo $p["Book_Price"]?></span>
                                <p>Quantity<i>-</i><span><?php echo $c["qty"] ?></span></p>

                            </li>
                            <?php }}} ?>
                            <li>Total
                                <i>-</i>
                                <span><?php echo $ta ?></span>
                            </li>
                        </ul>
                            
                    </div>
                    <div class="col-md-4">
                    </div>
                    
                    <div class="col-md-4">
                    
                    <?php 
					if(isset($_SESSION["name"]))
					{
					?>
                     <form action="Checkout.php">
                     <button class="submit check_out">Checkout<i class="fa fa-arrow-right"></i></button>
                     </form>
                     <?php 
					 
					 }
					 ?>
                      <?php 
					if(!isset($_SESSION["name"]))
					{
					?>
                     <form action="Login.php">
                     <button class="submit check_out">Checkout<i class="fa fa-arrow-right"></i></button>
                     </form>
                     <?php 
					 
					 }
					 ?>
                                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//checkout-->
<?php
include("Footer.php")
?>
