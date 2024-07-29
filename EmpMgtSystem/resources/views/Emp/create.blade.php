<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Employee</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="{{route('emp.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Employee Name</label>
    <input type="text" class="form-control" name="empName" placeholder="name">
  </div>
   
    <div class="form-group">
    <label for="exampleFormControlInput1">Employee Designation</label>
    <input type="text" class="form-control" name="empDesignation" placeholder="Designation">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Employee Skills</label>
    <input type="text" class="form-control" name="empSkill" placeholder="skills">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Salary</label>
    <input type="text" class="form-control" name="empSal" >
  </div>
  <div class="form-group">
  	<input type="submit" value="Add Employees" class="btn btn-success">
  </div>

</form>
	</div>

</body>
</html>
