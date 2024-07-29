<?php 
session_start();
$remove = $_GET["rc"];
/*session_unset($_SESSION['cart'][$remove]);*/

foreach($_SESSION['cart'] as $key=>$value)
{
	if($value["id"] == $remove)
	{
		unset($_SESSION['cart'][$key]);
	}
}
echo "<script>window.location.assign('Show_Cart.php');</script>";
header("Location:Show_Cart.php");
 


?>