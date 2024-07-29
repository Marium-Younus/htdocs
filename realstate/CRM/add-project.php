<?php include 'include/header.php';?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title"><h4>Add Project</h4></div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Project</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left"><h4 class="text-blue h4">Add Project</h4></div>
			</div>
			<form id="add_project">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Project Name</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control" type="text" placeholder="Enter Project Name" id="project_name" name="project_name"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Project Location</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Enter Project Location" type="text" id="project_location" name="project_location"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Project Area (sq.ft)</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Project Area (sq.ft)" type="text" id="project_area" name="project_area"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Image</label>
							<div class="custom-file col-sm-12 col-md-9">
								<input type="file" class="custom-file-input" id="project_image" name="project_image">
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">User</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control" placeholder="User" type="text" readonly value="Admin" name="project_admin" id="project_admin"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Date and Time</label>
							<div class="col-sm-12 col-md-9">
								<?php $d=strtotime("10:30pm April 15 2014"); ?>							
								<input class="form-control" placeholder="Time" type="datetime" readonly value="<?php echo date("Y-m-d " . " H:i:s"); ?>" name="project_date" id="project_date"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-2 col-form-label">Project Description</label>
							<div class="col-sm-12 col-md-10">								
								<textarea class="form-control" placeholder="Project Description" id="project_description" name="project_description"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
							<div class="col-sm-12 col-md-12 mt-3">
								<button type="submit" class="btn btn-primary btn-lg float-right" id="project_btn" name="project_btn">Add Project</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="Ajax/add_project.js"></script>
<?php include 'include/footer.php'?>