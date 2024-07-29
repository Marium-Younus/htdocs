<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
<?php
$conect=mysqli_connect('localhost','root','','SecureDB');
if(isset($_POST['btnsub']))
{
	$usrname=$_POST["un"];
	$pass=base64_encode($_POST["pwd"]);
	
	$execute=mysqli_query($conect,"insert into login (name,password) values ('".$usrname."','".$pass."')");
	if($execute)
	{
		echo 'inserted';
	}
	else
	{
		echo mysqli_error($conect);
	}
	}


?>
    <form action="Home.php" method="post">
    <input type="text" name="un" placeholder="Enter name">
    <input type="text" name="pwd" placeholder="Enter Password">
     <input type="submit" name="btnsub" value="Insert">
     <a href="loginpage.php"> Login</a>
    </form>
</body>
</html>