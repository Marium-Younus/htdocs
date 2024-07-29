<?php
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
$un = $_POST["name"];
$pn = $_POST["pno"];
$add = $_POST["address"];
$at = $_POST["type"];
$tc = $_POST["city"];
$ta = $_POST["am"];
$id = $_POST["cid"];

	$insert = "insert into ordertable (Full_Name,Phone_No,Address,Address_Type,Town_City,Total_Amount,Customer_Id) values('".$un."','".$pn."','".$add."','".$at."','".$tc."','".$ta."','".$id."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{//order detail work;
$select = "select * from ordertable where Customer_Id = '".$id ."'";
		$query = mysqli_query($connection,$select);
		$row = mysqli_fetch_array($query);
		$oid = $row["Id"];
$cart = $_SESSION["cart"];
		foreach($cart as $c)
		{
			$bid = $c['id'];
			$bq = $c['qty'];
			$od = date("Y/m/d",time());
			$insert = "insert into order_detail (Orderid,Bookid,Quantity,Date) values('".$oid."','".$bid."','".$bq."','".$od."')";
			$query = mysqli_query($connection,$insert);

		}}
			echo "<script>window.location.assign('Payment.php');</script>";
            header("Location:Payment.php");
		}
		else
		{
			$result = mysqli_error($connection);
		}



?>
 <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="Index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
<div class="container">
<div class="row checkout-left mt-5">
                   <div class="col-md-2 address_form"></div>
                    <div class="col-md-8 address_form">
                        <h4>Billing Address</h4>
                        <form action="Checkout.php" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                            <div class="creditly-wrapper wrapper">
                                <div class="information-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Full name: </label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                        </div>
                                        <div class="card_number_grids">
                                            <div class="card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Mobile number:</label>
                                                    <input class="form-control" type="text" placeholder="Mobile number" name="pno">
                                                </div>
                                            </div>
                                            <div class="card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">Address: </label>
                                                    <input class="form-control" type="text" placeholder="Address" name="address">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Town/City: </label>
                                            <input class="form-control" type="text" placeholder="Town/City" name="city">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Address type: </label>
                                            <select class="form-control option-fieldf" name="type">
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Commercial</option>

                                            </select>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Total Amount: </label>
                                            <input class="billing-address-name form-control" type="text" value="<?php echo @$_SESSION["amount"] ?>" disabled>
                                            <input class="billing-address-name form-control" type="hidden" value="<?php echo @$_SESSION["amount"] ?>" name="am" >

                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo $_SESSION["id"] ?>" name="cid">
                                    <button class="submit check_out" name="btn">place order</button>
                                    <p style="color:#090"><?php if(isset($_POST["btn"])) echo $result?></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 address_form"></div>
                </div>
                <div class="row checkout-left mt-5">
                    <div class="col-md-12 checkout-left-basket">
                        <a href="Index.php"><h4>Continue to basket</h4></a>
                    </div>
                </div>
</div>
<br>
<br>



<?php

include("Footer.php");
?>