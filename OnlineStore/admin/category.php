
<?php
	include("include/header.php");
	
							
?>


<div class="page-wrapper">   
  
            <div class="container-fluid">
            
                <div class="row">
                
                    <div class="col-lg-8 col-xlg-9 col-md-12">
                        <div class="card">
                        <?php
								
								include_once("include/connect.php");
								$crud= new CRUD();
								  // Insert Record in category table
								  if(isset($_POST['btncat'])) {
									$crud->insertcategory($_POST);
									
								
								  }
						?>   
                          
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="post" action="category.php">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Category Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder=""
                                                class="form-control p-0 border-0" name="cname" required> </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <input type="submit" name="btncat" id="btncat" class="btn btn-primary" value="Add Category"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                           
						
                        </div>
                    </div>
                    <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <h1 class="text-white"><?php echo $crud->total("category");?></h1>
                                        <h3 class="text-white mt-2">Total Category</h3>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
                <!--------------------------------------------------------------- Show Catgeory-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Display Category</h3>
                       
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Category Name</th>
                                              <th colspan="2" class="border-top-0">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										$data = $crud->showcat("category");
										//print_r($data);
										foreach($data as $item)
										{
										?>
											 <tr>
                                            <td><?php echo $item["CatID"]?></td>
                                            <td><?php echo $item["CatName"]?></td>
                                           	<td><a href="#">Edit</a></td>
                                           	<td><a href="#">Delete</a></td>
                                        </tr>
										 <?php
                                         }
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
<?php
	include("include/footer.php");

?>
           