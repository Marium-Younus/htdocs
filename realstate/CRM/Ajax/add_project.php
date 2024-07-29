<?php
include '../db/queries.php';
include '../include/validation.php';

$project_name = $_POST["project_name"];
$project_location = $_POST["project_location"];
$project_area = $_POST["project_area"];
$project_image = $_FILES["project_image"]["name"];
$temp_name = $_FILES["project_image"]["tmp_name"];
$project_admin = $_POST["project_admin"];
$project_date = $_POST["project_date"];
$project_description = $_POST["project_description"];

if($new_name = Image($temp_name, "../vendors/images/project_images/", $project_image)){
	if($description = Description($project_description)){
		add_project($project_name, $project_location, $project_area, $new_name, $project_admin, $project_date, $description);
		echo "Record Inserted";
	}else{
		echo " Remove Special Character from Description";
	}
}else{
	echo "Enter valid Image('jpg', 'jpeg', 'png')";
}
	


?>