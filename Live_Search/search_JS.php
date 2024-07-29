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
     <?php 
	 	
		$connect = mysqli_connect("localhost","root","","ajaxphp_db");
		$search = $_GET["search"];
		$query = "select * from student where std_name like '%{$search}%'"; 
		$result=mysqli_query($connect,$query) or die("MYSQL Failed");
		$output = [];
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				$output = $row;
			}
		}
		else
		{
			$output['empty'] = ['empty'];
		}
			mysqli_close($connect);
			echo json_encode($output);
	  ?>
    <div class="container">
    <div class="row m-5">
   
     <div class="col-md-12 mb-5">
       <div class="input-group mb-3">
          <input type="text" class="form-control" id="search" onKeyUp="load_search()" placeholder="Search"/>     
       </div>
 
        </div>
      
        
     
            <div class="col-md-3" id="main">
           
          </div>
 

    </div>

  
    </div>

    </div>
    <script src="custom_js.js">
    
    </script>
</body>
</html>