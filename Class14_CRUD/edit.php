<?php
include("header.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3 class="text-info">
            Update Employee
        </h3>
        <?php
			$connect = mysqli_connect("localhost","root","","company_db"); //1step
			$id= $_GET["id"];
			$q1= "select * from employeetbl ";
			$query= "select * from employeetbl where emp_id = $id";
			$execute = mysqli_query($connect,$query) or die("Query Unsuccessful");; //2step
			$execute1 = mysqli_query($connect,$q1) or die("Query Unsuccessful");; //2step
			if(mysqli_num_rows($execute))
			{
				while($row=mysqli_fetch_assoc($execute))
				{

		?>
            <form method="post">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="fullName" placeholder="Full Name" value="<?php echo $row["emp_name"]?>" > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row["emp_email"]?>"> 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row["emp_mobile"]?>" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <?php
					echo '<select class="form-control" name="city">';
					while($row1=mysqli_fetch_assoc($execute1))
					{
                    if($row["emp_city"]== $row1["emp_city"])
					{
						$select = "selected";
					}
					else
					{
						$select = "";
					}
					echo   "<option $select value='{$row1['emp_city']}'>{$row1['emp_city']}</option>";
                    ?>
                    
                
                  
                    
                    <?php
                    }
					echo '</select>';
					
					?>
                    </div>
                </div>
                <div class="form-group">
              <button type="submit" name="btn" class="btn btn-info"><i class="fa fa-database"></i> Submit</button>
                    <a class="btn btn-secondary" href="show.php"><i class="fa fa-list-alt"></i> View All</a>
                </div>
                
               
            </form>
            <?php
				}
			}
			?>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>