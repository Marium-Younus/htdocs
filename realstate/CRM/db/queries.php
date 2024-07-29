<?php
include 'config.php';
//====================================== Dashbord queries ======================================
function admin_table(){
	$sql = "SELECT * FROM admin";
	$get = db_query($sql);
	return($get);
}
function admin_edit($id){
	$sql = "SELECT * FROM admin where admin_id = '".$id."'";
	$get = db_query($sql);
	return($get);
}
function admin_update($id, $admin_name, $admin_email, $admin_password, $admin_number, $admin_image){
	$sql = "UPDATE `admin` SET `admin_name`= '".$admin_name."', `admin_email`= '".$admin_email."', `admin_password`= '".$admin_password."', `admin_number`= '".$admin_number."', `admin_image`= '".$admin_image."' WHERE `admin_id`='".$id."' ";
	$get = db_query($sql);
	return($get);
}
//====================================== Client queries ======================================
function add_client($client_name, $client_contact, $client_email, $client_dob, $client_cnic, $client_pan, $client_address, $client_city, $client_state, $client_pin, $client_occupation, $client_organization, $client_designation, $client_source){
	$sql = "INSERT INTO `client`(`client_name`, `client_contact`, `client_email`, `client_dob`, `client_cnic`, `client_pan`, `client_address`, `client_city`, `client_state`, `client_pin`, `client_occupation`, `client_organization`, `client_designation`, `client_source`) VALUES ('".$client_name."', '".$client_contact."', '".$client_email."', '".$client_dob."', '".$client_cnic."', '".$client_pan."', '".$client_address."', '".$client_city."', '".$client_state."', '".$client_pin."', '".$client_occupation."', '".$client_organization."', '".$client_designation."', '".$client_source."')";
	$get = db_query($sql);
	return($get);
}
function client_table($condition, $column_name){
	$sql = "SELECT * FROM client WHERE $condition = '$column_name'";
	$get = db_query($sql);
	return($get);
}
function client(){
	$sql = "SELECT * FROM client";
	$get = db_query($sql);
	return($get);
}
//====================================== Agent queries ======================================
function add_agent($agent_name, $agent_contact, $agent_email, $agent_nic, $agent_pan, $agent_address, $agent_city, $agent_state, $agent_pin, $agent_deal){
	$sql = "INSERT INTO `agent`(`agent_name`, `agent_contact`, `agent_email`, `agent_nic`, `agent_pan`, `agent_address`, `agent_city`, `agent_state`, `agent_pin`, `agent_deal`) VALUES ('".$agent_name."',
	'".$agent_contact."', '".$agent_email."', '".$agent_nic."', '".$agent_pan."', '".$agent_address."', '".$agent_city."', '".$agent_state."', '".$agent_pin."', '".$agent_deal."')";
	$get = db_query($sql);
	return($get);
}
function agent_table($condition, $column_name){
	$sql = "SELECT * FROM agent WHERE $condition = '$column_name'";
	$get = db_query($sql);
	return($get);
}
function agent_search($condition, $column_name){
	$sql = "SELECT * FROM agent WHERE $condition LIKE '%$column_name%' ";
	$get = db_query($sql);
	return($get);
}
function agent(){
	$sql = "SELECT * FROM agent";
	$get = db_query($sql);
	return($get);
}
//====================================== project queries ======================================
function add_project($project_name, $project_location, $project_area, $project_image, $project_admin, $project_date, $project_description){
	$sql = "INSERT INTO `project`(`project_name`, `project_location`, `project_area`, `project_image`, `project_admin`, `project_date`, `project_description`) VALUES ('".$project_name."', '".$project_location."', '".$project_area."', '".$project_image."', '".$project_admin."', '".$project_date."', '".$project_description."')";
	$get = db_query($sql);
	return $get;
}
//====================================== Source queries ======================================
function add_source($source_name, $created_by){
	$sql = "INSERT INTO `source`(`source_name`, `created_by`) VALUES ('".$source_name."', '".$created_by."')";
	$get = db_query($sql);
	return($get);
}
function source_edit($condition, $column_name){
	$sql = "SELECT * FROM `source` WHERE $condition = '$column_name' ";
	$get = db_query($sql);
	return($get);
}
function source_update($update_column_name, $condition, $column_name){
	$sql = "UPDATE `source` SET `source_name`= '$update_column_name' WHERE $condition = '$column_name'";
	$get = db_query($sql);
	return($get);
}
function source_table(){
	$sql = "SELECT * FROM `source` order by source_id DESC";
	$get = db_query($sql);
	return($get);
}
function delete_source($condition, $column_id){
	$sql = "DELETE FROM `source` WHERE $condition = '$column_id' ";
	$get = db_query($sql);
	return($get);
}
//====================================== Project Type queries ======================================
function add_property_type($property_type_name, $created_by){
	$sql = "INSERT INTO `property_type`(`property_type_name`, `created_by`) VALUES ('".$property_type_name."','".$created_by."')";
	$get = db_query($sql);
	return($get);
}
function property_type_edit($condition, $column_name){
	$sql = "SELECT * FROM `property_type` WHERE $condition = '$column_name'";
	$get = db_query($sql);
	return($get);
}
function property_type_update($update_column_name, $condition, $column_name){
	$sql = "UPDATE `property_type` SET `property_type_name` = '".$update_column_name."' WHERE $condition = '$column_name' ";
	$get = db_query($sql);
	return($get);
}
function delete_property_type($condition, $column_id){
	$sql = "DELETE FROM `property_type` WHERE $condition = '$column_id' ";
	$get = db_query($sql);
	return($get);
}
function property_type_table(){
	$sql = "SELECT * FROM `property_type` order by property_type_id  DESC";
	$get = db_query($sql);
	return($get);
}
//====================================== Lead queries ======================================
function add_lead($client_name, $client_phone, $job_title, $department, $primary_address, $primary_city, $primary_state, $primary_postal_code, $primary_country, $other_address, $other_city, $other_state, $other_postal_code, $other_country, $email, $description, $status, $lead_source, $status_description, $lead_source_description, $opportunity_amount, $referred_by, $assigned_to){
	$sql = "INSERT INTO `lead`(`client_name`, `client_phone`, `job_title`, `department`, `primary_address`, `primary_city`, `primary_state`, `primary_postal_code`, `primary_country`, `other_address`, `other_city`, `other_state`, `other_postal_code`, `other_country`, `email`, `description`, `status`, `lead_source`, `status_description`, `lead_source_description`, `opportunity_amount`, `referred_by`, `assigned_to`) VALUES ('".$client_name."', '".$client_phone."', '".$job_title."', '".$department."', '".$primary_address."', '".$primary_city."', '".$primary_state."', '".$primary_postal_code."', '".$primary_country."', '".$other_address."', '".$other_city."', '".$other_state."', '".$other_postal_code."', '".$other_country."', '".$email."', '".$description."', '".$status."', '".$lead_source."', '".$status_description."', '".$lead_source_description."', '".$opportunity_amount."', '".$referred_by."', '".$assigned_to."')";
	$get = db_query($sql);
	return $get;
}
function lead($id, $fk_id){
	$sql = "SELECT * FROM `agent` INNER JOIN lead ON $id = $fk_id";
	$get = db_query($sql);
	return($get);
}











?>