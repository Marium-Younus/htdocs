<?php 

require_once "connection.php";

$totalaga="select * from likes where `Image_ByUserID`='".$_POST['id']."' and Seen='False' ";
$totalagares=$con->query($totalaga);
if(mysqli_num_rows($totalagares)<100) {
    echo mysqli_num_rows($totalagares);
}
else {
    echo "99+";
}

?>