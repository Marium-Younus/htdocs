<div class="main-content">
<?php 
include("Layout.php");
include("Config.php");

if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$bt = $_POST["title"];
	$bd = $_POST["dis"];
	$dateb = $_POST["db"];
	$bpri = $_POST["bpri"];
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "Style/images/";
	$ba = $_POST["aut"];
	$bp = $_POST["pub"];
	$cat = $_POST["cata"];
	$bs = $_POST["status"];
//============================================Update work Step2
if(!empty($_POST["hid"]))
{
	if(empty($_FILES["fileupload"]["name"]))
	{
		$uf = $_POST["path"];
		$ehid = $_POST["hid"];
		$update = "update books set Book_Title='".$bt."', Book_Description='".$bd."', Date_of_Publish='".$dateb."', Book_Price='".$bpri."', Image='".$uf."', author_id='".$ba."', publisher_id='".$bp."', catid='".$cat."', status_id='".$bs."'  where Id='".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Book Successfully Updated";
		}
		else
		{
			$result = "Book Unsuccessfully Updated";
		}
	
	}
	
	if(!empty($_FILES["fileupload"]["name"]))
	{
		if(move_uploaded_file($tmp_name,$location.$file))
		{
			$ehid = $_POST["hid"];
			$update = "update books set Book_Title='".$bt."', Book_Description='".$bd."', Date_of_Publish='".$dateb."', Book_Price='".$bpri."', Image='".$file."', author_id='".$ba."', publisher_id='".$bp."', catid='".$cat."', status_id='".$bs."'  where Id='".$ehid."'";
			$exe = mysqli_query($connection,$update);
			if($exe)
			{
				$result = "Book Successfully Updated";
			}
			else
			{
				$result = "Book Unsuccessfully Updated";
			}
		}
	}
}
	
	

//=========================================================Insert work
		if(!empty($_FILES["fileupload"]["name"]))
		{
			if(move_uploaded_file($tmp_name,$location.$file))
			{
				$insert = "insert into books (Book_Title,Book_Description,Date_of_Publish,Book_Price,Image,author_id,publisher_id,catid,status_id) values('".$bt."','".$bd."','".$dateb."','".$bpri."','".$file."','".$ba."','".$bp."','".$cat."','".$bs."')";
				$exe = mysqli_query($connection,$insert);
				if($exe)
				{
					$result = "Book Insert Successfully";
				}
				else
				{
					$result =  mysqli_error($connection);
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
	$select = "select * from books where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$t = $row["Book_Title"];
	$d = $row["Book_Description"];
	$dp = $row["Date_of_Publish"];
	$p = $row["Book_Price"];
	$img = $row["Image"];
	$ai = $row["author_id"];
	$pi = $row["publisher_id"];
	$ci = $row["catid"];
	$si = $row["status_id"];
}	
if(!isset($_GET["e_id"]))
{
	$bt = "Insert";
	$color = "btn btn-Success disabled";
	$imgvisible = "hidden";
	$date = date('Y-m-d');
}
?>

<div id="page-wrapper">
	<div class="main-page">
		<div class="forms validation">
			<h2 class="title1">Book</h2>
				<div class="row">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                    	<div class="form-title">
							<h4>Add Book:</h4>
						</div>
                        <div class="form-body">
							<div class="row">
                            	<div class="col-md-8">
								<form data-toggle="validator"  method="post" enctype="multipart/form-data">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Book Title</label>
										<input type="text" class="form-control" name="title" id="inputName" placeholder="Book Title" value="<?php echo @$t ?>" required>
									</div>
                                   
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Book Discription</label>
                                    	<textarea class="form-control" placeholder="Book Discription....." name="dis" required><?php echo @$d ?></textarea>
									</div>
                                    
                                    <div class="form-group">
                                     	<label for="exampleInputEmail1">Enter Date of Book Publish</label>
										<input type="date" class="form-control" name="db" id="inputName" value="<?php echo @$dp ?>" min="<?php echo $date ?>" required>
									</div>
                                                                        
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Enter Book Price</label>
										<input type="number" min="1" class="form-control" id="inputName" name="bpri" placeholder="Book Price" value="<?php echo @$p ?>" required>
									</div>
                                                                        
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Upload Book Image</label>
										<input type="file" class="form-control" id="inputName" name="fileupload"  onChange="readURL(this)">
									</div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Select Author</label>
										 <select class="form-control" required name="aut">
                                         	<option value="none">Select Author</option>
                                            <?php 
												//Data Fatch work
												
												$select = "select * from authors";
												$query= mysqli_query($connection,$select);
												$count = mysqli_num_rows($query);
												if($count > 0)
												{
													while($row = mysqli_fetch_array($query))
													{
														if(@$ai == $row["Id"])
														{
														    echo "<option value=".$row["Id"]." selected>".$row["Authore_Name"]."</option>";
														}
														else
														{
															echo "<option value=".$row["Id"].">".$row["Authore_Name"]."</option>";
														}
													}
												}
											
											?>
										 </select>
									</div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Select Publisher</label>
										 <select class="form-control" required name="pub">
                                         	<option value="volvo">Select Publisher</option>
                                            <?php 
												//Data Fatch work
												
												$select = "select * from publisher";
												$query= mysqli_query($connection,$select);
												$count = mysqli_num_rows($query);
												if($count > 0)
												{
													while($row = mysqli_fetch_array($query))
													{
														if(@$pi == $row["Id"])
														{
															echo "<option value=".$row["Id"]." selected>".$row["Publisher_Name"]."</option>";
														}
														else
														{
															echo "<option value=".$row["Id"].">".$row["Publisher_Name"]."</option>";
														}
													}
												}
											
											?>
										 </select>
									</div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Select Category</label>
										 <select class="form-control" required name="cata">
                                         	<option value="none">Select Category</option>
                                            <?php 
												//Data Fatch work
												
												$select = "select * from category";
												$query= mysqli_query($connection,$select);
												$count = mysqli_num_rows($query);
												if($count > 0)
												{
													while($row = mysqli_fetch_array($query))
													{
														if(@$ci == $row["Id"])
														{
															echo "<option value=".$row["Id"]." selected>".$row["Category_Name"]."</option>";
														}
														else
														{
															echo "<option value=".$row["Id"].">".$row["Category_Name"]."</option>";
														}
													}
												}
											
											?>
										 </select>
									</div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Select Status</label>
										 <select class="form-control" required name="status">
                                         	<option value="none">Select Status</option>
                                            <?php 
												//Data Fatch work
												
												$select = "select * from status";
												$query= mysqli_query($connection,$select);
												$count = mysqli_num_rows($query);
												if($count > 0)
												{
													while($row = mysqli_fetch_array($query))
													{
														if(@$si == $row["Id"])
														{
															echo "<option value=".$row["Id"]." selected>".$row["Status"]."</option>";
														}
														else
														{
															echo "<option value=".$row["Id"].">".$row["Status"]."</option>";
														}
													}
												}
											
											?>
										 </select>
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
