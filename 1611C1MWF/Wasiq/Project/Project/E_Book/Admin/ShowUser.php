<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

//Delete Work
if(isset($_GET["d_id"]))
{
	$did = $_GET["d_id"];
	$delete = "delete from admin where Id = '".$did."'";
	$query = mysqli_query($connection,$delete);
}
						   

?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Registered List:</h4>
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>User_Name</th> 
                                    <th>Password</th> 
                                    <th>Conform_Password</th>
                                    <th>Image</th> 
                                    <th>Gender</th> 
                                    <th>Role</th>
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from userview";
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
                                    <td><?php echo $row["User_Name"]?></td> 
                                    <td><?php echo $row["Password"]?></td>
                                    <td><?php echo $row["Conform_Password"]?></td> 
                                    <td><img src="Style/images/<?php echo $row["Image"]?>" width="50" height="50"></td> 
                                    <td><?php echo $row["Gender"]?></td>
                                    <td><?php echo $row["Role"]?></td>
                                    <td>
                                    	<a href="SignUp.php?e_id=<?php echo $row["Id"]?>" class="btn btn-primary btn-sm"><i class="fa fa-Plus"></i></a>
                                        <a href="ShowUser.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
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

