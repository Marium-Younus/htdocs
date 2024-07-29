<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>

<body> 
<?php
if(isset($_POST["btn"]))
{



	


	
$filename  =	$_FILES["fileupload"]["name"];
$temp_name = $_FILES["fileupload"]["tmp_name"];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$destination = "assets/images/";
if($ext == "png" || $ext == "jpg" || $ext == "gif" || $ext == "jpeg")
{
			if(move_uploaded_file($temp_name,$destination.$filename))
			{
				
				$message = "File uploaded";
				}
			else
			{
					$message = "File not uploaded";
				
			}
	
}
else
{
	$message = "please choose file with extension .png , .jpg , .gif , .jpeg";
}
}

?>

<form method="post" enctype="multipart/form-data">
<div class="container">

	<div class="row">
    <div class="col-md-12">
   
    	<table class="table table-borderless">
        	<tr><td><h1>File Uploading Work</h1></td></tr>
        	<tr><td><input class="form-control" type="file" name="fileupload"/></td></tr>
            <tr><td><input class="btn btn-primary" type="submit" value="Upload" name="btn"/></td></tr>
             <tr><td><?php echo @$message?></td></tr>
        </table>    
   
    </div>  
  </div>
</div>
 </form>   
</body>
</html>