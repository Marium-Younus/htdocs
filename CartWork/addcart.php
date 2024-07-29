<?php 
session_start();
$connect = mysqli_connect("localhost","root","","cart_db");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body>
<?php
if(isset($_POST["addcart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_GET["id"],$item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array  = array(
							'item_id'=>$_GET['id'] ,
							'item_name'=>$_POST['p_name'] ,
							'item_price'=>$_POST['p_price'] ,
							'item_qty'=>$_POST['p_quantity'],
							'item_image'=>$_POST['p_image']
			);
			$_SESSION["shopping_cart"][$count]	= $item_array;	
			echo "<script>alert('".implode($_SESSION["shopping_cart"][$count])."')</script>";			
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array  = array(
							'item_id'=>$_GET['id'] ,
							'item_name'=>$_POST['p_name'] ,
							'item_price'=>$_POST['p_price'] ,
							'item_qty'=>$_POST['p_quantity'],
							'item_image'=>$_POST['p_image']);
			$_SESSION["shopping_cart"][0]	= $item_array;		
			echo "<script>alert('".implode($_SESSION["shopping_cart"][0])."')</script>";				
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
					unset($_SESSION["shopping_cart"][$keys ]);
					echo '<script>alert("Item Removed")</script>';
					echo '<script>window.location="addcart.php"</script>';
			}
		
		}
	}
}

?>
<div class="jumbotron">
<h1 class="text-center">View Cart</h1>
</div>
<div class="container">
<div class="row">
		<table class="table table-bordered table-hover">
        <thead>
        		<tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Image</th>
                <th>Action</th>
                </tr>
        </thead>
        <tbody>
        <?php
			if(!empty($_SESSION["shopping_cart"]))
			{
				$total  = 0;
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					
			
		?>
        <tr>
        	<td><?php echo $values["item_name"]?></td>
        	<td><?php echo $values["item_qty"]?></td>
            <td>PKR  <?php echo $values["item_price"]?></td>
            <td><?php echo number_format($values["item_qty"] * $values["item_price"]) ?></td>
            <td><img src="images/<?php echo $values["item_image"] ?>" class="img-thumbnail" width="100px"/></td>
            <td><a href="addcart.php?action=delete&id=<?php echo $values["item_id"]?>"><span class="text-danger">Remove</span></a></td>
        </tr>
         <?php
		 		$total = $total+ ($values["item_qty"] * $values["item_price"]);
				$tax=$total*12/100;
        	}
			?>
            <tr>
            	<td colspan="5" align="right">SubTotal	<br /> Tax 12% <br /> <b>Order Total</td>
                <td align="right">PKR <?php echo  number_format($total,2);?><br />
                				  PKR <?php echo $tax ; ?><br />
                                  <b>PKR <?php echo  number_format($total+$tax,2);?></b>
                         </td>
               
            </tr>
            
            <?php 
			
			
		}
		?>
        <tr>
        	<td colspan="6" align="right"><a href="index.php" class="btn btn-dark">Continue Shopping</a></td>
        
        </tr>
        </tbody>
        
        
        </table>



</div></div>


</body>
</html>