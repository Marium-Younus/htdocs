<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from category where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   
?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Category List:</h4>
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Category_Name</th> 
                                    <th>Action</th>
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from category";
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
                                    <td><?php echo $row["Category_Name"]?></td> 
                                    <td>
                                    	<a href="Category.php?e_id=<?php echo $row["Id"]?>" class="btn btn-primary btn-sm"><i class="fa fa-Plus"></i></a>
                                        <a href="ShowCategory.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
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

