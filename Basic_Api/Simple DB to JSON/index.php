<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>API JSON</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
</head>

<body>
<?php
include("db.php");
if(isset($_GET["btnsub"]))
{
	
	$title =$_GET["txt_title"];
	$year =$_GET["txt_year"];
	$response =$_GET["resposne"];
	$sql = "select * from tbl_movie where Title = '".$title."' && Year = '".$year."'";
	$res = mysqli_query($connect,$sql);
	$count=mysqli_num_rows($res);
	if($response == "JSON")
	{
		
		if($count>0)
		{
			while($row=mysqli_fetch_assoc($res))
			{
				$arr[] =$row;
				$tit =$row["Title"];
				$year =$row["Year"];
				$genre=$row["Genre"];
				$direct = $row["Director"];
				$img =$row["Poster"];
				
			}	
			$json_encode= json_encode($arr);
		}
		else
		{
			$json_encode = "No Record Found";
			
		}
	}
	else
	{
		
		
	}
	
	
}





?>




<div class="jumbotron">
<h1>Examples</h1>
<form action="index.php" method="get" >
<table class="table table-borderless">
	<tr>
    <td>Title :<input type="text" class="form-control" placeholder="Title" name="txt_title"/></td>
    <td>Year: <input type="text" class="form-control" placeholder="Year" name="txt_year"/></td>
    <td>Response:<select class="form-control" name="resposne">
    				<option>JSON</option>
                    <option>XML</option>
                    </select>
    </td>
    
    <td><br /><input type="submit" class="btn btn-lg btn-primary" name="btnsub" /></td>
    </tr>


</table>
</form>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Response
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo @$json_encode?></p>
      <footer class="blockquote-footer text-info"><b><?php echo @$response. " Response" ?></b> </footer>
    </blockquote>
  </div>
 
</div>
</div>

<div class="col-md-6">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo "images/".$img ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo @$tit?></h5>
     <h5 class="card-title"></h5>
    <p class="card-text"><?php echo @$genre?></p>
    <p class="card-text"><?php echo @$direct?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>



</body>
</html>