<?php include 'include/header.php';?>


<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="title"><h4>Add Source</h4></div>
					<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Source</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-md-6">
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left"><h4 class="text-blue h4">Add Source</h4></div>
						</div>
						<form id="add_source">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Source Name</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Enter Source Name" id="source_name" name="source_name">
									<input class="d-none" value="add_source" name="source">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12">
									<button type="button" class="btn btn-primary btn-lg float-right" id="source_btn" name="source_btn">Add Source</button>
									<button type="button" class="btn btn-primary btn-lg float-right mr-2" onclick="document.getElementById('source_name').value = ''">Reset</button>
								</div>
							</div>			
						</form>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">List of Source</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">ID</th>
										<th>Source Name</th>
										<th>Created By</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody id="source_table">
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content" id="update">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">×</button>
							<h2 class="text-center">Update Source Name</h2>
						</div>
						<form id="source_update"></form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="Ajax/add-source.js"></script>
<?php include 'include/footer.php';?>