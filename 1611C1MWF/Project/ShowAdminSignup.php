<div id="wrapper">
           
           <!-- /. NAV TOP  -->
                <?php
				include("config.php");
				include("AdminLayout.php");
				
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
                <!----===Delete Action===---->
                     <?php
					if(isset($_GET["d_id"]))
					{
						$did = $_GET["d_id"];
						$delete = "delete from admin where Id = '".$did."'";
						$query = mysqli_query($connection,$delete);
					}
					 ?>     
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Fetch Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover"> 
                        	<thead> 
                       			<tr> 
                                    <th>Id</th> 
                                    <th>User_Name</th> 
                                    <th>Password</th> 
                                    <th>Conform_Password</th>
                                    <th>Image</th> 
                                    <th>Gender</th> 
                                    <th>Action</th> 
                        		</tr> 
                           </thead> 
                           
                           <?php
						   $select = "select * from admin";
						   $query = mysqli_query($connection,$select);
						   $count = mysqli_num_rows($query);
						   if($count > 0)
						   {
							   while($row = mysqli_fetch_array($query))
							   {
						   ?>
                           <tbody> 
                        		<tr> 
                        			<th scope="row"><?php echo $row["Id"]?></th> 
                                    <td><?php echo $row["User_Name"]?></td> 
                                    <td><?php echo $row["Password"]?></td>
                                    <td><?php echo $row["Conform_Password"]?></td> 
                                    <td><img src="HomeDesign/images/<?php echo $row["Image"]?>" width="50" height="50"></td> 
                                    <td><?php echo $row["Gender"]?></td>
                                    <td>
                                    	<a href="AdminSignup.php?e_id=<?php echo $row["Id"]?>" class="btn btn-primary btn-sm"><i class="fa fa-Plus"></i></a>
                                        <a href="ShowAdminSignup.php?d_id=<?php echo $row["Id"]?>" class="btn btn-danger btn-sm"><i class="fa fa-Close"></i></a>
                                    </td>
                                     
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
    
   
