<?php 
include 'include/header.php';
?>
<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title">
			<h2 class="h3">Dashboard</h2>
		</div>		
		<div class="row clearfix">
			<div class="col-md-8">
				<div class="row">
					<div class="col-sm-12 col-md-6 mb-30">
						<div class="card card-box">							
							<div class="card-body" id="card-body">								
							</div>							
						</div>
					</div>
					<div class="col-sm-12 col-md-6 mb-30">						
							<div class="card card-box">
								<div class="card-body pt-5 pb-5">	
									<div id="chart1"></div>											
								</div>
							</div>						
					</div>
				</div>
				<div class="row pb-10">
					<div class="col-md-12 mb-20">
						<div class="card-box height-100-p pd-20">
							<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
								<div class="h5 mb-md-0">Hospital Activities</div>
								<div class="form-group mb-md-0">
									<select class="form-control form-control-sm selectpicker">
										<option value="">Last Week</option>
										<option value="">Last Month</option>
										<option value="">Last 6 Month</option>
										<option value="">Last 1 year</option>
									</select>
								</div>
							</div>
							<div id="activities-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-sm-12 col-md-12 mb-30">
					<div class="card card-box">
						<div class="card-body">
							<div class="chat-list bg-light-gray">
								<div class="chat-search">
									<span class="ti-search"></span>
									<input type="text" placeholder="Search Contact" />
								</div>
								<div class="notification-list chat-notification-list customscroll">
									<ul>
										<li class="active">
											<a href="#"><img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-light-green"></i> online</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-light-green"></i> online</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-light-green"></i> online</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-warning"></i> active 5 min</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-warning"></i> active 4 min</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-warning"></i> active 3 min</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-light-orange"></i> offline</p></a>
										</li>
										<li>
											<a href="#">
											<img src="vendors/images/img.jpg" alt="" />
											<h3 class="clearfix">John Doe</h3>
											<p><i class="fa fa-circle text-light-orange"></i> offline</p></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		 </div>
		

		
		
		
<!--=================================== update admin modal ============================		-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="update">
			<div class="login-box bg-white box-shadow border-radius-10">
				<div class="login-title">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">×</button>
					<h2 class="text-center text-primary">Update</h2>
				</div>
				<form id="admin_update">
					
				</form>
			</div>
		</div>
	</div>
</div>

	</div>
</div>

<script type="text/javascript" src="Ajax/dashboard.js"></script>
<?php include 'include/footer.php'?>