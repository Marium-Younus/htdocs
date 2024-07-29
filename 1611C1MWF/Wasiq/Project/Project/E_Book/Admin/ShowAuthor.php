<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from authors where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   

?>
	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Authors List:</h4>
                        <div style="overflow-x:auto;">
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Author_Name</th> 
                                    <th>Author_History</th> 
                                    <th>Date of Birth</th>
                                    <th>Image</th> 
                                    <th>Gender</th> 
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from authors";
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
                                    <td><?php echo $row["Authore_Name"]?></td> 
                                    <td><?php echo $row["Authore_History"]?></td>
                                    <td><?php echo $row["Date_Of_Birth"]?></td> 
                                    <td><img src="Style/images/<?php echo $row["Image"]?>" width="50" height="50"></td> 
                                    <td><?php echo $row["Gender"]?></td>
                                    <td>
                                    	<a href="Author.php?e_id=<?php echo $row["Id"]?>" class="btn btn-primary btn-sm"><i class="fa fa-Plus"></i></a>
                                        <a href="ShowAuthor.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
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

