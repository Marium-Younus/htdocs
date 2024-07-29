<div class="main-content">
<?php 

include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "Style/images/";
//============================================Update work Step2
if(!empty($_POST["hid"]))
{
	if(empty($_FILES["fileupload"]["name"]))
	{
		$uf = $_POST["path"];
		$ehid = $_POST["hid"];
		$update = "update slider set Image='".$uf."' where Id='".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Slider Image Successfully Updated";
		}
		else
		{
			$result = "Slider Image Unsuccessfully Updated";
		}
	
	}
	
	if(!empty($_FILES["fileupload"]["name"]))
	{
		if(move_uploaded_file($tmp_name,$location.$file))
		{
			$ehid = $_POST["hid"];
			$update = "update slider set Image='".$file."' where Id='".$ehid."'";
			$exe = mysqli_query($connection,$update);
			if($exe)
			{
				$result = "Slider Image Successfully Updated";
			}
			else
			{
				$result = "Slider Image Unsuccessfully Updated";
			}
		}
	}
}	
	
	
//=========================================================Insert work
if(!empty($_FILES["fileupload"]["name"]))
{
	if(move_uploaded_file($tmp_name,$location.$file))
	{
		$insert = "insert into slider (Image) values('".$file."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Slider Image Insert Successfully";
		}
		else
		{
			$result = "Slider Image Insert Unsuccessfully";
		}
	}
}
}

//======================================Update Work Step 1
if(isset($_GET["e_id"]))
{
	$bt = "Update";
	$color = "btn btn-primary Enabled";
	
	$eid = $_GET["e_id"];
	$select = "select * from slider where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$img = $row["Image"];
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
			<h2 class="title1">Slider Image</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
							<h4>New Slider Image:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="Slider.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Upload Image</label>
										<input type="file" class="form-control"  name="fileupload" onChange="readURL(this)">
									</div>
                                    
									<div class="form-group">
										<input type="submit" class="<?php echo @$color?>" name="btn" value="<?php echo @$bt?>"/>
									</div>
                                    <div class="form-group">
										<input type="hidden" name="hid" required="required" value="<?php echo @$eid?>"/>
                                        <input type="text" name="path" value="<?php echo @$img?>"/>
									</div>
								</form>
                                	</div>
                                <div class="col-md-4">
                                    <img src="Style/images/<?php echo @$img?>" id="proimg" class="img-thumbnail" width="250" height="250" style="visibility:<?php echo $imgvisible?>">
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

<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
					.css( "visibility", "visible" );
					
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>    