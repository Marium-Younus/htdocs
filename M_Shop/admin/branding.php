<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
<style>
   tr:hover {background-color: #D8DA5C;color:#000;}

</style>
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
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
<?php
			if(isset($_POST["btnbrand"]))
			{
			$brandname = $_POST['brand_name'];
			$query=mysqli_query($connection,"insert into brandingtable (Brand_Name) values ('".$brandname."')");
			if($query)
				{
					 //header( 'Location:category.php' ) ;
					 echo "<script>
							window.location.assign('branding.php');
					</script>";
				}
				else
				{
					echo "<script>
							alert('Connection  problem');
					</script>";
					}
				}
?>
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add New Brand</h4>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="brand_name">
                      </div>
                      <input type="submit" name="btnbrand" class="btn btn-primary mr-2" value="Add New Brand"/>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
              <!-- Show Category-->
                <!----===Delete Action===---->
                     <?php
					 if(isset($_GET["del_id"]))
					 {
						 $delbrand_id = $_GET["del_id"];
						 $query = mysqli_query($connection,"delete from brandingtable where Brand_Id = '".$delbrand_id."'");
					 }
					 
					 
					 ?> 
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Show Here</h4>
                    
                   
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual table-hoever gridtable"  id="tableMain">
                        <thead>
                          <tr class="tableheader">
                            <th> # </th>
                            <th> Brand name </th>
                           <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
<?php
						   $select = "select * from brandingtable";
						   $query = mysqli_query($connection,$select);
						   $count = mysqli_num_rows($query);
						   if($count > 0)
						   {
							   while($row = mysqli_fetch_array($query))
							   {
?>
                          
                          <tr class="datarow" >
                            <td class=".btn" id="col1"> <?php echo $row["Brand_Id"]?> </td>
                            <td class=".btn" id="col2"> <?php echo $row["Brand_Name"]?> </td>
                           <td><a href="Branding.php?del_id=<?php echo $row["Brand_Id"] ?>">
                           <img  src="assets/images/file-icons/64/delete-icon.png"/></a></td>
                          </tr>
<?php
							   }
							}
?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Update Category-->
              <div class="col-12 grid-margin stretch-card" id="updiv" style="display:none; margin-top:20px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Category</h4>
                     <!--=============================================update code-->
<?php
					if(isset($_POST["btnup"]))
						{
						$brandid = $_POST['id_up'];
						$brandname = $_POST['brand_up'];
						$query=mysqli_query($connection,"update brandingtable set Brand_Name = '".$brandname."' where Brand_Id = '".$brandid ."' ");
						if($query)
							{
								 echo "<script>
										window.location.assign('branding.php');
								</script>";
							}
							else
							{
									echo "<script>
											alert('Connection  problem');
									</script>";
								}
							}
?>
                  
                    <form class="form-inline" method="post">
                        <div class="input-group mb-2 mr-sm-2 " >
                 <input type="text" readonly="readonly" id="brandid" name="id_up"  class="form-control bg-dark"  placeholder="Category Id">
                 </div>
                     <div class="input-group mb-2 mr-sm-2 " >
                       
              <input type="text" id="brandname" name="brand_up"  class="form-control bg-dark" required="required" placeholder="Category name">
                      </div>
                       <div class="input-group mb-2 " >
                      <input  value="Update" type="submit" name="btnup"  class="btn btn-lg btn-info mb-2"/>
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
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free Bootstrap dashboard templates from <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrapdash.com</a></span>
            </div>
          </footer>
          <!-- partial -->
        </div>

<?php 
include('footer.php');
?>


<script>		
            $(document).ready(function () {	
               
				$('#tableMain tbody').on('click', 'tr', function() {
					//get row contents into an array
                    var tableData = $(this).children("td").map(function() {
                        return $(this).text();
                    }).get();
                    var data1=tableData[0];
					var data2=tableData[1];
                     $('#brandid').val(data1);
					$('#brandname').val(data2);
					 $("#updiv").fadeIn();
				});
			});	
		</script>



</body>
</html>