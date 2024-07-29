<?php
$studentname = $_POST["n"];
$studentsubject = $_POST["s"];
$studentage = $_POST["a"];
$connect = mysqli_connect("localhost","root","","ajaxphp_db");
$query= "insert into student (std_name,std_subject,std_age) values ('{$studentname}','{$studentsubject}','{$studentage}')";
$execute = mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($execute)
    {
        echo 1; // this echo sent the data from PHP to AJAX "data" variable
    }
    else
    {
        echo 0;
    }
?>

