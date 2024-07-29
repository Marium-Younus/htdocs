<div id="wrapper">
<?php
include("config.php");
include("AdminLayout.php");
?>  
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
                <!----===Delete Action===---->
                     <?php
					 if(isset($_GET["del_id"]))
					 {
						 include("config.php");
						 $delpro_id = $_GET["del_id"];
						 $query = mysqli_query($connection,"delete from banner_table where Banner_Id = '".$delpro_id."'");
					 }
					 
					 
					 ?>     
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Fetch Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Banner_Id</th>
                                            <th>Banner_Picture</th>
                                            
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                               
                                <?php
									$querys = mysqli_query($connection,"select * from banner_table");
									$count = mysqli_num_rows($querys);
									if($count > 0)
									{
										while($row = mysqli_fetch_array($querys))
										{
									?>
            
                                    <tbody>
                                        <tr>
                                            <td><?php  echo $row["Banner_Id"]?></td>
                                            <td><img src="HomeDesign\images\<?php  echo $row["Banner_Picture"]?>" width="50" height="50"/></td>
                                            
                                          
                                            <td><a href="Bannershow.php?del_id=<?php echo $row["Banner_Id"] ?>">Delete</a>   
                                            <a href="Banner.php?e_id=<?php echo $row["Banner_Id"]?>">Edit</a></td>                                        
                                        </tr>                                    
                                    </tbody>
                                
                                     <?php
									
										}
									}
									?>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            
                
                                    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(300)
                    .height(300);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>          
             
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
    
   
