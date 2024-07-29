<?php
	function db_conn(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "realstate";
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Connection Failed !!");
	return $conn;
}

function db_query($sql=null){
	if($sql!=null){
		$conn = db_conn();
		return mysqli_query($conn, $sql);
	}
}
?>