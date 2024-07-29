<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Employee</title>
   
</head>
<body class="bg-info">
@include('admin/header')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="{{route('r_admin.create')}}"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<table class="table table-stripped">
<thead>
    <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th></th>
    </tr>
    <tbody>
    @foreach($record as $i)
       <tr>
            <td>{{$i->Emp_Id}}</td>
           <td>{{$i->Emp_Fn}}</td>
           <td>{{$i->Emp_Email}}</td>
           <td>{{$i->Emp_Mobile}}</td>
           <td>{{$i->Emp_City}}</td>
           <td><a href="{{route('r_admin.edit',$i->Emp_Id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a><td>
           <td>
                        <form action="{{route('r_admin.destroy',$i->Emp_Id)}}" method="POSt">
                        {{ @csrf_field() }}
                        {{ @method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                            </form>
            </td>
       </tr>
       @endforeach
    </tbody>
</thead>
</table>
</div>
</div>

</div>
</body>
</html>
