<?php

if(isset($_POST['sub']))
{
	session_start();
	$code = $_SESSION['cap_code'];
	$user = $_POST['cap'];
	if($code == $user)
	{
		echo "valid";
	}
	
	else
	{
		echo "invalid";
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="main.php" method="post">

Name: <input type="text" name="name" />
<br />

Captcha: <input type="text" name="cap" /> <img src="simple_catpcha.php" />

<input type="submit" value="verify" name="sub">


</form>
</body>
</html>