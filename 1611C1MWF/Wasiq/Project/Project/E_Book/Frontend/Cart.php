<?php 
session_start();
$bookid = $_GET["bid"];
$quantity = $_GET["qty"];

if(isset($_SESSION["cart"][$bookid]))
{
	$_SESSION['cart'][$bookid]["qty"] += $quantity;
}
if(!isset($_SESSION["cart"][$bookid]))
{
	$_SESSION['cart'][$bookid] = array("id"=>$bookid,"qty"=>$quantity);
}
echo "<script>window.location.assign('Show_Cart.php');</script>";
header("Location:Show_Cart.php");


?>