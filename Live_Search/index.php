<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
    <div class="row m-5">
      <?php 
		$connect = mysqli_connect("localhost","root","","ajaxphp_db"); 
		
		if(isset($_POST["btnsubmit"]))
		{
		$search=$_POST["search"];
		$query = "select * from student where std_name like '%$search%'";
		}
       else
	   {
		
        $query = "select * from student";
		$search="";	
	
	   }?>
     <div class="col-md-12 mb-5">
     <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo @$search?>" placeholder="Search" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button type="submit" class="btn btn-outline-secondary"  id="button-addon2" name="btnsubmit">Search</button>
        </div>
 
        </form>
        </div>
      
        
     	<?php 
		$exe=mysqli_query($connect,$query);
		$count = mysqli_num_rows($exe);
        if($count>0)
        {
           while($row=mysqli_fetch_array($exe))
		   {
		
        ?>
            <div class="col-md-3">
            <div class="card" style="width: 18rem;">
          <img src="<?php echo "images/".$row["std_image"]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["std_name"]?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <p class="card-text"><?php echo $row["std_sub"]?></p>
          </div>
          </div>
 

    </div>
 <?php
  			}
        }
	  
        else{
			$message ="No Record Found";
        } 
		
		
		
  ?>
  <div class="col-12">
  		<h1><?php echo @$message?></h1>
    </div>
    </div>

    </div>
</body>
</html>