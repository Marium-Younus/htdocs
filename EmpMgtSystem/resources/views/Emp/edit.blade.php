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
		<form action="{{route('emp.update',$rec->emp_id)}}" method="post">

@csrf
@method('PATCH')
  <div class="form-group">
    <label for="exampleFormControlInput1">Employee Name</label>
    <input type="text" class="form-control" name="empName" value='{{$rec->emp_name}}'>
  </div>
   
    <div class="form-group">
    <label for="exampleFormControlInput1">Employee Designation</label>
    <input type="text" class="form-control" name="empDesignation" value='{{$rec->designation}}'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Employee Skills</label>
    <input type="text" class="form-control" name="empSkill" value='{{$rec->skill}}'>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Salary</label>
    <input type="text" class="form-control" name="empSal" value='{{$rec->salary}}' >
  </div>
  <div class="form-group">
  	<input type="submit" value="Edit Employees" class="btn btn-success">
  </div>

</form>
	</div>

</body>
</html>
