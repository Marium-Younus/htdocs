<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from books where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   

?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Book List:</h4>
                        <div style="overflow-x:auto;">
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Category_Name</th> 
                                    <th>Book_Title</th> 
                                    <th>Book_Description</th>
                                    <th>Date_of_Publish</th> 
                                    <th>Authore_Name</th> 
                                    <th>Publisher_Name</th>
                                    <th>Book_Price</th>
                                    <th>Image</th> 
                                    <th>Status</th>
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from bookview";
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
                                    <td><?php echo $row["Book_Title"]?></td>
                                    <td><?php echo $row["Book_Description"]?></td> 
                                    <td><?php echo $row["Date_of_Publish"]?></td> 
                                    <td><?php echo $row["Authore_Name"]?></td>
                                     <td><?php echo $row["Publisher_Name"]?></td> 
                                    <td><?php echo $row["Book_Price"]?></td>
                                    <td><img src="Style/images/<?php echo $row["Image"]?>" width="50" height="50"></td> 
                                    <td><?php echo $row["Status"]?></td>
                                    <td>
                                    	<a href="Book.php?e_id=<?php echo $row["Id"]?>" class="btn btn-primary btn-sm"><i class="fa fa-Plus"></i></a>
                                        <a href="ShowBook.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
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

