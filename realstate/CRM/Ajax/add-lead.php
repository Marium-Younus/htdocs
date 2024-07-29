<?php
include '../db/queries.php';
include '../include/validation.php';

$lead = $_POST["lead"];
switch($lead){
	case "select_lead_source":
		$sql = source_table();
		$lead_source = "";
		while($row = mysqli_fetch_assoc($sql)){
			$lead_source = '<option value='.$row["source_name"].'>'.$row["source_name"].'</option>';
			echo $lead_source;
		}break;
		
	case "assigned_to_search":
		$sql = agent_search("agent_name", $_POST["assigned_to_search"]);
		$assigned_to = "";
		if(mysqli_num_rows($sql)){
			while($row = mysqli_fetch_assoc($sql)){
				$assigned_to .= '<option class="border border-dark p-1" value='.$row["agent_id"].'>'.$row["agent_name"].'</option>';			
			}
		}else{
			$assigned_to .= '<option class="border border-dark p-1" value="0">No Record Found</option>';		
		}
		echo $assigned_to;
		break;
	case "add_lead":
		$description = Description($_POST["description"]);
		$status_description = Description($_POST["status_description"]);
		$lead_source_description = Description($_POST["lead_source_description"]);
		$sql = add_lead($_POST["client_name"], $_POST["client_phone"], $_POST["job_title"], $_POST["department"], $_POST["primary_address"], $_POST["primary_city"], $_POST["primary_state"], $_POST["primary_postal_code"], $_POST["primary_country"], $_POST["other_address"], $_POST["other_city"], $_POST["other_state"], $_POST["other_postal_code"], $_POST["other_country"], $_POST["client_email"], $description, $_POST["status"], $_POST["lead_source"], $status_description, $lead_source_description, $_POST["opportunity_amount"], $_POST["referred_by"], $_POST["assigned_to"]);
		if($sql){
			echo "Record Inserted";
		}
		break;
}


												

?>