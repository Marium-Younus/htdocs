<div class="main-content">
<?php 
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
	$category = $_POST["cata"];

//===================================Update Work step 2
	if(!empty($_POST["hid"]))
	{
		$ehid = $_POST["hid"];
		$update = "update category set Category_Name = '".$category."' where Id = '".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Category Update Successfully";
		}
		else
		{
			$result = "Category Update Unsuccessfully";
		}
	}

//============================Insert Work	
	if(empty($_POST["hid"]))
	{
		$insert = "insert into category (Category_Name) values('".$category."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Category Insert Successfully";
		}
		else
		{
			$result = "Category Insert Unsuccessfully";
		}
	}
	
}
//======================Update work step 1
	if(isset($_GET["e_id"]))
	{
		$bt = "Update";
		$color = "btn btn-primary";
			
		$eid = $_GET["e_id"];
		$select = "select * from category where Id = '".$eid."'";
		$query = mysqli_query($connection,$select);
		$row = mysqli_fetch_array($query);
		$cat = $row["Category_Name"];
	}
	if(!isset($_GET["e_id"]))
	{
		$bt = "Insert";
		$color = "btn btn-Success disabled";
	}
?>

<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
			<h2 class="title1">Categories</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Add Category:</h4>
						</div>
							
							<div class="form-body">
								<form data-toggle="validator" action="Category.php" method="post">
									<div class="form-group">
                                    <label for="exampleInputEmail1">Enter Category</label>
										<input type="text" class="form-control" value="<?php echo @$cat ?> " name="cata" id="inputName" placeholder="Category" required>
									</div>
                                    
									<div class="form-group">
										<button type="submit" class="<?php echo @$color?>" name="btn" value=""><?php echo @$bt?></button>
									</div>
                                    <div class="form-group">
										<input type="hidden" name="hid" value="<?php echo @$eid;?>">
									</div>
                                    
								</form>
							</div>
						</div>
				</div>
		</div>
	</div>
</div>
</div>

<div class="footer">
		   <p style="color:#090"><?php if(isset($_POST["btn"])) echo $result?></p>
</div>
       
<script src="Style/js/validator.min.js"></script>