<?php 
include 'include/header.php';
?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title"><h4>Add Agent</h4></div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Agent</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<!-- Default Basic Forms Start -->
		<div class="pd-20 card-box mb-30">
			<div class="clearfix">
				<div class="pull-left">
					<h4 class="text-blue h4">Add Agent</h4>
				</div>
			</div>
			<form id="add_agent" method="post">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Agent Name</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" type="text" placeholder="Enter Agent Name" id="agent_name" name="agent_name"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Agent Contact</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="Enter Agent Contact" type="number" id="agent_contact" name="agent_contact"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Agent Email</label>
							<div class="col-sm-12 col-md-9">								
								<input class="form-control" placeholder="Enter Agent Email" type="email" id="agent_email" name="agent_email"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">Agent CNIC</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" type="number" placeholder="Enter CNIC No." id="agent_cnic" name="agent_cnic"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">PAN</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="PAN" type="text" id="agent_pan" name="agent_pan"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Address</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Address" type="text" id="agent_address" name="agent_address"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">City</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="City" type="text" id="agent_city" name="agent_city"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">State</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="State" type="text" id="agent_state" name="agent_state"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">	
							<label class="col-sm-12 col-md-3 col-form-label">PIN Code</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control number_input" placeholder="PIN Code" type="number" id="agent_pin" name="agent_pin"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Deals In</label>
							<div class="col-sm-12 col-md-9">							
								<input class="form-control" placeholder="Deals In" type="text" id="agent_deal" name="agent_deal"/>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group row">
							<div class="col-sm-12 col-md-12">
								<button type="submit" class="btn btn-primary btn-lg float-right" name="client_btn" id="agent_btn">Add Agent</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="Ajax/add_agent.js"></script>
<?php include 'include/footer.php'?>