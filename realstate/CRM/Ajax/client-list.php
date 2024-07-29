<?php
include '../db/queries.php';

$client = $_POST["client"];
switch($client){
	case "client_table":
		$sql = client();
		$client_table = "";
		if(mysqli_num_rows($sql) > 0){
			while($row = mysqli_fetch_assoc($sql)){
				$client_table = '<tr>
										<td class="table-plus">'.$row["client_name"].'</td>
										<td>'.$row["client_contact"].'</td>
										<td>'.$row["client_email"].'</td>
										<td>'.$row["client_address"].'</td>
										<td>'.$row["client_occupation"].'</td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
													role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
													<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>';
				echo $client_table;
			}
		}
		else{
			$client_table = '<tr>
										<td class="table-plus" colspan="6">No Data Found</td>
									</tr>';
			echo $client_table;
		}
		break;
}

?>