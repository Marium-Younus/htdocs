<div class="main-content">
<?php
include("Layout.php");
include("Config.php");
?>

	<div id="page-wrapper">
		<div class="main-page">
			<div class="tables">
            	<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>Customer List:</h4>
						<table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>Name</th> 
                                    <th>Email</th> 
                                    <th>Password</th> 
                                    <th>Conform_Password</th>
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from customer_signup";
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
                                    <td><?php echo $row["Name"]?></td> 
                                    <td><?php echo $row["Email"]?></td> 
                                    <td><?php echo $row["Password"]?></td>
                                    <td><?php echo $row["Conform_Password"]?></td> 
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

