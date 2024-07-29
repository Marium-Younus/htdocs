<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Employee</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_page">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pro_Page">Add Product</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">

<h3><a class="btn btn-secondary" href="{{route('r_admin.create')}}"><i class="fa fa-plus"></i> Create New</a> Employee List</h3>
<table class="table table-stripped">
<thead>
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>City</th>
        <th></th>
    </tr>
    <tbody>
        @foreach($employeerecord as $item)
       <tr>
           <td>{{$item->Full_Name}}</td>
           <td>{{$item->Email}}</td>
           <td>{{$item->Mobile}}</td>
           <td>{{$item->City}}</td>
           <td><a href="{{route('r_admin.edit',$item->id)}}"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a><td>
           <td> 
          
        <form action="{{route('r_admin.destroy',$item->id)}}" method="post">
            {{ @csrf_field() }}
            {{ @method_field('DELETE') }}
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
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