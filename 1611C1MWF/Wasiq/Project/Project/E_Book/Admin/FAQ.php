<div class="main-content">
<?php 
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$fq = $_POST["qus"];
	$fa = $_POST["ans"];
//============================================Update work Step2
if(!empty($_POST["hid"]))
{
		$ehid = $_POST["hid"];
		$update = "update faqs set Question='".$fq."', Answer='".$fa."' where Id='".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "FAQs Successfully Updated";
		}
		else
		{
			$result = "FAQs Unsuccessfully Updated";
		}	
}	
	
	
//=========================================================Insert work
if(empty($_POST["hid"]))
{
		$insert = "insert into faqs (Question,Answer) values('".$fq."','".$fa."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "FAQs Insert Successfully";
		}
		else
		{
			$result = mysqli_errno($connection); //"FAQs Insert Unsuccessfully";
		}
}
}
//======================================Update Work Step 1
if(isset($_GET["e_id"]))
{
	$bt = "Update";
	$color = "btn btn-primary Enabled";
	
	$eid = $_GET["e_id"];
	$select = "select * from faqs where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$fqus = $row["Question"];
	$fans = $row["Answer"];
}	
if(!isset($_GET["e_id"]))
{
	$bt = "Insert";
	$color = "btn btn-Success disabled";
	$imgvisible = "hidden";
}
?>
<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
			<h2 class="title1">FAQs</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Add FAQ:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="FAQ.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter FAQ Question</label>
                                    	<textarea class="form-control" name="qus" placeholder="Short History..." required><?php echo @$fqus ?></textarea>
									</div> 
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter FAQ Answer</label>
                                    	<textarea class="form-control" name="ans" placeholder="Short History..." required><?php echo @$fans ?></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="<?php echo @$color?>" name="btn" value="<?php echo @$bt?>"/>
									</div>
                                    <div class="form-group">
										<input type="hidden" name="hid" required="required" value="<?php echo @$eid?>"/>
									</div>
								</form>
                                	</div>
                           	    </div>
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
