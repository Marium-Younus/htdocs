<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from order_detail where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   

?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Order detail:</h4>
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Orderid</th> 
                                    <th>Bookid</th>
                                    <th>Quantity</th> 
                                    <th>Date</th> 
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from order_detail";
						   $query = mysqli_query($connection,$select);
						   $count = mysqli_num_rows($query);
						   if($count > 0)
						   {
							   while($row = mysqli_fetch_array($query))
							   {
						   ?>
                           <tbody> 
                        		<tr> 
                        			<th scope="row"><?php echo $row["Id"]?></th> 
                                    <td><?php echo $row["Orderid"]?></td> 
                                    <td><?php echo $row["Bookid"]?></td>
                                    <td><?php echo $row["Quantity"]?></td> 
                                    <td><?php echo $row["Date"]?></td>
                                    <td>
                                        <a href="Show_Order_Tetail.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
                                    </td>
                                     
                        	    </tr> 
                           </tbody> 
                           <?php 
						   }
						   } 
						   ?>
                        </table>
					</div>
			</div>
		</div>
	</div>


</div>

