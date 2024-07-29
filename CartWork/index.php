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
<div class="jumbotron">
<h1 class="text-center">Shopping Cart</h1>
</div>
<div class="container">
<div class="row">
<?php

$query = mysqli_query($connect,"select * from tbl_product ");
$count = mysqli_num_rows($query);
if($count > 0 )
{
while($row = mysqli_fetch_array($query))
{

?>

<div class="col-md-4">
<form action="addcart.php?id=<?php echo $row["id"]?>" method="post">
        <div class="card">
  <img class="card-img-top img-thumbnail"  src="<?php echo "images/".$row["image"]?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row["name"]?></h4>
    <p class="card-text"><?php echo $row["price"]?></p>
    <input type="number" value="0" min="1" max="10" class="form-control" name="p_quantity"/><br />
    <input type="hidden" name="p_name" value="<?php echo $row["name"]?>"/>
    <input type="hidden" name="p_price" value="<?php echo $row["price"]?>"/>
    <input type="hidden" name="p_image" value="<?php echo $row["image"]?>"/>
    <input type="submit" name="addcart" class="btn btn-primary" value="Add to cart"/>
  </div>
</div>
</form>
</div>

<?php

}	
}

?>



</div>
  </div>
</body>
</html>