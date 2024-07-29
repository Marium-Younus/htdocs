<div id="wrapper">
           
           <!-- /. NAV TOP  -->
<?php
include("config.php");
include("AdminLayout.php"); 
		 		       
if(isset($_POST["btn"]))		
{
	$qu = $_POST["ques"];
	$an = $_POST["ans"];
	
	//============================================Update work Step2
	if(!empty($_POST["hid"]))
	{
			$ehid = $_POST["hid"];
			$update = "update faq_table set Question='".$qu."', Answer='".$an."' where Id='".$ehid."'";
			$exe = mysqli_query($connection,$update);
			if($exe)
			{
				$result = "FAQs Successfully Updated";
			}
			else
			{
				$result = "FAQs Unsuccessfully Updated";
			}	
	}	
	//============================================Insert work
	if(empty($_POST["hid"]))
	{
		$insert = "insert into faq_table (Question,Answer) values('$qu','$an')";
		$query = mysqli_query($connection,$insert);
		if($query)
		{
			$result="Record Inserted";
		}
		else
		{
			$result="Record not Inserted";
		}
	}
}

if(isset($_GET["e_id"]))
{
	$bt = "Update";
	$color = "btn btn-primary Enabled";
	
	$eid = $_GET["e_id"];
	$select = "select * from faq_table where Id = '".$eid."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	$fqus = $row["Question"];
	$fans = $row["Answer"];
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
                                <div class="col-md-12">
                             
                                    <form role="form" action="Faq.php" method="post">
                                        <div class="form-group">
                          <label>Enter Question</label>
                          <textarea class="form-control" name="ques"><?php echo @$fqus ?></textarea>
                          
                           <label>Enter Answer</label>
                          <textarea class="form-control" name="ans"><?php echo @$fans ?></textarea>
                          <br>
                      	  <input type="submit" class="<?php echo @$color?>" name="btn" value="<?php echo @$bt?>">
                          <br>
                          <input type="hidden" name="hid" value="<?php echo @$eid?>"/>

                          <label><?php if(isset($_POST["btn"])) echo $result ?></label>
                                    </form>
                                    <br />
                                                                
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
    
