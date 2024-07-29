<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Banner</title>
</head>

<body>
<?php 
include('header.php');
include("config.php");
function redirect_to($new_location)
{
	header("Location:".$new_location);
}

?>
<div class="main-panel">
          <div class="content-wrapper">
            
<?php
			if(isset($_POST["btnban"]))
			{
			$banname = $_POST['banner_name'];
			//-------------------------------
			$file = $_FILES["banner_image"]["name"];
			$tmp_name = $_FILES["banner_image"]["tmp_name"];
			$location= "assets/images/category/banner/";
			//--------------------------
			$bandes = $_POST['banner_desc'];
			$bancoll = $_POST['banner_collect'];
			
			if(move_uploaded_file($tmp_name,$location.$file))
			{
			$query=mysqli_query($connection,"insert into bannertable (Banner_Name,Banner_Image,Banner_Desc,Banner_Collect) 
																	values ('".$banname."','".$file."','".$bandes."','".$bancoll."')");
			if($query)
				{
					 //header( 'Location:category.php' ) ;
					 echo "<script>
							window.location.assign('banner.php');
					</script>";
				}
				else
				{
					echo "<script>
							alert('Connection  problem');
					</script>";
					}
				}
			}
?>
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Banner</h4>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="banner_name">
                      </div>
                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="banner_image" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Descripton</label>
                        <textarea rows="5" class="form-control" placeholder="Description" name="banner_desc"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Collection</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="banner_collect">
                      </div>
                      
                      <input type="submit" name="btnban" class="btn btn-primary mr-2" value="Add New Banner"/>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Banner Show</h4>
                    <div class="row">
                    <?php
						   $select = "select * from bannertable";
						   $query = mysqli_query($connection,$select);
						   $count = mysqli_num_rows($query);
						   if($count > 0)
						   {
							   while($row = mysqli_fetch_array($query))
							   {
						?>
                        
                        <div class="col-md-4">
      					<div class="card bg-light" style="width: 25rem;">
                          <img src="assets/images/category/banner/<?php echo $row["Banner_Image"]?>" class="card-img-top">
                          <div class="card-body">
                            <h5 class="card-title text-dark "><?php echo $row["Banner_Name"]?></h5>
                            <p class="card-text text-dark text-justify"><?php echo $row["Banner_Desc"]?></p>
                             <p class="card-text" text-dark><?php echo $row["Banner_Collect"]?></p>
                            <a href="#" class="btn btn-lg btn-primary">Update</a>
                            <a href="#" class="btn btn-lg btn-danger">Delete</a>
                          </div>
                        </div>
        			</div>
           <?php
							   }
							}
?>
       </div>
                     </div>
                    
                  </div>
                </div>
           
           
              
            
			  
			  
			  
			
              
              
              
              
              
            </div>
          </div>
      
        </div>

<?php 
include('footer.php');
?>




<script src="assets/js/file-upload.js"></script>
</body>
</html>