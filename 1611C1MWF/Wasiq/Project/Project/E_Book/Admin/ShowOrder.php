<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from ordertable where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   

?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Order List:</h4>
                        <div style="overflow-x:auto;">
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Full_Name</th> 
                                    <th>Phone_No</th> 
                                    <th>Address</th>
                                    <th>Address_Type</th> 
                                    <th>Town_City</th> 
                                    <th>Total_Amount</th>
                                    <th>Customer_Name</th>
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from orderview";
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
                                    <td><?php echo $row["Full_Name"]?></td> 
                                    <td><?php echo $row["Phone_No"]?></td>
                                    <td><?php echo $row["Address"]?></td> 
                                    <td><?php echo $row["Address_Type"]?></td>
                                    <td><?php echo $row["Town_City"]?></td> 
                                    <td><?php echo $row["Total_Amount"]?></td> 
                                    <td><?php echo $row["Name"]?></td>
                                    <td>
                                        <a href="ShowOrder.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
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


</div>

