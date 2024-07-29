<?php
include '../db/queries.php';

$property_type = $_POST["property_type"];
$sql1 = admin_table();
$admin = mysqli_fetch_assoc($sql1); 

switch($property_type){
	case "property_type_table":
		$sql = property_type_table();		
		$property_type="";	
			while($row = mysqli_fetch_assoc($sql)){
				$property_type = '<tr>
										<td class="table-plus">'.$row["property_type_id"].'</td>
										<td>'.$row["property_type_name"].'</td>
										<td>'.$row["created_by"].'</td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
													role="button" data-toggle="dropdown"><i class="dw dw-more"></i></a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdown-item" href="#" data-eid='.$row["property_type_id"].' id="edit_id_btn" data-toggle="modal" 
													data-target="#login-modal"><i class="dw dw-edit2"></i> Edit</a>
													<a class="dropdown-item" href="#" data-did='.$row["property_type_id"].' id="delete_id_btn"><i class="dw dw-delete-3"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>';
				echo $property_type;
			}break;
		
	case "add_property_type":
		$sql = add_property_type($_POST["property-type-name"], $admin["admin_name"]);
		echo "Record Inserted";
		break;
		
	case "edit_property_type";
		$sql = property_type_edit("property_type_id", $_POST["edit_id"]);
		$property_type_edit = "";
		while($row = mysqli_fetch_assoc($sql)){
			$property_type_edit .= '<div class="form-group row">							
								<div class="col-sm-12 col-md-12">
								    <label class="col-form-label">Property Type</label>
									<input class="form-control" type="text" id="update_property_type" name="update_property_type" 
									value='.$row["property_type_name"].'>
									<input class="d-none" value="update_property_type" name="property_type" id="property_type">
									<input class="d-none" value='.$row["property_type_id"].' name="update_property_type_id" id="update_property_type_id">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12 col-md-12">
									<button type="submit" class="btn btn-primary btn-lg float-right" id="update_property_type_btn" data-dismiss="modal" aria-hidden="true">Update Source</button>
								</div>
							</div>';
			echo $property_type_edit;
		}break;
		
	case "update_property_type";
		$sql = property_type_update($_POST["update_property_type"], "property_type_id", $_POST["update_property_type_id"]);
		if($sql){
			echo "Record Updated";
		}else{
			echo "Record Not Updated";
		}
		break;
		
	case "delete_id";
		delete_property_type("property_type_id", $_POST["delete_id"]);
		break;
		
		
		
}
?>