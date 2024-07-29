<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
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
        <a class="nav-link" href="{{route('r_admin.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pro_Page">Add Product</a>
      </li>     
    </ul>
  </div>
</nav>  
<div class="container">
<form action="{{route('r_admin.update',$rec_emp->id)}}" method="POST">
{{ @csrf_field() }}
            {{ @method_field('PATCH') }}
    <div class="row">
        <div class="col-md-8 offset-md-1"  style="background-color:#fff;margin-top:50px;padding:20px;">
        <h3>
            Update Employee
        </h3>     
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" value="{{$rec_emp->Full_Name}}"  name="fullName" placeholder="Full Name" > 
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="{{$rec_emp->Email}}"  name="email" placeholder="Email" > 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label>Mobile</label>
                    <input type="text" class="form-control"  value="{{$rec_emp->Mobile}}"  name="mobile" placeholder="Mobile" >   
                    </div>
                    <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control"  value="{{$rec_emp->City}}"  name="city" placeholder="City" >  
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info"><i class="fa fa-database"></i> Update</button>
        
                </div>
           
        </div>
    </div>
    </form>
</div>
</body>
</html>