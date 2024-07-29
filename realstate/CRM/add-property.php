<?php 
include 'include/header.php';
?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title"><h4>Add Property</h4></div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Property</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left"><h4 class="text-blue h4">Add Property</h4></div>
			</div>
			<form>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Property Title</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" type="text" placeholder="Enter Property Title"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Select Project</label>
							<div class="col-sm-12 col-md-9">							
								<select class="custom-select col-12">
									<option selected="">Select Project</option>
									<option value="Some property">Some property</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Property Type</label>
							<div class="col-sm-12 col-md-9">								
								<select class="custom-select col-12">
									<option selected="">Select Property Type</option>
									<option value="Residential">Residential</option>
									<option value="Commercial">Commercial</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Size</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="in Sq.Ft" type="number"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Property Age</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="Property Age in Year" type="number"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Reference (Agent)</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Agent Name / Direct" type="text"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Agent Contact</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control number_input" placeholder="Contact No." type="number"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Payment mode</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control" placeholder="Agent Name / Direct" type="text"/>
							</div>
						</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Loan Availability</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control number_input" placeholder="Agent Name / Direct" type="number"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Image</label>
							<div class="custom-file col-sm-12 col-md-9">
								<input type="file" class="custom-file-input">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
					</div>
				</div>			
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Project Description</label>
							<div class="col-sm-12 col-md-9">							
								<textarea class="form-control" placeholder="Project Description"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Date and Time</label>
							<div class="col-sm-12 col-md-9">
								<?php $d=strtotime("10:30pm April 15 2014"); ?>							
								<input class="form-control" placeholder="Time" type="datetime" disabled value="<?php echo date("Y-m-d " . " H:i:s"); ?>"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<div class="row">
								<label class="col-sm-12 col-md-4 col-form-label">Amenities</label>
								<div class="col-sm-12 col-md-4">								
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Corner</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Park Facing</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label" for="customCheck3">Covered Parking</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">West Open</label>
									</div>
								</div>
								<div class="col-sm-12 col-md-4">
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Corner</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Park Facing</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck3">
										<label class="custom-control-label" for="customCheck3">Covered Parking</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck4">
										<label class="custom-control-label" for="customCheck4">West Open</label>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>			
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<div class="form-group row">
							<div class="col-sm-12 col-md-12 mt-3">
								<button type="button" class="btn btn-primary btn-lg float-right">Add Property</button>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
	</div>
</div>

<?php include 'include/footer.php'?>