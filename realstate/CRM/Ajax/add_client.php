<?php
include '../db/queries.php';
include '../include/validation.php';

$client_name = $_POST["client_name"];
$client_contact = $_POST["client_contact"];
$email = $_POST["client_email"];
$dob = $_POST["client_dob"];
$client_cnic = $_POST["client_cnic"];
$client_pan = $_POST["client_pan"];
$client_address = $_POST["client_address"];
$client_city = $_POST["client_city"];
$client_state = $_POST["client_state"];
$client_pin = $_POST["client_pin"];
$client_occupation = $_POST["client_occupation"];
$client_organization = $_POST["client_organization"];
$client_designation = $_POST["client_designation"];
$client_source = $_POST["client_source"];
$email_count = client_table('client_email', $email);


if(Email($email)){
	if(mysqli_num_rows($email_count) > 0){
		echo "Email Already Exists";
	}else{
		add_client($client_name, $client_contact, $email, $dob, $client_cnic, $client_pan, $client_address, $client_city, $client_state, $client_pin, $client_occupation, $client_organization, $client_designation, $client_source);
		echo "Record Inserted";
	}
}else{
	echo "Enter Valid Email";
}		
	

?>