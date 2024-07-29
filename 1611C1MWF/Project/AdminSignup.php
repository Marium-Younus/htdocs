<div id="wrapper">

<?php
include("config.php");
include("AdminLayout.php"); 
		 		       
if(isset($_POST["btn"]))
{
//===========================================Global variable for insert and update	
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$cpwd = $_POST["cpass"];
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "LoginDesign/Images/";
	$gender = $_POST["gen"];	
//============================================Update work Step2
if(!empty($_POST["hid"]))
{
	if(empty($_FILES["fileupload"]["name"]))
	{
		$uf = $_POST["path"];
		$ehid = $_POST["hid"];
		$update = "update admin set User_Name='".$un."', Password='".$pwd."', Conform_Password='".$cpwd."', Image='".$uf."', Gender='".$gender."' where Id='".$ehid."'";
		$exe = mysqli_query($connection,$update);
		if($exe)
		{
			$result = "Registration Successfully Updated";
		}
		else
		{
			$result = "Registration Unsuccessfully Updated";
		}
	
	}
	
	if(!empty($_FILES["fileupload"]["name"]))
	{
		if(move_uploaded_file($tmp_name,$location.$file))
		{
			$ehid = $_POST["hid"];
			$update = "update admin set User_Name='".$un."', Password='".$pwd."', Conform_Password='".$cpwd."', Image='".$file."', Gender='".$gender."' where Id='".$ehid."'";
			$exe = mysqli_query($connection,$update);
			if($exe)
			{
				$result = "Registration Successfully Updated";
			}
			else
			{
				$result = "Registration Unsuccessfully Updated";
			}
		}
	}
}	
	
	
//=========================================================Insert work
if(!empty($_FILES["fileupload"]["name"]))
{
	if(move_uploaded_file($tmp_name,$location.$file))
	{
		$insert = "insert into admin (User_Name,Password,Conform_Password,Image,Gender) values('".$un."','".$pwd."','".$cpwd."','".$file."','".$gender."')";
		$exe = mysqli_query($connection,$insert);
		if($exe)
		{
			$result = "Registration Successfully";
		}
		else
		{
			$result = "Registration Unsuccessfully";
		}
	}
}
}

//======================================Update Work Step 1
if(isset($_GET["e_id"]))
{
	$bt = "Update";
	$color = "btn btn-primary";
	
	$eid = $_GET["e_id"];
	$select = "select * from admin where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$name = $row["User_Name"];
	$pass = $row["Password"];
	$cpass = $row["Conform_Password"];
	$img = $row["Image"];
	$gen = $row["Gender"];
}	
if(!isset($_GET["e_id"]))
{
	$bt = "Insert";
	$color = "btn btn-Success";
	$imgvisible = "hidden";
}		
?>  
        <!-- /. NAV SIDE  -->
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h4><b><?php echo $_SESSION["user"]?></b>, Love to see you back. </h4>
                       
                    </div>
                </div>
              
                 
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Categories
                        </div>
                                                 <div class="panel-body">
                            <div class="row">
                            		<div class="col-md-8">
										<form action="AdminSignup.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
                                    	<label for="exampleInputEmail1">Enter User Name</label>
										<input type="text" class="form-control" id="inputName" placeholder="User Name" value="<?php echo @$name ?>" required name="name">
									</div>
                                    
									<div class="form-group">
                                      <label for="exampleInputEmail1">Enter Password</label>
									  <input type="text" data-toggle="validator" data-minlength="6" value="<?php echo @$pass ?>" class="form-control" id="inputPassword" placeholder="Password" required name="pass">
									  <span class="help-block">Minimum of 6 characters</span>
									</div>
                                    
									<div class="form-group">
                                      <label for="exampleInputEmail1">Enter conform Password</label>
									  <input type="text" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm password" value="<?php echo @$cpass ?>" required name="cpass">
                                      
									  <div class="help-block with-errors"></div>
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Upload Image</label>
										<input type="file" class="form-control"  name="fileupload" onChange="readURL(this)">
									</div>
                                    
                                    <div class="form-group">
                                    	<label for="exampleInputEmail1">Select Gender</label>
										<div class="radio">
                                            <?php
											if(isset($_GET["e_id"]))
											{ 
												if($gen == "Male")
												{
											
													echo  "<label class='radio-inline'><input type='radio' name='gen' value='Male' checked> Male</label>";
													echo  "<label class='radio-inline'><input type='radio' name='gen' value='Female'> Female</label>";
												}
												else
												{
											
													echo  "<label class='radio-inline'><input type='radio' name='gen' value='Male'> Male</label>";
													echo  "<label class='radio-inline'><input type='radio' name='gen' value='Female' checked> Female</label>";
												}
											}
											else
											{
												echo  "<label class='radio-inline'><input type='radio' name='gen' value='Male'> Male</label>";
												echo  "<label class='radio-inline'><input type='radio' name='gen' value='Female'> Female</label>";
											}
											
											?>
                                           
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
                     <!-- End Form Elements -->
                </div>
            </div>
            
          
            
            
                <!-- /. ROW  -->
                </div>
                </div>
                </div>
                <!-- /. ROW  -->
    
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
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