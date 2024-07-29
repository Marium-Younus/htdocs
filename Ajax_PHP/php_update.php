<?php
$up_id = $_POST["up_id"];
$up_n = $_POST["up_name"];
$up_s = $_POST["up_subject"];
$up_a = $_POST["up_age"];
$connect = mysqli_connect("localhost","root","","ajaxphp_db");
$query= "update student set std_name ='{$up_n}',std_subject='{$up_s}',std_age ='{$up_a}' where std_id = '{$up_id}' ";
$execute = mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($execute)
    {
        echo 1; // this echo sent the data from PHP to AJAX "data" variable
    }
    else
    {
        echo mysqli_error($connect);
    }
?>

