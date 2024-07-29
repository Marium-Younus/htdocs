<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
	$publisher = $_POST["publi"];

//===================================Update Work step 2
	if(!empty($_POST["hid"]))
	{
		$ehid = $_POST["hid"];
		$update = "update publisher set Publisher_Name = '".$publisher."' where Id = '".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Publisher Update Successfully";
		}
		else
		{
			$result = "Publisher Update Unsuccessfully";
		}
	}

//============================Insert Work	
	if(empty($_POST["hid"]))
	{
		$insert = "insert into publisher (Publisher_Name) values('".$publisher."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Publisher Insert Successfully";
		}
		else
		{
			$result = "Publisher Insert Unsuccessfully";
		}
	}
	
}
//======================Update work step 1
	if(isset($_GET["e_id"]))
	{
		$bt = "Update";
		$color = "btn btn-primary";
			
		$eid = $_GET["e_id"];
		$select = "select * from publisher where Id = '".$eid."'";
		$query = mysqli_query($connection,$select);
		$row = mysqli_fetch_array($query);
		$pub = $row["Publisher_Name"];
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
			<h2 class="title1">Publisher</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Add Publisher:</h4>
						</div>
							
							<div class="form-body">
								<form data-toggle="validator" action="Publisher.php" method="post">
									<div class="form-group">
                                    <label for="exampleInputEmail1">Enter Publisher Name</label>
										<input type="text" name="publi" value="<?php echo @$pub ?>" class="form-control" id="inputName" placeholder="Publisher Name" required>
									</div>
                                    
									<div class="form-group">
										<button type="submit" class="<?php echo @$color?>" name="btn" value=""><?php echo @$bt?></button>
									</div>
                                    <div class="form-group">
										<input type="text" name="hid" value="<?php echo @$eid;?>">
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