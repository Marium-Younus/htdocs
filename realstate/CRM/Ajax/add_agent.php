<?php
include '../db/queries.php';
include '../include/validation.php';

$agent_name = $_POST["agent_name"];
$agent_contact = $_POST["agent_contact"];
$agent_email = $_POST["agent_email"];
$agent_cnic = $_POST["agent_cnic"];
$agent_pan = $_POST["agent_pan"];
$agent_address = $_POST["agent_address"];
$agent_city = $_POST["agent_city"];
$agent_state = $_POST["agent_state"];
$agent_pin = $_POST["agent_pin"];
$agent_deal = $_POST["agent_deal"];

$sql = agent_table("agent_email", $agent_email);


if(Email($agent_email)){
	if(mysqli_num_rows($sql) > 0){
		echo "Email Already Exists";
	}else{
		add_agent($agent_name, $agent_contact, $agent_email, $agent_cnic, $agent_pan, $agent_address, $agent_city, $agent_state, $agent_pin, $agent_deal);
		echo "Record Inserted";
	}
}else{
	echo "Enter Valid Email";
}

?>