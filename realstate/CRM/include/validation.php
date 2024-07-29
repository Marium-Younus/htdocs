<?php
//======================== Email Validation ========================
function Email($e){
	$email = filter_var($e,FILTER_VALIDATE_EMAIL);
	return $email;
}
//======================== Image Validation ========================
function Image($tmp_name, $path, $filename){	
	$extention = pathinfo($filename, PATHINFO_EXTENSION);
	$valid_extention = array("jpg", "jpeg", "png", "gif");
	if(in_array($extention, $valid_extention)){	
		$new_name = rand().".".$extention;
		if(move_uploaded_file($tmp_name, $path.$new_name)){
			return $new_name;
		}		
	}
}
//======================== Description Validation ========================
function Description($des){
	$string = $des;
	$validation = str_replace("'", "", $string);
	return $validation;		
}




?>