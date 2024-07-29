<?php
include '../db/queries.php';

$source = $_POST["source"];
$sql1 = admin_table();
$admin = mysqli_fetch_assoc($sql1); 

switch($source){
//	======================================= load Table =======================================
	case "source_table":
		$sql = source_table();		
		$source_table="";	
			while($row = mysqli_fetch_assoc($sql)){
				$source_table = '<tr>
										<td class="table-plus">'.$row["source_id"].'</td>
										<td>'.$row["source_name"].'</td>
										<td>'.$row["created_by"].'</td>
										<td><div class="dropdown"><a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
										role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#" data-eid='.$row["source_id"].' id="source_id" data-toggle="modal" data-target="#login-modal"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" data-did='.$row["source_id"].' id="delete_id"><i class="dw dw-delete-3"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>';
				echo $source_table;
			}break;
//	======================================= Add Source =======================================		
	case "add_source":
		$sql = add_source($_POST["source_name"], $admin["admin_name"]);
		echo "Record Inserted";
		break;
//	======================================= Edit Source =======================================		
	case "source_edit":
		$sql = source_edit("source_id", $_POST["source_id"]);
		$source_edit="";
		while($row = mysqli_fetch_assoc($sql)){
			$source_edit .= '<div class="form-group row">							
								<div class="col-sm-12 col-md-12">
								    <label class="col-form-label">Source Name</label>
									<input class="form-control" type="text" id="update_source_name" name="update_source_name" value='.$row["source_name"].'>
									<input class="d-none" value="update_source" name="source" id="update_source">
									<input class="d-none" value='.$row["source_id"].' name="update_source_id" id="update_source_id">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12">
									<button type="submit" class="btn btn-primary btn-lg float-right" id="update_source_btn" data-dismiss="modal" aria-hidden="true">Update Source</button>
								</div>
							</div>';
			echo $source_edit;
		}break;	
//	======================================= Update Source =======================================		
	case "update_source":
		$sql = source_update($_POST["update_source_name"], "source_id", $_POST["update_source_id"]);
		if($sql){
			echo "Record Updated";
		}else{
			echo "Record Not Updated";
		}
		break;
//	======================================= Delete Source =======================================			
	case "delete_source";
		$sql = delete_source("source_id", $_POST["delete_source"]);
		echo "Record Deleted";
		break;
}
?>