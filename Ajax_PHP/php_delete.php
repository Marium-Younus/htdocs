<?php
$del_id = $_POST["d_id"];
$connect = mysqli_connect("localhost","root","","ajaxphp_db"); //connection
$query= " delete from  student where std_id = {$del_id} "; //query
$execute = mysqli_query($connect,$query) or die(mysqli_error($connect));
    if($execute)
    {
        echo 1;
    }
    else
    {
        echo 0;
    }
?>

