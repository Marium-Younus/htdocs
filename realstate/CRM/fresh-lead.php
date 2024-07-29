<?php include 'include/header.php'?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Fresh Leads</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Fresh Leads</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										January 2018</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Fresh Leads</h4>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Lead Name</th>
										<th>Contact</th>
										<th>Email</th>
										<th>Source/Agent</th>
										<th>Status</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody id="lead_table">									
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
				</div>				
			</div>
		</div>



<script type="text/javascript">
$(document).ready(function(){
	function load_table(){
		$.ajax({
			url: "Ajax/fresh-lead.php",
			type: "POST",
			data: {lead: "lead_table"},
			success: function(data){
				$("#lead_table").html(data);
			}
		});		
	}
	load_table();
});
</script>
<?php include 'include/footer.php'?>