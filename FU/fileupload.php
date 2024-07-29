<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>	
<?php
if(isset($_POST["btn"]))
{
	$file = $_FILES["fileupload"]["name"];
	$tmp_name = $_FILES["fileupload"]["tmp_name"];
	$location= "images/";
	
	if(move_uploaded_file($tmp_name,$location.$file))
			{
				echo "uploaded";
				
			}
else
{
	echo "not uploaded";
}

}
?>

<form   method="post" enctype="multipart/form-data">
 									<div class="form-group">
                                    <label for="exampleInputEmail1">Upload Book Image</label>
										<input type="file" class="form-control" id="inputName" name="fileupload"  onChange="readURL(this)">
									</div>
                                    <div class="form-group">
										<input type="submit" name="btn" value="Upload"/>
									</div>
</form>
</body>
</html>