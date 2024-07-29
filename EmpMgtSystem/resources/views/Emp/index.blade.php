<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		@if ($message = Session::get('info'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
        @endif
</div>
	<table class="table table-striped" >
    <thead>
        <tr>
            <td colspan="4" style="text-align: center">New Record 
                <a href="{{route('emp.create')}}" class="btn btn-outline-info">
                <i class="fa fa-plus" style="font-size:24px"></i></button></td>
        </tr>
      <tr>
     
        <th>Name</th>
        
        <th>Designation</th>
        <th>Skill</th>
        <th>Salary</th>
           <th>Edit</th>
           <th>Delete</th>  
      </tr>
    </thead>
    <tbody>
	@foreach($rec as $r)
	<tr>
		<td>{{$r->emp_name}}<td>
        <td>{{$r->designation}}<td>
	    <td>{{$r->skill}}<td>
		<td>{{$r->salary}}<td>
  
<td  style="text-align: center">
                <a href="{{route('emp.edit',$r->emp_id)}}" class="btn btn-outline-info">
                <i class="fa fa-edit" style="font-size:24px"></i></button></td>

                <td style="text-align: center">
<form action="{{route('emp.destroy',$r->emp_id)}}" method="post">
	@csrf
	@method('DELETE')
	<button class="btn btn-danger" type="submit">Delete </button>
</form>
                </td>

		</tr>
	@endforeach
	  </tbody>
  </table>
</div>

</body>
</html>