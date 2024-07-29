<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body> 
<?php
$con=mysqli_connect("localhost","root","","singup1");
if(isset($_POST['sub']))
{
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$ecuation=$_POST['education'];
	$d=$_POST['dob'];
	$a=implode(",",$ecuation);
	$sql="insert into sign(username,password,education,DOB)values('$u','$p','$a','$ds')";
	$rs=mysqli_query($con,$sql);
}
?>
<form method="post">
<input type="text" name="user"/>
<input type="password" name="pass"/>
<input type="checkbox" name="education[]" value="matric"/>:Matric
<input type="checkbox" name="education[]" value="inter"/>:Inter
<input type="checkbox" name="education[]" value="bs"/>:BS
<input type="checkbox" name="education[]" value="masters"/>:Masters
<input type="date" name="dob"/>
<input type="submit" value="insert" name="sub" />
</body>
</html>