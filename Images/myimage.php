<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image">
<br/><br />
<input type="submit" name="sumit" value="upload"/>



<?php
if(isset($_POST["sumit"]))

{
	
	if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
	{
	
	echo "PLEASE SELECT AN IMAGE ";
	}	
	
	else
	{
	$image=addslashes($_FILES['image']['tmp_name']);
	$name=addslashes($_FILES['image']['name']);
	$image=file_get_contents($image);
	$image=base64_encode($image);
	setimage($name,$image);
	}	
	echo "<br/>";
	displayimage();
}

function setimage($name,$image)
{
	include("config.php");
	$query=mysql_query("insert into images(name,image)values ('$name','$image')");
	
	if($query)
	{
		echo "Picture uploaded";
		
		}
	else
	{
		echo "Picture not uploaded";
		
		}

}

//=====================DISPLAY Image function==============
function displayimage()
{
	
	include("config.php");
	$query=mysql_query("select * from images");
	
	while($row=mysql_fetch_array($query))
	{
		echo '<span>';
	echo '<img hspace="20" vspace="5" height="100" width="100" src="data:Image;base64,'.$row[2].' "/>';
		echo "</span>";
		}
	
	
	
}
?>



</form>


</body>
</html>