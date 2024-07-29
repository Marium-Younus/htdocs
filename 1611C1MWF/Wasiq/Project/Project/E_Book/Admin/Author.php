<div class="main-content">
<?php 
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$an = $_POST["name"];
	$ah = $_POST["history"];
	$db = $_POST["dateb"];
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "Style/images/";
	$gender = $_POST["gen"];

//============================================Update work Step2
if(!empty($_POST["hid"]))
{
	if(empty($_FILES["fileupload"]["name"]))
	{
		$uf = $_POST["path"];
		$ehid = $_POST["hid"];
		$update = "update authors set Authore_Name='".$an."', Authore_History='".$ah."', Date_Of_Birth='".$db."', Image='".$uf."', Gender='".$gender."' where Id='".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Author Successfully Updated";
		}
		else
		{
			$result ="Author Unsuccessfully Updated";
		}
	
	}
	
	if(!empty($_FILES["fileupload"]["name"]))
	{
		if(move_uploaded_file($tmp_name,$location.$file))
		{
			$ehid = $_POST["hid"];
			$update = "update authors set Authore_Name='".$an."', Authore_History='".$ah."', Date_Of_Birth='".$db."', Image='".$file."', Gender='".$gender."' where Id='".$ehid."'";
			$exe = mysqli_query($connection,$update);
			if($exe)
			{
				$result = "Author Successfully Updated";
			}
			else
			{
				$result ="Author Unsuccessfully Updated";
			}
		}
	}
}	
	
	
//=========================================================Insert work
if(!empty($_FILES["fileupload"]["name"]))
{
	if(move_uploaded_file($tmp_name,$location.$file))
	{
		$insert = "insert into authors (Authore_Name,Authore_History,Date_Of_Birth,Image,Gender) values('".$an."','".$ah."','".$db."','".$file."','".$gender."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Author Insert Successfully";
		}
		else
		{
			$result = "Author Insert Unsuccessfully";
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
	$select = "select * from authors where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$aname = $row["Authore_Name"];
	$ahist = $row["Authore_History"];
	$dab = $row["Date_Of_Birth"];
	$img = $row["Image"];
	$gen = $row["Gender"];
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
			<h2 class="title1">Author</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Add Author:</h4>
						</div>
							<div class="form-body">
                            	<div class="row">
                            		<div class="col-md-8">
										<form data-toggle="validator" action="Author.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Author Name</label>
										<input type="text" class="form-control" id="inputName" name="name" value="<?php echo @$aname ?>" placeholder="Author Name" required>
									</div>
                                   
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Author History</label>
                                    	<textarea class="form-control" name="history" placeholder="Short History..." required><?php echo @$ahist ?></textarea>
									</div>
                                    
                                     <div class="form-group">
                                     	<label for="exampleInputEmail1">Enter Date of Birth</label>
										<input type="date" class="form-control" name="dateb" id="inputName" value="<?php echo @$dab ?>" required>
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Upload Image</label>
										<input type="file" class="form-control" id="inputName" name="fileupload"  onChange="readURL(this)">
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Select Gender</label>
										<div class="radio">
											<div class="radio-inline"><label><input type="radio" name="gen" value="Male"> Male</label></div>
										<div class="radio-inline"><label><input type="radio" name="gen" value="Female"> Female</label></div>
										</div>
									</div>
 
									<div class="form-group">
										<input type="submit" class="<?php echo @$color?>" name="btn" value="<?php echo @$bt?>"/>
									</div>
                                    <div class="form-group">
										<input type="hidden" name="hid" required="required" value="<?php echo @$eid?>"/>
                                        <input type="hidden" name="path" value="<?php echo @$img?>"/>
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
<!--<script src="Style/js/validator.min.js"></script>-->
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