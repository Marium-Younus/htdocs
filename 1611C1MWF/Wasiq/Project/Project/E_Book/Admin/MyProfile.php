<div class="main-content">
<?php 

include("Layout.php");
session_start();
if(!isset($_SESSION["user"]))
{
	header("Location:SignIn.php");
}

?>

<div id="page-wrapper">
			<div class="main-page">
				<h2 class="title1">My Account</h2>
				<div class="row">
                	<div class="col-md-4">
                    	<img src="Style/images/<?php echo $_SESSION["img"] ?>" class="img-thumbnail" width="300">
                    </div>
                	<div class="col-md-8">
                    	<div class="tables">
            			<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<h4>User Name: <?php echo $_SESSION["user"] ?></h4>
                        <h4>Password: <?php echo $_SESSION["pwd"] ?></h4>
                        <h4>Gender: <?php echo $_SESSION["gen"] ?></h4>
                        <h4>Role: <?php echo $_SESSION["ro"] ?></h4>
						
					</div>
			</div>
                    </div>
                </div>
			</div>
		</div>

</div>


