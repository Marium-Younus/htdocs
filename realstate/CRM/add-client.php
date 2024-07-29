<?php 
include 'include/header.php';
?>
<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title">
						<h4>Add Client</h4>
					</div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Client</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Default Basic Forms Start -->
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left"><h4 class="text-blue h4">Add Client</h4></div>
			</div>
			<form method="post" enctype="multipart/form-data" id="add_client">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Client Name</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" type="text" placeholder="Enter Client Name" name="client_name" id="client_name"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Client Contact</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="Enter Client Contact" type="number" name="client_contact" id="client_contact"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Client Email</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Enter Client Email" type="email" name="client_email" id="client_email"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">DOB</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" type="date" placeholder="Date of Birth" name="client_dob" id="client_dob"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Client CNIC No.</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="Enter CNIC No" type="number" name="client_cnic" id="client_cnic"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">PAN</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="PAN" type="text" name="client_pan" id="client_pan"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Address</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Address" type="text" name="client_address" id="client_address"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">City</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="City" type="text" name="client_city" id="client_city"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">								
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">State</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="State" type="text" name="client_state" id="client_state"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">PIN Code</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control number_input" placeholder="PIN Code" type="number" name="client_pin" id="client_pin"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">								
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Occupation</label>
							<div class="col-sm-12 col-md-9">							
								<select class="custom-select col-12" name="client_occupation" id="client_occupation">
									<option selected="" value="0">Choose...</option>
									<option value="Self Employee">Self Employee</option>
									<option value="Govt. Employee">Govt. Employee</option>
									<option value="Private Employee">Private Employee</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Organization</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control" placeholder="Organization" type="text" name="client_organization" id="client_organization"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">								
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Designation</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Designation" type="text" name="client_designation" id="client_designation"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Source</label>
							<div class="col-sm-12 col-md-9">							
								<select class="custom-select col-12" name="client_source" id="client_source">
									<option selected="" value="0">Choose...</option>
									<option value="Agent">Agent</option>
									<option value="Direct">Direct</option>
								</select>
							</div>
						</div>
					</div>
				</div>							
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
							<div class="col-sm-12 col-md-12">
								<button type="button" class="btn btn-primary btn-lg float-right" name="client_btn" id="client_btn">Add Client</button>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
	</div>
</div>
<script type="text/javascript" src="Ajax/add_client.js"></script>
<?php include 'include/footer.php'?>