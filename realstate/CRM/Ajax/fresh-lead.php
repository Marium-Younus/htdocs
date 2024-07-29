<?php
include '../db/queries.php';

$lead = $_POST["lead"];
switch($lead){
	case "lead_table":
		$sql = lead("agent_id", "assigned_to");
		$lead = "";
		if(mysqli_num_rows($sql) > 0){
			while($row = mysqli_fetch_assoc($sql)){
				$lead = '<tr>
										<td class="table-plus">'.$row["client_name"].'</td>
										<td>'.$row["client_phone"].'</td>
										<td>'.$row["email"].'</td>
										<td>'.$row["agent_name"].'</td>
										<td>'.$row["status"].'</td>
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
				echo $lead;
			}
		}
		
		break;
}

?>