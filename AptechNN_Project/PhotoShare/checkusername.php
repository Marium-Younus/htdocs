<?php 


require_once "connection.php";

$srchuser="select * from users where Username='".$_POST['uname']."'";
   $srchuserres=$con->query($srchuser);
   if(mysqli_num_rows($srchuserres)>0) {
   
   echo "Username Already Taken.";
}
else {
    echo "Not Taken";
}

?>