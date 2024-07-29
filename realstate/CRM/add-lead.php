<?php 
include 'include/header.php';
?>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Add New Lead</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Add New Lead</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
		<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Add New Lead</h4>
							</div>
						</div>
						<form id="add_lead_form">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Client Name</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client Name" name="client_name" id="client_name"/>
											<input type="hidden" value="add_lead" name="lead">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Client Mobile</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control number_input" type="number" placeholder="Enter Client Phone No." name="client_phone" id="client_phone"/>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Job Title</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client Job Title" name="job_title" id="job_title"/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Department</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client Department" name="department" id="department"/>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<div class="col-sm-12 col-md-12">
											<h5 class="h5 text-blue">Primary Address</h5>
										</div>
									</div>									
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Address</label>
										<div class="col-sm-12 col-md-9">
											<textarea class="form-control" placeholder="Enter Client Address" id="primary_address" name="primary_address"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">City</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client City" id="primary_city" name="primary_city"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">State/Region</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client State/Region" id="primary_state" name="primary_state"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Postal Code</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control number_input" type="number" placeholder="Enter Postal Code" id="primary_postal_code" name="primary_postal_code"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Country</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Country" id="primary_country" name="primary_country"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Email</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="email" placeholder="Enter Client Email" name="client_email" id="client_email"/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<div class="col-sm-12 col-md-12">
											<h5 class="h5 text-blue">Other Address</h5>
										</div>
									</div>									
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Address</label>
										<div class="col-sm-12 col-md-9">
											<textarea class="form-control" placeholder="Enter Client Address" id="other_address" name="other_address"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">City</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client City" id="other_city" name="other_city"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">State/Region</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Client State/Region" id="other_state" name="other_state"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Postal Code</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control number_input" type="number" placeholder="Enter Postal Code" id="other_postal_code" name="other_postal_code"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Country</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Enter Country" id="other_country" name="other_country"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-6 col-form-label">Copy from Primary Address</label>
										<div class="col-sm-12 col-md-6 mt-2">
											<input type="checkbox" onClick="sync()" id="check">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Description</label>
										<div class="col-sm-12 col-md-9">
											<textarea class="form-control" placeholder="Description" name="description" id="description"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"><div class="pull-left"><h4 class="text-blue h4">More Information</h4></div></div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Status</label>
										<div class="col-sm-12 col-md-9">											
											<select class="custom-select col-12" name="status" id="status">
												<option selected value="0">Select Status</option>
												<option value="New">New</option>
												<option value="Assigned">Assigned</option>
												<option value="In progress">In progress</option>
												<option value="Converted">Converted</option>
												<option value="Recycled">Recycled</option>
												<option value="Dead">Dead</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Lead Source</label>
										<div class="col-sm-12 col-md-9">											
											<select class="custom-select col-12" id="lead_source" name="lead_source">
												
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Status Description</label>
										<div class="col-sm-12 col-md-9">
											<textarea class="form-control" placeholder="Status Description" name="status_description" id="status_description"></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Lead Source Description</label>
										<div class="col-sm-12 col-md-9">
											<textarea class="form-control" placeholder="Lead Source Description" name="lead_source_description" id="lead_source_description"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Opportunity Amount</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control number_input" type="number" placeholder="Enter Amount" name="opportunity_amount" id="opportunity_amount"/>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Referred By</label>
										<div class="col-sm-12 col-md-9">
											<input class="form-control" type="text" placeholder="Referred By" name="referred_by" id="referred_by"/>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"><div class="pull-left"><h4 class="text-blue h4">Other</h4></div></div>
							<div class="row">
								
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-12 col-md-3 col-form-label">Assigned To</label>
										<div class="col-sm-12 col-md-4">
											<input class="form-control" type="text" placeholder="Search" name="assigned_to_search" id="assigned_to_search"/>
										</div>
										<div class="col-sm-12 col-md-5">
											<select class='form-control'  id="assigned_to" name="assigned_to"></select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6"></div>
								<div class="col-md-6">
									<div class="form-group row">
										<div class="col-sm-12 col-md-12 mt-3">
											<button type="button" class="btn btn-primary btn-lg float-right" id="add_lead_btn">Add Lead</button>
										</div>
									</div>
								</div>
							</div>													
						</form>						
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	function lead_source(){
		$.ajax({
			url: "Ajax/add-lead.php",
			type: "POST",
			data: {lead: "select_lead_source"},
			success: function(data){
				$("#lead_source").html(data);
			}
		});
	}
	lead_source();
	
	$("#assigned_to_search").keyup(function(){
		var assigned_to_search = $("#assigned_to_search").val();
		if(assigned_to_search != ""){
		   $.ajax({
			url: "Ajax/add-lead.php",
			type: "POST",
			data: {lead: "assigned_to_search", assigned_to_search:assigned_to_search},
			success: function(data){
				$("#assigned_to").fadeIn("fast").html(data);
			}
		});
		   }
		   else{
			   $("#assigned_to").fadeOut();
		   }
	});
	
	$(document).on("click", "#add_lead_btn", function(e){
		e.preventDefault();
		var client_name = $("#client_name").val();
		var client_phone = $("#client_phone").val();
		var job_title = $("#job_title").val();
		var department = $("#department").val();
		var primary_address = $("#primary_address").val();
		var primary_city = $("#primary_city").val();
		var primary_state = $("#primary_state").val();
		var primary_postal_code = $("#primary_postal_code").val();
		var primary_country = $("#primary_country").val();
		var client_email = $("#client_email").val();
		var description = $("#description").val();
		var status = $("#status").val();
		var status_description = $("#status_description").val();
		var lead_source_description = $("#lead_source_description").val();
		var opportunity_amount = $("#opportunity_amount").val();				
		if(client_name==""){
		   $("#client_name").addClass("border border-danger");
		   }else{
			$("#client_name").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_phone==""){
		   $("#client_phone").addClass("border border-danger");
		   }else{
			$("#client_phone").removeClass("border-danger").addClass("border-primary");
		}
		
		if(job_title==""){
		   $("#job_title").addClass("border border-danger");
		   }else{
			$("#job_title").removeClass("border-danger").addClass("border-primary");
		}
		
		if(department==""){
		   $("#department").addClass("border border-danger");
		   }else{
			$("#department").removeClass("border-danger").addClass("border-primary");
		}
		
		if(primary_address==""){
		   $("#primary_address").addClass("border border-danger");
		   }else{
			$("#primary_address").removeClass("border-danger").addClass("border-primary");
		}
		
		if(primary_city==""){
		   $("#primary_city").addClass("border border-danger");
		   }else{
			$("#primary_city").removeClass("border-danger").addClass("border-primary");
		}
		
		if(primary_state==""){
		   $("#primary_state").addClass("border border-danger");
		   }else{
			$("#primary_state").removeClass("border-danger").addClass("border-primary");
		}
		
		if(primary_postal_code==""){
		   $("#primary_postal_code").addClass("border border-danger");
		   }else{
			$("#primary_postal_code").removeClass("border-danger").addClass("border-primary");
		}
		
		if(primary_country==""){
		   $("#primary_country").addClass("border border-danger");
		   }else{
			$("#primary_country").removeClass("border-danger").addClass("border-primary");
		}
		
		if(client_email==""){
		   $("#client_email").addClass("border border-danger");
		   }else{
			$("#client_email").removeClass("border-danger").addClass("border-primary");
		}
		
		if(description==""){
		   $("#description").addClass("border border-danger");
		   }else{
			$("#description").removeClass("border-danger").addClass("border-primary");
		}
		
		if(status==0){
		   $("#status").addClass("border border-danger");
		   }else{
			$("#status").removeClass("border-danger").addClass("border-primary");
		}
		
		if(status_description==""){
		   $("#status_description").addClass("border border-danger");
		   }else{
			$("#status_description").removeClass("border-danger").addClass("border-primary");
		}
		
		if(lead_source_description==""){
		   $("#lead_source_description").addClass("border border-danger");
		   }else{
			$("#lead_source_description").removeClass("border-danger").addClass("border-primary");
		}
		
		if(opportunity_amount==""){
		   $("#opportunity_amount").addClass("border border-danger");
		   }else{
			$("#opportunity_amount").removeClass("border-danger").addClass("border-primary");
		}	
		
		if(client_name!="" && client_phone!="" && job_title!="" && department!="" && primary_address!="" && primary_city!="" && primary_state!=0 && primary_postal_code!="" && primary_country!="" && client_email!="" && description!="" && status!=0 && status_description!="" && lead_source_description!="" && opportunity_amount!=""){
		   var SweetAlert = function () {};		
			$.ajax({
				url: "Ajax/add-lead.php",
				type: "POST",
				data: $("#add_lead_form").serialize(),
				success: function(data){
					var SweetAlert = function () {};
					SweetAlert.prototype.init = function () {
						//Custom Position Message
						swal({
							position: 'top-end',
							type: 'success',
							title: 'New Lead Inserted',
							showConfirmButton: false,
							timer: 1500
						})
					},
						$.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
					(window.jQuery),
					//initializing
					function ($) {
					"use strict";
					$.SweetAlert.init()
				}(window.jQuery);
			}
		});
		   }
	});
});
	

	
	
function sync()
{
	if(document.getElementById('check').checked==true){
	    document.getElementById('other_address').value=document.getElementById('primary_address').value;
		document.getElementById('other_city').value=document.getElementById('primary_city').value;
		document.getElementById('other_state').value=document.getElementById('primary_state').value;
		document.getElementById('other_postal_code').value=document.getElementById('primary_postal_code').value;
		document.getElementById('other_country').value=document.getElementById('primary_country').value;
	   }
	else{
		document.getElementById('other_address').value="";
		document.getElementById('other_city').value="";
		document.getElementById('other_state').value="";
		document.getElementById('other_postal_code').value="";
		document.getElementById('other_country').value="";
	}
}
</script>
<?php include 'include/footer.php'?>