<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>

</head>

<body>
<?php 
include('header.php');
include("config.php");
?>

<?php
if(isset($_POST['btnpro']))
{
 			$proname = $_POST['pro_name'];
			$prodes = $_POST['pro_des'];
			$proprice = $_POST['pro_price'];
			$proqty = $_POST['pro_qty'];
			//-------------------------------
			$file = $_FILES["pro_image"]["name"];
			$tmp_name = $_FILES["pro_image"]["tmp_name"];
			$location= "assets/images/category/";
			//--------------------------
			$prodate = $_POST['pro_date'];
			$catid_fk = $_POST['pro_cat'];
			$brandid_fk = $_POST['pro_brand'];
			$sizeid_fk = $_POST['pro_size'];
			$colorid_fk = $_POST['pro_color'];
			
			if(move_uploaded_file($tmp_name,$location.$file))
			{
$insert = "insert into producttable (Pro_Name,Pro_Des,Pro_Price,Pro_Qty,Pro_Image,Date_Add,Cat_Id_FK,Size_Id_FK,Color_Id_FK,Brand_Id_FK) 
							values('".$proname."','".$prodes."','".$proprice."','".$proqty."','".$file."','".$prodate."','".$catid_fk."','".$sizeid_fk."','".$colorid_fk."','".$brandid_fk."')";
				$exe = mysqli_query($connection,$insert);
				if($exe)
				{
				 echo "<script>
							window.location.assign('product.php');
					</script>";
				}
				else
				{
					echo "<script>
							alert('Connection  problem');
					</script>";
					//$result =  mysqli_error($connection);
				}
			}
				
	
	
}



?>





<div class="main-panel">
          <div class="content-wrapper">         
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="product.php" method="post" enctype="multipart/form-data">
                    <h4 class="card-title">Add New Product</h4>
                    <div class="form-group">
                    
                      <label>Product Name</label>
                      <input name="pro_name" type="text" class="form-control form-control-lg" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                      <label>Product Description</label>
                      <textarea name="pro_des" class="form-control" rows="5" placeholder="Description"></textarea>
                     
                    </div>
                    <div class="form-group">
                      <label>Product Price</label>
                      <input name="pro_price" type="text" class="form-control form-control-sm" placeholder="Product Price" >
                    </div>
                    <div class="form-group">
                      <label>Product Quantity</label>
                      <input name="pro_qty" type="number" class="form-control form-control-sm" min="0" placeholder="Product Quantity" >
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="pro_image" class="file-upload-default" />
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                      <label>Date</label>
                      <input name="pro_date" type="date" class="form-control form-control-sm" placeholder="Product Date" >
                    </div>
                  
              
                  
                   
                  
             
                    
                    
                    
                  </div>
                </div>
              </div>
              
              <!------Select Start-->
              
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Select Options</h4>
                   
                    
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Category</label>
                     <select name="pro_cat" class="form-control form-control-lg">
                     
                       <?php
						$select = "select * from categorytable";
						$query = mysqli_query($connection,$select);
						$count = mysqli_num_rows($query);
						if($count > 0)
						{
						while($row = mysqli_fetch_array($query))
						{
						?>       
                        <option value="<?php echo $row["Cat_Id"]?>"><?php echo $row["Cat_Name"]?></option>
                        <?php
						}
						}
						?>
                      </select>
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Select Brand</label>
                      <select name="pro_brand" class="form-control">
                        <?php
						$select = "select * from Brandingtable";
						$query = mysqli_query($connection,$select);
						$count = mysqli_num_rows($query);
						if($count > 0)
						{
						while($row = mysqli_fetch_array($query))
						{
						?> 
                        <option value="<?php echo $row["Brand_Id"]?>"><?php echo $row["Brand_Name"]?></option>
                        <?php
						}
						}
						?> 
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Select Size</label>
                      <select name="pro_size"class="form-control">
                        <?php
						$select = "select * from sizetable";
						$query = mysqli_query($connection,$select);
						$count = mysqli_num_rows($query);
						if($count > 0)
						{
						while($row = mysqli_fetch_array($query))
						{
						?>       
                        <option value="<?php echo $row["Size_Id"]?>"><?php echo $row["Size_Name"]?></option>
                        <?php
						}
						}
						?> 
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Select Color</label>
                      <select name="pro_color" class="form-control form-control-sm">
                      
                       <?php
						 $select = "select * from colortable";
						$query = mysqli_query($connection,$select);
						$count = mysqli_num_rows($query);
						if($count > 0)
						{
						while($row = mysqli_fetch_array($query))
						 {
						?>   
                        <option value="<?php echo $row["Color_Id"]?>"><?php echo $row["Color_Name"]?></option>
                          <?php
						 }
						}
						?>  
                      </select>
                    </div>
                    
                     <div class="template-demo">
					<input name="btnpro" value="Save Product" type="submit" class="btn btn-info btn-lg btn-block "/>
                    
                    </div>
                    
                  </div>
                </div>
              </div>
              
              
              
              </form>
              
              
            </div>
          </div>
         
</div>

    <?php 
include('footer.php');
?>

<script src="assets/js/file-upload.js"></script>
</body>
</html>