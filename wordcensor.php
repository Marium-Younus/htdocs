<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$find = array('afzal','shaheer', 'rafay');
$replace = array('af**l', 'sha***r', 'ra**y');

$user_input = '';
if(isset($_POST['user_input'])&& !empty($_POST['user_input']))
{
	$user_input = $_POST['user_input'];
	$user_input_new = str_replace($find,$replace,strtolower($user_input));
	
	echo $user_input_new;
}
?>
<hr />

<form action="wordcensor.php" method="post">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
<br />
<br />
<input type="submit" value="Submit" />

</form>

</body>
</html>