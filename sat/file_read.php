<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
if(isset($_POST['user_password']) && !empty($_POST['user_password']))
{
	$user_password = md5($_POST['user_password']) ;
	
	echo $user_password;
}
?>
<body>
<form action="" method="post">
password : <input type="text" name="user_password" /><br /><br />
<input type="submit" value="submit" />
</form>


</body>
</html>