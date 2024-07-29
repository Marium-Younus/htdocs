<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>Login Page</h1>
<?php
$conect=mysqli_connect('localhost','root','','SecureDB');
if(isset($_POST['btnlog']))
{
	
	$user=$_POST["un"];
$pwd=$_POST["pwd"];

$query=mysqli_query($conect,"select * from login where name='$user'");
$row=mysqli_fetch_array($query);
$decryptvalue = base64_decode($row["password"]);

	if($row["name"]==$user && $decryptvalue ==$pwd)
		{
	
	$_SESSION["User_Name"]=$row["name"];

	header("Location:welcome.php");
		}
	else
	{
		
	 echo mysqli_error($conect);
	}

	}


?>
    <form method="post">
    <input type="text" name="un" placeholder="Enter name">
    <input type="text" name="pwd" placeholder="Enter Password">
     <input type="submit" name="btnlog" value="Insert">
     
    </form>
</body>
</html>