<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table border="3">
<tr>
<th>username</th>
<th>password</th>
<th>education</th>
<th>DOB</th>
<th>delete</th>
<th>update</th>
</tr>
</table>
<?php
include("conf.php");
$sql="select * from sing";
$rs=(mysqli_fetch_array($rs))
?>
{
	
    <tr><td><?php echo $result['username'];?></td><td><?php echo $result["password"]; ?> </td><td><?php echo $result['education']?></td>
    <td><?php echo $result['DOB'];?></td>
    <td><a href="del.php?abc  = <?php echo $result['username']?>">Delete </a> </td>
    <td><a href="update.php?xyz = <?php echo $result['username']?>">Update </a> </td>
    </tr>
	

</body>
</html>